<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Siapa saja yang ikut dalam organisasi ini?") }}
        </h2>
    </header>

    <div class="p-6 text-gray-900">
        
        <table>
            <tr>
                <td>nama</td>
                <td>email</td>
                <td>Role</td>
            </tr>
            @foreach ($user as $users)
                    <tr>
                        <td>{{ $users->name }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->Roles }}</td>
                    </tr>
            @endforeach
        </table>
    </div>
</section>