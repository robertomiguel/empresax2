<div class="resulado">
	<div class="row">
		<div class="col-md-8">
			<div class="input-group">
				<input type="text" id="buscar" placeholder="buscar..." class="buscar form-control redondear2">
				<span class="input-group-btn">
					<button class="btn btn-default glyphicon glyphicon-search" 
							ng-click="buscarAutos()" type="button" id="btn-buscar"></button>
				</span>
			</div>
		</div>

	<!-- 	<div class="col-md-4">
			<div class="input-group">
				<input 	type="text" id="buscarPrecio" placeholder="Cuotas hasta..." 
						class="buscar form-control redondear2" />
				<span class="input-group-btn">
					<button class="btn btn-default glyphicon glyphicon-search" 
							ng-click="buscarPrecio()" type="button" id="btn-buscar"></button>
				</span>
			</div>
		</div> -->
	</div>

	<div align="center" id="resultado-informe"></div>
	<table class="table table-responsive table-hover table-striped centrado" style="cursor:pointer">
		<tr ng-repeat="l in listaResultado" onClick="verImg(this)">
			<td>@{{l.marca}} @{{l.modelo}}</td>
			<td align="right">@{{l.precio | currency}}</td>
			<td><span class="glyphicon glyphicon-eye-open"></span></td>
		</tr>
	</table>
</div>