<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berkas') }}
        </h2>
        <a href="{{ route('file.formview') }}">Upload</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                @foreach ($file as $photos)
                    <a href="{{ route('file.download', $photos->id) }}">{{ $photos->nama_file }}</a>
                    <br>
                @endforeach
                <p></p>
            </div>
        </div>
    </div>
</x-app-layout>