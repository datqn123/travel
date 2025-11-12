@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <div class="flex flex-col min-h-screen w-full mt-2">
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


        <div class="mx-auto w-[75%] h-[100px] mt-10">
            <div class="swiper h-[150px] w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('images/banner1.webp')}}" alt="" class="w-full h-full aspect-[16/9]">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/banner2.webp')}}" alt="" class="w-full h-full aspect-[16/9]">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/banner3.webp')}}" alt="" class="w-full h-full aspect-[16/9]">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('images/travel.jpg')}}" alt="" class="w-full h-full aspect-[16/9]">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>

            <div class="mt-10">
                <div class="flex text-xl items-baseline gap-2 font-bold text-blue-400">
                    <i class="fa-solid fa-gift"></i>
                    <span >Mã ưu đãi cho người mới</span>
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

                <div class="flex text-xl items-baseline gap-2 font-bold text-blue-400 mt-10">
                    <i class="fa-solid fa-gift"></i>
                    <span>Đặt vé Disney Adventure Cruise ngay</span>
                </div>
                <div class="flex mt-5">
                    @foreach ($tours as $tour)
                    <div class="max-w-sm bg-white rounded-xl shadow-lg overflow-hidden relative">
                        <!-- Tag vị trí -->
                        <div class="absolute top-2 left-2 bg-pink-500 text-white text-sm font-semibold px-3 py-1 rounded-full flex items-center gap-1">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Vịnh Marina</span>
                        </div>

                        <!-- Ảnh -->
                        @if ($tour->oneImage)
                        <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $tour->oneImage->image_url) }}" alt="Disney Adventure">
                        @else
                            <img src="/placeholder.jpg" alt="Không có ảnh">
                        @endif
                        <!-- Nội dung -->
                        <div class="p-4">
                            <h3 class="text-gray-900 font-semibold text-md">
                                {{$tour->name}}
                            </h3>
                            <p class="text-orange-500 font-bold mt-2 text-lg">
                                {{$tour->price}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="flex text-xl items-baseline gap-2 font-bold text-blue-400 mt-5">
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

            <div class="mt-10">
                <div class="">
                    <ul id="menu-service" class="flex gap-5">
                        <li class="w-auto h-[30px] bg-[#0194f3] text-white flex  items-center justify-center text-[15px]  p-2 cursor-pointer rounded-[20px]" onclick="selectedTab(this)">
                            <span class=" font-bold">Vé máy bay</span>
                        </li>
                        <li class="w-auto h-[30px] bg-blue-100 rounded-2xl flex  items-center justify-center text-[15px] text-[#0194f3] p-2 cursor-pointer" onclick="selectedTab(this)">
                            <span class=" font-bold">Khách sạn</span>
                        </li>
                        <li class="w-auto h-[30px] bg-blue-100 rounded-2xl flex  items-center justify-center text-[15px] text-[#0194f3] p-2 cursor-pointer" onclick="selectedTab(this)">
                            <span class=" font-bold">Bus & Shuttle</span>
                        </li>
                        <li class="w-auto h-[30px] bg-blue-100 rounded-2xl flex  items-center justify-center text-[15px] text-[#0194f3] p-2 cursor-pointer" onclick="selectedTab(this)">
                            <span class=" font-bold">Đưa đón sân bay</span>
                        </li>
                        <li class="w-auto h-[30px] bg-blue-100 rounded-2xl flex  items-center justify-center text-[15px] text-[#0194f3] p-2 cursor-pointer" onclick="selectedTab(this)">
                            <span class=" font-bold">Điểm tham quan</span>
                        </li>
                    </ul>
                </div>
                <div class="mt-10 flex gap-5">
                    <div class="w-[400px] h-[150px] ">
                        <img src="{{ asset('images/banner1.webp') }}" alt="" class="w-full h-full aspect-[16/5] rounded-[10px]">
                    </div>
                    <div class="w-[400px] h-[150px] ">
                        <img src="{{ asset('images/banner1.webp') }}" alt="" class="w-full h-full aspect-[16/5] rounded-[10px]">
                    </div><div class="w-[400px] h-[150px] ">
                        <img src="{{ asset('images/banner1.webp') }}" alt="" class="w-full h-full aspect-[16/5] rounded-[10px]">
                    </div>
                </div>
                <div class="flex justify-center items-center rounded-2xl bg-blue-100/50 text-blue-600 mt-10 w-fit p-2 mx-auto gap-2 cursor-pointer">
                    <span class="font-bold">See All Deals</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

            </div>

            <div class="mt-10">
                <div class="flex text-2xl gap-3 font-bold">
                    <i class="fa-solid fa-plane-departure text-blue-400"></i>
                    <span>Vé máy bay giá tốt nhất</span>
                </div>
                <div class="mt-5 font-bold">
                    <span>Vô vàn điểm đến hot</span>
                </div>
                <div class="flex gap-5 mt-5">
                    <div class="p-2 bg-blue-600 font-bold rounded-2xl cursor-pointer">
                        <i class="fa-solid fa-fire fire-gradient"></i>
                        <span class="text-white">Hot deal</span>
                    </div>
                    <div class="p-2 bg-blue-100 font-bold rounded-2xl cursor-pointer">
                        <span class="text-blue-600">Nội địa</span>
                    </div>
                    <div class="p-2 bg-blue-100 font-bold rounded-2xl cursor-pointer">
                        <span class="text-blue-600">Quốc tế</span>
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="w-[240px] h-[fit] shadow-2xl">
                        <div class="relative w-full h-[160px]">
                            <div>
                                <span class="absolute mt-0 ml-0 p-2 bg-amber-200 font-bold">MỘT CHIỀU</span>
                                <img src="{{asset('images/travel.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="flex flex-col ml-2">
                            <span class="font-bold">
                                TP HCM - Hà Nội
                            </span>
                            <span class="text-[12px] text-orange-300 font-bold">Giá tốt nhất từ</span>
                            <span class="text-orange-400 font-bold">896.000 VNĐ</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center rounded-2xl bg-blue-100/50 text-blue-600 mt-10 w-fit p-5 mx-auto gap-2 cursor-pointer">
                    <span class="font-bold">Xem tất cả ưu đãi</span>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>

            <div class="mt-10">
                <div class="flex text-2xl gap-3 font-bold">
                    <i class="fa-solid fa-hotel text-blue-400"></i>
                    <span>Nhiều lựa chọn khách sạn</span>
                </div>
                <div class="flex gap-5 mt-5">
                    <div class="p-2 bg-blue-600 font-bold rounded-2xl cursor-pointer">
                        <span class="text-white">Đà Nẵng</span>
                    </div>
                    <div class="p-2 bg-blue-100 font-bold rounded-2xl cursor-pointer">
                        <span class="text-blue-600">Nha Trang</span>
                    </div>
                    <div class="p-2 bg-blue-100 font-bold rounded-2xl cursor-pointer">
                        <span class="text-blue-600">Phan Thiết</span>
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="w-[240px] h-[fit] shadow-2xl">
                        <div class="relative w-full h-[160px]">
                            <div>
                                <span class="absolute mt-0 ml-0 p-2 bg-amber-200 font-bold">MỘT CHIỀU</span>
                                <img src="{{asset('images/ks.jpeg')}}" alt="">
                            </div>
                        </div>
                        <div class="flex flex-col ml-2 mt-2 pb-5">
                            <span class="font-bold text-[15px] opacity-75">
                                Alibaba Đà Nẵng
                            </span>
                            <div class="flex gap-1 text-[10px] text-amber-300">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div>
                                <span class="text-blue-400 text-[13px] font-bold">8.4/10</span>
                                <span class="text-[13px] ">(809)</span>
                            </div>
                            <div class="text-amber-500 font-bold">
                                200.138 vnđ
                            </div>
                            <div class="text-[12px] opacity-55">
                                <span>Chưa bao gồm thuế và phí</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center rounded-2xl bg-blue-100/50 text-blue-600 mt-10 w-fit p-5 mx-auto gap-2 cursor-pointer">
                    <span class="font-bold">Xem thêm ưu đãi khách sạn</span>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>

            <div class="mt-10">
                <div class="flex text-2xl gap-3 font-bold">
                    <i class="fa-solid fa-suitcase-rolling text-blue-400"></i>
                    <span>Hoạt động du lịch</span>
                </div>
                <div class="mt-5 font-bold">
                    <span class="opacity-55">Đi cùng người thân vừa vui vừa thích</span>
                </div>
                <div class="flex gap-5 mt-5">
                    <div class="p-2 bg-blue-600 font-bold rounded-2xl cursor-pointer">
                        <span class="text-white">Điểm tham quan</span>
                    </div>
                    <div class="p-2 bg-blue-100 font-bold rounded-2xl cursor-pointer">
                        <span class="text-blue-600">Tour</span>
                    </div>
                    <div class="p-2 bg-blue-100 font-bold rounded-2xl cursor-pointer">
                        <span class="text-blue-600">Sân chơi</span>
                    </div>
                </div>
                <div class="flex mt-5">
                    <div class="w-[240px] h-[fit] shadow-2xl">
                        <div class="relative w-full h-[160px]">
                            <div>
                                <span class="absolute mt-0 ml-0 p-2 bg-amber-200 font-bold">Vĩnh Nguyên</span>
                                <img src="{{asset('images/dl.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="flex flex-col ml-2">
                            <span class="font-bold text-[15px]">
                                Vé tham quan công viên giải trí VinWonders Vũ Yên | Hải Phòng
                            </span>
                            <span class="text-orange-400 font-bold">99.984 VNĐ</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center rounded-2xl bg-blue-100/50 text-blue-600 mt-10 w-fit p-5 mx-auto gap-2 cursor-pointer">
                    <span class="font-bold">Xem tất cả</span>
                    <i class="fa-solid fa-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
@endsection

