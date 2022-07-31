<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $artists = Artist::paginate(50);
        return view('artists.index', ['artists' => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("artists.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artist = new Artist();
        $artist->name = $request->input('name');
        $artist->genres = $request->input('genres');
        $artist->songs = $request->input('songs');
        $artist->popularity = $request->input('popularity');
        $artist->link = $request->input('link');
        $artist->save();
        return redirect()->route('artists.show', ['artist' => $artist->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artists.show',['artist' => $artist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', ['artist'=>$artist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $artist->name = $request->input('name');
        $artist->genres = $request->input('genres');
        $artist->songs = $request->input('songs');
        $artist->popularity = $request->input('popularity');
        $artist->link = $request->input('link');
        $artist->save();
        return $request->route('artists.show',['artist'=>$artist->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Artist $artist)
    {
        //
        $name = $request->input('name');
        if($name == $artist->name){
            $artist->delete();
            return redirect()->route('artists.index');
        }
        return redirect()->back();
    }
}
