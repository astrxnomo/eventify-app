@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

	<!-- ====== Contenido de pagina ======-->
	<section class="full-width section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 hidden-xs">
					<h2 class="text-center text-danger text-semi-bold">Tu cuenta</h2>
					<p class="lead text-center">
						Gestiona tus anuncios, tus favoritos, chatea y vende cuando y desde dónde quieras
					</p>
					<figure class="full-width">
						<img src="assets/img/Devices.png" alt="" class="img-responsive">
					</figure>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="full-width container-login">
						<i class="fa fa-user container-login-icon" aria-hidden="true"></i>
						<h4 class="text-center text-light">CREA UNA CUENTA</h4>
						<br>
						<form action=""">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Nombre" required="">
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-lg" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" placeholder="Contraseña" required="">
							</div>
							<p>Al registrarte aceptas las <a href="#!" style="display: inline-block;">condiciones de uso y la Política de Privacidad</a></p>
							<button class="btn btn-danger btn-lg" type="submit">CREAR CUENTA</button>
							<a href="login.html" class="text-center">Ya tengo una cuenta</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


@endsection
