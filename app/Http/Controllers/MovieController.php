<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Http;
use Config;

class MovieController extends Controller
{
    public function index()
    {
        $page_num = 1;
        $img_url = Config::get('services.api.img_url');
        $movies = Http::get(Config::get('services.api.base_url').'/movie/top_rated?api_key='.Config::get('services.api.key').'&language=en-US&page='.$page_num)->json()['results'];
        return view('main',['movies' => $movies ,'img_url' => $img_url  ]);
    }

    public function show($movie_id)
    {
        $img_url = Config::get('services.api.img_url');
        $cast = Http::get(Config::get('services.api.base_url').'/movie/'.$movie_id.'/credits?api_key='.Config::get('services.api.key').'&language=en-US')->json()['cast'];
        $movie = Http::get(Config::get('services.api.base_url').'/movie/'.$movie_id.'?api_key='.Config::get('services.api.key').'&language=en-US')->json();
        $geners =  Http::get(Config::get('services.api.base_url').'/movie/'.$movie_id.'?api_key='.Config::get('services.api.key').'&language=en-US')->json()['genres'];
        $trailler = Http::get(Config::get('services.api.base_url'). '/movie/'. $movie_id .'/videos?api_key='.Config::get('services.api.key').'&language=en-US')->json()['results'];
        $similar = Http::get(Config::get('services.api.base_url').'/movie/'.$movie_id.'/similar?api_key='.Config::get('services.api.key').'&language=en-US&page=1')->json()['results'];
        $director = Http::get(Config::get('services.api.base_url').'/movie/'.$movie_id.'/credits?api_key='.Config::get('services.api.key').'&language=en-US')->json()['crew'];
        $director = collect($director);
        $director_name = $director->where('job','Director');
        #dd($director_name);
        if($trailler)
        {
            $has_trailler = 1;
            $trailler_link = Config::get('services.api.trailer_url') . $trailler[0]['key'];
            $data = [
                'img_url' => $img_url,
                'has_trailler' => $has_trailler,
                'movie' => $movie,
                'cast' => $cast,
                'trailler' => $trailler_link,
                'similar' => $similar,
                'geners' => $geners,
                'director' => $director_name,
            ];
            return view('movie')->with($data);
        }
        else
        {
            $has_trailler = 0;
            $data = [
                'img_url' => $img_url,
                'has_trailler' => $has_trailler,
                'movie' => $movie,
                'cast' => $cast,
                'similar' => $similar,
                'geners' => $geners,
                'director' => $director_name,
            ];
            return view('movie')->with($data);
        }
    }

    public function popularMovies($page)
    {
        $page_num = $page;
        $img_url = Config::get('services.api.img_url');
        $movies = Http::get(Config::get('services.api.base_url').'/movie/popular?api_key='.Config::get('services.api.key').'&language=en-US')->json()['results'];
        return view('popular_movies')->with(['movies' => $movies,'img_url' => $img_url , 'page_num' => $page_num]);
    }

    public function comingSoon($page)
    {
        $page_num = $page;
        $img_url = Config::get('services.api.img_url');
        $coming_soon = Http::get(Config::get('services.api.base_url').'/movie/upcoming?api_key='.Config::get('services.api.key').'&language=en-US&page='.$page)->json()['results'];
        return view('coming-soon',['movies'=>$coming_soon,'img_url' => $img_url , 'page_num' => $page_num]);
    }

    public function moviesGenre($genre,$page)
    {
        $genre_id = $genre;
        $page_num = $page;
        $img_url = Config::get('services.api.img_url');
        $movies_by_genre= Http::get(Config::get('services.api.base_url').'/discover/movie?api_key='.Config::get('services.api.key').'&language=en-US&page='.$page.'&with_genres='.$genre)->json()['results'];
        return view('movie-genre',['movies'=>$movies_by_genre,'img_url' => $img_url , 'page_num' => $page_num , 'genre_id' => $genre_id]);
    }
}
