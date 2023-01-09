@extends('layout.admin')
@section('title', 'Добавить статью')
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Добавить новую</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form class="space-y-5 mt-5" action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @error('title') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-800 @enderror" placeholder="Название" />

                @error('preview') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px- @error('preview') border-red-800 @enderror" placeholder="Краткое описание" />

                @error('description') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="description" type="text" class="w-full h-12 border border-gray-800 rounded px- @error('description') border-red-800 @enderror" placeholder="Описание" />

                @error('thumbnail') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
