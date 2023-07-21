<x-app-layout>
    <div class="w-full px-6 py-6 mx-auto h-screen">
        <!-- content -->
        @if ($option == 'tambah')
            @include('post.Tambah.tambahpostingan')
        @elseif ($option == 'edit')
            @include('post.edit.editview')
        @elseif ($option == 'addmember')
            @include('post.Tambah.tambahmember')
        @else
            @include('post.isipostingan.listpostingan')
        @endif
    </div>
</x-app-layout>
