<section>
    <x-slot name="navhead">
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-white opacity-50" href="#">{{ __('Home') }}</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page">{{ __('Program Kerja') }}</li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">{{ __('Program Kerja') }}</h6>
    </x-slot>

    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div
                class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="dark:text-white float-left">Daftar Program Kerja</h6>
                    <div class="flex-none max-w-full px-3 text-right">
                        <a href="{{ route('proker.addView') }}"
                            class="inline-block px-5 py-2.5 font-bold leading-normal text-center text-white align-middle transition-all bg-transparent rounded-lg cursor-pointer text-sm ease-in shadow-md bg-150 bg-gradient-to-tl from-zinc-800 to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 hover:shadow-xs active:opacity-85 hover:-translate-y-px tracking-tight-rem bg-x-25"
                            href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Proker</a>
                    </div>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        {{-- row --}}
                        <div class="flex flex-wrap mt-6 mx-1">
                            @foreach ($proker as $proker)
                                <!-- card1 -->
                                <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
                                    <div
                                        class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                        <div class="flex-auto p-4">
                                            <div class="flex flex-row -mx-3">
                                                <div class="flex-none w-2/3 max-w-full px-3">
                                                    <div>
                                                        <a href="/postingan/view/{{ $proker->id }}">
                                                            <h5 class="mb-2 font-bold dark:text-white">
                                                                {{ $proker->Proker_name }}</h5>
                                                        </a>
                                                        <p class=" text-sm	 mb-0 dark:text-white dark:opacity-60">
                                                            {{ $proker->created_at }}
                                                        </p>
                                                        <td
                                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">


                                                            @if ($proker->status == 'berjalan')
                                                                @php
                                                                    $addClass = 'bg-gradient-to-tl from-emerald-500 to-teal-400';
                                                                @endphp
                                                            @else
                                                                @php
                                                                    $addClass = 'bg-gradient-to-tl from-gray-200 via-gray-400 to-gray-600';
                                                                @endphp
                                                            @endif
                                                            <span
                                                                class="{{ $addClass }} px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $proker->status }}</span>
                                                        </td>
                                                        {{-- <p class="mb-0 dark:text-white dark:opacity-60">
                                                            <span
                                                                class="text-sm font-bold leading-normal text-emerald-500">7</span>
                                                            Files
                                                        </p>
                                                        <span
                                                            class="text-sm font-bold leading-normal text-blue-500">7</span>
                                                        Anggota --}}

                                                    </div>
                                                </div>
                                                <div class=" inline-block px-3 text-right space-y-4">
                                                    {{-- <div
                                                        class="grid place-items-center w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                                        <i class="fa-regular fa-eye fa-lg"
                                                            style="color: #ffffff;"></i>
                                                    </div> --}}
                                                    @if ($proker->status == 'berjalan')
                                                        <form method="POST"
                                                            action="{{ route('proker.done', $proker->id) }}">
                                                            @csrf
                                                            <x-text-input type="hidden" value="{{ 'selesai' }}"
                                                                name="status_done"></x-text-input>
                                                            <button type="submit"
                                                                class="grid place-items-center w-10 h-10 text-center rounded-circle bg-gradient-to-tl from-green-500 to-lime-400">
                                                                <i class="fa-solid fa-check"
                                                                    style="color: #ffffff;"></i>
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form method="POST" action="#">
                                                            @csrf
                                                            <x-text-input type="hidden" value="{{ 'selesai' }}"
                                                                name="status_done"></x-text-input>
                                                            <div
                                                                class="grid place-items-center w-10 h-10 text-center rounded-circle bg-gradient-to-tl from-gray-200 via-gray-400 to-gray-600">
                                                                <i class="fa-solid fa-check"
                                                                    style="color: #ffffff;"></i>
                                                            </div>
                                                        </form>
                                                    @endif

                                                    <form action="{{ route('proker.editView', $proker->id) }}">
                                                        <button type='submit'
                                                            class="grid place-items-center w-10 h-10 text-center rounded-circle bg-gradient-to-tl from-yellow-200 via-yellow-300 to-yellow-400">
                                                            <i class="fa-solid fa-pencil" style="color: #ffffff;"></i>
                                                        </button>
                                                    </form>
                                                    <form method="POST"
                                                        action="{{ route('proker.delete', $proker->id) }}">
                                                        @method('delete')
                                                        @csrf
                                                        <button type='submit'
                                                            class="grid place-items-center w-10 h-10 text-center rounded-circle bg-gradient-to-r from-red-500 to-pink-400">
                                                            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
