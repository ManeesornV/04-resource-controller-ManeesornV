@extends('layouts.main')

@section('content')
    <h1>{{$artist->name}}</h1>

    <div>
        {{$artist->genres}}
        {{$artist->songs}} | {{$artist->popularity}}
    </div>

    <div>
        <a href="{{$artist->link}}">{{$artist->link}}</a>
    </div>

    <div>
        <a href="{{route('artists.edit',['artist'=>$artist->id])}}">
            Edit this artist
        </a>
    </div>
@endsection
