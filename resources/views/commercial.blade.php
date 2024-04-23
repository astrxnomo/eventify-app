@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

	<!-- ====== Contenido de pagina ======-->
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<form class="form-inline text-center">
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Estoy buscando...">
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-lg" placeholder="Ciudad, Provincia, Distrito...">
						</div>
						<button type="submit" class="btn btn-danger btn-lg">BUSCAR</button>
					</form>
				</div>
			</div>
		</div>
		<hr>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-3 col-md-2">
					<div class="full-width" style="border: 1px solid #E1E1E1; border-radius: 4px; padding: 5px;">
						<button class="btn btn-default btn-block hidden-sm hidden-md hidden-lg btn-dropdown-conatiner" data-drop-cont=".menu-commercial">
							FILTROS <i class="fa fa-sort pull-right" aria-hidden="true"></i>
						</button>
						<form action="" class="full-width menu-commercial">
							<h4 class="text-light">PRECIO</h4>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="DESDE">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="HASTA">
							</div>
							<br>
							<h4 class="text-light">CATEGORÍA</h4>
							<div class="form-group">
								<select class="form-control">
									<option value="">VEHÍCULOS</option>
									<option value="">INMOBILIARIA</option>
									<option value="">HOGAR</option>
									<option value="">MODA Y BELLEZA</option>
									<option value="">PARA NIÑOS Y BEBES</option>
									<option value="">ELECTRÓNICA</option>
									<option value="">OCIO Y DEPORTE</option>
									<option value="">MASCOTAS Y ANIMALES</option>
									<option value="">TRABAJO Y FORMACION</option>
									<option value="">NEGOCIOS Y SERVICIOS</option>
									<option value="">OTROS</option>
								</select>
							</div>
							<br>
							<h4 class="text-light">ANUNCIANTE</h4>
							<div class="form-group">
								<select class="form-control">
									<option value="">Todos</option>
									<option value="">Particular</option>
									<option value="">Profecional</option>
								</select>
							</div>
							<p class="text-center">
								<button class="btn btn-success btn-block">APLICAR</button>
							</p>
							<p class="text-center">
								<button type="reset" class="btn btn-info btn-block">BORRAR FILTROS</button>
							</p>
							<p>
								<small>Anuncios segunda mano . Las mejores ofertas en de segunda mano y de ocasión solo en </small>
							</p>
						</form>
					</div>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-10">
					<div class="full-width">
						<ol class="breadcrumb">
						  <li><a href="#!">Vehículos</a></li>
						  <li><a href="#!">Marca</a></li>
						  <li class="active">Modelo</li>
						</ol>
					</div>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
								<i class="fa fa-heart-o post-info-like"></i>
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
