<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
    </head>
    <body>
        <section id="welcome">
      <div class="welcome-menu">
        <div class="logo">
          <img src="img/logo.png"/>
        </div>
          
        <div class="menu">
          <div class="menu-title">
            Menu
          </div>
          <ul class="links">
            <li>
              <a href="#">Menu</a>
            </li>
            <li>
              <a href="#">Wait list</a>
            </li>
            <li>
              <a href="#">Offers</a>
            </li>
            <li>
              <a href="#">Gift cards</a>
            </li>
          </ul>
        </div>
        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="location">
          <div class="address">
            1200 Walkley Road <br>
            Ottawa, ON K2K1G3
          </div>
          <div class="phone-number">
            <a href="tel:4382340918">438-234-0918</a>
          </div>     
        </div>
      </div>
      <div class="welcome-jumbo">
        <div class="status">New</div>
        <h1>The Anderson Burger</h1>
        <img src="img/hamburger-and-fries-png-4.png" class="burger-fries"/>
      </div>
    </section>

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
    </body>
</html>
