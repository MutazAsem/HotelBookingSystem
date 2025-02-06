<div>
            <!-- Footer Start -->
            <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
                <div class="container relative">
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            <div class="py-[60px] px-0">
                                <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
                                    <div class="lg:col-span-3 md:col-span-12">
                                        <a wire:navigate href="{{ route('home') }}" class="text-[22px] focus:outline-none">
                                            <img src="{{ asset('assets/images/logo-light.png')}}" alt="">
                                        </a>
                                        <p class="mt-6 text-gray-300">Planning for a trip? We will organize your trip with the best places and within best budget!</p>
                                        <ul class="list-none mt-6">
                                            <li class="inline"><a href="https://1.envato.market/travosy" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="shopping-cart" class="size-4 align-middle" title="Buy Now"></i></a></li>
                                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="dribbble" class="size-4 align-middle" title="dribbble"></i></a></li>
                                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="linkedin" class="size-4 align-middle" title="Linkedin"></i></a></li>
                                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="facebook" class="size-4 align-middle" title="facebook"></i></a></li>
                                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="instagram" class="size-4 align-middle" title="instagram"></i></a></li>
                                            <li class="inline"><a href="https://x.com/shreethemes" target="_blank" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="twitter" class="size-4 align-middle" title="twitter"></i></a></li>
                                            <li class="inline"><a href="mailto:support@shreethemes.in" class="size-8 inline-flex items-center justify-center tracking-wide align-middle text-base border border-gray-800 dark:border-slate-800 rounded-md hover:bg-red-500 hover:text-white text-slate-300"><i data-feather="mail" class="size-4 align-middle" title="email"></i></a></li>
                                        </ul><!--end icon-->
                                    </div><!--end col-->
    
                                    <div class="lg:col-span-3 md:col-span-4">
                                        <div class="lg:ms-8">
                                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Office</h5>
                                            <h5 class="tracking-[1px] text-gray-100 mt-6">Travosy Tour & Travels</h5>
    
                                            <div class="flex mt-4">
                                                <i data-feather="map-pin" class="size-4 text-red-500 me-2 mt-1"></i>
                                                <div class="">
                                                    <h6 class="text-gray-300">C/54 Northwest Freeway, <br> Suite 558, <br> Houston, USA 485</h6>
                                                </div>
                                            </div>
    
                                            <div class="flex mt-4">
                                                <i data-feather="mail" class="size-4 text-red-500 me-2 mt-1"></i>
                                                <div class="">
                                                    <a href="mailto:contact@example.com" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>
                                                </div>
                                            </div>
                            
                                            <div class="flex mt-4">
                                                <i data-feather="phone" class="size-4 text-red-500 me-2 mt-1"></i>
                                                <div class="">
                                                    <a href="tel:+152534-468-854" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">+152 534-468-854</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                    
                                    <div class="lg:col-span-3 md:col-span-4">
                                        <div class="lg:ms-8">
                                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                            <ul class="list-none footer-list mt-6">
                                                <li><a wire:navigate href="{{ route('rooms') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Rooms</a></li>
                                                <li><a wire:navigate href="{{ route('hotels') }}" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="mdi mdi-chevron-right"></i> Hotels</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div><!--end col-->
        
                                    <div class="lg:col-span-3 md:col-span-4">
                                        <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                        <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                        <form>
                                            <div class="grid grid-cols-1">
                                                <div class="my-3">
                                                    <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                    <div class="form-icon relative mt-2">
                                                        <i data-feather="mail" class="size-4 absolute top-3 start-4"></i>
                                                        <input type="email" class="ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200 outline-none" placeholder="Email" name="email" required="">
                                                    </div>
                                                </div>
                                            
                                                <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide align-middle duration-500 text-base text-center bg-red-500 text-white rounded-md">Subscribe</button>
                                            </div>
                                        </form>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div><!--end col-->
                        </div>
                    </div><!--end grid-->
                </div><!--end container-->
    
                <div class="py-[30px] px-0 border-t border-slate-800">
                    <div class="container relative text-center">
                        <div class="grid grid-cols-1">
                            <div class="text-center">
                                <p class="mb-0">© 2025</script> Travosy. Design by Mutaz Asem.</p>
                            </div>
                        </div><!--end grid-->
                    </div><!--end container-->
                </div>
            </footer><!--end footer-->
            <!-- Footer End -->
</div>