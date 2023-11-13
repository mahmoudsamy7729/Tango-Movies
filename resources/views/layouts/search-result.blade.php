<div class="row">
    <div class="col-12 inner-background-color border py-2 mb-3">
        <div class="row">
            <div class="col movies d-flex justify-content-center fw-bold text-uppercase ">
                <a href="" class="mb-1">browse movies</a>
            </div>
            <hr class="mb-2">
        </div>
        <div class="row">
            <div class="movies-container ">
                <div class="row">
                    @foreach ($series as $serie)
                    @if ($serie['media_type']=='tv')
                    <div class="col-6 col-md-3 movie-container text-uppercase mb-2">
                        <a href="{{route('tv-serie',$serie['id'])}}">
                            <div class="d-flex justify-content-center box"> 
                                <img src="{{$img_url.$serie['poster_path']}}" class="mb-1" height="100%" width="100%" alt="">
                            </div>  
                            <span class=" movie-title " >{{$serie['name']}}</span>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-star fw-bold rating-edit"></i>
                                    <p style="display: inline-flex">{{$serie['vote_average']}}</p>
                                    <div class="float-end">
                                        <i class="fas fa-dna fw-bold year-edit mmt"></i>
                                        <p style="display: inline-flex">{{$serie['first_air_date']}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>                        
                    @endif
                    @if ($serie['media_type']=='movie')
                    <div class="col-6 col-md-3 movie-container text-uppercase mb-2">
                        <a href="{{route('movie',$serie['id'])}}">
                            <div class="d-flex justify-content-center box"> 
                                <img src="{{$img_url.$serie['poster_path']}}" class=" mb-1" height="100%" width="100%" alt="">
                            </div>  
                            <span class=" movie-title " >{{$serie['title']}}</span>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-star fw-bold rating-edit"></i>
                                    <p style="display: inline-flex">{{$serie['vote_average']}}</p>
                                    <div class="float-end">
                                        <i class="fas fa-dna fw-bold year-edit mmt"></i>
                                        <p style="display: inline-flex">{{$serie['release_date']}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                        
                    @endif
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

