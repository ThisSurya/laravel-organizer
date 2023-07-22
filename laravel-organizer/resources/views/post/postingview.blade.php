<x-app-layout>

    @if (Session::get('tambah'))
        <div class="alert alert-success">
            {{ Session::get('tambah') }}
        </div>
    @elseif (Session::get('edit'))
        <div class="alert alert-success">
            {{ Session::get('edit') }}
        </div>
    @elseif (Session::get('hapus'))
        <div class="alert alert-success">
            {{ Session::get('hapus') }}
        </div>
    @elseif (Session::get('tambah_member'))
        <div class="alert alert-success">
            {{ Session::get('tambah_member') }}
        </div>
    @elseif (Session::get('kick'))
        <div class="alert alert-success">
            {{ Session::get('kick') }}
        </div>
    @elseif (Session::get('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif
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
