<?php
//--- SI URL NO EXISTE IR AL RAIZ
App::missing(function($exception)
  {return Redirect::to('/');
});

//--- PRUEBA
Route::get('test', function() { 
   return 'test';
});


App::error(function(Exception $exception, $code)
{
      if(Request::ajax() && $code<>500) {
        return Response::make('Su sesión expiró....');
      }
      if ($code==404){
        return Redirect::to('/')->withFlashMessage('Inicie sesión.');
      }
      if ($code==405){
        return 'Su sesión expiró.';
      }
      
    if ( ! Config::get('app.debug')) {
        // Retorna una vista o lo que creas conveniente
      //Log::useFiles(storage_path().'/logs/errores_produccion.log');
      $ip = Request::getClientIp();
      try {
      $nro_persona = Auth::user()->nro_persona;
      } catch (Exception $e) {
      $nro_persona = 'no disponible';
      }
    Log::error("[código:$code][ip:$ip][persona:$nro_persona]\n".$exception->getMessage());

        return 'Servicio no disponible. Intente más tarde.';
    }
});

//--- Ruta por defecto
Route::resource('/', 'inicioControlador');

Route::post('listaAutos', 'inicioControlador@listaAutos');

//--- Login
Route::post('entrar', 'loginControlador@acceso');

Route::get('salir', 'loginControlador@salir');

Route::post('buscar', 'inicioControlador@buscar');

Route::post('verplan', 'inicioControlador@verplan');

Route::post('imagenes', function(){
 //$url     = 'https://www.google.com/search?site=&tbm=isch&q=nude+teen';
  $buscar = str_replace(' ', '+', Input::get('buscar'));
  $url    = "http://www.bing.com/images/search?q=".$buscar."&FORM=HDRSC2&adlt=off&count=16";
  $web    = file_get_contents($url);
  return $web;
});

Route::get('verlog/{archivo}', function($archivo) { 
  return View::make('general.verlog')->with('archivo',$archivo);
});
