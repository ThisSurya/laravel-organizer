<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kas') }}
        </h2>
    </x-slot>

    <section>
        <header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tambah Catatan {{ $jenis }} Kas
            </h2>
        </header>

        <form action="{{ route('kas.store') }}" method="POST">
            @csrf
            {{-- judul program kerja --}}
            <div>
                <x-text-input type="hidden" class="block mt-1 w-full" value="{{ $jenis }}" name="jenis" />
                <x-input-label :value="__('Jumlah')"></x-input-label>
                <x-text-input type="number" class="block mt-1 w-full" name="jumlah" />
                <x-input-label :value="__('Deskripsi')"></x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" name="deskripsi" />
                <x-primary-button class="ml-4">
                    {{ __('Buat Catatan') }}
                </x-primary-button>
            </div>
        </form>
    </section>
</x-app-layout>
