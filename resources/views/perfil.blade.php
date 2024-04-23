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
						  	<a href="perfil.html" class="list-group-item active">
						  		<i class="fa fa-user fa-fw" aria-hidden="true"></i> TU PERFIL
						  	</a>
						  	<a href="config.html" class="list-group-item">
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
						<i class="fa fa-user fa-fw" aria-hidden="true"></i>
						<div>TU PERFIL</div>
					</div>
					<!-- Contenido-->
					<div class="full-width" style="padding: 15px; border: 1px solid #E1E1E1;">
						<form action="">
							<p class="text-muted text-center">Seleciona una image</p>
							<div class="form-group">
							    <div class="custom-input-file">
							    	<input type="file" size="1" class="input-file" />
								    <i class="fa fa-picture-o" aria-hidden="true"></i>
								</div>
								<br>
								<p  class="text-muted text-center archivo">Archivo...</p>
							</div>
							<br><br><br>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" placeholder="Nombre" class="form-control">
							</div>
							<div class="form-group">
								<label>Teléfono <small>Éste será el teléfono de contacto en tus anuncios</small></label>
								<input type="text" placeholder="¿Cuál es tu teléfono?" class="form-control">
							</div>
							<div class="form-group">
								<label>Localización <small>¿Cuál es tu ubicación?</small></label>
								<input type="email" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<a href="#!" class="btn btn-default btn-xs pull-right btn-dropdown-conatiner" data-drop-cont=".perfil-password">
									Mostrar/Ocultar <i class="fa fa-sort" aria-hidden="true"></i>
								</a>
								<div class="full-width perfil-password">
									<input type="password" placeholder="Contraseña" class="form-control">
									<br>
									<input type="password" placeholder="Nueva Contraseña" class="form-control">
									<br>
									<input type="password" placeholder="Confirmar Contraseña" class="form-control">
								</div>
							</div>
							<p class="text-center">
								<button class="btn btn-danger">GUARDAR</button>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
