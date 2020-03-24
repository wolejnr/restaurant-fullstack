<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$settings["general"]->site_title}}</title>
        <!-- Search Engine Optimization by Rank Math - https://s.rankmath.com/home -->
        <meta name="description"
          content="{{$settings["seo"]->description}}">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        {{-- <link rel="canonical" href="https://codingphase.com/"> --}}
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$settings["general"]->site_title}}">
        <meta property="og:description"
          content="{{$settings["seo"]->description}}">
        {{-- <meta property="og:url" content="https://codingphase.com/"> --}}
        <meta property="og:site_name" content="{{$settings["general"]->site_title}}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{$settings["general"]->site_title}}">
        <meta name="twitter:description"
          content="{{$settings["seo"]->description}}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script src="https://kit.fontawesome.com/85bf57a8d9.js" crossorigin="anonymous"></script>


    </head>
    <body>
        <section id="app-layout">

        @include('includes.side-menu')

      <div class="welcome-jumbo">
        <div class="status">New</div>
        <h1>The Anderson Burger</h1>
        <img src="/img/hamburger-and-fries-png-4.png" class="burger-fries"/>
      </div>
    </section>

    @yield('content')

    
    </body>
</html>
