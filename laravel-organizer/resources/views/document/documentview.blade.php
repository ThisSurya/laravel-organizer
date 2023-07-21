<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja') }}
        </h2>
        <a href="{{ route('file.addView') }}">Upload</a>
    </x-slot>

    @if (Session::get('addFile'))
        <div class="alert alert-success">
            {{ Session::get('addFile') }}
        </div>
    @elseif (Session::get('delete'))
        <div class="alert alert-success">
            {{ Session::get('delete') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                @if ($option == 'tambah')
                    @include('document.tambah.fileForm')
                @else
                    @include('document.isi.isidocument')
                @endif
                
            </div>
        </div>
    </div>
</x-app-layout>