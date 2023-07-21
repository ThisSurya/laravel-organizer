<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Ganti Role anggota") }}
        </h2>
    </header>

    <div class="p-6 text-gray-900">
        <form action="{{ route('role.change') }}" method="POST">
            @csrf
            <select name="user" id="">
                @foreach ($user as $users)
                    @if ($users->role_id != 1)
                        <option value="{{ $users->id }}">{{ $users->name }}</option>
                    @endif
                @endforeach
            </select>
            <select name="role_id" id="">
                @foreach ($role as $roles)
                    <option value="{{ $roles->id }}">{{ $roles->Roles }}</option>
                @endforeach
            </select>
            <x-primary-button>
                Ganti!!!
            </x-primary-button>
        </form>
    </div>
</section>