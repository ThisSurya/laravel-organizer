<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{  __('Document:') }}
        </h2>
    </header>

    <div class="py-12">
        <div class="max-w-7xl">
            <div class="p-4">
                @foreach ($file as $photos)
                    <a href="{{ route('file.download', $photos->id) }}">{{ $photos->judul }}</a>
                    <form action="{{ route('file.delete') }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{ $photos->id }}">
                        <input type="submit" value="hapus">
                    </form></form>
                    <br>
                @endforeach
                <p></p>
            </div>
        </div>
    </div>
</section>
