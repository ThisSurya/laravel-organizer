    {{-- <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List postingan
        </h2>
    </header> --}}
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
                                        href="{{ route('posting.addView', $proker->id) }}">
                                        <i class="fas fa-plus"></i>&nbsp;&nbsp;Buat Post Baru
                                    </a>
                                </div>
                            </div>
                            <div>
                                <table
                                    class="items-center justify-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                    <thead class="align-bottom">
                                        <tr>
                                            <th
                                                class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Title</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status</th>
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
                                        @foreach ($postingan as $postingans)
                                            @if ($postingans->status == 'berjalan')
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
                                                                <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                                    {{ $postingans->judul }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">working</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <span
                                                            class="text-xs font-semibold leading-tight dark:text-white dark:opacity-60">{{ $postingans->created_at }}</span>
                                                    </td>
                                                    <td
                                                        class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                        <p
                                                            class="mb-0 text-sm font-semibold leading-normal dark:text-white dark:opacity-60">
                                                            {{ $postingans->name }}
                                                        </p>
                                                    </td>
                                                    <td
                                                        class="z-100 absolute p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                                        <x-dropdown>
                                                            <x-slot name="trigger">
                                                                <button>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-4 w-4 text-gray-400"
                                                                        viewBox="0 0 20 20" fill="currentColor">
                                                                        <path
                                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                    </svg>
                                                                </button>
                                                            </x-slot>

                                                            <x-slot name="content">
                                                                <form method="POST"
                                                                    action="{{ route('posting.editView') }}">
                                                                    <x-text-input type="hidden"
                                                                        value="{{ $postingans->id }}" name="posting_id">
                                                                    </x-text-input>
                                                                    <x-text-input type="hidden"
                                                                        value="{{ $proker->id }}" name="proker_id">
                                                                    </x-text-input>
                                                                    {{ csrf_field() }}
                                                                    <x-dropdown-link
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                                        {{ __('Edit') }}
                                                                    </x-dropdown-link>
                                                                </form>
                                                                <form method="POST"
                                                                    action="{{ route('posting.delete') }}">
                                                                    <x-text-input type="hidden"
                                                                        value="{{ $postingans->id }}"
                                                                        name="posting_id"></x-text-input>
                                                                    <x-text-input type="hidden"
                                                                        value="{{ $proker->id }}" name="proker_id">
                                                                    </x-text-input>
                                                                    {{ csrf_field() }}
                                                                    @method('delete')
                                                                    <x-dropdown-link
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                                        {{ __('Delete') }}
                                                                    </x-dropdown-link>
                                                                </form>
                                                                <form method="POST"
                                                                    action="{{ route('post.done', $postingans->id) }}">
                                                                    <x-text-input type="hidden"
                                                                        value="{{ $postingans->id }}"
                                                                        name="posting_id"></x-text-input>
                                                                    <x-text-input type="hidden"
                                                                        value="{{ $proker->id }}" name="proker_id">
                                                                    </x-text-input>
                                                                    <x-text-input type="hidden"
                                                                        value="{{ 'sudah dikerjakan' }}"
                                                                        name="status_done"></x-text-input>
                                                                    {{ csrf_field() }}
                                                                    <x-dropdown-link
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                                        {{ __('Done') }}
                                                                    </x-dropdown-link>
                                                                </form>
                                                            </x-slot>
                                                        </x-dropdown>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
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
                            @if ($userRole == 1)
                                <a class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25"
                                    href="{{ route('posting.addMemberView', $proker->id) }}"> <i class="fas fa-plus">
                                    </i>&nbsp;&nbsp;Member</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-4 pb-0 overflow-auto">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                        @foreach ($member as $member)
                            <li
                                class="relative flex justify-between px-4 py-2 pl-0 mb-2 border-0 rounded-t-inherit text-inherit rounded-xl">
                                <div class="flex px-2">
                                    <div>
                                        <img src="/assets/img/team-3.jpg"
                                            class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 ease-in-out rounded-full h-9 w-9"
                                            alt="spotify" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                            {{ $member->name }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm leading-normal dark:text-white/80">
                                    <form action="{{ route('posting.kickMember') }}" method="POST">
                                        @csrf
                                        <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}">
                                        </x-text-input>
                                        <x-text-input type="hidden" name="user_id" value="{{ $member->id }}">
                                        </x-text-input>
                                        <button
                                            class="inline-block px-5 py-2.5 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-normal text-sm ease-in bg-150 tracking-tight-rem bg-x-25 text-red-500"
                                            aria-haspopup="true" aria-expanded="false">
                                            Kick
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
