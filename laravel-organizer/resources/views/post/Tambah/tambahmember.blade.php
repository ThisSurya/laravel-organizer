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
            <h2>List Anggota</h2>
                @foreach ($member as $members)
                    <input type="checkbox" class="rounded text-pink-500" name="user_id[]" value="{{ $members->id }}"/>
                        {{ $members->name }}
                    @endforeach
            <x-primary-button class="ml-4">
                {{ __('Kick!') }}
            </x-primary-button>
        </div>
    </form>
    
    <br>
    <br>
    <br>

    <x-input-label for="judul" :value="__('Anggota')"></x-input-label>
    <button onclick="openFormAdd()">+</button>
    <div id="listmember" style="display: none;">
        <form action="{{ route('posting.storeMember') }}" method="POST">
            @csrf
            <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
            <div>
                @foreach ($user as $users)
                    @if ($users->role_id == 2)
                        <input type="checkbox" class="rounded text-pink-500" name="user_id[]" value="{{ $users->id }}"/>
                            {{ $users->name }}
                    @endif
                @endforeach
                <x-primary-button class="ml-4">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
        <button onclick="closeFormAdd()">x</button>
    </div>
</section>

<script>
    function openFormAdd(){
        document.getElementById("listmember").style.display = "block";
    }

    function closeFormAdd(){
        document.getElementById("listmember").style.display= "none";
    }
</script>