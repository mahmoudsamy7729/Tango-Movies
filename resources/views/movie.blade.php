@extends('layouts.master2')
@section('title','movie')
@section('css_file')
    {{asset('css/movie.css')}}
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-md-5 d-flex justify-content-center mb-3">
            <img src="{{$img_url.$movie['poster_path']}}" class="" alt="" width="100%" height="100%">
        </div>
        <div class="col-12 col-md-7 inner-background-color border pt-2 pb-4 mb-3" style="height: 100%">
            <div class="row movie-desc">
                <div class="col-12 d-flex justify-content-center title text-uppercase border-bottom">
                    <p>{{$movie['title']}}</p>
                </div>
                <div class="col-12  text-uppercase">
                    <div class="row border-bottom p-1">
                        <div class="col-4 border-end ">
                            <p>relase date</p>
                        </div>
                        <div class="col-8">
                            <p> {{$movie['release_date']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 rating text-uppercase">
                    <div class="row border-bottom p-1">
                        <div class="col-4 border-end ">
                            <p>rating</p>
                        </div>
                        <div class="col-8">
                            <p>{{$movie['vote_average']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 genre text-uppercase">
                    <div class="row border-bottom p-1">
                        <div class="col-4 border-end ">
                            <p>genre</p>
                        </div>
                        <div class="col-8">
                            @foreach ($geners as $genre)
                                <p style="display: inline">{{$genre['name']}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 rating text-uppercase">
                    <div class="row border-bottom p-1">
                        <div class="col-4 border-end ">
                            <p>duration</p>
                        </div>
                        <div class="col-8">
                            <p>{{$movie['runtime']}} min</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 director text-uppercase">
                    <div class="row border-bottom p-1">
                        <div class="col-4 border-end ">
                            <p>director</p>
                        </div>
                        <div class="col-8">
                            @foreach ($director as $director)
                                <p>{{$director['name']}}</p>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                @if ($has_trailler)
                <div class="col-12 mt-2 d-flex justify-content-center">
                    <a href="{{$trailler}}" target="_blank"><button class="btn btn-success text-uppercase">watch trailler</button></a>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row inner-background-color border mb-3">
        <div class="col-12  actors text-uppercase p-2 ">
            <p class="ms-3 d-flex justify-content-center">actors</p>
            <hr>
        </div>     
        <div class="col-12">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            @foreach (array_slice($cast,0,3) as $actor)
                                <div class="col-4">
                                    <div class="actor-info text-uppercase">
                                        <img src="{{$img_url.$actor['profile_path']}}" class="actor-img " alt="" width="60%">
                                        <p>{{$actor['name']}} as {{$actor['character']}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            @foreach (array_slice($cast,3,3) as $actor)
                                <div class="col-4">
                                    <div class="actor-info text-uppercase">
                                        <img src="{{$img_url.$actor['profile_path']}}" class="actor-img " alt="" width="60%">
                                        <p>{{$actor['name']}} as {{$actor['character']}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
        
                    </div>
                    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row inner-background-color border mb-3">
        <div class="col-12  actors text-uppercase p-2 ">
            <p class="ms-3 d-flex justify-content-center">similar movies</p>
            <hr>
        </div>
        <div class="row">
            <div class="movies-container">
                <div class="row">
                    @foreach ($similar as $similar)
                    <div class="col-4 movie-container text-uppercase mb-2">
                        <a href="{{route('movie',$similar['id'])}}">
                            <div class="d-flex justify-content-center box"> 
                                <img src="{{$img_url.$similar['poster_path']}}" class="mb-1" height="100%" width="100%" alt="">
                            </div>  
                            <span class=" movie-title " >{{$similar['title']}}</span>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-star fw-bold rating-edit"></i>
                                    <p style="display: inline-flex">{{$similar['vote_average']}}</p>
                                    <div class="float-end">
                                        <i class="fas fa-dna fw-bold year-edit mmt"></i>
                                        <p style="display: inline-flex">{{$similar['release_date']}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
    



@endsection 