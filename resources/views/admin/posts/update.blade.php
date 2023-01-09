@extends('layout.admin')
@section('title', 'Редактировать статью '.$post->id)
@section('content')
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Редактировать статью {{ $post->id }}</h3>

        <div class="mt-8">

        </div>

        <div class="mt-8">
            <form class="space-y-5 mt-5" action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @error('title') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-800 @enderror" placeholder="Название" value="{{ $post->title }}"/>

                @error('preview') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px- @error('preview') border-red-800 @enderror" placeholder="Краткое описание" value="{{ $post->preview }}" />

                @error('description') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="description" type="text" class="w-full h-12 border border-gray-800 rounded px- @error('description') border-red-800 @enderror" placeholder="Описание" value="{{ $post->description }}" />

                @if($post->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="{{ $post->thumbnail }}">
                    </div>
                @endif

                @error('thumbnail') <p class="text-red-500">{{ $message }}</p> @enderror
                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
