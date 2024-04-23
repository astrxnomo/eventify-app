@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

	<!-- ====== Contenido de pagina ======-->
	<section class="full-width section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<div class="full-width container-login">
						<i class="fa fa-user container-login-icon" aria-hidden="true"></i>
						<h4 class="text-center text-light">INICIAR SESIÓN</h4>
						<br>
						<form action=""">
							<div class="form-group">
								<input type="email" class="form-control input-lg" placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input-lg" placeholder="Contraseña" required="">
							</div>
							<a class="text-left text-light" href="#!">No recuerdo mi contraseña</a>
							<div class="checkbox full-width" style="margin: 20px 0;">
								<label>
									<input type="checkbox"> No cerrar sesión
								</label>
							</div>
							<button class="btn btn-danger btn-lg" type="submit">INICIAR SESIÓN</button>
							<a href="newaccount.html" class="text-center">Si eres nuevo ¡Crea una cuenta!</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
