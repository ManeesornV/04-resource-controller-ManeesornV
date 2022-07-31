@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        Create New Artist
    </h1>

    <form action="{{ route('artists.store') }}" method="post">
        @csrf

        <div class="flex justify-between">
            <label for="name">Artist name</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="name">
        </div>

        <div class="flex flex-row">
            <label for="genres">Genres</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="genres">
        </div>

        <div class="flex flex-row">
            <label for="songs">Songs</label>
            <textarea class="p-2 border-2 border-gray-600 w-full" name="songs" cols="30" rows="10"></textarea>
        </div>

        <div class="flex flex-row">
            <label for="popularity">Songs</label>
            <textarea class="p-2 border-2 border-gray-600 w-full" name="popularity" cols="30" rows="10"></textarea>
        </div>

        <div class="flex flex-row">
            <label for="link">Genres</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="link">
        </div>

        <div>
            <button type="submit" class="button color-blue">CREATE</button>
        </div>
    </form>
@endsection
