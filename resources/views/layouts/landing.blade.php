<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
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
