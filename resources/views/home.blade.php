@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} Canada's Number 1 Burger
@endsection


@section('content')
    <section id="information">
      <div class="restaurant-image">
        <img src="img/top-down.jpg" />
      </div>
      <div class="info">
        <h2>We started from the bottom in 1987</h2>
        <div class="paragraphs">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione exercitationem sequi ab soluta facere commodi amet voluptatum facilis error, dolorem cum repellat laboriosam at est enim? Officiis, accusantium. Veniam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione exercitationem sequi ab soluta facere commodi amet voluptatum facilis error, dolorem cum repellat laboriosam at est enim? Officiis, accusantium. Veniam?
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione exercitationem sequi ab soluta facere commodi amet voluptatum facilis error, dolorem cum repellat laboriosam at est enim? Officiis, accusantium. Veniam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ratione exercitationem sequi ab soluta facere commodi amet voluptatum facilis error, dolorem cum repellat laboriosam at est enim? Officiis, accusantium. Veniam?
          </p>
        </div>
        <a href="#" class="about-link">
          <span>Learn more about our restaurant</span>
          <div class="circle-right"><i class="fas fa-chevron-right"></i></div>
        </a>
      </div>
    </section>

    @include('includes.food-categories-slider')
    
@endsection