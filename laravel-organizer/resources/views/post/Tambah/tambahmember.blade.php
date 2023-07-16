<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Anggota dari: {{ $proker->Proker_name }}
        </h2>
    </header>
    <form action="{{ route('posting.kickMember') }}" method="POST">
        @csrf
        <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
        {{-- judul program kerja --}}
        <div>
            <x-input-label for="judul" :value="__('Anggota')"></x-input-label>
            <select name="user_id" id="user_group">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button>sadxc</button>
                    </x-slot>
                    <x-slot name="content">
                        <h2>Anggota yang sudah masuk</h2>
                        @foreach ($member as $members)
                            <option value="{{ $members->id }}" > 
                                {{ $members->name }} 
                            </option>
                        @endforeach
                    </x-slot>
                </x-dropdown>
            </select>
            <x-primary-button class="ml-4">
                {{ __('Kick!') }}
            </x-primary-button>
        </div>
    </form>
    <br>
    <br>
    <br>
        <form action="{{ route('posting.storeMember') }}" method="POST">
            @csrf
            <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
            {{-- judul program kerja --}}
            <div>
                <x-input-label for="judul" :value="__('Anggota')"></x-input-label>
                <select name="user_id" id="user_group">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>sadxc</button>
                        </x-slot>
                        <x-slot name="content">
                            <h2>Anggota</h2>
                            @foreach ($user as $users)
                                @if ($users->role_id == 2)
                                    <option value="{{ $users->id }}" > 
                                        {{ $users->name }} 
                                    </option>
                                @endif
                            @endforeach
                        </x-slot>
                    </x-dropdown>
                </select>
                <x-primary-button class="ml-4">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
</section>