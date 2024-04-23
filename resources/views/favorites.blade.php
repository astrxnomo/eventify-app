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
						  	<a href="config.html" class="list-group-item">
						  		<i class="fa fa-cogs fa-fw" aria-hidden="true"></i> CONFIGURACIÓN
						  	</a>
						  	<a href="yourcommercial.html" class="list-group-item">
						  		<i class="fa fa-object-group fa-fw" aria-hidden="true"></i> TUS ANUNCIOS
						  	</a>
						  	<a href="messages.html" class="list-group-item">
						  		<i class="fa fa-commenting-o fa-fw" aria-hidden="true"></i> MENSAJES
						  	</a>
						  	<a href="favorites.html" class="list-group-item active">
						  		<i class="fa fa-heart-o fa-fw" aria-hidden="true"></i> FAVORITOS
						  	</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 col-md-9">
					<div class="full-width bar-info-user">
						<i class="fa fa-heart-o fa-fw" aria-hidden="true"></i>
						<div>FAVORITOS</div>
					</div>
					<!-- Contenido-->
					<div class="full-widht">
						<i class="fa fa-th-large btn btn-default hidden-xs btn-change-post"></i>
						<i class="fa fa-refresh btn btn-default"></i>
						<i class="fa fa-angle-right btn btn-default"></i>
					</div>
					<div class="full-width container-post">
						<div class="full-width post">
							<figure class="full-width post-img">
								<!-- Tamaño de la imagen 248x186 pixeles-->
								<img src="assets/img/post.jpg" alt="" class="img-responsive">
							</figure>
							<div class="full-width post-info">
								<a href="post.html" class="full-width post-info-title">Título del anuncio</a>
								<p class="full-width post-info-price">$7,000</p>
								<span class="post-info-zone">Zona</span>
								<span class="post-info-date">hoy 07:00</span>
								<i class="fa fa-trash post-info-like"></i>
							</div>
						</div>
						<div class="full-width post">
							<figure class="full-width post-img">
								<!-- Tamaño de la imagen 248x186 pixeles-->
								<img src="assets/img/post.jpg" alt="" class="img-responsive">
							</figure>
							<div class="full-width post-info">
								<a href="post.html" class="full-width post-info-title">Título del anuncio</a>
								<p class="full-width post-info-price">$7,000</p>
								<span class="post-info-zone">Zona</span>
								<span class="post-info-date">hoy 07:00</span>
								<i class="fa fa-trash post-info-like"></i>
							</div>
						</div>
						<div class="full-width post">
							<figure class="full-width post-img">
								<!-- Tamaño de la imagen 248x186 pixeles-->
								<img src="assets/img/post.jpg" alt="" class="img-responsive">
							</figure>
							<div class="full-width post-info">
								<a href="post.html" class="full-width post-info-title">Título del anuncio</a>
								<p class="full-width post-info-price">$7,000</p>
								<span class="post-info-zone">Zona</span>
								<span class="post-info-date">hoy 07:00</span>
								<i class="fa fa-trash post-info-like"></i>
							</div>
						</div>
						<div class="full-width post">
							<figure class="full-width post-img">
								<!-- Tamaño de la imagen 248x186 pixeles-->
								<img src="assets/img/post.jpg" alt="" class="img-responsive">
							</figure>
							<div class="full-width post-info">
								<a href="post.html" class="full-width post-info-title">Título del anuncio</a>
								<p class="full-width post-info-price">$7,000</p>
								<span class="post-info-zone">Zona</span>
								<span class="post-info-date">hoy 07:00</span>
								<i class="fa fa-trash post-info-like"></i>
							</div>
						</div>
						<div class="full-width post">
							<figure class="full-width post-img">
								<!-- Tamaño de la imagen 248x186 pixeles-->
								<img src="assets/img/post.jpg" alt="" class="img-responsive">
							</figure>
							<div class="full-width post-info">
								<a href="post.html" class="full-width post-info-title">Título del anuncio</a>
								<p class="full-width post-info-price">$7,000</p>
								<span class="post-info-zone">Zona</span>
								<span class="post-info-date">hoy 07:00</span>
								<i class="fa fa-trash post-info-like"></i>
							</div>
						</div>
						<div class="full-width post">
							<figure class="full-width post-img">
								<!-- Tamaño de la imagen 248x186 pixeles-->
								<img src="assets/img/post.jpg" alt="" class="img-responsive">
							</figure>
							<div class="full-width post-info">
								<a href="post.html" class="full-width post-info-title">Título del anuncio</a>
								<p class="full-width post-info-price">$7,000</p>
								<span class="post-info-zone">Zona</span>
								<span class="post-info-date">hoy 07:00</span>
								<i class="fa fa-trash post-info-like"></i>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<nav class="text-center">
						<ul class="pagination">
							<li>
							  	<a href="#" aria-label="Previous">
							    	<span aria-hidden="true">&laquo;</span>
							  	</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
							  	<a href="#" aria-label="Next">
							    	<span aria-hidden="true">&raquo;</span>
							  	</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</section>


@endsection
