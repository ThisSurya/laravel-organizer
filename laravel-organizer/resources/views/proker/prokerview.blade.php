<x-app-layout>
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
    <div class="w-full px-6 py-6 mx-auto">
        @if ($option == 'tambah')
            @include('proker.Tambah.tambahproker')
        @elseif ($option == 'edit')
            @include('proker.Edit.editProker')
        @else
            @include('proker.isiproker.listproker')
        @endif
    </div>

</x-app-layout>
