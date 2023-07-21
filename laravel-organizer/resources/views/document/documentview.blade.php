<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Program Kerja') }}
        </h2>
        <a href="{{ route('file.addView') }}">Upload</a>
    </x-slot> --}}

    @if (Session::get('addFile'))
        <div class="alert alert-success">
            {{ Session::get('addFile') }}
        </div>
    @elseif (Session::get('delete'))
        <div class="alert alert-success">
            {{ Session::get('delete') }}
        </div>
    @endif

    <div class="w-full px-6 py-6 mx-auto">

        @if ($option == 'tambah')
            @include('document.tambah.fileForm')
        @else
            @include('document.isi.isidocument')
        @endif

    </div>
</x-app-layout>
