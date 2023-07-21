
<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah program kerjamu!!!!') }}
        </h2>
    </header>

    @if( Session::get('tambah'))
        <div class="alert alert-success">
            {{ Session::get('tambah') }}
        </div>
    @endif

    <form action="{{ route('proker.store') }}" method="POST">
        @csrf
        {{-- judul program kerja --}}
        <div>
            <x-input-label for="program_kerja" :value="__('Judul')"></x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" name="Proker_name"/>
            <x-input-error :messages="$errors->get('Proker_name')" class="mt-2" />

            <x-input-label for="program_kerja" :value="__('Deskripsi')"></x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" name="deskripsi"/>
            <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
            <x-primary-button class="ml-4">
                {{ __('Tambah') }}
            </x-primary-button>
        </div>
    </form>
</section>