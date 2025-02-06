<div>
    <!-- Hero Start -->
    <section
        class="relative md:pt-72 md:pb-60 py-36 table w-full items-center bg-[url('/assets/images/bg/2.jpg')] bg-top bg-no-repeat bg-cover"
        style="background-image: url('/assets/images/bg/2.jpg');">
        <div class="absolute inset-0 bg-slate-900/40"></div>
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-7 md:order-1 order-2">
                    <h5 class="text-3xl font-dancing text-white">Beauty of Discover</h5>
                    <h4 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-6xl mb-6 mt-5">
                        Let's Leave The Road, <br> And Take The Travosy</h4>
                    <p class="text-white/70 text-xl max-w-xl">Planning for a trip? We will organize your trip with the
                        best places and within best budget!</p>
                </div>

                
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Hero End -->



    <!-- Start -->
    <section class="relative md:py-24 py-16 overflow-hidden">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Top Hotels
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Planning for a trip? We will organize your trip with the best
                    places and within best budget!</p>
            </div><!--end grid-->

            <div class="grid grid-cols-1 relative mt-6">
                <div class="tiny-five-item">
                    @foreach ($hotels as $hotel)
                        <div class="tiny-slide" wire:key="{{ $hotel->id }}">
                            <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800 m-2">
                                <img src="{{ $hotel->image }}"
                                    class="w-full h-72 object-cover scale-125 group-hover:scale-100 duration-500"
                                    alt="">
                                <div
                                    class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500">
                                </div>
                                <div class="absolute p-4 bottom-0 start-0">
                                    <a href="#"
                                        class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">{{ $hotel->name }}</a>
                                    <p class="text-white/70 group-hover:text-white text-sm duration-500">
                                        {{ $hotel->number_of_rooms }} Room</p>
                                </div>
                            </div>
                        </div><!--end content-->
                    @endforeach
                </div>
            </div><!--end grid-->
            <div class="mt-6 text-center">
                <a wire:navigate href="{{ route('hotels') }}" class="text-slate-400 hover:text-red-500 inline-block">See More
                    Hotels <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Top Rooms
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Planning for a trip? We will organize your trip with the
                    best places and within best budget!</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                @foreach ($rooms as $room)
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
                @endforeach

            </div><!--end grid-->

            <div class="mt-6 text-center">
                <a wire:navigate href="{{ route('rooms') }}" class="text-slate-400 hover:text-red-500 inline-block">See More
                    Rooms <i class="mdi mdi-arrow-right align-middle"></i></a>
            </div>
        </div><!--end container-->




    </section><!--end section-->
    <!-- End -->
</div>
