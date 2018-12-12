<?php

namespace App\Http\Controllers\principal;

use App\Http\Controllers\Controller;
use App\Models\Press\Press;

class CarnavalController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('principal.index');
	}
	public function HistoriaCarnavalSaoPaolo() {
		return view('principal.historia_sao');
	}
	public function SanBodromo() {
		return view('principal.SanBodromo');
	}
	public function fechaRuta() {
		return view('principal.carnavalFecha');
	}
	public function escuelaSamba() {
		return view('principal.escuelaSamba');
	}
	public function logrosReconocimiento() {
		return view('principal.escuelaLogroReconococimiento');
	}
	public function resenaCarnaval() {
		return view('principal.reseñaPeruCarnaval');
	}

	/*PUESTA EN ESCENA*/
	public function puestaEscena() {
		return view('principal.puestaEnEscena');
	}
	/*SUB*/
	public function tramas() {
		return view('principal.puestaMarcha.tramas');
	}

	public function alegorias() {
		return view('principal.puestaMarcha.alegoria');
	}

	public function carros() {
		return view('principal.puestaMarcha.carros');
	}

	public function carnavalesco() {
		return view('principal.puestaMarcha.carnavalesco');
	}

	public function vestuario() {
		return view('principal.puestaMarcha.vestuarios');
	}

	public function musica() {
		return view('principal.puestaMarcha.musica');
	}
	public function coreografo() {
		return view('principal.puestaMarcha.coreografia');
	}

	/*PUESTA EN ESCENA*/

	public function marcaPeru() {
		return view('principal.marcaPeru');
	}
	public function comunicado() {
		$prees = Press::all();
		//return $prees->users_link;
		$template = self::template_noticias(Press::all());
		return view('principal.salaComunicado', ['template_comunicado' => $template]);
	}

	public function contenido($slug) {
		$template = self::template_noticia_principal($slug);
		return view('principal.contenido', ['array' => $template]);

	}

	public function entrevista() {

		return view('principal.salaEntrevista');
	}
	public function fotografia() {
		return view('principal.fotografia');
	}
	public function noticia() {
		$template = self::template_noticias();
		return view('principal.noticia', ['template_comunicado' => $template]);
	}
	public function video() {
		return view('principal.video');
	}
	public function contacto() {
		return view('principal.contacto');
	}

	/*Trait 2 */
	public function template_noticia_principal($slug) {
		$prees = Press::where('slug', $slug)->with('imagenDepotContent_link')->get();

		$change = str_replace("\\", "/", $prees[0]->imagenDepotContent_link->path);
		$url2 = url($change);

		$array = array(
			$prees[0]->title,
			$url2,
		);
		//$template_comunicado = "<img class='blog-img-holder' src='" . $url2 . "' alt='Smiley face' class='img-responsive'>";
		return $array;
	}
	/*Trait*/
	public function template_noticias() {
		$val = Press::where('type_id', 3)->get();

		$contar_columna = 0;
		//return ImagenDepot::all();
		$template_comunicado = "<div class='row row-padded-mb'>";

		foreach ($val as $value) {
			$contar_columna++;

			if ($contar_columna == 3) {
				$template_comunicado .= "<div class='row row-padded-mb'>";
			}

			$change = str_replace("\\", "/", $value->imagenDepotTitle_link->path);
			$url2 = url($change);

			$template_comunicado .= "
				<div class='col-lg-4 col-md-4'>
					<div class='fh5co-blog animate-box'>
					    <img class='blog-img-holder' src='" . $url2 . "' alt='Smiley face' height='500' width='100%'>

						<div class='blog-text'>
							<h3><a href='#'>" . $value->title . "</a></h3>
							<!--<span class='posted_on'>Marzo. 15th</span>-->
							<p>" . $value->description . "</p>
							<a href='" . route('contenido', [$value->slug]) . "'>Leer más...</a>
						</div>
					</div>
				</div>";
			if ($contar_columna == 3) {
				$template_comunicado .= "</div>";
				$contar_columna = 0;
			}

		}
		$template_comunicado .= "</div>";

		return $template_comunicado;
	}

}
