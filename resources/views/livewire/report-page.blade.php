<div>
    <style>
        @media print {

            body,
            html {
                margin: 0;
                padding: 0;
                height: 100%;
            }

            body * {
                visibility: hidden;
            }

            #invoice,
            #invoice * {
                visibility: visible;
            }

            #invoice {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                margin: 0;
                padding: 0;
            }
        }
    </style>

    <section class="relative lg:py-24 py-16 bg-slate-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="md:flex justify-center mt-24">
                <div class="lg:w-4/5 w-full">
                    <div id="invoice">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 bg-white dark:bg-slate-900">
                            <div class="border-b border-gray-100 dark:border-gray-700 pb-6">
                                <div class="md:flex justify-between">
                                    <div>
                                        <img src="{{ asset('assets/images/logo-dark.png') }}" class="block dark:hidden"
                                            alt="">
                                        <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:block"
                                            alt="">

                                    </div>

                                    <div class="mt-6 md:mt-0 md:w-56">
                                        <h5 class="text-lg font-semibold">Address:</h5>

                                        <ul class="list-none">
                                            <li class="flex mt-3">
                                                <i data-feather="map-pin" class="size-4 me-3 mt-1"></i>
                                                <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                                    data-type="iframe" class="lightbox text-slate-400">1419 Riverwood
                                                    Drive, <br> Redding, CA 96001</a>
                                            </li>

                                            <li class="flex mt-3">
                                                <i data-feather="mail" class="size-4 me-3 mt-1"></i>
                                                <a href="mailto:contact@example.com"
                                                    class="text-slate-400">info@Travosy.com</a>
                                            </li>

                                            <li class="flex mt-3">
                                                <i data-feather="phone" class="size-4 me-3 mt-1"></i>
                                                <a href="tel:+152534-468-854" class="text-slate-400">(+967)
                                                    777333555</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="md:flex justify-between">
                                <div class="mt-6">
                                    <h5 class="text-lg font-semibold">Invoice Details :</h5>
                                    <ul class="list-none">
                                        <li class="flex mt-3">
                                            <span class="">Invoice No. :</span>
                                            <span class="text-slate-400">{{ $reservation->id }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Name :</span>
                                            <span class="text-slate-400">{{ $reservation->client->name }}
                                                {{ $reservation->client->last_name }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Email :</span>
                                            <span class="text-slate-400">{{ $reservation->client->email }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Phone :</span>
                                            <span class="text-slate-400">{{ $reservation->client->phone }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Hotel Email :</span>
                                            <span class="text-slate-400">{{ $reservation->room->hotel->email }}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mt-3 md:w-56">
                                    <ul class="list-none">
                                        <li class="flex mt-3">
                                            <span class="">Hotel Name :</span>
                                            <span class="text-slate-400">{{ $reservation->room->hotel->name }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Hotel Location :</span>
                                            <span
                                                class="text-slate-400">{{ $reservation->room->hotel->location }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Hotel Phone :</span>
                                            <span class="text-slate-400">{{ $reservation->room->hotel->phone }}</span>
                                        </li>
                                        <li class="flex mt-3">
                                            <span class="">Date :</span>
                                            <span class="text-slate-400">{{ $reservation->created_at }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md mt-6">
                                <table class="w-full text-start text-slate-500 dark:text-slate-400">
                                    <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                        <tr>
                                            <th scope="col" class="text-center px-6 py-3 w-16">
                                                No.
                                            </th>
                                            <th scope="col" class="text-start px-6 py-3">
                                                Items
                                            </th>
                                            <th scope="col" class="text-center px-6 py-3 w-20">
                                                Days
                                            </th>
                                            <th scope="col" class="text-center px-6 py-3 w-28">
                                                Rate($)
                                            </th>
                                            <th scope="col" class="text-end px-6 py-3 w-20">
                                                Total($)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white dark:bg-slate-900">
                                            <td class="text-center px-6 py-4">
                                                1
                                            </td>
                                            <th scope="row"
                                                class="text-start px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                Room Numver :{{ $reservation->room->room_number }}
                                            </th>
                                            <td class="text-center px-6 py-4">
                                                {{ $duration }}Days
                                            </td>
                                            <td class="text-center px-6 py-4">
                                                ${{ $reservation->room->price }}
                                            </td>
                                            <td class="text-end px-6 py-4">
                                                ${{ $reservation->total_price }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="w-56 ms-auto p-5">
                                <ul class="list-none">
                                    <li class="text-slate-400 flex justify-between">
                                        <span>Subtotal :</span>
                                        <span>${{ $reservation->total_price }}</span>
                                    </li>
                                    <li class="text-slate-400 flex justify-between mt-2">
                                        <span>Taxes :</span>
                                        <span>$00</span>
                                    </li>
                                    <li class="flex justify-between font-semibold mt-2">
                                        <span>Total :</span>
                                        <span>${{ $reservation->total_price }}</span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <button onclick="printInvoice()" class="mt-4 px-4 py-2 bg-black text-white rounded">
                        Print Invoice
                    </button>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>


</div>
