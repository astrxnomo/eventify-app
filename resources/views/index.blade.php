@extends('layouts.app')

<title>Eventify | Inicio</title>

@section('content')

	<!-- ====== Contenido de pagina ======-->
	<header class="full-width header-index">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center text-light">Lo vivo y luego lo vendo</h1>
					<h2 class="text-center text-light">Haz tuyo lo de los demás…</h2>
				</div>
			</div>
		</div>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<form action="commercial.html" class="form-inline text-center">
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
	</header>
	<section class="section">
		<h2 class="text-center text-light">Todas las categorías que imaginas</h2>
		<div class="container">
			<div class="full-width container-category">
				<a href="#!" id="categori-1">
					<i class="fa fa-car" aria-hidden="true"></i>
					<span>VEHÍCULOS</span>
				</a>
				<a href="#!" id="categori-2">
					<i class="fa fa-building" aria-hidden="true"></i>
					<span>INMOBILIARIA</span>
				</a>
				<a href="#!" id="categori-3">
					<i class="fa fa-home" aria-hidden="true"></i>
					<span>HOGAR</span>
				</a>
				<a href="#!" id="categori-4">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					<span>MODA Y BELLEZA</span>
				</a>
				<a href="#!" id="categori-5">
					<i class="fa fa-child" aria-hidden="true"></i>
					<span>PARA NIÑOS Y BEBES</span>
				</a>
				<a href="#!" id="categori-6">
					<i class="fa fa-plug" aria-hidden="true"></i>
					<span>ELECTRÓNICA</span>
				</a>
				<a href="#!" id="categori-7">
					<i class="fa fa-bicycle" aria-hidden="true"></i>
					<span>OCIO Y DEPORTE</span>
				</a>
				<a href="#!" id="categori-8">
					<i class="fa fa-paw" aria-hidden="true"></i>
					<span>MASCOTAS Y ANIMALES</span>
				</a>
				<a href="#!" id="categori-9">
					<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					<span>TRABAJO Y FORMACIÓN</span>
				</a>
				<a href="#!" id="categori-10">
					<i class="fa fa-suitcase" aria-hidden="true"></i>
					<span>NEGOCIOS Y SERVICIOS</span>
				</a>
				<a href="#!" id="categori-11">
					<i class="fa fa-shopping-basket" aria-hidden="true"></i>
					<span>OTROS</span>
				</a>
				<a href="#!" id="categori-12">
					<i class="fa fa-star" aria-hidden="true"></i>
					<span>TODAS LAS CATEGORIAS</span>
				</a>
			</div>
		</div>
	</section>
	<section class="section" style="background-color: #F5F5F5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<figure class="full-width">
						<img src="assets/img/smartphone.png" alt="" class="img-responsive" style="width: 40%; margin: 0 auto;">
					</figure>
				</div>
				<div class="col-xs-12 col-sm-8">
					<h2 class="text-center text-light">¡Llévanos siempre contigo! Descárgate nuestra app</h2>
					<h3 class="text-center text-light">Dinos tu número y recibirás el enlace para descargar nuestra app</h3>
					<br>
					<form class="form-inline text-center">
						<div class="form-group">
							<select class="form-control">
							  	<option>Android</option>
							  	<option>iPhone</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Escribe tu número móvil" required="">
						</div>
						<button type="submit" class="btn btn-danger">DESCARGAR APP</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<i class="fa fa-flag-checkered icon-index" aria-hidden="true"></i>
					<p class="lead">
						Olvídate del miedo a equivocarte y lánzate a por lo que quieres. Ya no importa lo que tienes, sino lo que puedes llegar a hacer.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<i class="fa fa-gamepad icon-index" aria-hidden="true"></i>
					<p class="lead">
						Disfruta hasta de tus cambios de opinión y vive todas las oportunidades que quieras, sin complejos.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4">
					<i class="fa fa-money icon-index" aria-hidden="true"></i>
					<p class="lead">
						Compra lo que te queda por vivir y vende lo que ya has vivido de la forma más rápida y cómoda que existe.
					</p>
				</div>
			</div>
		</div>
	</section>


@endsection
