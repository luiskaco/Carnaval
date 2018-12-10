<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntrevistaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('prensa.entrevista.index');
	}

	public function addFile($file) {
		if ($file->guessExtension() == 'jpeg' || $file->guessExtension() == 'png') {
			$newName = str_random(100); // crea nuevo nombre
			$guessFileExtension = $file->guessExtension();
			$path = $file->move('img', $newName . '.' . $guessFileExtension);
			return $path;
		} else {
			return 0;
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//

		//return view('prensa.fotografias.index');

		if ($request->file('f_secundaria')) {
			$path_principal = $this->addFile($request->file('f_principal'));
			$path_secundaria = $this->addFile($request->file('f_secundaria'));
			$title_entre = $request->input('title_entre');

			return $title_entre;
		} else {
			return view('prensa.entrevista.index');}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

}
