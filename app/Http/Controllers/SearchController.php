<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Http;
use Config;

class SearchController extends Controller
{
    public function searchByName(Request $request)
    {
        
        $img_url = Config::get('services.api.img_url');
        $search_title = $request->input('movie_title');
        session(['title' =>  $search_title]);
        $series= Http::get(Config::get('services.api.base_url').'/search/multi?api_key='.Config::get('services.api.key').'&language=en-US&query='.$search_title)->json()['results'];
        return view('search-result')->with(['series' => $series,'img_url' => $img_url ]);
        
    }
}
