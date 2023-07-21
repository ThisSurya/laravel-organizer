<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja') }}
        </h2>
        <a href="{{ route('file.addView') }}">Upload</a>
    </x-slot>

    @if (Session::get('edit'))
        <div class="alert alert-success">
            {{ Session::get('edit') }}
        </div>
    @elseif (Session::get('hapus'))
        <div class="alert alert-success">
            {{ Session::get('hapus') }}
        </div>
    @elseif (Session::get('tambah'))
        <div class="alert alert-success">
            {{ Session::get('tambah') }}
        </div>
    @elseif (Session::get('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif
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