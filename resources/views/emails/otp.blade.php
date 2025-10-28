<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Mã OTP xác nhận</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f5; padding: 20px;">
    <div style="max-width: 480px; margin: auto; background: #fff; border-radius: 10px; padding: 25px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2 style="color: #4f46e5;">Xác nhận tài khoản</h2>
        <p>Xin chào,</p>
        <p>Mã OTP của bạn là:</p>
        <h1 style="font-size: 36px; letter-spacing: 5px; color: #111827;">{{ $otp }}</h1>
        <p>Mã này sẽ hết hạn sau <strong>{{ $expireMinutes }} phút</strong>.</p>
        <p>Nếu bạn không yêu cầu, vui lòng bỏ qua email này.</p>
        <hr>
        <p style="color: #6b7280;">Trân trọng,<br>{{ config('app.name') }}</p>
    </div>
</body>
</html>
