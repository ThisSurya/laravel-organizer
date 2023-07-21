<section>
    {{-- <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit program kerjamu!!!!') }}
        </h2>
    </header> --}}

    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <form action="/proker/update" method="POST">
                @csrf
                <div
                    class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                        <div class="flex items-center">
                            <p class="mb-0 dark:text-white/80">Edit Proker {{ $proker->Proker_name }}</p>
                            <button type="submit"
                                class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">Save</button>
                        </div>
                    </div>
                    <div class="flex-auto p-6">
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                                <div class="mb-4">
                                    <x-text-input type="hidden" value="{{ $proker->id }}" name="id">
                                    </x-text-input>

                                    <label for="Proker_name"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Nama
                                        Proker</label>
                                    <input type="text" name="Proker_name" value="{{ $proker->Proker_name }}"
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />

                                    <label for="deskripsi"
                                        class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Desription</label>
                                    <input type="text" name="deskripsi" value="{{ $proker->deskripsi }}"
                                        class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
