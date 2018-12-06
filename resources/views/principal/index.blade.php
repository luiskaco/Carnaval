@extends('layouts.principalWeb')


@section('banner')
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
            <li style="background-image: url({{url('carnaval/images/bg/bg-20.png')}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">

                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li style="background-image: url({{url('carnaval/images/bg/bg-22.png')}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{url('carnaval/images/bg/VilaMaria05.png')}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{url('carnaval/images/bg/VilaMaria13.png')}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">

                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{url('carnaval/images/bg/VilaMaria15.png')}});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">

                            </div>
                        </div>
                    </div>
                </div>
            </li>


            </ul>
        </div>
    </aside>
@endsection



@section('seccion_a')


<div id="fh5co-course-categories" style="background-image: url({{url('carnaval/images/bg/st-3.png')}});">



        <div class="container">
            <div class="row animate-box">

                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading ">
                    <h2><img src="{{url('carnaval/images/text/peruenelcarnaval.png')}}" class="img-responsive shake-slow"   ></h2>
                </div>

            </div>
            <div class="row animate-box">
                <div class="col-md-6 col-sm-6">
                    <span   class="btn js-video-button " data-video-id='ql01LRI4fxA'>
                          <img class="img-responsive hvr-buzz-out" src="{{ url('carnaval/images/video/youtube.png') }}">
                     </span>

                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="service-block">
                        <div class="media-body bounce-out fade-up text-justify text-white">
                            <p> Seducida por su arte, danzas, trajes típicos, fiestas locales y religiosas, la Escuela de Samba Unidos de Vila María eligió representar al Perú en el Carnaval São Paulo 2019.<p>
                            <p>
                               Se trata de la primera vez que el Perú estará ante los ojos del mundo y tendrá presencia en la fiesta más famosa del planeta.
                            </p>
                            <p>
                              Lo más memorable de la identidad, cultura y tradición del Perú se presentará en el Carnaval de São Paulo, y cautivará a millones de personas. Más de 800 millones de personas en más de 140 países de los cinco continentes quedarán rendidos ante la majestuosidad de la cultura peruana.
                            </p>
                        </div>


                    </div>
                </div><!--/.col-md-4-->
            </div>
    </div>
