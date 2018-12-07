<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Carnaval Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    {{ Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700') }}


    <!-- Animate.css -->
    {{ Html::style('carnaval/css/animate.css') }}
    <!-- Icomoon Icon Fonts-->
    {{ Html::style('carnaval/css/icomoon.css') }}
    <!-- Bootstrap  -->
    {{ Html::style('carnaval/css/bootstrap.css') }}
    <!-- Magnific Popup -->
    {{ Html::style('carnaval/css/magnific-popup.css') }}
    <!-- Owl Carousel  -->
    {{ Html::style('carnaval/css/owl.carousel.min.css') }}
    {{ Html::style('carnaval/css/owl.theme.default.min.css') }}
    <!-- Flexslider  -->
    {{ Html::style('carnaval/css/flexslider.css') }}
    <!-- Pricing -->
    {{ Html::style('carnaval/css/pricing.css') }}
    {{ Html::style('carnaval/css/hover-min.css') }}
    {{ Html::style('carnaval/css/owl.carousel.min.css') }}
    {{ Html::style('carnaval/css/csshake.min.css') }}
    {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css') }}

    {{ Html::style('carnaval/css/fakeLoader.css') }}

    <!-- Modal -->

    {{ Html::style('carnaval/css/modal-video.min.css') }}


    <!-- Theme style  -->
    {{ Html::style('carnaval/css/style.css') }}


    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .bg-image-1{
            background-image: url(images/bg/st-5.png);

        }

        .bg-image-2{
            background-image: url(images/bg/st-6.png);
            background-repeat: repeat-x;

        }

        .bg-t-color{
            background: rgba(245, 138,77, 1);
        }

          @import "http://fonts.googleapis.com/css?family=Roboto:400,500";
        .box > .icon { text-align: center; position: relative; }
        .box > .icon > .image {
            position: relative;
            top:40px;
            z-index: 2;
            margin: auto;
            width: 98px;
            height: 98px;
             border: 3px solid white;
             line-height: 88px;
             border-radius: 50%;
             background: #63B76C;
             vertical-align: middle;
        }
        .box > .icon:hover > .image { background: #ffae5e; }
        .box > .icon > .image > i { font-size: 36px !important; color: #fff !important; }
        .box > .icon:hover > .image > i { color: white !important; }
        .box > .icon > .info {
                margin-top: -17px;
                background: rgba(255, 255, 255, 1);
                border: 1px solid #e0e0e0; padding: 15px 0 10px 0;
                -webkit-box-shadow: 0px 2px 11px 0px rgba(0,0,0,0.18);
                box-shadow: 0px 2px 11px 0px rgba(0,0,0,0.18);
                border-radius: 8px;

        }
        /*.box > .icon:hover > .info {
            background: rgba(231, 128,25, 0.9);
            border-color: #e0e0e0;
            color: white;
        }*/
        .box > .icon > .info > h3.title { font-family: "Roboto",sans-serif !important; font-size: 24px; color: black; font-weight: 500; }
        .box > .icon > .info > p { font-family: "Roboto",sans-serif !important; font-size: 13px; color: black; line-height: 1.5em; margin: 30px;}
        .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { color: black; }
        .box > .icon > .info > .more a { font-family: "Roboto",sans-serif !important; font-size: 12px; color: black; line-height: 12px; text-transform: uppercase; text-decoration: none; }
        .box > .icon:hover > .info > .more > a { color: black; padding: 6px 8px; background-color: #63B76C; }
                .box .space { height: 30px; }

        .text-white{
            color:white;
        }
        .carousel-control {
              position: absolute;
              top: 0;
              left: 0;
              margin-right:-150px;
              margin-left:-150px;
              bottom: 0;
              width: 15%;
              opacity: 0.5;
              filter: alpha(opacity=50);
              font-size: 20px;
              color: #fff;
              text-align: center;
              text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
              font-size:120px;
        }
        .carousel-control.left {
            /* background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%); */
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
            /* background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%); */
            /* background-repeat: repeat-x; */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        }
        .carousel-control.left {
            /* background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%); */
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
            /* background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%); */
            /* background-repeat: repeat-x; */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        }
        .carousel-control.left {
            /* background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%); */
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
            /* background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%); */
            /* background-repeat: repeat-x; */
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
        }
        .carousel-control:hover, .carousel-control:focus {
              outline: 0;
              color: #fff;
              text-decoration: none;
              opacity: 0.9;
              filter: alpha(opacity=90);
        }


    </style>


    </head>