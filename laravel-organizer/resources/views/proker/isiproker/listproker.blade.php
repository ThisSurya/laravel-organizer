<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{  __('List Proker kamu:') }}
        </h2>
        @if ($userRole == 1)
        <a href="{{ route('proker.addView') }}"> Add </a>
        @endif
        
    </header>

    <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
        @foreach ($proker as $prokers)
            <div class="p-6 flex space-x-2 ">  
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <small class="ml-2 text-sm text-gray-600">{{ $prokers->status }}</small>
                        </div>
                        @if ($prokers->Proker_name)
                            @if ($userRole == 1)
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                        </svg>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                    <form action="{{ route('proker.editView', $prokers->id) }}" method="GET">
                                        <x-dropdown-link onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Edit') }}
                                        </x-dropdown-link>  
                                    </form>
                                    <form method="POST" action="{{ route('proker.delete', $prokers->id) }}">
                                        {{ csrf_field() }}
                                        @method('delete')
                                        <x-dropdown-link onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Delete') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                            @endif
                        @endif
                    </div>
                    <form action="{{ route('postingview', $prokers->id) }}" method="GET">
                        <x-dropdown-link onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __($prokers->Proker_name) }}
                        </x-dropdown-link></form>
                </div>
            </div>
        @endforeach
    </div>

    
</section>