<form action="{{route('movie-search')}}" method="post">
    @csrf
<div class="row">
    <div class="col-12 search-container mb-3">
        <div>
            <div class="row d-flex justify-content-center">
                <div class="col-10 col-md-5 border p-2 movie-name">
                    <input type="text" placeholder="search" name="movie_title" >
                    
                </div>
                <div class="col-10 col-md-5 border p-2 dropdown movie-genre">
                    <input type="text" name="genre" readonly value="" placeholder="choose genre" id="genre" data-bs-toggle="dropdown"><i class="fas fa-bars float-end"></i>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li ><a href="{{route('movies-genre',['genre'=>28,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('action')"> action </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>80,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('crime')"> crime </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>18,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('drama')"> drama </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>10751,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('family')"> Family </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>14,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('fantasy')"> Fantasy </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>36,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('history')"> History </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>27,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('horror')"> horror </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>10402,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('music')"> music </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>9648,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('Mystery')"> Mystery </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>10749,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('Romance')"> Romance </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>53,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('Thriller')"> Thriller </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>10752,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('war')"> war </a></li>
                        <li ><a href="{{route('movies-genre',['genre'=>37,'page_num'=>1])}}" class="dropdown-item" onclick="genre_choose('Western')"> Western </a></li>
                    </ul>
                </div>
                <div class="col-10 col-md-1 search-btn d-flex justify-content-center"   >
                    <button class=" btn" >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>