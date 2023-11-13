<div class="row">
    <div class="col-12 inner-background-color border py-2 mb-3">
        <div class="row">
            <div class="col movies d-flex justify-content-center fw-bold text-uppercase ">
                <a href="" class="mb-1">coming soon</a>
            </div>
            <hr class="mb-2">
        </div>
        <div class="row">
            <div class="movies-container ">
                <div class="row">
                    @foreach ($movies as $movie)
                    <div class="col-6 col-md-3 movie-container text-uppercase mb-2">
                        <a href="{{route('movie',$movie['id'])}}">
                            <div class="d-flex justify-content-center box"> 
                                <img src="{{$img_url.$movie['poster_path']}}" class=" mb-1" height="100%" width="100%" alt="">
                            </div>  
                            <span class=" movie-title " >{{$movie['title']}}</span>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-star fw-bold rating-edit"></i>
                                    <p style="display: inline-flex">{{$movie['vote_average']}}</p>
                                    <div class="float-end">
                                        <i class="fas fa-dna fw-bold year-edit mmt"></i>
                                        <p style="display: inline-flex">{{$movie['release_date']}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col d-flex justify-content-center pag-links ">
                @if ($page_num != 1)
                <button class="btn btn-primary me-2 text-uppercase"><a href="{{route('coming-soon',$page_num-1)}}">pervious page</a></button>                   
                @endif
                <button class="btn btn-primary text-uppercase"><a href="{{route('coming-soon',$page_num+1)}}">next page </a></button>
            </div>
        </div>
    </div>
</div>
