@extends('layouts.principalWeb')

@section('banner')
<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{ url('carnaval/images/bg/bg-22.png') }});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Logros y Reconocimientos</h1>

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
<div id="fh5co-contact" style="background-image: url({{ url('carnaval/images/bg/st-2.png') }});">
		<div class="container ">

			<style type="text/css">
				a{text-decoration:none}
				h4{text-align:center;margin:30px 0;color:#444}
				.main-timeline{position:relative}
				.main-timeline:before{content:"";width:5px;height:100%;border-radius:20px;margin:0 auto;background:#242922;position:absolute;top:0;left:0;right:0}
				.main-timeline .timeline{display:inline-block;margin-bottom:50px;position:relative}
				.main-timeline .timeline:before{content:"";width:20px;height:20px;border-radius:50%;border:4px solid #fff;background:#ec496e;position:absolute;top:50%;left:50%;z-index:1;transform:translate(-50%,-50%)}
				.main-timeline .timeline-icon{display:inline-block;width:130px;height:130px;border-radius:50%;border:3px solid #ec496e;padding:13px;text-align:center;position:absolute;top:50%;left:30%;transform:translateY(-50%)}
				.main-timeline .timeline-icon i{display:block;border-radius:50%;background:#ec496e;font-size:64px;color:#fff;line-height:100px;z-index:1;position:relative}
				.main-timeline .timeline-icon:after,.main-timeline .timeline-icon:before{content:"";width:100px;height:4px;background:#ec496e;position:absolute;top:50%;right:-100px;transform:translateY(-50%)}
				.main-timeline .timeline-icon:after{width:70px;height:50px;background:#fff;top:89px;right:-30px}
				.main-timeline .timeline-content{width:50%;padding:0 50px;margin:52px 0 0;float:right;position:relative}
				.main-timeline .timeline-content:before{content:"";width:70%;height:100%;border:3px solid #ec496e;border-top:none;border-right:none;position:absolute;bottom:-13px;left:35px}
				.main-timeline .timeline-content:after{content:"";width:37px;height:3px;background:#ec496e;position:absolute;top:13px;left:0}
				.main-timeline .title{font-size:20px;font-weight:600;color:#ec496e;text-transform:uppercase;margin:0 0 5px}
				.main-timeline .description{display:inline-block;font-size:16px;color:#404040;line-height:20px;letter-spacing:1px;margin:0}
				.main-timeline .timeline:nth-child(even) .timeline-icon{left:auto;right:30%}
				.main-timeline .timeline:nth-child(even) .timeline-icon:before{right:auto;left:-100px}
				.main-timeline .timeline:nth-child(even) .timeline-icon:after{right:auto;left:-30px}
				.main-timeline .timeline:nth-child(even) .timeline-content{float:left}
				.main-timeline .timeline:nth-child(even) .timeline-content:before{left:auto;right:35px;transform:rotateY(180deg)}
				.main-timeline .timeline:nth-child(even) .timeline-content:after{left:auto;right:0}
				.main-timeline .timeline:nth-child(2n) .timeline-content:after,.main-timeline .timeline:nth-child(2n) .timeline-icon i,.main-timeline .timeline:nth-child(2n) .timeline-icon:before,.main-timeline .timeline:nth-child(2n):before{background:#f9850f}
				.main-timeline .timeline:nth-child(2n) .timeline-icon{border-color:#f9850f}
				.main-timeline .timeline:nth-child(2n) .title{color:#f9850f}
				.main-timeline .timeline:nth-child(2n) .timeline-content:before{border-left-color:#f9850f;border-bottom-color:#f9850f}
				.main-timeline .timeline:nth-child(3n) .timeline-content:after,.main-timeline .timeline:nth-child(3n) .timeline-icon i,.main-timeline .timeline:nth-child(3n) .timeline-icon:before,.main-timeline .timeline:nth-child(3n):before{background:#8fb800}
				.main-timeline .timeline:nth-child(3n) .timeline-icon{border-color:#8fb800}
				.main-timeline .timeline:nth-child(3n) .title{color:#8fb800}
				.main-timeline .timeline:nth-child(3n) .timeline-content:before{border-left-color:#8fb800;border-bottom-color:#8fb800}
				.main-timeline .timeline:nth-child(4n) .timeline-content:after,.main-timeline .timeline:nth-child(4n) .timeline-icon i,.main-timeline .timeline:nth-child(4n) .timeline-icon:before,.main-timeline .timeline:nth-child(4n):before{background:#2fcea5}
				.main-timeline .timeline:nth-child(4n) .timeline-icon{border-color:#2fcea5}
				.main-timeline .timeline:nth-child(4n) .title{color:#2fcea5}
				.main-timeline .timeline:nth-child(4n) .timeline-content:before{border-left-color:#2fcea5;border-bottom-color:#2fcea5}
				@media only screen and (max-width:1200px){.main-timeline .timeline-icon:before{width:50px;right:-50px}
				.main-timeline .timeline:nth-child(even) .timeline-icon:before{right:auto;left:-50px}
				.main-timeline .timeline-content{margin-top:75px}
				}
				@media only screen and (max-width:990px){.main-timeline .timeline{margin:0 0 10px}
				.main-timeline .timeline-icon{left:25%}
				.main-timeline .timeline:nth-child(even) .timeline-icon{right:25%}
				.main-timeline .timeline-content{margin-top:115px}
				}
				@media only screen and (max-width:767px){.main-timeline{padding-top:50px}
				.main-timeline:before{left:80px;right:0;margin:0}
				.main-timeline .timeline{margin-bottom:70px}
				.main-timeline .timeline:before{top:0;left:83px;right:0;margin:0}
				.main-timeline .timeline-icon{width:60px;height:60px;line-height:40px;padding:5px;top:0;left:0}
				.main-timeline .timeline:nth-child(even) .timeline-icon{left:0;right:auto}
				.main-timeline .timeline-icon:before,.main-timeline .timeline:nth-child(even) .timeline-icon:before{width:25px;left:auto;right:-25px}
				.main-timeline .timeline-icon:after,.main-timeline .timeline:nth-child(even) .timeline-icon:after{width:25px;height:30px;top:44px;left:auto;right:-5px}
				.main-timeline .timeline-icon i{font-size:30px;line-height:45px}
				.main-timeline .timeline-content,.main-timeline .timeline:nth-child(even) .timeline-content{width:100%;margin-top:-15px;padding-left:130px;padding-right:5px}
				.main-timeline .timeline:nth-child(even) .timeline-content{float:right}
				.main-timeline .timeline-content:before,.main-timeline .timeline:nth-child(even) .timeline-content:before{width:50%;left:120px}
				.main-timeline .timeline:nth-child(even) .timeline-content:before{right:auto;transform:rotateY(0)}
				.main-timeline .timeline-content:after,.main-timeline .timeline:nth-child(even) .timeline-content:after{left:85px}
				}
				@media only screen and (max-width:479px){.main-timeline .timeline-content,.main-timeline .timeline:nth-child(2n) .timeline-content{padding-left:110px}
				.main-timeline .timeline-content:before,.main-timeline .timeline:nth-child(2n) .timeline-content:before{left:99px}
				.main-timeline .timeline-content:after,.main-timeline .timeline:nth-child(2n) .timeline-content:after{left:65px}
				}

				/******************* Timeline Demo - 2 *****************/
				.main-timeline2{padding-top:50px;overflow:hidden;position:relative}
				.main-timeline2:before{content:"";width:7px;height:100%;background:#084772;margin:0 auto;position:absolute;top:80px;left:0;right:0}
				.main-timeline2 .timeline{width:50%;float:left;padding:20px 60px;border-top:7px solid #084772;border-right:7px solid #084772;border-radius:0 30px 0 0;position:relative;right:-3.5px}
				.main-timeline2 .icon{display:block;width:50px;height:50px;line-height:50px;border-radius:50%;background:#e84c47;border:1px solid #fff;text-align:center;font-size:25px;color:#fff;box-shadow:0 0 0 2px #e84c47;position:absolute;top:-30px;left:0}
				.main-timeline2 .timeline-content{display:block;padding:30px 10px 10px;border-radius:20px;background:#e84c47;color:#fff;position:relative}
				.main-timeline2 .timeline-content:hover{text-decoration:none;color:#fff}
				.main-timeline2 .timeline-content:after,.main-timeline2 .timeline-content:before{content:"";display:block;width:10px;height:50px;border-radius:10px;background:#e84c47;border:1px solid #fff;position:absolute;top:-35px;left:50px}
				.main-timeline2 .timeline-content:after{left:auto;right:50px}
				.main-timeline2 .title{font-size:24px;margin:0}
				.main-timeline2 .description{font-size:15px;letter-spacing:1px;margin:0 0 5px}
				.main-timeline2 .timeline:nth-child(2n){border-right:none;border-left:7px solid #084772;border-radius:30px 0 0;right:auto;left:-3.5px}
				.main-timeline2 .timeline:nth-child(2n) .icon{left:auto;right:0;box-shadow:0 0 0 2px #4bd9bf}
				.main-timeline2 .timeline:nth-child(2){margin-top:130px}
				.main-timeline2 .timeline:nth-child(odd){margin:-130px 0 30px}
				.main-timeline2 .timeline:nth-child(even){margin-bottom:80px}
				.main-timeline2 .timeline:first-child,.main-timeline2 .timeline:last-child:nth-child(even){margin:0 0 30px}
				.main-timeline2 .timeline:nth-child(2n) .icon,.main-timeline2 .timeline:nth-child(2n) .timeline-content,.main-timeline2 .timeline:nth-child(2n) .timeline-content:after,.main-timeline2 .timeline:nth-child(2n) .timeline-content:before{background:#4bd9bf}
				.main-timeline2 .timeline:nth-child(3n) .icon,.main-timeline2 .timeline:nth-child(3n) .timeline-content,.main-timeline2 .timeline:nth-child(3n) .timeline-content:after,.main-timeline2 .timeline:nth-child(3n) .timeline-content:before{background:#ff9e09}
				.main-timeline2 .timeline:nth-child(3n) .icon{box-shadow:0 0 0 2px #ff9e09}
				.main-timeline2 .timeline:nth-child(4n) .icon,.main-timeline2 .timeline:nth-child(4n) .timeline-content,.main-timeline2 .timeline:nth-child(4n) .timeline-content:after,.main-timeline2 .timeline:nth-child(4n) .timeline-content:before{background:#3ebae7}
				.main-timeline2 .timeline:nth-child(4n) .icon{box-shadow:0 0 0 2px #3ebae7}
				@media only screen and (max-width:767px){.main-timeline2:before{left:0;right:auto}
				.main-timeline2 .timeline,.main-timeline2 .timeline:nth-child(even),.main-timeline2 .timeline:nth-child(odd){width:100%;float:none;padding:20px 30px;margin:0 0 30px;border-right:none;border-left:7px solid #084772;border-radius:30px 0 0;right:auto;left:0}
				.main-timeline2 .icon{left:auto;right:0}
				}
				@media only screen and (max-width:480px){.main-timeline2 .title{font-size:18px}
				}


				/******************* Timeline Demo - 8 *****************/
				.main-timeline8{overflow:hidden;position:relative}
				.main-timeline8:after,.main-timeline8:before{content:"";display:block;width:100%;clear:both}
				.main-timeline8:before{content:"";width:3px;height:100%;background:#d6d5d5;position:absolute;top:30px;left:50%}
				.main-timeline8 .timeline{width:50%;float:left;padding-right:30px;position:relative}
				.main-timeline8 .timeline-icon{width:32px;height:32px;border-radius:50%;background:#fff;border:3px solid #fe6847;position:absolute;top:5.5%;right:-17.5px}
				.main-timeline8 .year{display:block;padding:10px;margin:0;font-size:30px;color:#fff;border-radius:0 50px 50px 0;background:#fe6847;text-align:center;position:relative}
				.main-timeline8 .year:before{content:"";border-top:35px solid #f59c8b;border-left:35px solid transparent;position:absolute;bottom:-35px;left:0}
				.main-timeline8 .timeline-content{padding:30px 20px;margin:0 45px 0 35px;background:#f2f2f2}
				.main-timeline8 .title{font-size:19px;font-weight:700;color:#504f54;margin:0 0 10px}
				.main-timeline8 .description{font-size:14px;color:#7d7b7b;margin:0}
				.main-timeline8 .timeline:nth-child(2n){padding:0 0 0 30px}
				.main-timeline8 .timeline:nth-child(2n) .timeline-icon{right:auto;left:-14.5px}
				.main-timeline8 .timeline:nth-child(2n) .year{border-radius:50px 0 0 50px;background:#7eda99}
				.main-timeline8 .timeline:nth-child(2n) .year:before{border-left:none;border-right:35px solid transparent;left:auto;right:0}
				.main-timeline8 .timeline:nth-child(2n) .timeline-content{text-align:right;margin:0 35px 0 45px}
				.main-timeline8 .timeline:nth-child(2){margin-top:170px}
				.main-timeline8 .timeline:nth-child(odd){margin:-175px 0 0}
				.main-timeline8 .timeline:nth-child(even){margin-bottom:80px}
				.main-timeline8 .timeline:first-child,.main-timeline8 .timeline:last-child:nth-child(even){margin:0}
				.main-timeline8 .timeline:nth-child(2n) .timeline-icon{border-color:#7eda99}
				.main-timeline8 .timeline:nth-child(2n) .year:before{border-top-color:#92efad}
				.main-timeline8 .timeline:nth-child(3n) .timeline-icon{border-color:#8a5ec1}
				.main-timeline8 .timeline:nth-child(3n) .year{background:#8a5ec1}
				.main-timeline8 .timeline:nth-child(3n) .year:before{border-top-color:#a381cf}
				.main-timeline8 .timeline:nth-child(4n) .timeline-icon{border-color:#f98d9c}
				.main-timeline8 .timeline:nth-child(4n) .year{background:#f98d9c}
				.main-timeline8 .timeline:nth-child(4n) .year:before{border-top-color:#f2aab3}
				@media only screen and (max-width:767px){.main-timeline8{overflow:visible}
				.main-timeline8:before{top:0;left:0}
				.main-timeline8 .timeline:nth-child(2),.main-timeline8 .timeline:nth-child(even),.main-timeline8 .timeline:nth-child(odd){margin:0}
				.main-timeline8 .timeline{width:100%;float:none;padding:0 0 0 30px;margin-bottom:20px!important}
				.main-timeline8 .timeline:last-child{margin:0!important}
				.main-timeline8 .timeline-icon{right:auto;left:-14.5px}
				.main-timeline8 .year{border-radius:50px 0 0 50px}
				.main-timeline8 .year:before{border-left:none;border-right:35px solid transparent;left:auto;right:0}
				.main-timeline8 .timeline-content{margin:0 35px 0 45px}
				}


			</style>
			<div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <p>A lo largo de 60 años, la escuela Unidos de Vila Maria ha sido merecedora de diversos logros y reconocimientos cautivando a millones de personas en el mundo. Desde su creación, ha puesto en escena tramas de diversas temáticas entre los que destacan los siguientes: </p>
                </div>
            </div>

              <div class="row animate-box">
                <div class="col-md-12">
                    <div class="main-timeline8">
                        <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2019</span>
                            <div class="timeline-content">
                                <p class="description">
                                    La escuela homenajeará al Perú con el tema "En las alas del gran pájaro, el vuelo de Vila María al Imperio del Sol". Para el desarrollo de la historia la escuela trajo de vuelta al carnavalesco Alexandre Louzada y a Cristiano Bara.
                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2018</span>
                            <div class="timeline-content">
                                <p class="description">
                                    Representó la cultura mexicana, con personajes mayas y aztecas, el arte de Frida Kahlo, rindió un homenaje a Roberto Bolaños y personajes como el Chavo y el Chapulin Colorado.
                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2017</span>
                            <div class="timeline-content">
                                <p class="description" >
                                    La escuela desfiló con el tema del tercer centenario de la estatua de la aparición de la Virgen en el río Paraíba. Con el respaldo de la iglesia, la escuela se comprometió a cumplir con requisitos como: no permitir la desnudez, no hablar del sincretismo religioso y permitir la supervisión de la Arquidiócesis de San Pablo durante todo el proceso. El tema fue muy bien recibido por la comunidad y la gran mayoría de los devotos obteniendo el 7º lugar en la clasificación general.

                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box " style="margin-top: 50px;">
                            <span class="timeline-icon"></span>
                            <span class="year">2016</span>
                            <div class="timeline-content">
                                <p class="description">
                                    Se honró la isla de Ilhabela con el tema: "El pueblo famoso es más Bela, Ilhabela fantasía". Hizo un desfile sofisticado, técnico e impecable garantizando un 5º Lugar.
                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box ">
                            <span class="timeline-icon"></span>
                            <span class="year">2015</span>
                            <div class="timeline-content">

                                <p class="description">
                                    Se desarrolló la trama "¡Sólo los diamantes son eternos en la química divina!" del carnavalesco Lucas Pinto. La escuela terminó en el 10 ° lugar, permaneciendo en la elite del carnaval paulista.
                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2014</span>
                            <div class="timeline-content">
                                <p class="description">
                                    Vila María mostró la historia de los juguetes "En mis 60 años de alegría - Soy Vila Maria, y hago la fiesta rescatando del pasado juguetes del tiempo de niño.” Fue la campeona del grupo de acceso, obteniendo la puntuación máxima de 270 puntos, volviendo así al grupo especial del carnaval en 2015.
                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2013</span>
                            <div class="timeline-content">
                                <p class="description">
                                   La trama giró en torno al 50 aniversario de la inmigración coreana en Brasil. El desfile fue muy lujoso y la escuela fue cotizada como una de las favoritas.
                                </p>
                            </div>
                        </div>
                        <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2012</span>
                            <div class="timeline-content">
                                <p class="description">
                                   La escuela desfiló 'La Fuerza Infinita de la Creación - Vila Maria Feada a Mano', logrando el quinto lugar, a cargo del carnavalesco experimentado Chico Spinosa.
                                </p>
                            </div>
                        </div>
                         <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2011</span>
                            <div class="timeline-content">
                                <p class="description">
                                  La escuela presentó la trama "La industria que manipula el hierro, es la madre de todas las demás”, de autoría del carnavalesco Fábio Borges. Sus grandes proporciones alcanzó el límite máximo de altura del Sambódromo del Anhembi.


                                </p>
                            </div>
                        </div>
                         <div class="timeline animate-box">
                            <span class="timeline-icon"></span>
                            <span class="year">2010</span>
                            <div class="timeline-content">
                                <p class="description">
                                  "Teatro Amazonas - Manaus en el escenario", escrita por Fabio Borges, logró el tercer lugar detrás de la sorprendente Tucuruvi y de la campeona Vai-Vai.
                                </p>
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        <hr>


		</div>

	</div>

	@endsection
