<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berkas') }}
        </h2>
        <a href="{{ route('file.formview') }}">Upload</a>
    </x-slot> --}}
    <div class="w-full px-6 py-6 mx-auto">

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                <h6 class="mb-0 dark:text-white">Documents</h6>
                            </div>
                            <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                <a class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25"
                                    href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Dokumen Baru</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table
                                class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            File Name</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Uploaded Date</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="border-t">
                                    @for ($i = 0; $i < 10; $i++)
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2">
                                                    {{-- <div>
                                                    <img src="../assets/img/small-logos/logo-spotify.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                        alt="spotify" />
                                                </div> --}}
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">Spotify
                                                        </h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                    09-09-2090</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <x-dropdown>
                                                    <x-slot name="trigger">
                                                        <button>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                                                fill="currentColor">
                                                                <path
                                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                            </svg>
                                                        </button>
                                                    </x-slot>

                                                    <x-slot name="content">
                                                        <form method="POST" action="">
                                                            <x-text-input type="hidden" value=""
                                                                name="posting_id"></x-text-input>
                                                            <x-text-input type="hidden" value=""
                                                                name="proker_id"></x-text-input>
                                                            {{ csrf_field() }}
                                                            @method('delete')
                                                            <x-dropdown-link
                                                                onclick="event.preventDefault(); this.closest('form').submit();">
                                                                {{ __('Delete') }}
                                                            </x-dropdown-link>
                                                        </form>
                                                    </x-slot>
                                                </x-dropdown>
                                            </td>
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
