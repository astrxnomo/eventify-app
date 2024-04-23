@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

	<!-- ====== Contenido de pagina ======-->
	<section class="full-width section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<buttom class="btn btn-default btn-block visible-xs btn-dropdown-conatiner" data-drop-cont=".user-menu-xs">
						<i class="fa fa-user fa-fw" aria-hidden="true"></i> MOSTRAR MENÚ <i class="fa fa-sort pull-right" aria-hidden="true"></i>
					</buttom>
					<div class="full-width user-menu-xs">
						<div class="full-width post-user-info" style="margin: 0 !important;">
							<!--<i class="fa fa-user NavBar-Nav-icon" aria-hidden="true"></i>-->
							<img src="assets/img/user.png" class="NavBar-Nav-icon" alt="User">
							<p class="full-width"><small>Nombre de usuario</small></p>
							<div class="full-width div-table">
								<div class="full-width div-table-row">
									<div class="div-table-cell div-table-cell-xs" style="height: auto !important; line-height: inherit; border:none;">
										0 <br>
										<small>En venta</small>
									</div>
									<div class="div-table-cell div-table-cell-xs" style="height: auto !important; line-height: inherit; border:none;">
										0 <br>
										<small>Vendidos</small>
									</div>
								</div>
							</div>
						</div>
						<div class="full-width list-group" style="border-radius: 0;">
							<div class="list-group-item text-center">
								<small>Desde Junio 2016</small>
							</div>
						  	<a href="perfil.html" class="list-group-item">
						  		<i class="fa fa-user fa-fw" aria-hidden="true"></i> TU PERFIL
						  	</a>
						  	<a href="config.html" class="list-group-item active">
						  		<i class="fa fa-cogs fa-fw" aria-hidden="true"></i> CONFIGURACIÓN
						  	</a>
						  	<a href="yourcommercial.html" class="list-group-item">
						  		<i class="fa fa-object-group fa-fw" aria-hidden="true"></i> TUS ANUNCIOS
						  	</a>
						  	<a href="messages.html" class="list-group-item">
						  		<i class="fa fa-commenting-o fa-fw" aria-hidden="true"></i> MENSAJES
						  	</a>
						  	<a href="favorites.html" class="list-group-item">
						  		<i class="fa fa-heart-o fa-fw" aria-hidden="true"></i> FAVORITOS
						  	</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="full-width bar-info-user">
						<i class="fa fa-cogs fa-fw" aria-hidden="true"></i>
						<div>CONFIGURACIÓN</div>
					</div>
					<!-- Contenido-->
					<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
						<p>Ésta es la información que quieres recibir a través de tu e-mail</p>
						<form action="">
							<div class="checkbox">
							  	<label>
							    	<input type="checkbox" value="">
							    	Recibir mensajes del chat por E-mail
							  	</label>
							</div>
							<hr>
							<div class="checkbox">
							  	<label>
							    	<input type="checkbox" value="">
							    	Recibir estadisticas de tus anuncios
							  	</label>
							</div>
							<hr>
							<div class="checkbox">
							  	<label>
							    	<input type="checkbox" value="">
							    	Recibir boletines y promociones
							  	</label>
							</div>
							<button class="btn btn-danger">GUARDAR</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
