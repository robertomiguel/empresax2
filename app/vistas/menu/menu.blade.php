<nav class="navbar navbar-default">
	<div class="container-fluid">

	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">MENÚ</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1"
	    		aria-expanded="false" style="height: 1px;">
			<ul class="nav navbar-nav">
				<li class="active">
					<a data-toggle="tab" href="#premier">
						<span class="glyphicon glyphicon-home"></span> Premier
					</a>
				</li>
				<li class="dropdown">
			    		<a href=""
			    			class="dropdown-toggle"
			    			id="dropdownMenu1"
			    			role="button" 
		    				data-toggle="dropdown" 
		    				aria-haspopup="true" 
		    				aria-expanded="false">
			    				<span class="glyphicon glyphicon-list-alt"></span> VEHÍCULOS
			    				<span class="caret"></span>
			  			</a>
						<ul  class="dropdown-menu">
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(1,'FIAT')"			>FIAT</a>		</li>
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(2,'FORD')"			>FORD</a>		</li>
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(3,'PEUGEOT')"		>PEUGEOT</a>	</li>
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(4,'RENAULT')"		>RENAULT</a>	</li>
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(5,'VOLKSWAGEN')"	>VOLKSWAGEN</a>	</li>
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(6,'TOYOTA')"		>TOYOTA</a>		</li>
							<li><a data-toggle="tab" href="#lista_de_autos"
									ng-click="mostrarTab(7,'CHEVROLET')"	>CHEVROLET</a>	</li>
						</ul>
				</li>
				<li>
					<a data-toggle="tab" href="#agricola">
						<span class="glyphicon glyphicon-star-empty"></span> MAQUINARIAS
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#laempresa">
						<span class="glyphicon glyphicon-info-sign"></span> La Empresa
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#contacto">
						<span class="glyphicon glyphicon-phone-alt"></span> Contacto
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#promo"	>
						<span class="glyphicon glyphicon-gift"></span> Promociones <span class="badge">0</span>
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#expoagro">
						<span class="glyphicon glyphicon-bullhorn"></span> EXPOAGRO 2017
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#resultado">
						<span class="glyphicon glyphicon-search"></span> Buscar
					</a>
				</li>
				<li>
					<a data-toggle="tab" href="#preguntas">
						<span class="glyphicon glyphicon-question-sign"></span> Preguntas Frecuentes
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>