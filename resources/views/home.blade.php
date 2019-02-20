@section('title','Libranza')
@extends('layouts.app')
@section('content')

	<div id="sliderPrincipal">
		@foreach($sliderPrincipal as $slider)
			<div class="containImg">
				<img src="/images/sombra.png" alt="Sombra" class="img-fluid sombraSliderPrincipal">
				<img src="/images/{{ $slider['img'] }}" class="img-fluid" title="{{ $slider['title'] }}" />
				@if($slider['position_text'] == 'bottom')
					<div class="sliderPrincipal-containTextBottom">
						@php
							echo $slider['texto'];
						@endphp
						<a href="{{ $slider['enlace'] }}" class="sliderPrincipal-button" style="background: {{$slider['color']}}">@php echo $slider['textoBoton'] @endphp</a>
					</div>
				@else
					<div class="sliderPrincipal-containTextLeft">
						@php
							echo $slider['texto'];
						@endphp
						<a href="{{ $slider['enlace'] }}" class="sliderPrincipal-button" style="background: {{$slider['color']}}">@php echo $slider['textoBoton'] @endphp</a>
					</div>
				@endif
			</div>
		@endforeach
	</div>

	<div id="creditoLibranza">
		<div class="containerCreditoLibranza">
			<h2 class="creditoLibranza-title text-center">Todo lo que puedes hacer con <br> nuestro <strong>crédito de libranza</strong></h2>
			<div class="row" id="creditoLibranza-slider">
				<div class="col-md-12 col-lg-4 container-creditoLibranzaCards">
					<div class="creditoLibranza-contianerTexto creditoLibranza-textoAdvance creditoLibranza-electrodomesticos">
						<img src="{{ asset('images/libranza-creditoElectrodomestico.png') }}" alt="Crédito para electrodomésticos" class="img-fluid creditoLibranza-img">
						<div class="containerText-creditoLibranzaCards">
							<h3 class="creditoLibranza-titleText">Crédito para <br> electrodomésticos</h3>
							<p class="creditoLibranza-text">
								A través de nuestras tiendas Oportunidades a nivel nacional, Te financiamos hasta por 60 meses en el electrodoméstico que tanto quieres. <br>
								<strong>¡Compralo a crédito!</strong>
							</p>
						</div>
						<div class="row" style="padding-bottom: 15px;">
							<div class="col-12 text-center">
								<a href="https://api.whatsapp.com/send?phone=573105216830&text=Estoy%20interesado%20adquirir%20un%20crédito%20en%20libranza%20para%20un%20electrodoméstico" class="creditoLibranza-buttonWhatsApp" target="_blank">Pregúntanos por WhatsApp <i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 container-creditoLibranzaCards">
					<div class="creditoLibranza-contianerTexto creditoLibranza-motos">
						<img src="{{ asset('images/libranza-creditoMotos.png') }}" alt="Crédito para motos" class="img-fluid creditoLibranza-img">
						<div class="containerText-creditoLibranzaCards">
							<h3 class="creditoLibranza-titleText">Crédito <br> para motos</h3>
							<p class="creditoLibranza-text">
								Accede a la moto que quieres a través de nuestras líneas de crédito que se adaptan a tus posibilidades de pago. te damos hasta 108 mese para que te la lleves. <br>
								<strong>¡Compra tu moto a crédito!</strong>
							</p>
						</div>
						<div class="row" style="padding-bottom: 15px;">
							<div class="col-12 text-center">
								<a href="https://api.whatsapp.com/send?phone=573105216830&text=Estoy%20interesado%20adquirir%20un%20crédito%20en%20libranza%20para%20una%20moto" class="creditoLibranza-buttonWhatsApp" target="_blank">Pregúntanos por WhatsApp <i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 container-creditoLibranzaCards">
					<div class="creditoLibranza-contianerTexto creditoLibranza-viajes">
						<img src="{{ asset('images/libranza-creditoViajes.png') }}" alt="Crédito para viajes" class="img-fluid creditoLibranza-img">
						<div class="containerText-creditoLibranzaCards">
							<h3 class="creditoLibranza-titleText">Crédito <br> para viajes</h3>
							<p class="creditoLibranza-text">
								Ahora puedes viajar por el mundo financiando tus paquetes turísticos nacionales hasta por 24 meses e internacionales hasta por 48 meses. <br>
								<strong>¡Viaja Ahora!</strong>
							</p>
						</div>
						<div class="row" style="padding-bottom: 15px;">
							<div class="col-12 text-center">
								<a href="https://api.whatsapp.com/send?phone=573105216830&text=Estoy%20interesado%20adquirir%20un%20crédito%20en%20libranza%20para%20un%20viaje" class="creditoLibranza-buttonWhatsApp" target="_blank">Pregúntanos por WhatsApp <i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 container-creditoLibranzaCards">
					<div class="creditoLibranza-contianerTexto creditoLibranza-libreInversion">
						<img src="{{ asset('images/libranza-libreInversion.png') }}" alt="Crédito Libre Inversión" class="img-fluid creditoLibranza-img">
						<div class="containerText-creditoLibranzaCards">
							<h3 class="creditoLibranza-titleText">Crédito <br> libre inversión</h3>
							<p class="creditoLibranza-text">
								Es un préstamo de Libre Destino que se aprueba a personas naturales, vinculadas a entidades con las cuales existen convenios previamente establecido con LAGOBO y cuyas cuotas se descuentan mensualmente del pago de nómina.
							</p>
						</div>
						<div class="row" style="padding-bottom: 15px;">
							<div class="col-12 text-center">
								<a href="https://api.whatsapp.com/send?phone=573105216830&text=Estoy%20interesado%20adquirir%20un%20crédito%20en%20libranza%20libre%20inversión" class="creditoLibranza-buttonWhatsApp" target="_blank">Pregúntanos por WhatsApp <i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 container-creditoLibranzaCards">
					<div class="creditoLibranza-contianerTexto creditoLibranza-motos">
						<img src="{{ asset('images/libranza-compraCartera.png') }}" alt="Compra de cartera" class="img-fluid creditoLibranza-img">
						<div class="containerText-creditoLibranzaCards">
							<h3 class="creditoLibranza-titleText">Compra <br> de cartera</h3>
							<p class="creditoLibranza-text">
								Sabemos lo importante administrar mejor tu dinero. Por eso, te ofrecemos unificar tus deudas que presentas con otras entidades en un solo crédito con Tasa y Plazo Fijo para mejorar tu flujo de caja.
							</p>
						</div>
						<div class="row" style="padding-bottom: 15px;">
							<div class="col-12 text-center">
								<a href="https://api.whatsapp.com/send?phone=573105216830&text=Estoy%20interesado%20adquirir%20un%20crédito%20en%20libranza%20por%20medio%20de%20compra%20de%20cartera" class="creditoLibranza-buttonWhatsApp" target="_blank">Pregúntanos por WhatsApp <i class="fab fa-whatsapp"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="creoToServicios">
		<img src="{{ asset('images/libranza-creoToServiciosV2.jpg') }}" alt="Creo to Servicios" class="img-fluid" />
	</div>
	<div id="credibilidad">
		<div class="container">
			<h2 class="credibilidad-title text-center">Experiencia <strong>Credibilidad</strong></h2>
			<div class="row">
				<div class="col-md-12 col-lg-4 text-center">
					<img src="{{ asset('images/libranza-experienciaMapa.png') }}" alt="" class="img-fluid credibilidad-img">
					<p class="credibilidad-text ">
						56 puntos de atención  <br>
						al público
					</p>
				</div>
				<div class="col-md-12 col-lg-4 text-center">
					<img src="{{ asset('images/libranza-experienciaAliados.png') }}" alt="" class="img-fluid credibilidad-img">
					<p class="credibilidad-text ">
						Más de 40 Aliados estratégicos <br>
						en todo el territorio nacional
					</p>
				</div>
				<div class="col-md-12 col-lg-4 text-center">
					<img src="{{ asset('images/libranza-experienciaClientes.png') }}" alt="" class="img-fluid credibilidad-img">
					<p class="credibilidad-text ">
						Más de 500.000 clientes <br>
						atendidos en los últimos 5 años
					</p>
				</div>
			</div>
		</div>
	</div>

@endsection