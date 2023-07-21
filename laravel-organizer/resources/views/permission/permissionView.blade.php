<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
        <a href="{{ route('role.addview') }}">Naikkan pangkat</a>
    </x-slot> --}}

    @if (Session::get('change'))
        <div class="alert alert-success">
            {{ Session::get('change') }}
        </div>
    @endif

    <div class="w-full px-6 py-6 mx-auto">

        @if ($option != '')
            @include('permission.tambah.tambahpermission')
        @else
            @include('permission.isi.isipermission')
        @endif

    </div>
</x-app-layout>
