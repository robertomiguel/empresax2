<div class="input-group input-group-lg">

	<span class="input-group-addon letra-premier listaMarca" id="basic-addon3"></span>

	<input type="text" id="buscarXmarca" ng-model="buscar.modelo" class="form-control" placeholder="Buscar...">

	<span class="input-group-btn">

		<button class="btn btn-default glyphicon glyphicon-remove-circle borrar-filtro" type="button" ng-click="borrarBuscarXmarca()"></button>

	</span>

</div><!-- /input-group -->

<table class="table tablaListado table-responsive table-hover table-striped centrado" ng-table="tablaAutos">

	<tr ng-repeat="l in listaAutos | filter:buscar" onClick="verImg(this)">

		<td>@{{l.modelo}}</td>

		<td align="right">@{{l.precio | currency}}</td>

		<td><span class="glyphicon glyphicon-eye-open"></span></td>

	</tr>

</table>
				