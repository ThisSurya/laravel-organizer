<x-app-layout>
    <div class="w-full px-6 py-6 mx-auto h-screen">
        <!-- content -->

        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 lg:w-2/3 lg:flex-none">
                <div class="flex flex-wrap -mx-3">
                    <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                        <div
                            class="relative lex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                        <h6 class="mb-0 dark:text-white">Daftar Postingan</h6>
                                    </div>
                                    <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                        <a class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25"
                                            href="javascript:;">
                                            <i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card
                                        </a>
                                    </div>
                                </div>
                                <div class="overflow-auto">
                                    <table
                                        class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                        <thead class="align-bottom">
                                            <tr>
                                                <th
                                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Title</th>
                                                <th
                                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Date Posted</th>
                                                <th
                                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                    Authpr</th>
                                                <th
                                                    class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="border-t overflow-y-auto">
                                            @for ($i = 0; $i < 20; $i++)
                                                <tr>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <div class="flex px-2">
                                                            <div>
                                                                <img src="../assets/img/small-logos/logo-spotify.svg"
                                                                    class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                                    alt="spotify" />
                                                            </div>
                                                            <div class="my-auto">
                                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                                    Spotify
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <p
                                                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                            07-06-2023</p>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Andi</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                        <button
                                                            class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i
                                                                class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                                        </button>
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
            <div class="w-full max-w-full px-3 lg:w-1/3 lg:flex-none">
                <div
                    class="relative flex flex-col h-screen min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-4 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="flex flex-wrap -mx-3">
                            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                                <h6 class="mb-0 dark:text-white">Member</h6>
                            </div>
                            <div class="flex-none w-1/2 max-w-full px-3 text-right">
                                <a class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25"
                                    href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Member</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-auto p-4 pb-0 overflow-auto">
                        <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                            @for ($i = 0; $i < 20; $i++)
                                <li
                                    class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                    <div class="flex px-2">
                                        <div>
                                            <img src="../assets/img/small-logos/logo-spotify.svg"
                                                class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                                alt="spotify" />
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                Spotify
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                        <button
                                            class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-slate-400"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i
                                                class="text-xs leading-tight fa fa-ellipsis-v dark:text-white dark:opacity-60"></i>
                                        </button>
                                    </div>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
