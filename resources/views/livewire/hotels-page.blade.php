<div>
    <div>
        <section
            class="relative table w-full items-center py-36 bg-[url('../../assets/images/bg/cta.html')] bg-top bg-no-repeat bg-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-900/60 via-slate-900/80 to-slate-900"></div>
            <div class="container relative">
                <div class="grid grid-cols-1 pb-8 text-center mt-10">
                    <h3 class="text-4xl leading-normal tracking-wider font-semibold text-white">Hotel</h3>
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
                        aria-current="page">Hotel</li>
                </ul>
            </div>
        </section>
        <section class="relative md:py-24 py-16">
            <div class="container relative">
    
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">
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
                </div><!--end grid-->
    
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
    
</div>
