<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja') }}
        </h2>
    </x-slot> --}}

    @include('proker.popup.popupProker')
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white float-left	">Daftar Proker</h6>
                        <div class="flex-none max-w-full px-3 text-right">
                            <a onclick="pler()"
                                class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25"
                                href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Proker</a>
                        </div>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            {{-- row --}}
                            <div class="flex flex-wrap mt-6 mx-1">
                                @for ($i = 0; $i < 4; $i++)
                                    <!-- card1 -->
                                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                                        <div
                                            class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                            <div class="flex-auto p-4">
                                                <div class="flex flex-row -mx-3">
                                                    <div class="flex-none w-2/3 max-w-full px-3">
                                                        <div>
                                                            <h5 class="mb-2 font-bold dark:text-white">Devcamp</h5>
                                                            <p class=" text-sm	 mb-0 dark:text-white dark:opacity-60">
                                                                17 Juli 2023
                                                            </p>
                                                            <td
                                                                class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                                <span
                                                                    class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Active</span>
                                                            </td>
                                                            <p class="mb-0 dark:text-white dark:opacity-60">
                                                                <span
                                                                    class="text-sm font-bold leading-normal text-emerald-500">7</span>
                                                                Files
                                                            </p>
                                                            <span
                                                                class="text-sm font-bold leading-normal text-blue-500">7</span>
                                                            Anggota

                                                        </div>
                                                    </div>
                                                    <div class="px-3 text-right basis-1/3 space-y-4">
                                                        {{-- <div
                                                            class="grid place-items-center w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                                            <i class="fa-regular fa-eye fa-lg"
                                                                style="color: #ffffff;"></i>
                                                        </div> --}}

                                                        <div
                                                            class="grid place-items-center w-12 h-12 text-center rounded-circle bg-gradient-to-r from-green-500 to-lime-400">
                                                            <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                        </div>
                                                        <div
                                                            class="grid place-items-center w-12 h-12 text-center rounded-circle bg-gradient-to-r from-red-500 to-pink-400">
                                                            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="py-12">
            <div class="max-w-7xl">
                <div class="p-4">
                    @if ($option == 'tambah')
                        <div class="max-w-xl">
                            @include('proker.Tambah.tambahproker')
                        </div>
                    @elseif ($option == 'edit')
                        <div class="max-w-xl">
                            @include('proker.Edit.editProker')
                        </div>
                    @else
                        <div class="max-w-xl">
                            @include('proker.isiproker.listproker')
                        </div>
                    @endif
                </div>
            </div>
        </div> --}}
</x-app-layout>
