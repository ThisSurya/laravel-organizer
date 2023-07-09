<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $proker->Proker_name }}
        </h2>
        <a href="{{ route('posting.addView', $proker->id) }}"> Add </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                @if ($option == '')
                    <div class="max-w-xl">
                        @include('post.isipostingan.listpostingan')
                    </div>     
                @elseif ($option == 'edit')
                    <div class="max-w-xl">
                        @include('post.edit.editview')
                    </div> 
                @else
                    <div class="max-w-xl">
                        @include('post.Tambah.tambahpostingan')
                    </div> 
                @endif
                
            </div>
        </div>
    </div>
</x-app-layout>