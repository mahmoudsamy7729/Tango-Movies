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
    <link rel="stylesheet" href="{{asset('css/master2.css')}}">
    <link rel="stylesheet" href="@yield('css_file')">
</head>
<body>
    {{-- start navbar --}}
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        
        <div class="container">
            <a class="navbar-brand logo me-5" href="#">
                <span>tang</span><span><i class="fas fa-play-circle ms-1 fa-logo-edit"></i></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home me-1"></i>Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#"><i class="fas fa-search me-1"></i>browse movies</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#"><i class="fas fa-newspaper me-1"></i>news</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#"><i class="fas fa-file-signature me-1"></i>contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="#"><i class="fas fa-sign-in-alt me-1"></i>login</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" aria-current="page" href="#"><i class="fas fa-user-plus me-1"></i>signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}


    {{-- start body --}}
    <div class="body pt-2">
        <div class="body-container ps-3  pe-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="row mb-1">
                        <div class="col-md-12 ">
                            <div class="d-none d-sm-block container border inner-background-color py-2 ">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center fw-bold">
                                        <p>FOLLOW TANGO</p>
                                    </div>
                                    <hr class="hr-margin-top">
                                    <div class="social-media">
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="col-12"><i class="fab fa-facebook-square me-2" style="color: #4267B2"></i> TangoREV</a>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <a href="col-12"> <i class="fab fa-twitter-square fa-margin-right" style="color: #1DA1F2"></i>TangoREV</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row " style="position: sticky ;top: 62px;">
                        <div class="col-md-12 ">
                            <div class=" d-none d-sm-block container border inner-background-color py-2  ">
                                <div class="row ">
                                    <div class="col-12 text-uppercase links-movies ">
                                        <div class="row mt-3">
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>28,'page_num'=>1])}}" class="border p-2" > action movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>80,'page_num'=>1])}}" class="border p-2" > Crime movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>18,'page_num'=>1])}}" class="border p-2" > Drama movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>10751,'page_num'=>1])}}" class="border p-2"> Family movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>14,'page_num'=>1])}}" class="border p-2"> Fantasy movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>36,'page_num'=>1])}}" class="border p-2"> History movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>27,'page_num'=>1])}}" class="border p-2"> Horror movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>10402,'page_num'=>1])}}" class="border p-2"> Music movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>9648,'page_num'=>1])}}" class="border p-2"> Mystery movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>10749,'page_num'=>1])}}" class="border p-2"> Romance movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>53,'page_num'=>1])}}" class="border p-2"> Thriller movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>10752,'page_num'=>1])}}" class="border p-2"> War movies</a>
                                            </div>
                                            <div class="col-6 mb-4">
                                                <a href="{{route('movies-genre',['genre'=>37,'page_num'=>1])}}" class="border p-2"> Western movies</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-12">
                            <div class="title d-flex justify-content-center text-uppercase">
                                <h1> <span>tang</span><span><i class="fas fa-play-circle ms-1 fs-2"></i></span></h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <h1 class=" d-flex justify-content-center text-uppercase fw-bold">
                                home of movies
                            </h1>
                        </div>
                        
                    </div>
                    
                    @yield('content')
                    
                </div>
                <div class="col-md-2 " >
                    <div class=" border inner-background-color py-2 overflow-hidden" style="position: sticky ;top: 62px;">
                        <div class="row text-uppercase sec-container">
                            <div class="col-12 ps-4 mb-1">
                                <a href="{{route('main')}}"><i class="fas fa-home me-2"></i>home</a>
                            </div>
                            <hr>
                            <div class="col-12 ps-4 my-1">
                                <a href="{{route('trending',1)}}"><i class="fas fa-chart-line me-2"></i>trending</a>
                            </div>
                            <hr>
                            <div class="col-12 ps-4 my-1">
                                <a href="{{route('popular-movies',1)}}"><i class="fas fa-film me-2"></i>popular movies</a>
                            </div>
                            <hr>
                            <div class="col-12 ps-4 my-1">
                                <a href="{{route('coming-soon',1)}}"><i class="fas fa-spinner me-2"></i>coming soon</a>
                            </div>
                            <hr>
                            <div class="col-12 ps-4 my-1">
                                <a href="{{route('coming-soon',1)}}"><i class="fab fa-free-code-camp me-2"></i>box office</a>
                            </div>
                            <hr>
                            <div class="col-12 ps-4 mt-1">
                                <a href="{{route('top-tvs',1)}}"><i class="fas fa-desktop me-2"></i>popular series</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    

    {{-- end body --}}



    



    @yield('java')
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>