<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request) {
	//
});


App::after(function($request, $response) {
	//
});


Route::filter('auth', function() {
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function() {
	return Auth::basic();
});

Route::filter('guest', function() {
	if (Auth::guest()) {
		if(Request::ajax()) {
			return 'Su sesión expiró.';
		} else {
			return Redirect::guest('/')->withFlashMessage('Requiere inicio de sesión');
		}
	}
});

Route::filter('csrf', function() {
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

//--- Acceso a las rutas de admin... si falla, redirecciona al inicio
Route::filter('soyadmin', function() {

    if ( Auth::user()->usr_codigo_grupo == 0 && Auth::user()->usr_habilitado == 1 ) {

    } else {
    	return Redirect::to('/')->withFlashMessage('Acceso denegado');
    }
});

//--- Acceso a las rutas de usuario... si falla, redirecciona al inicio
Route::filter('soyusuario', function() {

    if( Auth::user()->usr_habilitado == 1 ) {
    } else {
    	Auth::logout();
    	return Redirect::to('/')->withFlashMessage('Acceso denegado');}
});

