<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Financiaminto de vehículos y máquinas agrícolas">
    <meta name="keywords" content="rosario, autoplan, financiar, garantia, confianza, cuotas, agricola, 0km, autos">
    <title>Servicios Premier - Auto Planes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon.png" />
    {{ Cargar::stylesheet(array(
                          '/css/bootstrap.css',
                          '/css/slick-theme.css',
                          '/css/slick.css',
                          '/css/global.css',
                          '/css/agricola.css',
                          '/css/preguntas.css',
                          '/css/premier.css',
                          '/css/galeria.css',
                          '/css/buscarXmarca.css'
                          )) }}
    <script src="/ajs/angular.min.js"></script>
    {{ Cargar::javascript(array(
                                '/js/jquery.js',
                                '/js/bootstrap.js',
                                '/js/slick.min.js',
                                '/js/portal.js',
                                )) }}
  </head>
  <body>
    @yield('content')
  </body>
</html>