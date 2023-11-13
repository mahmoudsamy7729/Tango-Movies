<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="_token" content="{{csrf_token()}}" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="@yield('css_file')">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand logo me-5" href="#">
                <span>tan</span><span class="me-1">g<i class="fas fa-play-circle"></i></span><span>reviews</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">browse movies</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">news</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="#">login</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="#">signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="body ">
        <div class="container">
            <div class="row ">
                <div class="col d-flex justify-content-center">
                    <a class="navbar-brand logo" href="#">
                        <span style="font-size:3rem ">tan</span><span style="font-size:3rem " class="me-1">g<i style="font-size:2.75rem " class="fas fa-play-circle"></i></span><span style="font-size:3rem ">reviews</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h5>your best place to watch reviews of movies</h5>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <h5>all new movies between your hand</h5>
            </div>
        </div>
        
        <div class="container">
            <div class="row mb-3 d-flex justify-content-center pt-5 pb-5 ">
                <div class="col-12 col-md-3">
                    <div class="movie-container border p-2 ">
                        <div class="row">
                            <div class="col movie-img d-flex justify-content-center">
                                <img src="{{asset('img/incept.jpg')}}" class=" img-fluid" alt="" style="width: 15rem">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="movie-body">
                                <p class="movie-title d-flex justify-content-center">
                                    inception
                                </p>
                                <div class="row movie-details">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>RATING : </span> <span class="ms-1">8.8</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>YEAR : </span> <span class="ms-1">2020</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>genre : </span> <span class="ms-1">action</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="movie-container border p-2">
                        <div class="row">
                            <div class="col movie-img d-flex justify-content-center">
                                <img src="{{asset('img/incept.jpg')}}" class=" img-fluid" alt="" style="width: 15rem">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="movie-body">
                                <p class="movie-title d-flex justify-content-center">
                                    inception
                                </p>
                                <div class="row movie-details">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>RATING : </span> <span class="ms-1">8.8</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>YEAR : </span> <span class="ms-1">2020</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>genre : </span> <span class="ms-1">action</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="movie-container border p-2">
                        <div class="row">
                            <div class="col movie-img d-flex justify-content-center">
                                <img src="{{asset('img/incept.jpg')}}" class=" img-fluid" alt="" style="width: 15rem">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="movie-body">
                                <p class="movie-title d-flex justify-content-center">
                                    inception
                                </p>
                                <div class="row movie-details">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>RATING : </span> <span class="ms-1">8.8</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>YEAR : </span> <span class="ms-1">2020</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>genre : </span> <span class="ms-1">action</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="movie-container border p-2">
                        <div class="row">
                            <div class="col movie-img d-flex justify-content-center">
                                <img src="{{asset('img/incept.jpg')}}" class=" img-fluid" alt="" style="width: 15rem">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="movie-body">
                                <p class="movie-title d-flex justify-content-center">
                                    inception
                                </p>
                                <div class="row movie-details">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>RATING : </span> <span class="ms-1">8.8</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>YEAR : </span> <span class="ms-1">2020</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>genre : </span> <span class="ms-1">action</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>


                <div class="col-12 col-md-3">
                    <div class="movie-container border p-2">
                        <div class="row">
                            <div class="col movie-img d-flex justify-content-center">
                                <img src="{{$movies['items'][0]['image']}}" class=" img-fluid" alt="" style="width: 15rem">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="movie-body">
                                <p class="movie-title d-flex justify-content-center">
                                    {{$movies['items'][0]['title']}}
                                </p>
                                <div class="row movie-details">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>RATING : </span> <span class="ms-1">{{$movies['items'][0]['imDbRating']}}</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>YEAR : </span> <span class="ms-1">{{$movies['items'][0]['year']}}</span>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>genre : </span> <span class="ms-1">action</span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>
    <script>
        function check_poster()
        {
            fetch('https://imdb-api.com/en/API/Title/k_iyyz5cuu/tt1375666').then(function(response){
                return response.json();
            })
            .then(function(data)
            {
                document.getElementById('title').innerHTML= data.title;
                document.getElementById('rating').innerHTML= data.imDbRating
                console.log(data.imDbRating)

            })
            
        }
    </script>
    


    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>