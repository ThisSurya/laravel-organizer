

<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            List postingan
        </h2>
        <x-dropdown>
            <x-slot name="trigger">
                <button>Tambah</button>
            </x-slot>
            <x-slot name="content">
                <a href="{{ route('posting.addView', $proker->id) }}" style="width: 50%;"> Add post</a>
                <br>
                @if ($userRole == 1)
                    <a href="{{ route('posting.addMemberView', $proker->id) }}">Add Anggota </a>
                @endif
            </x-slot>
        </x-dropdown>
    </header>

    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($postingan as $postingans)
            <div class="p-6 flex space-x-2 ">  
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <small class="ml-2 text-sm text-gray-600">{{ $postingans->name }}</small>
                            <small class="ml-2 text-sm text-gray-600">{{ $postingans->name }}</small>
                        </div>
                        @if ($postingans->deskripsi)
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <form method="get" action="{{ route('posting.editView', $postingans->id) }}">
                                        <x-text-input type="hidden" value="{{ $postingans->id }}" name="posting_id"></x-text-input>
                                        <x-text-input type="hidden" value="{{ $proker->id }}" name="proker_id"></x-text-input>
                                        <x-dropdown-link onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>  
                                    </form>
                                    <form method="POST" action="{{ route('posting.delete') }}">
                                        <x-text-input type="hidden" value="{{ $postingans->id }}" name="posting_id"></x-text-input>
                                        <x-text-input type="hidden" value="{{ $proker->id }}" name="proker_id"></x-text-input>
                                        {{ csrf_field() }}
                                        @method('delete')
                                        <x-dropdown-link onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </form>               
                                </x-slot>
                            </x-dropdown>
                        @endif
                    </div>
                    <p></p>
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>
                                <button>{{ __($postingans->judul) }}</button>
                            </button>

                            <x-slot name="content">
                                <h2>penjelasan:</h2>
                                <p>{{ __($postingans->deskripsi) }}</p>
                            </x-slot>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        @endforeach
    </div>
</section>