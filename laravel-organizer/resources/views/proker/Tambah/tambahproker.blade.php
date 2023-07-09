
<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah program kerjamu!!!!') }}
        </h2>
    </header>

    <form action="{{ route('proker.store') }}" method="POST">
        @csrf
        {{-- judul program kerja --}}
        <div>
            <x-input-label for="program_kerja" :value="__('Judul')"></x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" name="Proker_name"/>
            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</section>