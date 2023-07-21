<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
        <a href="{{ route('role.addview') }}">Naikkan pangkat</a>
    </x-slot>

    @if (Session::get('change'))
        <div class="alert alert-success">
            {{ Session::get('change') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($option != '')
                        @include('permission.tambah.tambahpermission')
                    @else
                        @include('permission.isi.isipermission')
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
