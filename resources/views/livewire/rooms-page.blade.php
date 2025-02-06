<div>
    <section
        class="relative table w-full items-center py-36 bg-[url('../../assets/images/bg/cta.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="text-4xl leading-normal tracking-wider font-semibold text-white">Rooms</h3>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li
                    class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index.html">Travosy</a></li>
                <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                        class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white"
                    aria-current="page">Room</li>
            </ul>
        </div>
    </section>
    {{-- <div class="container relative -mt-16 z-1">
        <div class="grid grid-cols-1">
            <form class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow dark:shadow-gray-700">
                <div class="registration-form text-dark text-start">
                    <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-4">
                        <div>
                            <label class="form-label font-medium text-slate-900 dark:text-white">Search:</label>
                            <div class="relative mt-2">
                                <i data-feather="search" class="size-[18px] absolute top-[10px] start-3"></i>
                                <input name="name" type="text" id="job-keyword" class="w-full py-2 px-3 ps-10 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Search">
                            </div>
                        </div>

                        <div>
                            <label class="form-label font-medium text-slate-900 dark:text-white">Select Your Date:</label>
                            <div class="relative mt-2">
                                <i data-feather="calendar" class="size-[18px] absolute top-[10px] start-3"></i>
                                <input name="name" type="text" id="job-keyword" class="w-full py-2 px-3 ps-10 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 start" placeholder="Select Your Date">
                            </div>
                        </div>

                        <div>
                            <label class="form-label font-medium text-slate-900 dark:text-white">Select Your Date:</label>
                            <div class="relative mt-2">
                                <i data-feather="calendar" class="size-[18px] absolute top-[10px] start-3"></i>
                                <input name="name" type="text" id="job-keyword" class="w-full py-2 px-3 ps-10 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0 end" placeholder="Select Your Date">
                            </div>
                        </div>

                        <div>
                            <label class="form-label font-medium text-slate-900 dark:text-white">No. of person:</label>
                            <div class="relative mt-2">
                                <i data-feather="users" class="size-[18px] absolute top-[10px] start-3"></i>
                                <select class="form-select w-full py-2 px-3 ps-10 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0">
                                    <option disabled selected>No. of person</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="lg:mt-[35px]">
                            <input type="submit" id="search-buy" name="search" class="py-1 px-5 h-10 inline-block tracking-wide align-middle duration-500 text-base text-center bg-red-500 text-white rounded-md w-full cursor-pointer" value="Search">
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
            </form><!--end form-->
        </div><!--end grid-->
    </div> --}}
    <div>
        <!-- نموذج الفلترة -->
        <div class="container relative -mt-16 z-1">
            <div class="grid grid-cols-1">
                <!-- استخدام wire:submit.prevent لمنع إعادة تحميل الصفحة -->
                <form wire:submit.prevent="applyFilter" class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow dark:shadow-gray-700">
                    <div class="registration-form text-dark text-start">
                        <div class="grid lg:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-4">
                            <!-- حقل البحث -->
                            <div>
                                <label class="form-label font-medium text-slate-900 dark:text-white">Search:</label>
                                <div class="relative mt-2">
                                    <i data-feather="search" class="size-[18px] absolute top-[10px] start-3"></i>
                                    <input type="text" wire:model="search" class="w-full py-2 px-3 ps-10 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Search">
                                </div>
                            </div>
                            
                            <!-- فلترة الفندق -->
                            <div>
                                <label class="form-label font-medium text-slate-900 dark:text-white">Hotel:</label>
                                <div class="relative mt-2">
                                    <select wire:model="hotel" class="form-select w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md border border-gray-100 dark:border-gray-800 focus:ring-0">
                                        <option value="">All Hotels</option>
                                        @foreach ($hotels as $hotel)
                                        <option value="{{$hotel->name}}">{{$hotel->name}}</option>

                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            
                            <!-- فلترة نوع الغرفة -->
                            <div>
                                <label class="form-label font-medium text-slate-900 dark:text-white">Room Type:</label>
                                <div class="relative mt-2">
                                    <select wire:model="roomType" class="form-select w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md border border-gray-100 dark:border-gray-800 focus:ring-0">
                                        <option value="">All Types</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Suite">Suite</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- فلترة نطاق السعر -->
                            <div>
                                <label class="form-label font-medium text-slate-900 dark:text-white">Price Range:</label>
                                <div class="flex space-x-2 mt-2">
                                    <input type="number" wire:model="minPrice" class="w-1/2 py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Min">
                                    <input type="number" wire:model="maxPrice" class="w-1/2 py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Max">
                                </div>
                            </div>
                            
                            <!-- فلترة التوفر -->
                            <div>
                                <label class="form-label font-medium text-slate-900 dark:text-white">Availability:</label>
                                <div class="relative mt-2">
                                    <select wire:model="availability" class="form-select w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded-md border border-gray-100 dark:border-gray-800 focus:ring-0">
                                        <option value="">All</option>
                                        <option value="Available">Available</option>
                                        <option value="Booked">Booked</option>
                                        <option value="Under Maintenance">Under Maintenance</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- زر البحث -->
                            <div class="lg:mt-[35px]">
                                <button type="submit" class="py-1 px-5 h-10 inline-block tracking-wide align-middle duration-500 text-base text-center bg-red-500 text-white rounded-md w-full">Search</button>
                            </div>
                        </div><!-- نهاية الشبكة -->
                    </div><!-- نهاية الفورم -->
                </form>
            </div>
        </div>
    
 
    </div>
    
    <section class="relative md:py-24 py-16">
        <div class="container relative">

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
                @forelse ($rooms as $room)
                <div class="group rounded-md shadow dark:shadow-gray-700" wire:key="{{ $room->id }}">
                    <div class="relative overflow-hidden rounded-t-md shadow dark:shadow-gray-700 mx-3 mt-3">
                        <img src="{{ $room->image }}" class="scale-125 group-hover:scale-100 duration-500"
                            alt="">
                    </div>

                    <div class="p-4">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin"
                                class="text-red-500 size-4 me-1"></i> {{ $room->hotel->location }}</p>
                        <a href="tour-detail-one.html"
                            class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">{{ $room->hotel->name }}</a>

                        <div class="flex items-center mt-2">
                            <span class="text-slate-400">Room Number :{{ $room->room_number }}</span>
                        </div>

                        <div
                            class="mt-4 pt-4 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <h5 class="text-lg font-medium text-red-500">$ {{ $room->price }} / Day</h5>

                            <a wire:navigate href="{{ route('booking', ['id' => $room->id]) }}" class="text-slate-400 hover:text-red-500">Book Now <i
                                    class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--end content-->
                @empty
                <p class="col-span-3 text-center">No rooms found matching your criteria.</p>
            @endforelse
            </div><!--end grid-->
            <div class="mt-4">
                {{ $rooms->links() }}
            </div>
            <p>
                Showing items from {{ $rooms->firstItem() }} to {{ $rooms->lastItem() }} of a total of {{ $rooms->total() }} products.
            </p>
            {{-- <div class="grid md:grid-cols-12 grid-cols-1 mt-6">
                <div class="md:col-span-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">
                                    <i data-feather="chevron-left" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">1</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 size-[40px] inline-flex justify-center items-center text-white bg-red-500 border border-red-500">3</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">4</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">5</a>
                            </li>
                            <li>
                                <a href="#" class="size-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-3xl hover:text-white border border-gray-100 dark:border-gray-800 hover:border-red-500 dark:hover:border-red-500 hover:bg-red-500 dark:hover:bg-red-500">
                                    <i data-feather="chevron-right" class="size-5 rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!--end col-->
            </div><!--end grid--> --}}
        </div><!--end container-->
    </section><!--end section-->
</div>
