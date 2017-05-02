<?php

class InicioControlador extends BaseController {

	public function index()
	{
		return View::make('inicio');
	}

	public function listaAutos() {
		$marca = Input::get('marca') * 1;
		$sql = "SELECT plan AS modelo, cuota1 AS precio
                  FROM articulo
                 WHERE marca_id = $marca
              ORDER BY 2
              ";
        $datos = DB::select($sql);
		return $datos;
	}

	public function buscar() {
		//$texto = DB::connection()->getPdo()->quote('+ '.Input::get('buscar').'*');

		$texto = Input::get('buscar');

		$rlike = str_replace(' ','|', $texto);
	    $rlike = preg_replace('/\+|\?|\.|\^|-|\*/',' ',$rlike);

	    $rlike = preg_replace('/s|c|z/','[scz]+', $rlike);
	    $rlike = preg_replace('/v|b/',  '[vb]',   $rlike);
	    $rlike = preg_replace('/h/',    '.',      $rlike);
	    $rlike = preg_replace('/ll/',   'l',      $rlike);
	    $rlike = preg_replace('/l/',    'l+',     $rlike);
	    $rlike = preg_replace('/t/',    't+',     $rlike);

		$sql = "
			SELECT articulo.plan AS modelo, articulo.cuota1 AS precio, marca.nombre AS marca
			 FROM articulo
			 JOIN marca ON (marca.id = articulo.marca_id)
			WHERE plan RLIKE :value
		";
			//WHERE MATCH (plan) AGAINST ( :value IN BOOLEAN MODE)

		$datos = DB::select($sql,array('value' => $rlike));
		if ($datos) {
			return $datos;
		} else {
			return 'ko';
		}
	}

	public function verplan() {
		$nombre = Input::get('nombre');
		$pass   = Input::get('clave');

		if ($nombre == '13994959' && $pass == '13994959') {
			return View::make('informe.irigoitia-ramon');
		}

		if ($nombre == '26994257' && $pass == '26994257') {
			return View::make('informe.zachozy-jorge');
		}
		return 'no';
		
	}

	public function descargarRecibo () {
		header('Content-type: application/pdf');
		header('Content-Disposition: attachment; filename="irigoitia_mayo-2017.pdf"');
		readfile('../app/vistas/recibos/irigoitia_mayo-2017.pdf');
	}

	public function descargarReciboZ () {
		header('Content-type: application/pdf');
		header('Content-Disposition: attachment; filename="zachozy_mayo-2017.pdf"');
		readfile('../app/vistas/recibos/zachozy_mayo-2017.pdf');
	}

}
