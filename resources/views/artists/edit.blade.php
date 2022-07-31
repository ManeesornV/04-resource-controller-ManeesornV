@extends('layouts.main')

@section('content')
    <h1 class="text-3xl">
        Edit Artist
    </h1>

    <form action="{{ route('artists.store') }}" method="post">
        @csrf
        @method('PUT')

        <div class="flex justify-between">
            <label for="name">Artist name</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="name" value="{{$artist->name}}">
        </div>

        <div class="flex flex-row">
            <label for="genres">Genres</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="genres" value="{{$artist->genres}}">
        </div>

        <div class="flex flex-row">
            <label for="songs">Songs</label>
            <textarea class="p-2 border-2 border-gray-600 w-full" name="songs" cols="30" rows="10"></textarea>
        </div>

        <div class="flex flex-row">
            <label for="popularity">Songs</label>
            <textarea class="p-2 border-2 border-gray-600 w-full" name="popularity" cols="30" rows="10">{{$artist->popularity}}</textarea>
        </div>

        <div class="flex flex-row">
            <label for="link">Genres</label>
            <input class="p-2 border-2 border-gray-600 w-full" type="text" name="link" value="{{$artist->link}}">
        </div>

        <div>
            <button type="submit" class="button color-blue">EDIT</button>
        </div>
    </form>
@endsection
