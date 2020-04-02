@extends('layouts.app')

@section('title')
Food Menu - {{$settings["general"]->site_title}}
@endsection


@section('content')
    <div id="menu-page">
        
        <section id="food-preview">
      <h2>We have everything to satisfy your hunger</h2>
      
      <div class="container">
        <div class="left-btn">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="right-btn">
          <i class="fas fa-chevron-right"></i>
        </div>

        <div class="food-slider">

          <div class="sliding-system">
            @foreach ($categories as $category)
              <a href="/menu/{{$category->title}}" class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    {{$category->title}}
                  </div>
                  <p class="food-description">
                    {{$category->description}}
                  </p>
                  <div class="food-image">
                    <img src="{{$category->image_url}}" />
                  </div>
                </div>
              </a>
            @endforeach     
          </div> 
        </div>
      </div>
      
    </section>

    </div>
@endsection