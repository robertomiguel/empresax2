$(document).ready(function() {
  $('.imagenes').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
  });

  posicionarMenu();

  $(window).scroll(function() {
      posicionarMenu();
  });	

  $("#buscar").keyup(function(event) {
    switch (event.which) {
      case 13: //enter
        $("#btn-buscar").click();
        break;  
      case 40: //abajo
        //$("#categoria").focus();
      break;
    }
  });

  $('#bs-example-navbar-collapse-1 a').click(function (e) {
    if ($('.navbar-toggle').attr('aria-expanded')=='true'&&!$(this).attr('id')) {
      $('.navbar-toggle').click();
    }

  });

});

var app = angular.module('premierApp',[]);

app.controller("premierCtrl", function ($scope, $http) {
    $scope.nombre = '';
    $scope.pass   = '';
    $scope.entrar = function() {
      $http({
          method  : 'post',
          url     : 'verplan',
          data    :  {nombre: $scope.nombre, clave: $scope.pass}
       }).then(function successCallback(response) {
            if (response.data=='no') {
              alert('Usuario y/o contraseña incorrecta.');
            } else {
              $('#clientes').html(response.data);
            }
            
           }, function errorCallback(response) {
                  alert('Error de conexión: ' + response.data);
    });
    }

    $scope.borrarBuscarXmarca = function(){
      $("#buscarXmarca").val('').trigger('input');
      $scope.buscar.modelo = '';
    }

    $scope.mostrarTab = function(marca, nombre) {
          $('.listaMarca').html(nombre);
          $http({
                method: 'post',
                   url: 'listaAutos',
                  data: {marca:marca}
                }).then(function(response) {
                      $scope.listaAutos = response.data;
                   });
    }

    $scope.buscarAutos = function() {
      var texto = $("#buscar").val() + '';
      $('#resultado-informe').html('');
      if (texto=='') return;
         $http({
                method: 'post',
                   url: 'buscar',
                  data: {buscar:texto}
          }).then(function(response) {
                if (response.data=='ko') {
                  $('#resultado-informe').html('No se encuentra: <span style="color:blue">' + texto + '</span><br/>'
                                                + '<a data-toggle="tab" href="#contacto">'
                                                + '<span class="glyphicon glyphicon-phone-alt"></span> '
                                                + 'Comuníquese con la empresa si su vehículo no aparece aquí.'
                                                + '</a>'
                                                );
                  $scope.listaResultado = '';
                } else {
                     $('.nav-tabs a[href="#resultado"]').tab('show');
                     $scope.listaResultado = response.data;
                  }
            });
    }
});

function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu   = $('.menu').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header) {
        $('.menu').addClass('fixed');
        $('.container-fluid').addClass('sombra-menu');
        $('.wrapper').css('margin-top', (altura_del_menu) + 'px');
    } else {
        $('.menu').removeClass('fixed');
        $('.container-fluid').removeClass('sombra-menu');
        $('.wrapper').css('margin-top', '0');
    }

}

//------------------------------------------------------------------
/*
function mostrarTab(lista){
  $.post("listaAutos",{
    marca: 2
  },
    function(data){
      $('#fiat-contenido').html(data[0].modelo);
  });
}*/

function verImg(obj) {
        $('#galeria').html('<img src="/img/cargando.gif">');
        $('#galeria-fondo').show();
        var modelo = $(obj).children("td:first").text()
        var buscar = $('#listaMarca').html() + ' ' + modelo;
        galeriaBuscado = buscar;
        $.post("/imagenes",{
            buscar: buscar
          },
        function(data){
          var images = $(data).contents().find('img');
          data = '';
          images.splice(0, 1);
          $('#galeria').html('');
          $('#galeria').append('<div class="row" align="center">');
          for (i=1; i < 17; i++) {
            $('#galeria').append('<div class="col-md-12 col-sm-12 col-xs-12">');
            $('#galeria').append(images[i]);
            $('#galeria').append('</div>');
          }
          $('#galeria').append('</div>');
          $('#galeria-fondo').show();
        //verInterior(buscar + ' interior');
      });
}

function cerrarGaleria() {
  $('#galeria').html('');
  $('#galeria-fondo').hide();
}

function verInterior(buscar) {
        $.post("/imagenes",{
        buscar: buscar
      },
        function(data){
        var images = $(data).contents().find('img');
        data = '';
        images.splice(0, 1);
        for (i=1; i < 17; i++) {
          $('#galeria').append(images[i]);
        }
        $('#galeria-fondo').show();
      });
}
/*
function buscar(texto) {
    angular.element('#premierCtrl').scope().buscarAutos(texto);
}

function borrarFiltro() {
  angular.element('#premierCtrl').scope().borrarBuscarXmarca();
}
*/