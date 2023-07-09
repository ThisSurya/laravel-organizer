<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah postingan tentang {{ $proker->Proker_name }}
        </h2>
    </header>
        <form action="{{ route('posting.store') }}" method="POST">
            @csrf
            <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
            {{-- judul program kerja --}}
            <div>
                <x-input-label for="Deskripsi" :value="__('Deskripsi')"></x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" name="Deskripsi"/>
                <x-primary-button class="ml-4">
                    {{ __('Buat') }}
                </x-primary-button>
            </div>
        </form>
</section>