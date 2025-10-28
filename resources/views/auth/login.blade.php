<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Đăng nhập</h2>
            @if (session('success'))
                <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-300">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('fail'))
                <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-600 border border-red-400">
                    {{ session('fail') }}
                </div>
            @endif
            <form class="space-y-4" method="post" action="{{route('user.login')}}">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input
                type="text"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                placeholder="your@email.com"
                name="email"
                />
                @error('email')
                    <div class="mt-1 text-red-600">*{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input
                type="password"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                placeholder="••••••••"
                name="password"
                />
                @error('password')
                    <div class="mt-1 text-red-600">*{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center">
                <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
                <span class="ml-2 text-sm text-gray-600">Ghi nhớ</span>
                </label>
                <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Quên mật khẩu?</a>
            </div>

            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
                Đăng nhập
            </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
            Bạn chưa có tài khoản
            <a href="/signup" class="text-indigo-600 hover:text-indigo-500 font-medium">Đăng ký</a>
            </div>
        </div>
    </div>
</body>
</html>
