<div class="panel panel-default">
	  
	<div class="panel-heading">
		<h3 class="panel-title">Acceso para Clientes</h3>
	</div>
	  	  
	<div class="panel-body">
	 	<div class="col-md-5">
	  		<label id="nombreCli">Usuario</label>
	    	<input class="form-control" type="text" ng-model="nombre" placeholder="Nombre de usuario..." />
	  	</div>
		<div class="col-md-5">
			<label id="asdasdCli">Contraseña</label>
		   	<input class="form-control" type="password" ng-model="pass" placeholder="Contraseña..." />
		</div>
	   	<div class="col-md-2">
	   		<br/>
	   		<button ng-click="entrar()">
	   			<span class=" glyphicon glyphicon-log-in"></span> Entrar
	   		</button>
	   	</div>
	</div>
		  
</div>