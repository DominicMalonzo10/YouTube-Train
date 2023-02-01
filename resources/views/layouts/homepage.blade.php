<!DOCTYPE html>
<html lang="en">
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

    <!--    Scripts -->

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
</body>
</html>