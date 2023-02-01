<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome-1" />
    <title>{{ __('YouTube')}}</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!--    Fonts and Icons -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family-Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, intial-scale-1">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<header class="header">
        @include('layouts.navbar')
    </header>
    <main>
        <div class="side-bar">
            @include('layouts.sidebar')
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>
<nav class="navbar">
    <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <img src="{{asset ('image')}}/youtube.png" class="logo" alt="YouTube">
    <div class="search-box">
        <input type="text" class="search-bar" placeholder="search">
        <button class="search-btn"><img src="{{asset ('image')}}/search.png" alt=""></button>
    </div>
    <div class="user-options">
        <img src="{{asset ('image')}}/video.png" class="icon" alt="">
        <img src="{{asset ('image')}}/grid.png" class="icon" alt="">
        <img src="{{asset ('image')}}/bell.png" class="icon" alt="">
        <div class="user-dp">
            <img src="{{asset ('image')}}/profile-pic.jpg" alt="">
        </div>
    </div>

    <div class="side-bar">
    <a href="#" class="links active"><img src="{{asset ('image')}}/home.png" alt="">home</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/explore.png" alt="">explore</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/subscription.png" alt="">subscription</a>
    <hr class="seperator">
    <a href="#" class="links"><img src="{{asset ('image')}}/library.png" alt="">library</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/history.png" alt="">history</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/your-video.png" alt="">your video</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/watch-later.png" alt="">watch leater</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/liked video.png" alt="">like video</a>
    <a href="#" class="links"><img src="{{asset ('image')}}/show more.png" alt="">show more</a>
    </div>

    <div>
    <div class="video-container grid">
    <div class="video">
        <img src="{{asset ('image')}}/motion-sickness.png" class="thumbnail" alt="">
        <div class="content">
            <img src="{{asset ('image')}}/profile-pic.jpg" class="channel-icon" alt="">
            <div class="info">
                <h4>Motion Sickness - Official Music Video</h4>
                <p class="channel-name">Neck Deep</p>
            </div>
        </div>
    </div>    
    </div>
    
    </div>
</nav>

</body>
</html>