</div>




    @endsection
    @section('seccion_b')
    <div id="fh5co-course" style="background-image: url({{url('carnaval/images/bg/st-4.png')}})">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2><img src="{{url('carnaval/images/text/txn-2.png')}}" class="img-responsive shake-slow"   ></h2>
                </div>
            </div>
            <div class="row">
                <a href="{{ route('peru.puestaEscena.tramas') }}">
                <div class="col-md-4 animate-box text-center">
                    <div class="staff">
                       <h2> <img src="{{url('carnaval/images/text/trama.png')}}" class="img-responsive shake-slow"  width="140px" height="120px" ></h2>
                        <div class="staff-img" style="background-image: url({{ url('carnaval/images/pag/puesta/1-P.png') }})">
                            <ul class="fh5co-social">
                                <li><i class="fa fa-link"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </a>

                <a href="{{ route('peru.puestaEscena.vestuario') }}">
                <div class="col-md-4 animate-box text-center ">
                    <div class="staff">
                         <h2><img src="{{url('carnaval/images/text/vestuario.png')}}" class="img-responsive shake-slow"  width="140px" height="100px" ></h2>
                        <div class="staff-img" style="background-image: url({{ url('carnaval/images/pag/puesta/3-P.png') }})">
                            <ul class="fh5co-social">
                                <li><i class="fa fa-link"></i></li>

                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                <a href="{{ route('peru.puestaEscena.carnavalesco') }}">
                <div class="col-md-4 animate-box text-center">
                    <div class="staff">
                        <h2><img src="{{url('carnaval/images/text/carnavalescos.png')}}" class="img-responsive shake-slow"  width="145px" height="105px" ></h2>
                        <div class="staff-img" style="background-image: url({{ url('carnaval/images/pag/puesta/2-P.png') }})">
                            <ul class="fh5co-social">
                                <li><i class="fa fa-link"></i></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <div class="row">
                <a href="{{ route('peru.puestaEscena.carros') }}">
                 <div class=" col-md-4 animate-box text-center">
                    <div class="staff">
                        <h2><img src="{{url('carnaval/images/text/carros-alegóricos.png')}}" class="img-responsive shake-slow"  width="200px" height="140px" ></h2>
                        <div class="staff-img" style="background-image: url({{ url('carnaval/images/pag/puesta/5-P.png') }})">
                            <ul class="fh5co-social">
                                <li><i class="fa fa-link"></i></li>

                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                <a href="{{ route('peru.puestaEscena.musica') }}">
                 <div class="col-md-4 animate-box text-center">
                    <div class="staff">
                         <h2><img src="{{url('carnaval/images/text/musica_2.png')}}" class="img-responsive shake-slow"  width="140px" height="100px" ></h2>
                        <div class="staff-img" style="background-image: url({{ url('carnaval/images/pag/puesta/6-P.png') }})">
                            <ul class="fh5co-social">
                                <li><i class="fa fa-link"></i></li>

                            </ul>
                        </div>
                    </div>
                </div>
                </a>
                <a href="{{ route('peru.puestaEscena.coreografo') }}">
                  <div class="col-md-4 animate-box text-center">
                    <div class="staff">
                         <h2><img src="{{url('carnaval/images/text/coreógrafo.png')}}" class="img-responsive shake-slow"  width="140px" height="100px" ></h2>
                        <div class="staff-img" style="background-image: url({{ url('carnaval/images/pag/puesta/p-7.jpg') }})">
                            <ul class="fh5co-social">
                                <li><i class="fa fa-link"></i></li>

                            </ul>
                        </div>
                    </div>
                </div>
                </a>

            </div>


            </div>
        </div>
    </div>

    @endsection

    @section('seccion_c')


     <div id="fh5co-register"  class="parallax-window" data-parallax="scroll" data-image-src="{{url('carnaval/images/bg/carnavalescos.png')}}">
        <div class="overlay"></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 animate-box">
                <div class="date-counter text-center">

                 <!--<h2><img src="{{url('carnaval/images/text/galeria.png')}}" class="img-responsive shake-slow"  ></h2>-->
                 <br>
                   <br>
                   <br>
                   <br>
                   <br>

                </div>
            </div>
        </div>
    </div>


<!--

    <div id="fh5co-blog" style="background-image: url({{url('carnaval/images/bg/st-5.png')}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2><img src="{{url('carnaval/images/text/galeria.png')}}" class="img-responsive shake-slow"  ></h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    <div class="row animate-box">

                                 <div class="owl-carousel owl-carousel-fullwidt animate-box">
                                   <div class="item  ">

                                            <a href="{{url('carnaval/images/carousel/1.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/1.png')}}" >
                                            </a>


                                    </div>
                                  <div class="item ">

                                            <a href="{{url('carnaval/images/carousel/2.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/2.png')}}" alt="" width="">
                                            </a>


                                    </div>
                                  <div class="item ">

                                            <a href="{{url('carnaval/images/carousel/3.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/3.png')}}" alt="" width="">
                                            </a>

                                                                         </div>
                                  <div class="item ">
                                            <a href="{{url('carnaval/images/carousel/4.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/4.png')}}" alt="" width="">
                                            </a>
                                    </div>
                                 <div class="item ">
                                            <a href="{{url('carnaval/images/carousel/5.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/5.png')}}" alt="" width="">
                                            </a>
                                    </div>
                                  <div class="item ">
                                            <a href="{{url('carnaval/images/carousel/6.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/6.png')}}" alt="" width="">
                                            </a>
                                    </div>
                                    <div class="item ">
                                            <a href="{{url('carnaval/images/carousel/1.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive img-thumbnail bounce-in" src="{{url('carnaval/images/carousel/1.png')}}" alt="" width="">
                                            </a>
                                    </div>
                                    <div class="item ">
                                            <a href="{{url('carnaval/images/carousel/8.png')}}" data-toggle="lightbox" data-gallery="example-gallery">
                                                 <img class="img-responsive bounce-in" src="{{url('carnaval/images/carousel/8.png')}}" alt="" width="">
                                            </a>
                                    </div>


                                </div>

                        </div>

                          <a class="right carousel-control customNextBtn animate-box"  >›</a>

                           <a class="left carousel-control customPrevBtn animate-box"  >‹</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->





    @endsection




