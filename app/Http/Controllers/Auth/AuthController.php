<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use App\Mail\SendOtpMail;
use App\Models\UserLogin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    protected $otpExpiryMinutes = 5;
    protected $resendThrottleSeconds = 60;

    public function login(LoginRequest $request) {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::guard('user_login')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('user.home');
        }
        return back()->with(['fail' => 'Tài khoản hoặc mật khẩu không đúng'])->withInput();
    }

    public function home() {
        return view('pages.user.home');
    }

    public function register(AuthRequest $request) {
        $userExists = UserLogin::where('email', $request->email)->first();
        if ($userExists && $userExists->is_verified) {
            return back()->withErrors(['email' => 'Email này đã được đăng ký.'])->withInput();
        }
        $otp = rand(100000, 999999);

        $user = UserLogin::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_verified' => false,
        ]);
        $this->sendOtpToUser($user);

        return redirect()
        ->route('register.show-verify-otp')
        ->with('email', $user->email)
        ->with('success', 'OTP đã gửi tới email. Vui lòng kiểm tra.');
    }

    protected function sendOtpToUser(UserLogin $user)
    {
        // sinh 6 chữ số
        $otpPlain = (string) rand(100000, 999999);

        // hash otp để lưu
        $otpHash = Hash::make($otpPlain);

        $user->update([
            'otp_hash' => $otpHash,
            'otp_expires_at' => Carbon::now()->addMinutes($this->otpExpiryMinutes),
            'otp_attempts' => 0,
        ]);

        // gửi mail (có thể queue bằng ->queue())
        Mail::to($user->email)->send(new SendOtpMail($otpPlain, $this->otpExpiryMinutes));
    }

    public function verifyOtp(Request $request)
    {
        $user = UserLogin::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email không tồn tại'])->withInput();
        }

        // kiểm tra thời hạn
        if (!$user->otp_expires_at || Carbon::now()->gt($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'Mã OTP đã hết hạn. Vui lòng gửi lại.']);
        }

        // giới hạn số lần thử (ví dụ 5 lần)
        if ($user->otp_attempts >= 5) {
            return back()->withErrors(['otp' => 'Bạn đã thử quá nhiều lần. Vui lòng gửi lại mã OTP.']);
        }

        // compare hash
        if (!Hash::check($request->otp, $user->otp_hash)) {
            $user->increment('otp_attempts');
            return back()->withErrors(['otp' => 'Mã OTP không đúng.'])->withInput();
        }

        // nếu đúng: đánh dấu verified & xoá OTP
        $user->update([
            'is_verified' => true,
            'otp_hash' => null,
            'otp_expires_at' => null,
            'otp_attempts' => 0,
        ]);

        // tùy: auto login user với guard tương ứng
        // Auth::guard('user_login')->login($user);

        return redirect('/index')->with('success', 'Xác thực thành công! Bạn có thể đăng nhập.');
    }

    public function show_verify_otp() {
        return view('auth.verify_otp');
    }
}
