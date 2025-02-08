<div>
    <section class="relative lg:pb-24 pb-16 md:mt-[84px] mt-[70px]">
        <div class="md:container container-fluid relative">
            <div class="relative overflow-hidden md:rounded-md shadow dark:shadow-gray-800 h-52 bg-[url('../../assets/images/bg/cta.html')] bg-center bg-no-repeat bg-cover"></div>
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="md:flex">
                <div class="lg:w-1/4 md:w-1/3 md:px-3">
                    <div class="relative md:-mt-48 -mt-32">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <div class="profile-pic text-center mb-5">
                                <input id="pro-img" name="profile-image" type="file" class="hidden" onchange="loadFile(event)" />
                                <div>
                                    <div class="relative h-28 w-28 mx-auto">
                                        <img src="assets/images/client/16.jpg" class="rounded-full shadow dark:shadow-gray-800 ring-4 ring-slate-50 dark:ring-slate-800" id="profile-image" alt="">
                                        <label class="absolute inset-0 cursor-pointer" for="pro-img"></label>
                                    </div>

                                    <div class="mt-4">
                                        <h5 class="text-lg font-semibold">{{$user->name}} {{$user->last_name}}</h5>
                                        <p class="text-slate-400">{{$user->email}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-100 dark:border-gray-700">
                                <ul class="list-none sidebar-nav mb-0 pb-0" id="navmenu-nav">
                                    <li class="navbar-item account-menu">
                                        <a href="{{ route('profile') }}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 mb-0"><i data-feather="airplay" class="size-4"></i></span>
                                            <h6 class="mb-0 font-medium">Profile</h6>
                                        </a>
                                    </li>

                                    <li class="navbar-item account-menu">
                                        <a href="{{ route('bookingHistory')}}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 mb-0"><i data-feather="file-text" class="size-4"></i></span>
                                            <h6 class="mb-0 font-medium">Invoice</h6>
                                        </a>
                                    </li>
                                    <li class="navbar-item account-menu">
                                        <a href="{{ route('logout')}}" class="navbar-link text-slate-400 flex items-center py-2 rounded">
                                            <span class="me-2 mb-0"><i data-feather="log-out" class="size-4"></i></span>
                                            <h6 class="mb-0 font-medium">Sign Out</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-3/4 md:w-2/3 md:px-3 mt-6 md:mt-0">
                    <div class="rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <div class="p-6 border-b border-gray-100 dark:border-gray-700">
                            <h5 class="text-xl font-semibold">Booking History</h5>
                        </div>

                        <div class="px-6">
                            <ul>
                                @foreach ($reservation as $reserv)
                                    
                                
                                <li class="flex justify-between items-center py-6" wire:key="{{ $reserv->id }}">
                                    <div class="flex items-center">

                                        <div class="ms-3">
                                            <p class="font-semibold">Booking No. {{$reserv->id}}</p>
                                            <p class="text-slate-400 text-sm">Hotel Name : {{$reserv->room->hotel->name}}</p>
                                            <p class="text-slate-400 text-sm">Room Number : {{$reserv->room->room_number}}</p>
                                            <p class="text-slate-400 text-sm">From: {{$reserv->check_in_date}} To: {{$reserv->check_out_date}}</p>
                                        </div>
                                    </div>

                                    <div>
                                        <a href="{{ route('report', ['id' => $reserv->id]) }}" class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center bg-red-600/5 hover:bg-red-600 text-red-600 hover:text-white rounded-full"><i data-feather="file-text" class="size-4"></i></a>
                                    </div>
                                </li>
                                @endforeach
       
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
</div>