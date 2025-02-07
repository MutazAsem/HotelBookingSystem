<div>
    <section
        class="relative table w-full items-center py-36 bg-[url('../../assets/images/bg/cta.html')] bg-top bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="text-3xl leading-normal tracking-wider font-semibold text-white">{{ $room->hotel->name }}</h3>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li
                    class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index.html">Travosy</a>
                </li>
                <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                        class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white"
                    aria-current="page">Rooms</li>
                <li class="inline-block text-base text-white/50 mx-0.5 ltr:rotate-0 rtl:rotate-180"><i
                        class="mdi mdi-chevron-right"></i></li>
                <li class="inline-block uppercase text-[13px] font-bold duration-500 ease-in-out text-white"
                    aria-current="page">Room {{ $room->room_number }}</li>
            </ul>
        </div>
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
                <div class="lg:col-span-8 md:col-span-7">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="md:col-span-8 col-span-7">
                            <div class="group relative overflow-hidden rounded shadow dark:shadow-gray-800">
                                <img src="{{ asset($room->image) }}" class="w-full lg:h-60 md:h-44 h-48 object-cover"
                                    alt="">
                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out">
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-4 col-span-5">
                            <div class="group relative overflow-hidden rounded shadow dark:shadow-gray-800">
                                <img src="{{ asset($room->hotel->image) }}"
                                    class="w-full lg:h-60 md:h-44 h-48 object-cover" alt="">
                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out">
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-4 col-span-5">
                            <div class="group relative overflow-hidden rounded shadow dark:shadow-gray-800">
                                <img src="{{ asset($room->image) }}" class="w-full lg:h-60 md:h-44 h-48 object-cover"
                                    alt="">
                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out">
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-8 col-span-7">
                            <div class="group relative overflow-hidden rounded shadow dark:shadow-gray-800">
                                <img src="{{ asset($room->hotel->image) }}"
                                    class="w-full lg:h-60 md:h-44 h-48 object-cover" alt="">
                                <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="text-2xl font-semibold mt-5">{{ $room->hotel->name }}</h5>
                    <p class="flex items-center text-slate-400 font-medium mt-2"><i data-feather="map-pin"
                            class="size-4 me-1"></i> {{ $room->hotel->location }}</p>

                    <div class="my-6">
                        <h5 class="text-lg font-semibold">Booking information</h5>

                        <form class="mt-6" wire:submit.prevent="createBooking">
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="name" class="font-semibold">Your Name:</label>
                                        <input name="name" id="name" type="text" value="{{ $user->name }}"
                                            required
                                            class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                            placeholder="Name :">
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="fullName" class="font-semibold">Your Full Name:</label>
                                        <input name="fullName" id="fullName" type="text"
                                            value="{{ $user->name }}  {{ $user->last_name }}" required
                                            class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                            placeholder="Email :">
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="phone" class="font-semibold">Your Mobile Number:</label>
                                        <input name="phone" id="phone" type="text" value="{{ $user->phone }}"
                                            required
                                            class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                            placeholder="Name :">
                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="email" class="font-semibold">Your Email:</label>
                                        <input name="email" id="email" type="email" value="{{ $user->email }}"
                                            required
                                            class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0"
                                            placeholder="Email :">
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-12 lg:gap-6">
                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="check_in_date" class="font-semibold">Check in date :</label>
                                        <input wire:model.lazy="check_in_date" name="check_in_date" id="check_in_date"
                                            type="date"
                                            class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0">

                                    </div>
                                </div>

                                <div class="lg:col-span-6 mb-5">
                                    <div class="text-left">
                                        <label for="check_out_date" class="font-semibold">Check out date :</label>
                                        <input wire:model.lazy="check_out_date" name="check_out_date" id="check_out_date"
                                            type="date"
                                            class="mt-3 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0">
                                    </div>
                                </div>
                            </div>

                            <ul class="list-none my-6">
                                <li class="inline-flex items-center me-5 mt-5">
                                    <i data-feather="clock" class="size-6 stroke-[1.5] text-red-500"></i>

                                    <div class="ms-3">
                                        <p class="font-medium">Duration</p>
                                        <span class="text-slate-400 font-medium text-sm">{{ $duration }}
                                            day(s)</span>
                                    </div>
                                </li>

                                <li class="inline-flex items-center me-5 mt-5">
                                    <i data-feather="activity" class="size-6 stroke-[1.5] text-red-500"></i>

                                    <div class="ms-3">
                                        <p class="font-medium">Room Type</p>
                                        <span class="text-slate-400 font-medium text-sm">{{ $room->room_type }}</span>
                                    </div>
                                </li>

                                <li class="inline-flex items-center me-5 mt-5">
                                    <i data-feather="users" class="size-6 stroke-[1.5] text-red-500"></i>

                                    <div class="ms-3">
                                        <p class="font-medium">Room Number:</p>
                                        <span
                                            class="text-slate-400 font-medium text-sm">{{ $room->room_number }}</span>
                                    </div>
                                </li>

                                <li class="inline-flex items-center me-5 mt-5">
                                    <i data-feather="globe" class="size-6 stroke-[1.5] text-red-500"></i>

                                    <div class="ms-3">
                                        <p class="font-medium">Price per day</p>
                                        <span class="text-slate-400 font-medium text-sm">{{ $room->price }}</span>
                                    </div>
                                </li>

                                <li class="inline-flex items-center me-5 mt-5">
                                    <i data-feather="dollar-sign" class="size-6 stroke-[1.5] text-red-500"></i>

                                    <div class="ms-3">
                                        <p class="font-medium">Total Price</p>
                                        <span class="text-slate-400 font-medium text-sm">${{ $total_price }}</span>
                                    </div>
                                </li>
                            </ul>
                            <button type="submit" id="submit" name="send"
                                class="py-2 px-5 inline-block tracking-wide align-middle duration-500 text-base text-center bg-red-500 text-white rounded-md w-full">
                                Book Now</button>
                        </form>
                    </div>


                    <div class="mt-6">
                        <h5 class="text-lg font-semibold">Hotel Description:</h5>

                        <p class="text-slate-400 mt-6">{{$room->hotel->description}}.</p>
                    </div>



                </div>


            </div>
        </div><!--end container-->
    </section><!--end section-->
</div>
