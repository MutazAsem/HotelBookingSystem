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
                    <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                        <h5 class="text-lg font-semibold mb-4">Personal Detail :</h5>
                        <form>
                            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                                <div>
                                    <label class="form-label font-medium">First Name : </label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input type="text" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="First Name:" id="firstname" name="name" readonly value="{{$user->name}}">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label font-medium">Last Name : </span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="user-check" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input type="text" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Last Name:" id="lastname" name="name" readonly value="{{$user->last_name}}">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label font-medium">Your Email : </span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input type="email" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Email" name="email" readonly value="{{$user->email}}">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label font-medium">Phone : </label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="bookmark" class="w-4 h-4 absolute top-3 start-4"></i>
                                        <input name="name" id="occupation" type="text" class="ps-12 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" readonly value="{{$user->phone}}">
                                    </div>
                                </div>
                            </div><!--end grid-->


                        </form><!--end form-->
                    </div>

                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
</div>
