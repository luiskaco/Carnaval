<nav class="fh5co-nav " role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 ">
                        <div id="fh5co-logo"><a href="{{ url('/') }}"><img src="{{url('carnaval/images/logo/logo.png')}}" width="100px" height="56px" style="position: relative; top:4px; z-index: 600"></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1 ">
                        <ul>
                            <li class="{{active_class(if_uri_pattern(['/'],'active','other'))}}"><a href="{{ url('/') }}">Inicio</a></li>
                            <li class="has-dropdown {{active_class(if_uri_pattern(['carnaval/historiaCarnavalSaoPaolo','carnaval/sanBodromo'],'active','other'))}}"><a href="{{ url('/') }}">
                                <a href="#">Carnaval de São Paulo</a>
                                <ul class="dropdown">
                                     <li><a href="{{ route('carnaval.historiaSaoPaolo') }}">Historia </a></li>
                                     <li><a href="{{ route('carnaval.SanBodromo') }}">El Sambódromo</a></li>
                                </ul>
                            </li>

                             <li class="{{active_class(if_uri_pattern(['carnaval/fechaRuta'],'active','other'))}}"><a href="{{ route('carnaval.fechaRuta') }}">Fechas y Rutas</a></li>

                            <li class="has-dropdown {{active_class(if_uri_pattern(['escuela/historiaEscuelaDeSamba','escuela/escuelaDeSambaLogrosReconocimiento'],'active','other'))}}"><a href="{{ url('/') }}">
                                <a href="#">Escuela Unidos de Vila Maria </a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('escuela.historiaSamba') }}">Historia </a></li>
                                    <li><a href="{{ route('escuela.LogrosReconocimiento') }}">Logros y Reconocimientos</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown {{active_class(if_uri_pattern(['peru/reseñaPeruEnElCarnaval','peru/puestaEnEscena'],'active','other'))}}"><a href="{{ url('/') }}">
                                <a href="#">Perú en el Carnaval</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('peru.resenaCarnaval') }}">Reseña</a></li>
                                    <li><a href="{{ route('peru.puestaEscena') }}">Puesta en Escena </a>
                                </ul>
                            </li>
                            <li class="has-dropdown {{active_class(if_uri_pattern(['salaDePrensa/comunicado','salaDePrensa/entrevista','salaDePrensa/fotografia','salaDePrensa/noticia','salaDePrensa/video'],'active','other'))}}">
                                <a href="#">Prensa</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('salaPrensa.comunicado') }}">Comunicados</a></li>
                                    <li><a href="{{ route('salaPrensa.entrevista') }}">Entrevista</a></li>
                                    <li><a href="{{ route('salaPrensa.fotografia') }}">Fotograf&iacute;as</a></li>
                                    <li><a href="{{ route('salaPrensa.noticia') }}">Noticias</a></li>
                                    <li><a href="{{ route('salaPrensa.video') }}">Videos</a></li>
                                </ul>
                            </li>

                            <li class="{{active_class(if_uri_pattern(['contacto'],'active','other'))}}"><a href="{{ route('contacto') }}">Contacto</a></li>
                              <li class="visible-md-*" style="padding-left: 20px;">
                                  <img src="{{url('carnaval/images/logo/logo_peru.png')}}" width="70px" height="36px" style="position: relative; top:4px; z-index: 600">
                              </li>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>