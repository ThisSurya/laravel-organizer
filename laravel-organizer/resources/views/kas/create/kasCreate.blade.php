<x-app-layout>
    <x-slot name="navhead">
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-white opacity-50" href="#">{{ __('Home') }} </a>
            </li>
            <li class="text-sm pl-2 leading-normal before:float-left before:pr-2 before:text-white before:content-['/']">
                <a class="text-white opacity-50" href=" {{ route('kas.view') }}">{{ __('Kas') }}</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page">{{ __('Invoice') }}</li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">{{ __('Buat Invoice') }}</h6>
    </x-slot>

    <section>
        {{-- <header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tambah Catatan Kas
            </h2>
        </header> --}}

        {{-- <form action="{{ route('kas.store') }}" method="POST">
            @csrf --}}
        {{-- judul program kerja --}}
        {{-- <div>
                <x-text-input type="hidden" class="block mt-1 w-full" value="{{ $jenis }}" name="jenis" />
                <x-input-label :value="__('Jumlah')"></x-input-label>
                <x-text-input type="number" class="block mt-1 w-full" name="jumlah" />
                <x-input-label :value="__('Deskripsi')"></x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" name="deskripsi" />
                <x-primary-button class="ml-4">
                    {{ __('Buat Catatan') }}
                </x-primary-button>
            </div>
        </form> --}}
        <div class="w-full px-6 py-6 mx-auto">

            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
                    <form action="{{ route('kas.store') }}" method="POST">
                        @csrf
                        {{-- <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
                    <x-text-input type="hidden" name="user_id" value="{{ $user }}"></x-text-input> --}}

                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                            <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                                <div class="flex items-center">
                                    <p class="mb-0 dark:text-white/80">Buat Catatan Keuangan</p>
                                    <button type="submit"
                                        class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Create</button>
                                </div>
                            </div>
                            <div class="flex-auto p-6">
                                <div class="flex flex-wrap -mx-3">
                                    <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                        <div class="mb-4">
                                            <label for="jenis"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                                                jenis catatan</label>
                                            <select name="jenis" id="jenis"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option selected>Pilih Jenis Catatan</option>
                                                <option value="pemasukan">Pemasukan</option>
                                                <option value="pengeluaran">Pengeluaran</option>
                                            </select>
                                            <label for="jumlah"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Jumlah</label>
                                            <input type="number" name="jumlah"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />

                                            <label for="deskripsi"
                                                class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Deskripsi</label>
                                            <input type="text" name="deskripsi"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
