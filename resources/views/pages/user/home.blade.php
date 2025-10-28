@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="min-h-screen w-full mt-2">
        <div class="flex flex-col items-center justify-center min-h-[500px] bg-blue-600 bg-[url('{{ asset('images/travel.jpg') }}')] bg-cover bg-center bg-no-repeat p-8 relative" style="background-image: url('{{ asset('images/travel.jpg') }}'); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative z-10">
                <h1 class="text-4xl font-bold text-white drop-shadow-lg text-center">App du lịch hàng đầu, một chạm đi bất cứ đâu</h1>
                <div class="flex justify-center items-center mt-10 p-3 gap-2 text-white">
                    <div class="flex justify-center items-center gap-2 border-2 rounded-2xl p-3 bg-transparent hover:bg-blue-50 hover:text-blue-400 transition-colors">
                        <i class="fa-solid fa-hotel"></i>
                        <a href="" class="font-medium">Khách sạn</a>
                    </div>
                    <div class="flex justify-center items-center gap-2 border-2 rounded-2xl p-3 bg-transparent hover:bg-blue-50 hover:text-blue-400 transition-colors">
                        <i class="fa-solid fa-plane-departure"></i>
                        <a href="" class="font-medium">Máy bay</a>
                    </div>
                    <div class="flex justify-center items-center gap-2 border-2 rounded-2xl p-3 bg-transparent hover:bg-blue-50 hover:text-blue-400 transition-colors">
                        <i class="fa-solid fa-bus-simple"></i>
                        <a href="" class="font-medium">Vé xe khách</a>
                    </div>
                    <div class="flex justify-center items-center gap-2 border-2 rounded-2xl p-3 bg-transparent hover:bg-blue-50 hover:text-blue-400 transition-colors">
                        <i class="fa-solid fa-key"></i>
                        <a href="" class="font-medium">Cho thuê xe</a>
                    </div>
                    <div class="flex justify-center items-center gap-2 border-2 rounded-2xl p-3 bg-transparent hover:bg-blue-50 hover:text-blue-400 transition-colors">
                        <i class="fa-solid fa-medal"></i>
                        <a href="" class="font-medium">Hoạt động vui chơi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto w-[70%] h-[100px] mt-5">
            <div>
                <div class="flex text-xl items-center gap-2 font-bold">
                    <i class="fa-solid fa-gift"></i>
                    <span>Mã ưu đãi cho người mới</span>
                </div>
                <div class="mt-2 card w-[350px] h-[150px] bg-white shadow-md">
                    <div class="flex">
                        <div class="w-1/6 mt-2">
                            <div class="w-fit h-fit rounded-e-full bg-blue-500 p-2 text-white"><i class="fa-solid fa-plane-departure"></i></div>
                        </div>
                        <div class="w-4/6 mt-2">
                            <div class="font-bold opacity-70">Giảm đến 50,000 cho lần đặt vé máy bay đầu tiên.</div>
                            <div class="text-[13px]">Áp dụng cho lần đặt đầu tiên trên ứng dụng Traveloka.</div>
                        </div>
                        <div class="w-1/6 flex mt-3 justify-center">
                            <div class="w-[15px] h-[15px] rounded-3xl border-1 text-[10px] text-center cursor-pointer">i</div>
                        </div>
                    </div>
                    <div class="mt-2 w-full h-[1px] bg-black"></div>
                    <div class="mt-2 flex gap-3 justify-center items-center">
                        <div class="w-[200px] h-[30px] bg-gray-100 opacity-80 flex items-center rounded-sm">
                            <i class="fa-solid fa-copy text-blue-400 ml-2"></i>
                            <p class="ml-2 text-[13px]">TVLKBANMOI</p>
                        </div>
                        <div class="h-[20px] w-[50px] rounded-2xl bg-blue-100 text-[13px] text-center font-bold cursor-pointer">Copy</div>
                    </div>
                </div>

                <div class="flex text-xl items-center gap-2 font-bold mt-5">
                    <i class="fa-solid fa-gift"></i>
                    <span>Đặt vé Disney Adventure Cruise ngay</span>
                </div>
                <div class="flex mt-5">
                    <div class="max-w-sm bg-white rounded-xl shadow-lg overflow-hidden relative">
                        <!-- Tag vị trí -->
                        <div class="absolute top-2 left-2 bg-pink-500 text-white text-sm font-semibold px-3 py-1 rounded-full flex items-center gap-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Vịnh Marina</span>
                        </div>

                        <!-- Ảnh -->
                        <img class="w-full h-48 object-cover" src="https://i.pinimg.com/1200x/86/bf/51/86bf5142ffee3ea999a571cad1176aea.jpg" alt="Disney Adventure">

                        <!-- Nội dung -->
                        <div class="p-4">
                            <h3 class="text-gray-900 font-semibold text-md">
                                5N4Đ Chuyến du ngoạn từ Singapore trên tàu Disney Adventure
                            </h3>
                            <p class="text-orange-500 font-bold mt-2 text-lg">
                                17.227.004 VND
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-xl items-center gap-2 font-bold mt-5">
                    <p>Nâng tầm chuyến đi theo cách bạn muốn</p>
                </div>
                <div class="flex gap-5">
                    <div class="max-w-sm bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-[250px]">
                        <div class="w-full h-48 overflow-hidden">
                            <img class="w-full h-full object-cover" src="https://i.pinimg.com/736x/df/f0/c3/dff0c3d931477898578febeeca3d8b04.jpg" alt="Travel">
                        </div>
                        <div class="p-4">
                            <h2 class=  "text-lg font-semibold text-gray-800">Chuyến đi và Danh thắng</h2>
                        </div>
                    </div> <div class="max-w-sm bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 w-[250px]">
                        <div class="w-full h-48 overflow-hidden">
                            <img class="w-full h-full object-cover" src="https://i.pinimg.com/736x/df/f0/c3/dff0c3d931477898578febeeca3d8b04.jpg" alt="Travel">
                        </div>
                        <div class="p-4">
                            <h2 class=  "text-lg font-semibold text-gray-800">Chuyến đi và Danh thắng</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

