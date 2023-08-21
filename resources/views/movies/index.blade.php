@extends('layouts.main')

@section('content')
   <div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            popular movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            {{-- Movie 1 --}}
           @foreach ($popularMovies as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
        
           @endforeach

            
        </div>
    </div>

    {{-- Now playing --}}
    <div class="now-playing mt-2">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
            Now Playing
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            {{-- Movie 1 --}}
            @foreach ($nowPlaying as $movie)
            <x-movie-card :movie="$movie" :genres="$genres"/>
        
           @endforeach

            
            
        </div>
    </div>
   </div>
@endsection