<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kas') }}
        </h2>
        <a href="{{ route('kas.create', ['jenis' => 'pendapatan']) }}"> Catat Pemasukan </a> |
        <a href="{{ route('kas.create', ['jenis' => 'pengeluaran']) }}"> Catat Pengeluaran </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                <p>Nominal Kas: {{ $balance->jumlah }}</p>

                <div id="catatan">
                    @foreach ($catatan as $catatan)
                        @if ($catatan->jenis == 'pendapatan')
                            <p>+ Rp.{{ $catatan->jumlah }} | {{ $catatan->deskripsi }}</p>
                        @else
                            <p>- Rp.{{ $catatan->jumlah }} | {{ $catatan->deskripsi }}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
