<div>


    <!-- TAGLINE START-->
    <div class="tagline bg-slate-900">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="flex items-center justify-between">


                    <ul class="list-none">
                        <li class="inline-flex items-center">
                            <i data-feather="mail" class="text-red-500 size-4"></i>
                            <a href="mailto:contact@example.com"
                                class="ms-2 text-slate-300 hover:text-slate-200">contact@example.com</a>
                        </li>
                        <li class="inline-flex items-center ms-2">
                            <ul class="list-none">
                                <li class="inline-flex mb-0"><a href="#!"
                                        class="text-slate-300 hover:text-red-500"><i data-feather="facebook"
                                            class="size-4 align-middle" title="facebook"></i></a></li>
                                <li class="inline-flex ms-2 mb-0"><a href="#!"
                                        class="text-slate-300 hover:text-red-500"><i data-feather="instagram"
                                            class="size-4 align-middle" title="instagram"></i></a></li>
                                <li class="inline-flex ms-2 mb-0"><a href="#!"
                                        class="text-slate-300 hover:text-red-500"><i data-feather="twitter"
                                            class="size-4 align-middle" title="twitter"></i></a></li>
                                <li class="inline-flex ms-2 mb-0"><a href="tel:+96777733555"
                                        class="text-slate-300 hover:text-red-500"><i data-feather="phone"
                                            class="size-4 align-middle" title="phone"></i></a></li>
                            </ul><!--end icon-->
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end container-->
    </div><!--end tagline-->

    <nav id="topnav" class="defaultscroll is-sticky tagline-height">
        <div class="container relative flex justify-between">
            <!-- Logo container-->
            <a class="logo" wire:navigate href="{{ route('home') }}">
                <span class="inline-block dark:hidden">
                    <img src="{{ asset('assets/images/logo-dark.png')}}" class="h-7 l-dark" alt="">
                    <img src="{{ asset('assets/images/logo-light.png')}}" class="h-7 l-light" alt="">
                </span>
                <img src="{{ asset('assets/images/logo-white.png')}}" class="hidden dark:inline-block" alt="">
            </a>
            <!-- End Logo container-->





            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu justify-end nav-light">
                    <li><a wire:navigate href="{{ route('rooms') }}" class="sub-menu-item">Rooms</a></li>
                    <li><a wire:navigate href="{{ route('hotels') }}" class="sub-menu-item">hotels</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="dropdown inline-block relative pe-1">
                    <button data-dropdown-toggle="dropdown"
                        class="dropdown-toggle align-middle inline-flex search-dropdown" type="button">
                        <i data-feather="search" class="size-5 dark-icon"></i>
                        <i data-feather="search" class="size-5 white-icon text-white"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-5 z-10 md:w-52 w-48 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden"
                        onclick="event.stopPropagation();">
                        <div class="relative">
                            <i data-feather="search" class="size-4 absolute top-[9px] end-3"></i>
                            <input type="text" class="h-9 px-3 pe-10 w-full border-0 focus:ring-0 outline-none"
                                name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </div>
                </li>

                <li class="dropdown inline-block relative ps-0.5">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                        <span
                            class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md border border-red-500 bg-red-500 text-white"><img
                                src="{{ asset('assets/images/client/16.jpg')}}" class="rounded-md" alt=""></span>
                    </button>
                    <!-- Dropdown menu -->
                    
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-48 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden"
                        onclick="event.stopPropagation();">
                        <ul class="py-2 text-start">
                            @if (Auth::user())
                            <li>
                                <a href="{{ route('profile') }}"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-red-500 dark:hover:text-white"><i
                                        data-feather="user" class="size-4 me-2"></i>{{$user->name}}</a>
                            </li>           
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-red-500 dark:hover:text-white"><i
                                        data-feather="log-out" class="size-4 me-2"></i>Logout</a>
                            </li>    
                            @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-red-500 dark:hover:text-white"><i
                                        data-feather="log-out" class="size-4 me-2"></i>Login</a>
                            </li> 
                            @endif
                        </ul>
                    </div>
                    
                </li><!--end dropdown-->
            </ul>
            <!--Login button End-->

            <!-- Start Mobile Toggle -->
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Mobile Toggle -->
        </div><!--end container-->
    </nav><!--end header-->
    <!-- End Navbar -->
    <!-- Switcher -->
    <div class="fixed top-1/4 -left-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i data-feather="moon" class="w-[18px] h-[18px] text-yellow-500"></i>
                <i data-feather="sun" class="w-[18px] h-[18px] text-yellow-500"></i>
                <span
                    class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>

    <!-- Switcher -->



    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-md z-10 bottom-5 end-5 size-8 text-center bg-red-500/10 hover:bg-red-500 text-red-500 hover:text-white justify-center items-center"><i
            class="mdi mdi-arrow-up"></i></a>
    <!-- Back to top -->
</div>
