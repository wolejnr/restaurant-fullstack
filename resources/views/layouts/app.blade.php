<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <section id="app-layout">

        @include('includes.side-menu')

            <section id="content-section">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @yield('content')

            </section>

        </section>

        <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

        <script>
            let slides = $('.sliding-system a.slide').length;
            let maxSlides;
            let moveTotal;
            let currentSlide = 0;

            $(window).resize(function(){
                currentSlide = 0;
                $('.sliding-system').css('transform', 'translate3d(-0%, 0, 0)');
            })

            function desktopSlider(){
                if (a.matches){
                    maxSlides = Math.ceil((slides * 20) / 100);
                    moveTotal = 100;

                    // Right Button
                    $('.right-btn').on('click', () => {
                        console.log('clicked right button');
                        if(currentSlide < maxSlides){
                            currentSlide += 100;
                            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`)
                        }
                    });

                    // Left Button
                    $('.left-btn').on('click', () => {
                        console.log('clicked left button');
                        if(currentSlide != 0){
                            currentSlide -= 100;
                            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`)
                        }
                    });
                }
            }

            var a = window.matchMedia("(min-width: 998px)");
            desktopSlider(a);
            a.addListener(desktopSlider);

            function tabletSlider(){
                if(b.matches){
                    maxSlides = Math.ceil((slides * 50) / 100);
                    moveTotal = 100;

                    // Right Button
                    $('.right-btn').on('click', () => {
                        console.log('clicked right button');
                        if(currentSlide < ((maxSlides * 100) - 100)){
                            currentSlide += 50;
                            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`)
                        }
                    });

                    // Left Button
                    $('.left-btn').on('click', () => {
                        console.log('clicked left button');
                        if(currentSlide != 0){
                            currentSlide -= 50;
                            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`)
                        }
                    });
                }
            }

            var b = window.matchMedia("(min-width: 768px) and (max-width: 997px)");
            tabletSlider(b);
            b.addListener(tabletSlider);

        </script>

    </body>
</html>
