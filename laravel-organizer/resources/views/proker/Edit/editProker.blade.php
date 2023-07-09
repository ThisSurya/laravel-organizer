<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit program kerjamu!!!!') }}
        </h2>
    </header>

    <form action="{{ route('proker.update') }}" method="POST">
        @csrf
        {{-- judul program kerja --}}
        <x-text-input type="hidden" value="{{ $profile->id }}" name="id"></x-text-input>
        <div>
            <x-input-label for="program_kerja" :value="__('Judul')"></x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" name="Proker_name" value="{{ $profile->Proker_name }}"/>
            <x-primary-button class="ml-4">
                {{ __('simpan') }}
            </x-primary-button>
        </div>
    </form>
</section>