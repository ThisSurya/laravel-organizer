<section>
    <header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{  __('Upload dokumen:') }}
        </h2>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('file.formUpload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="files">
                        <input type="text" name="judul">
                        <input type="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
