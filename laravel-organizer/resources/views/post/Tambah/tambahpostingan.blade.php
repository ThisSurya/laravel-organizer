<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah postingan tentang {{ $proker->Proker_name }}
        </h2>
    </header>
        <form action="{{ route('posting.store') }}" method="POST">
            @csrf
            <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
            <x-text-input type="hidden" name="user_id" value="{{ $user }}"></x-text-input>
            {{-- judul program kerja --}}
            <div>
                <x-input-label for="judul" :value="__('Judul')"></x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" name="judul" :value="old('judul')"/>
                <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                
                <x-input-label for="deskripsi" :value="__('Deskripsi')"></x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" name="deskripsi" :value="old('deskripsi')"/>
                <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
                
                <x-primary-button class="ml-4">
                    {{ __('Buat') }}
                </x-primary-button>
            </div>
        </form>
</section>