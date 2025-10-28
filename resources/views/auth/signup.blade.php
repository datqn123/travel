<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Đăng ký</h2>

            <form class="space-y-4" action="{{route('register.submit')}}" method="POST">
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

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input
                type="password"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
                placeholder="••••••••"
                name="re-password"
                />
                @error('re-password')
                    <div class="mt-1 text-red-600">*{{ $message }}</div>
                @enderror
            </div>


            <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors" type="submit">
                Đăng ký
            </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
            Bạn muốn đăng nhập
            <a href="{{route('user.show-login')}}" class="text-indigo-600 hover:text-indigo-500 font-medium">Đăng nhập</a>
            </div>
        </div>
    </div>
</body>
</html>
