@extends('layouts.main')

@section('content')
{{--    <div>Index of movies</div>--}}
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
{{--                    @include('partials.moviecard', [])--}}
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div>
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach($nowPlayingMovies as $movie)
{{--            <div class="mt-8">--}}
{{--                <a href="#">--}}
{{--                    <img src="/img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">--}}
{{--                </a>--}}
{{--                <div class="mt-2">--}}
{{--                    <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>--}}
{{--                    <div class="flex items-center text-gray-400">--}}
{{--                        <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.363 8.584l-7.378-1.127L12.678.413c-.247-.526-1.11-.526-1.357 0L8.015 7.457.637 8.584a.75.75 0 00-.423 1.265l5.36 5.494-1.267 7.767a.75.75 0 001.103.777L12 20.245l6.59 3.643a.75.75 0 001.103-.777l-1.267-7.767 5.36-5.494a.75.75 0 00-.423-1.266z" fill="#ffc107"/></svg>--}}
{{--                        <span class="ml-1">85%</span>--}}
{{--                        <span class="mx-2">|</span>--}}
{{--                        <span>Feb 20, 2020</span>--}}
{{--                    </div>--}}
{{--                    <div class="text-gray-400 text-sm">--}}
{{--                        Action, Thriller, Comedy--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
        </div>
    </div>
</div>
@endsection
