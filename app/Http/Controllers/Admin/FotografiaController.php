<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FotografiaController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('prensa.fotografias.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//

		$file = $request->file('file');

		$slug = str_random(180);
		$id = \DB::table('imagen_depots')->where('slug', $slug)->get();

		$name = $file->getClientOriginalName();
		$path = $file->move('img', $name);

		if (!$id) {
			return 0;
		} else {

			$insertid = \DB::table('imagen_depots')->insertGetId(
				['path' => $path, 'type_id' => 12, 'status' => 12, 'slug' => $slug]);

			return $insertid;
		}
		/*
			        $insertid = DB::table('imagen_depots')->insert(
						['path' => $path, 'type_id' => 0, 'status' => 0]
		*/

		//return $file->getClientOriginalName();

		//return $slug;

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

	public function addUser(Request $request) {

		$path = $request->input('path2');
		$type_id = $request->input('type_id');
		$status = $request->input('status');

		$data = array('path' => $path, "type_id" => $type_id, "status" => $status, 'slug' => "jkkj");

		// Call insertData() method of Page Model
		$value = ImagenDepot::insertData($data);
		if ($value) {
			echo $value;
		} else {
			echo 0;
		}

		exit;
	}

	public function saveFile(Request $request) {

	}
}
