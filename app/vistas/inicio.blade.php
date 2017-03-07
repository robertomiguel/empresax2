@extends ('cabecera')

@section ('content')

<div ng-app="premierApp" ng-controller="premierCtrl" id="premierCtrl" class="container">

	<div id="galeria-fondo" hidden>
		<div id="galeria-menu">
			<a href="" class="btn-cerrar" onclick="cerrarGaleria()">Cerrar</a>
		</div>
		<div id="galeria"></div>
	</div>

	<div class="marco redondear sombra">
			<div class="header">
				<br>
					<p class="text-center bg-info">Lima 1422 - 2000 Rosario - Santa Fe - Argentina<br/>
			info@serviciospremier.com.ar - Tel/Fax 0341-679-1831 - 0341-222-4779 Lunes a viernes 9 a 15hs</p>
				<div class="cabeza redondear2">
					<img src="/img/cabezapremier.jpg" class="img-responsive centrado" />
				</div>
				<hr />
			</div>

			<div class="menu">
				@include('menu.menu')
			</div>

		<div class="panel panel-default wrapper">

			<div class="tab-content">

				<div id="premier" class="tab-pane fade in active" align="center">
					@include('menu.premier')
				</div>

			 	<div id="laempresa" class="tab-pane fade">
					@include('menu.laempresa')
				</div>
				
				<div id="lista_de_autos" class="tab-pane fade">
					@include('menu.buscarXmarca')
				</div>

				<div id="contacto" class="tab-pane fade">
				    <div align="center">
				    	<img src="/img/consultas.jpg" class="img-responsive" />
				    </div>
				</div>

				<div id="expoagro" class="tab-pane fade">
				    <div class="expoagro">
				    	<img src="/img/expro.jpg" class="img-responsive redondear2" />
				    </div>
				</div>

				<div id="agricola" class="tab-pane fade">
				    @include('menu.agricola')
				</div>

				<div id="preguntas" class="tab-pane fade">
				    @include('menu.preguntas')
				</div>
			  
			  	<div id="resultado" class="tab-pane fade">
			  		@include('menu.buscar')
			  	</div>
			  	<div id="promo" class="tab-pane fade">
			  		@include('menu.promo')
			  	</div>
			  	<div id="clientes" class="tab-pane fade">
			  		@include('menu.login')
			  	</div>
			</div>
		</div>
		<img src="/img/lamejorfinanciacion.png" class="img-responsive centrado" />
		<br />
	</div>
</div>
<br /><br />
@stop