<?php

namespace App\Models\Imagen;

use Illuminate\Database\Eloquent\Model;

class ImagenDepot extends Model {
	protected $table = 'imagen_depots';

	protected $fillable = [
		'path', 'slug', 'type_id', 'status',
	];

}
