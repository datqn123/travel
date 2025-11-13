<?php

namespace App\Http\Controllers;

use App\Models\Tours;
use App\Services\TourService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

    protected $tourService;
    protected $userService;

    public function __construct(TourService $tourService, UserService $userService)
        {
            $this->tourService = $tourService;
            $this->userService = $userService;
        }

    public function index() {
        return view('auth/login');
    }

    public function signup() {
        return view('auth/signup');
    }

    public function home() {
        $tours = $this->tourService->getTourHome();
        $profile = null;
        if(Auth::guard('user_login')->check()) {
            $profile = $this->userService->get_profile(Auth::guard('user_login')->id());
        }
        session(['user_id'=>$profile->id]);
        // dd(session('user_id'));
        return view('pages/user/home', ['tours'=>$tours, 'profile'=>$profile]);
    }
}
