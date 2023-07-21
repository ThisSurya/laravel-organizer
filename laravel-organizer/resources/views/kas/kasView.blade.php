<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kas') }}
        </h2>
        <a href="{{ route('kas.create', ['jenis' => 'pendapatan']) }}"> Catat Pendapatan </a> |
        <a href="{{ route('kas.create', ['jenis' => 'pengeluaran']) }}"> Catat Pengeluaran </a>
    </x-slot> --}}
    <div class="w-full px-6 py-6 mx-auto">

        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-2/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 mb-6 xl:mb-0 xl:w-1/2 xl:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 break-words border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                <div
                                    class="flex justify-center p-4 mx-6 mb-0 text-center border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                    <div
                                        class="grid place-items-center w-16 h-16 text-center bg-center shadow-sm icon bg-gradient-to-tl from-gray-700 via-gray-900 to-black">
                                        <i class="fa-solid fa-dollar-sign fa-xl" style="color: #ffffff;"></i>
                                    </div>
                                </div>
                                <div class="flex-auto p-4 pt-0 text-center">
                                    <h6 class="mb-0 text-center dark:text-white">Saldo Kas</h6>
                                    <span class="text-xs leading-tight dark:text-white dark:opacity-80">Saldo yang
                                        dimiliki</span>
                                    <hr
                                        class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                    <h5 class="mb-0 dark:text-white">Rp. 2.000.000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full max-w-full px-3 xl:w-1/2 xl:flex-none">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                    <div
                                        class="p-4 mx-6 mb-0 text-center border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-center">
                                        <div
                                            class="grid place-items-center w-16 h-16 text-center bg-center shadow-sm icon bg-gradient-to-tl from-green-500 to-green-700 rounded-xl">
                                            <i class="fa-solid fa-arrow-up fa-xl" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                    <div class="flex-auto p-4 pt-0 text-center">
                                        <h6 class="mb-0 text-center dark:text-white">Pemasukan</h6>
                                        <span class="text-xs leading-tight dark:text-white dark:opacity-80">Uang
                                            Masuk</span>
                                        <hr
                                            class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                        <h5 class="mb-0 dark:text-white">+ Rp. 700.400</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full max-w-full px-3 mt-6 md:mt-0 md:w-1/2 md:flex-none">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                    <div
                                        class="flex justify-center p-4 mx-6 mb-0 text-center border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                        <div
                                            class="grid place-items-center w-16 h-16 text-center bg-center shadow-sm icon bg-gradient-to-tl from-rose-700 to-pink-600 rounded-xl">
                                            <i class="fa-solid fa-arrow-down fa-xl" style="color: #ffffff;"></i>
                                        </div>
                                    </div>
                                    <div class="flex-auto p-4 pt-0 text-center">
                                        <h6 class="mb-0 text-center dark:text-white">Pengeluaran</h6>
                                        <span class="text-xs leading-tight dark:text-white dark:opacity-80">uang
                                            Keluar</span>
                                        <hr
                                            class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />
                                        <h5 class="mb-0 dark:text-white">- Rp. 455.000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                        <div
                            class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                        <h6 class="mb-0 dark:text-white">Rekening Bank</h6>
                                    </div>

                                </div>
                            </div>
                            <div class="flex-auto p-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-transparent border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                                    <div class="relative overflow-hidden rounded-2xl"
                                        style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/card-visa.jpg')">
                                        <span
                                            class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 opacity-80"></span>
                                        <div class="relative z-10 flex-auto p-4">
                                            <i class="p-2 text-white fas fa-wifi"></i>
                                            <h5 class="pb-2 mt-6 mb-12 text-white">
                                                4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852
                                            </h5>
                                            <div class="flex">
                                                <div class="flex">
                                                    <div class="mr-6">
                                                        <p class="mb-0 text-sm leading-normal text-white opacity-80">
                                                            Card
                                                            Holder</p>
                                                        <h6 class="mb-0 text-white">Jack Separo</h6>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0 text-sm leading-normal text-white opacity-80">
                                                            Expires
                                                        </p>
                                                        <h6 class="mb-0 text-white">11/29</h6>
                                                    </div>
                                                </div>
                                                <div class="flex items-end justify-end w-1/5 ml-auto">
                                                    <img class="w-3/5 mt-2" src="../assets/img/logos/mastercard.png"
                                                        alt="logo" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="w-full max-w-full px-3 lg:w-1/3 lg:flex-none">
                <div
                    class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                <h6 class="mb-0 dark:text-white">Invoices</h6>
                            </div>
                            <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                <button
                                    class="inline-block px-8 py-2 mb-0 text-xs font-bold leading-normal text-center text-blue-500 align-middle transition-all ease-in bg-transparent border border-blue-500 border-solid rounded-lg shadow-none cursor-pointer bg-150 active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25 hover:opacity-75">View
                                    All</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-4 pb-0">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-red-600 border-transparent bg-transparent text-center align-middle font-bold uppercase text-red-600 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-down text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">
                                            Netflix</h6>
                                        <span class="text-xs leading-tight dark:text-white/80">27 March 2020, at
                                            12:30 PM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-red-600 to-orange-600 bg-clip-text">
                                        - $ 2,500</p>
                                </div>
                            </li>
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 border-t-0 rounded-b-inherit text-inherit rounded-xl">
                                <div class="flex items-center">
                                    <button
                                        class="leading-pro ease-in text-xs bg-150 w-6.5 h-6.5 p-1.2 rounded-3.5xl tracking-tight-rem bg-x-25 mr-4 mb-0 flex cursor-pointer items-center justify-center border border-solid border-emerald-500 border-transparent bg-transparent text-center align-middle font-bold uppercase text-emerald-500 transition-all hover:opacity-75"><i
                                            class="fas fa-arrow-up text-3xs"></i></button>
                                    <div class="flex flex-col">
                                        <h6 class="mb-1 text-sm leading-normal dark:text-white text-slate-700">
                                            Apple
                                        </h6>
                                        <span class="text-xs leading-tight dark:text-white/80">27 March 2020, at
                                            04:30 AM</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <p
                                        class="relative z-10 inline-block m-0 text-sm font-semibold leading-normal text-transparent bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text">
                                        + $ 2,000</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

</x-app-layout>
