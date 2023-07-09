<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit postingan
        </h2>
    </header>
        <form action="{{ route('posting.update') }}" method="POST">
            @csrf
            <x-text-input type="hidden" name="postingan_id" value="{{ $postingan->id }}"></x-text-input>
            <x-text-input type="hidden" name="proker_id" value="{{ $proker->id }}"></x-text-input>
            {{-- judul program kerja --}}
            <div>
                <x-input-label for="Deskripsi" :value="__('Deskripsi')"></x-input-label>
                <x-text-input type="text" class="block mt-1 w-full" name="deskripsi" value="{{ $postingan->deskripsi }}"/>
                <x-primary-button class="ml-4">
                    {{ __('Buat') }}
                </x-primary-button>
            </div>
        </form>
</section>