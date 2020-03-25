<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title')</title>
<!-- Search Engine Optimization by Rank Math - https://s.rankmath.com/home -->
<meta name="description"
    content="@yield('description')">
<meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
{{-- <link rel="canonical" href="https://codingphase.com/"> --}}
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<meta property="og:title" content="{{$settings["general"]->site_title}}">
<meta property="og:description"
    content="@yield('description')">
{{-- <meta property="og:url" content="https://codingphase.com/"> --}}
<meta property="og:site_name" content="{{$settings["general"]->site_title}}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description"
    content="{{$settings["seo"]->description}}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fonts -->
<link rel="stylesheet" href="/css/app.css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<script src="https://kit.fontawesome.com/85bf57a8d9.js" crossorigin="anonymous"></script>

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>