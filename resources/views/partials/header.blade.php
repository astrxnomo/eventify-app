	<!-- ====== Barra de navegacion ======-->
	<div class="full-width NavBar">
		<div class="full-width text-bold NavBar-logo">
			Eventi<span>fy</span>
		</div>
		<nav class=" full-width NavBar-Nav">
			<div class="full-width NavBar-Nav-bg hidden-md hidden-lg show-menu-mobile"></div>
			<ul class="list-unstyled full-width menu-mobile-c">
				<div class="full-width hidden-md hidden-lg header-menu-mobile">
					<i class="fa fa-times header-menu-mobile-close-btn show-menu-mobile" aria-hidden="true"></i>
					<i class="fa fa-user NavBar-Nav-icon header-menu-mobile-icon" aria-hidden="true"></i>
					<a href="/login" class="btn btn-info header-menu-mobile-btn">INICIAR SESIÓN</a>
					<div class="divider"></div>
					<a href="/newaccount" class="btn btn-primary header-menu-mobile-btn">CRÉATE UNA CUENTA</a>
				</div>
				<li>
					<a href="/index">
						<i class="fa fa-home fa-fw hidden-md hidden-lg" aria-hidden="true"></i> INICIO
					</a>
				</li>
				<li>
					<a href="/adcommercial">
						<i class="fa fa-pencil-square-o fa-fw hidden-md hidden-lg" aria-hidden="true"></i>  PON TU ANUNCIO
					</a>
				</li>
				<li>
					<a href="/yourcommercial">
						<i class="fa fa-object-group fa-fw hidden-md hidden-lg" aria-hidden="true"></i> TUS ANUNCIOS
					</a>
				</li>
				<li>
					<a href="/messages">
						<i class="fa fa-commenting-o fa-fw hidden-md hidden-lg" aria-hidden="true"></i> MENSAJES
					</a>
				</li>
				<li>
					<a href="/favorites">
						<i class="fa fa-heart-o fa-fw hidden-md hidden-lg" aria-hidden="true"></i> FAVORITOS
					</a>
				</li>
				<li>
					<a href="/help">
						<i class="fa fa-life-ring fa-fw hidden-md hidden-lg" aria-hidden="true"></i> AYUDA
					</a>
				</li>
				<li class="hidden-xs hidden-sm"><a class="btn-PopUpLogin" href="#!">INICIAR SESIÓN</a></li>
				<li class="hidden-xs hidden-sm"><i class="fa fa-user NavBar-Nav-icon btn-PopUpLogin" aria-hidden="true"></i></li>
			</ul>
		</nav>
		<i class="fa fa-bars hidden-md hidden-lg btn-mobile-menu show-menu-mobile" aria-hidden="true"></i>
		<i class="fa fa-search hidden-md hidden-lg btn-mobile-menu btn-search-mobile" aria-hidden="true"></i>
	</div>
	<!-- ====== PopUpLogin ======-->
	<section class=" full-width PopUpLogin">
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li role="presentation" class="active"><a href="#LoginTab1" aria-controls="LoginTab1" role="tab" data-toggle="tab">PARTICULAR</a></li>
			<li role="presentation"><a href="#LoginTab2" aria-controls="LoginTab2" role="tab" data-toggle="tab">TIENDA VIRTUAL</a></li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="LoginTab1">
				<form action="/login" style="padding-top: 15px;">
					<div class="form-group">
					    <input type="email" class="form-control input-lg" placeholder="Email" required="">
					</div>
					<div class="form-group">
					    <input type="password" class="form-control input-lg" placeholder="Contraseña" required="">
					</div>
					<a class="text-left text-light" href="#!">No recuerdo mi contraseña</a>
					<div class="checkbox full-width">
					    <label>
					      <input type="checkbox"> No cerrar sesión
					    </label>
					</div>
					<button class="btn btn-danger btn-lg" type="submit">INICIAR SESIÓN</button>
				</form>
				<div class="full-width divider"></div>
				<h4 class="text-center">¿Aún no tienes cuenta?</h4>
				<a class="text-light" href="/newaccount">CRÉATE UNA GRATIS</a>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="LoginTab2">
				<form action="/login" style="padding-top: 15px;">
					<div class="form-group">
					    <input type="email" class="form-control input-lg" placeholder="Email" required="">
					</div>
					<div class="form-group">
					    <input type="password" class="form-control input-lg" placeholder="Contraseña" required="">
					</div>
					<a class="text-left text-light" href="#!">No recuerdo mi contraseña</a>
					<div class="checkbox full-width">
					    <label>
					      <input type="checkbox"> No cerrar sesión
					    </label>
					</div>
					<button class="btn btn-danger btn-lg" type="submit">INICIAR SESIÓN</button>
				</form>
			</div>
		</div>
	</section>
	<!-- ====== Buscador movil ======-->
	<section class="full-width hidden-md hidden-lg Search-mobile">
		<form action="/commercial" style="padding-top: 15px;">
			<div class="form-group">
			    <input type="text" class="form-control input-lg" placeholder="Estoy buscado..." required="">
			</div>
			<div class="form-group">
			    <input type="text" class="form-control input-lg" placeholder="Provincia, ciudad, distrito..." required="">
			</div>
			<button class="btn btn-danger btn-lg" type="submit">BUSCAR</button>
		</form>
	</section>
