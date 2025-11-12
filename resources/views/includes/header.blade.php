<header x-data="{ open: false }" class="bg-[#153d6f] text-white shadow-md px-6 md:px-8 py-3 rounded-lg">

    <nav class="grid grid-cols-2 md:grid-cols-6 items-center">
        <!-- Logo -->
        <div class="col-span-1 flex items-center space-x-2">
            <span class="text-lg font-semibold" style="font-family: 'Pacifico', cursive;">TravelRound</span>
        </div>

        <!-- Nút menu trên mobile -->
        <div class="flex justify-end md:hidden">
            <button @click="open = !open" class="focus:outline-none">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Menu (ẩn/hiện khi mobile) -->
        <div
            :class="open ? 'block' : 'hidden'"
            class="col-span-6 md:col-span-4 md:flex justify-center items-center space-y-4 md:space-y-0 md:space-x-10 font-medium mt-4 md:mt-0 text-center"
        >
            <a href="#" class="block md:inline hover:text-blue-200 hover:scale-110 transition duration-300">Khuyến mãi</a>
            <a href="#" class="block md:inline hover:text-blue-200 hover:scale-110 transition duration-300">Hỗ trợ</a>
            <a href="#" class="block md:inline hover:text-blue-200 hover:scale-110 transition duration-300">Hợp tác với chúng tôi</a>
            <a href="#" class="block md:inline hover:text-blue-200 hover:scale-110 transition duration-300">Đã lưu</a>
            <a href="#" class="block md:inline hover:text-blue-200 hover:scale-110 transition duration-300">Đặt chỗ của tôi</a>
        </div>

        <!-- User/Profile -->
        @auth('user_login')
        <div class="hidden md:flex col-span-1 justify-end">
            <div
                class="flex items-center bg-[#004c97] px-4 py-1 rounded-full border border-white/40 hover:bg-[#0059b3] transition duration-300 cursor-pointer space-x-3"
            >
                <!-- Avatar -->
                <div class="flex items-center justify-center bg-blue-400 w-8 h-8 rounded-full text-white">
                    <i class="fa-solid fa-user"></i>
                </div>

                <!-- Thông tin -->
                <div class="flex items-center space-x-2 text-sm font-medium">
                    <span>{{ Auth::guard('user_login')->user()->name ?? 'Nguyen Chi Dat' }}</span>
                    <span class="flex items-center text-yellow-300">
                        <i class="fa-solid fa-coins mr-1"></i>
                        {{ Auth::guard('user_login')->user()->points ?? 0 }} Điểm
                    </span>
                </div>

                <i class="fa-solid fa-chevron-down text-white text-xs"></i>
            </div>
        </div>
        @endauth

        @guest('user_login')
        <div class="hidden md:flex col-span-1 justify-end space-x-4">
            <a href="{{ route('user.show-login') }}" class="px-4 py-2 text-blue-600 bg-white rounded-md hover:bg-blue-100 transition duration-300">Đăng nhập</a>
            <a href="{{ route('user.register') }}" class="px-4 py-2 bg-yellow-400 text-blue-900 rounded-md hover:bg-yellow-500 transition duration-300">Đăng ký</a>
        </div>
        @endguest
    </nav>

    <!-- Menu user trên mobile -->
    @auth('user_login')
    <div
        :class="open ? 'block' : 'hidden'"
        class="md:hidden mt-4 flex flex-col items-center space-y-3"
    >
        <div
            class="flex items-center bg-[#004c97] px-4 py-2 rounded-full border border-white/40 hover:bg-[#0059b3] transition duration-300 cursor-pointer space-x-3"
        >
            <div class="flex items-center justify-center bg-blue-400 w-8 h-8 rounded-full text-white">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="flex flex-col items-start text-sm font-medium">
                <span>{{ Auth::guard('user_login')->user()->name ?? 'Nguyen Chi Dat' }}</span>
                <span class="flex items-center text-yellow-300 text-xs">
                    <i class="fa-solid fa-coins mr-1"></i>
                    {{ Auth::guard('user_login')->user()->points ?? 0 }} Điểm
                </span>
            </div>
        </div>
    </div>
    @endauth

    @guest('user_login')
    <div
        :class="open ? 'block' : 'hidden'"
        class="md:hidden mt-4 flex justify-center space-x-4"
    >
        <a href="{{ route('user.show-login') }}" class="px-4 py-2 text-blue-600 bg-white rounded-md hover:bg-blue-100 transition duration-300">Đăng nhập</a>
        <a href="{{ route('user.register') }}" class="px-4 py-2 bg-yellow-400 text-blue-900 rounded-md hover:bg-yellow-500 transition duration-300">Đăng ký</a>
    </div>
    @endguest
</header>
