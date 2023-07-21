<section>
    {{-- <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Anggota dari: {{ $proker->Proker_name }}
        </h2>
    </header> --}}

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="dark:text-white">Authors table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Email</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($member as $member)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="/assets/img/team-3.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                                        alt="user1" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                        {{ $member->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <p
                                                class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">
                                                {{ $member->email }}</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                            <form action="{{ route('posting.kickMember') }}" method="POST">
                                                @csrf
                                                <x-text-input type="hidden" name="proker_id"
                                                    value="{{ $proker->id }}">
                                                </x-text-input>
                                                <x-text-input type="hidden" name="user_id" value="{{ $member->id }}">
                                                </x-text-input>

                                                <div
                                                    class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-red-500">
                                                    <input type="submit" value="Kick">
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @foreach ($user as $user)
                                    @if ($user->role_id == 2)
                                        <tr>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div>
                                                        <img src="/assets/img/team-3.jpg"
                                                            class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl"
                                                            alt="user1" />
                                                    </div>
                                                    <div class="flex flex-col justify-center">
                                                        <h6 class="mb-0 text-sm leading-normal dark:text-white">
                                                            {{ $user->name }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <p
                                                    class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">
                                                    {{ $user->email }}</p>
                                            </td>
                                            <td
                                                class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <form action="{{ route('posting.storeMember') }}" method="POST">
                                                    @csrf
                                                    <x-text-input type="hidden" name="proker_id"
                                                        value="{{ $proker->id }}"></x-text-input>
                                                    <x-text-input type="hidden" name="user_id"
                                                        value="{{ $user->id }}"></x-text-input>

                                                    <div
                                                        class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-green-500">
                                                        <input type="submit" value="Tambahkan">
                                                    </div>
                                                </form>
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
</section>
