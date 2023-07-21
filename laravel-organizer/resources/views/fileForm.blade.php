<x-app-layout>
    <x-slot name="navhead">
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
                <a class="text-white opacity-50" href="{{ route('posting.store') }}">{{ __('XXXXXXX') }}</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']"
                aria-current="page">{{ __('XXXXXXX') }}</li>
        </ol>
        <h6 class="mb-0 font-bold text-white capitalize">{{ __('XXXXXXX') }}</h6>
    </x-slot>

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
</x-app-layout>
