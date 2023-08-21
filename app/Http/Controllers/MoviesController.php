<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apiToken = env('API_TOKEN');
        $baseUrl=env('BASE_URL');

        $popularMovies = Http::withToken($apiToken)
                ->get($baseUrl . '/movie/popular')
                ->json(['results']);
                // dump($popularMovies);

              
        //fetching now playing movies
        $nowPlaying = Http::withToken($apiToken)
                ->get($baseUrl . '/movie/now_playing')
                ->json(['results']);
                // dump($nowPlaying);

        //fetching genre array list
        $genresArray=Http::withToken($apiToken)
        ->get($baseUrl . '/genre/movie/list')
        ->json(['genres']);
        // dump($genresArray);

        $genres = collect($genresArray)->mapWithKeys(function ($genre ){
            return [$genre['id'] => $genre['name']];
        });
        // dump($genres);
        return view('movies.index',[
            'popularMovies'=>$popularMovies,
            'genres'=>$genres,
            'nowPlaying'=>$nowPlaying,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $apiToken = env('API_TOKEN');
        $baseUrl=env('BASE_URL');

        $movie = Http::withToken($apiToken)
                ->get($baseUrl . '/movie/'. $id.'?append_to_response=credits,videos,images')
                ->json();
        // dump($movie);
        return view('movies.show',[
            'movie'=> $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
