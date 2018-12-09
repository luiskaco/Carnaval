
    @include('partials.headWeb')

    <body>

   <div class="fh5co-loader"></div>
   <div class="text-center" id="fakeLoader"></div>

    <div id="page">
    @include('partials.menu')

    @yield('banner')
    @yield('content')

    @include('partials.crono')

    @yield('seccion_b')
    @yield('seccion_c')
    @yield('seccion_d')


    @include('partials.footer')

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

     <!-- jQuery -->
    {{ Html::script('carnaval/js/jquery.min.js') }}

    {{ Html::script('carnaval/js/fakeLoader.min.js') }}

     <!-- Modernizr JS -->
    {{ Html::script('carnaval/js/modernizr-2.6.2.min.js') }}
    <!-- jQuery Easing -->
    {{ Html::script('carnaval/js/jquery.easing.1.3.js') }}
    <!-- Bootstrap -->
    {{ Html::script('carnaval/js/bootstrap.min.js') }}

    <!-- Waypoints -->
    {{ Html::script('carnaval/js/jquery.waypoints.min.js') }}

    <!-- Stellar Parallax -->
    {{ Html::script('carnaval/js/jquery.stellar.min.js') }}

    <!-- Carousel -->
    {{ Html::script('carnaval/js/owl.carousel.min.js') }}

    <!-- Flexslider -->
    {{ Html::script('carnaval/js/jquery.flexslider-min.js') }}

    <!-- countTo -->
    {{ Html::script('carnaval/js/jquery.countTo.js') }}

    <!-- Magnific Popup -->
    {{ Html::script('carnaval/js/jquery.magnific-popup.min.js') }}
    {{ Html::script('carnaval/js/magnific-popup-options.js') }}

    <!-- Count Down -->
    {{ Html::script('carnaval/js/simplyCountdown.js') }}

    <!-- modal -->
    {{ Html::script('carnaval/js/jquery-modal-video.min.js') }}

     <!-- Parallax  -->
    {{ Html::script('carnaval/js/parallax.min.js') }}

    <!-- Background video -->
    {{ Html::script('carnaval/js/jquery.vide.min.js') }}

    {{ Html::script('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js') }}
    <!-- Main -->
    {{ Html::script('carnaval/js/main.js') }}

    <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    jQuery(document).ready(function($) {
           $("#fakeLoader").fakeLoader({
                timeToHide:3200, //Time in milliseconds for fakeLoader disappear
                zIndex:999, // Default zIndex
                spinner:"spinner1",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
                bgColor:'rgba(0,0,0,0)', //Hex, RGB or RGBA colors
                imagePath:"{{ url('carnaval/images/loading.gif') }}" //If you want can you insert your custom image

        });
    });

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });


    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    var owl = $('.owl-carousel');
        owl.owlCarousel({ loop:true,
        nav:false,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
            owl.owlCarousel();

        $('.customNextBtn').click(function() {

            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })


        $(".js-video-button").modalVideo({
           youtube:{
            controls: 0,
            autoplay: 1,
            nocookie: true,
            playlist: null,
            playsinline: null,

            cc_load_policy: 1,
            color: null,
            disablekb: 0,
            enablejsapi: 0,
            end: null,
            fs: 1,
            h1: null,
            iv_load_policy: 1,
            list: null,
            listType: null,
            loop: 0,
            modestbranding: null,
            origin: null,
            rel: 0,
            showinfo: 1,
            start: 0,
            wmode: 'transparent',
            theme: 'dark'
        }
      });




    </script>


    </body>
</html>

