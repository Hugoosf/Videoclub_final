<?php

namespace App\Http\Controllers;

use App\Models\Pelis;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
   
	/*
	2- Método show
	3- Método edit
	 */

    public function getIndex()
    {
        return view('catalog.index', array('arrayPeliculas'=>$this->arrayPeliculas));
    }

    public function getShow($id)
    {
        // Obtener todos los registros de la tabla 'pelis'
        $peliculas = Pelis::all();  // Esto traerá todas las películas de la tabla 'pelis'

        // Pasar los datos a la vista
        return view('catalog.show', [
            'id' => $id,
            'arrayPeliculas' => $peliculas
        ]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        return view('catalog.edit', array('id'=>$id));
    }
}
?>
