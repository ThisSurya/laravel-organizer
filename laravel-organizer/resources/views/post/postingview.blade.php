<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $proker->Proker_name }}
        </h2>
        <div class="" style="text-align: right;">    
        </div>
        
    </x-slot>

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
    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                @if ($option == 'tambah')
                    <div class="max-w-xl">
                        @include('post.Tambah.tambahpostingan')
                    </div>     
                    @elseif ($option == 'edit')
                    <div class="max-w-xl">
                        @include('post.edit.editview')
                    </div> 
                    @elseif ($option == 'addmember')
                    <div class="max-w-xl">
                        @include('post.Tambah.tambahmember')
                    </div>
                    @else
                    <div class="max-w-xl">
                        @include('post.isipostingan.listpostingan')
                    </div> 
                @endif
                
            </div>
        </div>
    </div>
    
</x-app-layout>

<script>
    
</script>