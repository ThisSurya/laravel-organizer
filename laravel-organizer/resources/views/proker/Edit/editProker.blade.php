<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit program kerjamu!!!!') }}
        </h2>
    </header>

    <form action="/proker/update" method="POST">
        @csrf

        <x-text-input type="hidden" value="{{ $proker->id }}" name="id"></x-text-input>
        <div>
            <x-input-label for="program_kerja" :value="__('Judul')"></x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" name="Proker_name" value="{{ $proker->Proker_name }}"/>
            <x-input-error :messages="$errors->get('Proker_name')" class="mt-2" />
            
            <x-input-label for="program_kerja" :value="__('Deskripsi')"></x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" name="deskripsi" value="{{ $proker->deskripsi }}"/>
            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />

            <x-primary-button class="ml-4">
                {{ __('simpan') }}
            </x-primary-button>
        </div>
    </form>
</section>