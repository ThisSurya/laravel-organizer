<x-app-layout>

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
