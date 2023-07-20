<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja') }}
        </h2>
        <a href="{{ route('file.formview') }}">Upload</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                @if ($option == 'tambah')
                <div class="max-w-xl">
                    @include('proker.Tambah.tambahproker')
                </div> 
                @elseif ($option == 'edit')
                <div class="max-w-xl">
                    @include('proker.Edit.editProker')
                </div> 
                @else
                    <div class="max-w-xl">
                        @include('proker.isiproker.listproker')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>