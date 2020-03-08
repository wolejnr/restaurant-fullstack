@extends('layouts.landing')

@section('title', 'Page Title')


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

    <section id="food-preview">
      <h2>We have everything to satisfy your hunger</h2>
      <div class="button-rounded">View Our Menu</div>
      <div class="container">
        <div class="left-btn">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="right-btn">
          <i class="fas fa-chevron-right"></i>
        </div>

        <div class="food-slider">

          <div class="sliding-system">
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Starters
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="img/CHIPS.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Burgers
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="img/hamburger-and-fries-png-4.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Entrees
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="img/342-3422633_pork-entrees-steak-pork-png.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Sides
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="img/Salad-PNG-Image.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Desserts
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="img/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Starters
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="https://taco.sfo2.digitaloceanspaces.com/2019/04/CHIPS.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Burgers
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Entrees
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Sides
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Salad-PNG-Image.png" />
                </div>
              </div>
            </div>
    
            <div class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  Desserts
                </div>
                <p class="food-description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, temporibus! Aperiam aut labore fugit, voluptas eligendi dolorum et molestiae debitis assumenda asperiores ab delectus magnam optio dolorem quasi necessitatibus harum!
                </p>
                <div class="food-image">
                  <img src="https://www.pngkit.com/png/full/106-1063654_blueberry-vanilla-cheesecake-vanilj-o-blbr-cheesecake.png" />
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
      </div>
      
    </section>
@endsection