<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xác nhận OTP</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">
            Nhập mã OTP xác nhận
        </h2>

        <form method="POST" action="{{ route('register.verify-otp') }}" class="space-y-4">
            @csrf

            <div>
                <label for="otp" class="block text-sm font-medium text-gray-700 mb-2">
                    Mã OTP đã gửi đến email của bạn
                </label>
                <input
                    type="text"
                    name="otp"
                    id="otp"
                    maxlength="6"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none text-center text-lg tracking-widest"
                    placeholder="Nhập mã OTP"
                    name="otp"
                >
                <input type="hidden" name="email" value="{{ session('email') }}">

                @error('otp')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors"
            >
                Xác nhận OTP
            </button>
        </form>

        <div class="mt-4 text-center text-sm text-gray-600">
            Không nhận được mã?
            <a href="" class="text-indigo-600 hover:text-indigo-500 font-medium">
                Gửi lại mã OTP
            </a>
        </div>
    </div>

</body>
</html>
