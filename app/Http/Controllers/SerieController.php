<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Http;
use Config;

class SerieController extends Controller
{
    public function popularSeries($page)
    {
        $page_num = $page;
        $img_url = Config::get('services.api.img_url');
        $series = Http::get(Config::get('services.api.base_url').'/tv/popular?api_key='.Config::get('services.api.key').'&language=en-US&page='.$page)->json()['results'];
        return view('popular_tvs')->with(['series' => $series,'img_url' => $img_url , 'page_num' => $page_num]);
    }

    public function show($serie_id)
    {
        
        $img_url = Config::get('services.api.img_url');
        $cast = Http::get(Config::get('services.api.base_url').'/tv/'.$serie_id.'/credits?api_key='.Config::get('services.api.key').'&language=en-US')->json()['cast'];
        $serie = Http::get(Config::get('services.api.base_url').'/tv/'.$serie_id.'?api_key='.Config::get('services.api.key').'&language=en-US')->json();
        $geners =  Http::get(Config::get('services.api.base_url').'/tv/'.$serie_id.'?api_key='.Config::get('services.api.key').'&language=en-US')->json()['genres'];
        $trailler = Http::get(Config::get('services.api.base_url'). '/tv/'. $serie_id .'/videos?api_key='.Config::get('services.api.key').'&language=en-US')->json()['results'];
        $similar = Http::get(Config::get('services.api.base_url').'/tv/'.$serie_id.'/similar?api_key='.Config::get('services.api.key').'&language=en-US&page=1')->json()['results'];

        #dd($serie);
        if($trailler)
        {
            $has_trailler = 1;
            $trailler_link = Config::get('services.api.trailer_url') . $trailler[0]['key'];
            $data = [
                'has_trailler' => $has_trailler,
                'trailler' => $trailler_link,
                'img_url' => $img_url,
                'cast' => $cast,
                'serie' => $serie,
                'geners' => $geners,
                'similar' => $similar,
            ];
            return view('tv_serie')->with($data);
        }
        else
        {
            $has_trailler = 0 ;
            $data = [
                'has_trailler' => $has_trailler,
                'img_url' => $img_url,
                'cast' => $cast,
                'serie' => $serie,
                'geners' => $geners,
                'similar' => $similar,
            ];
            return view('tv_serie')->with($data);
        }
        
    }

    public function trending($page)
    {
        $page_num = $page;
        $img_url = Config::get('services.api.img_url');
        $series = Http::get(Config::get('services.api.base_url').'/trending/all/day?api_key='.Config::get('services.api.key').'&language=en-US&page='.$page)->json()['results'];
        return view('trending')->with(['series' => $series,'img_url' => $img_url , 'page_num' => $page_num]);
    }

}
