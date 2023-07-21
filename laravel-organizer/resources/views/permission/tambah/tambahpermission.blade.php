<section>
    <x-slot name="navhead">
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-white opacity-50" href="#">{{ __('Home') }} </a>
            </li>
            <li class="text-sm pl-2 leading-normal before:float-left before:pr-2 before:text-white before:content-['/']">
                <a class="text-white opacity-50" href=" {{ route('role.view') }}">{{ __('Role') }}</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page">{{ __('Ganti') }}</li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">{{ __('Ganti Role') }}</h6>
    </x-slot>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <div class="flex flex-wrap -mx-3">
                        <div class="flex items-center flex-none w-1/2 max-w-full px-3">
                            <h6 class="mb-0 dark:text-white">All Member</h6>
                        </div>
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table
                            class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nama</th>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Email</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Role</th>
                                    <th
                                        class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                    @if ($user->role_id != 1)
                                        <tr>
                                            <form action="{{ route('role.change') }}" method="POST">
                                                @csrf
                                                <input name="user" type="hidden" value="{{ $user->id }}">
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
                                                                {{ $user->name }}
                                                            </h6>
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
                                                    <select name="role_id" id="">
                                                        <p
                                                            class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">
                                                            <option value="{{ $user->Roles }}" selected>
                                                                {{ $user->Roles }}</option>
                                                            @foreach ($role as $roles)
                                                                <option value="{{ $roles->id }}">
                                                                    <p
                                                                        class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">
                                                                        {{ $roles->Roles }}
                                                                    </p>
                                                                </option>
                                                            @endforeach
                                                    </select>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                    <button type="submit">Ganti</button>
                                                </td>
                                            </form>

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
