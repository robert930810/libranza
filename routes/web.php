<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $sliders = collect([
		['img' => 'creditoLibranza.jpg', 'texto' => '<p class="sliderPrincipal-textSlider">Obtén beneficios que otros no tienen con <br /> nuestra tarjeta de crédito Oportuya</p>', 'textoBoton' => 'Solicita tu tarjeta ya', 'title' => 'Tarjeta Oportuya','color' => '#1d84c3', 'position_text' => 'bottom', 'enlace' => '/oportuya'],
		['img' => 'creditoLibranzaDocentes.jpg', 'texto' => '<h1 class="sliderPrincipal-titleSlider">Crédito <strong>Motos</strong></h1><p class="sliderPrincipal-textSlider">Te damos crédito para que pongas a rodar tus aventuras.</p>', 'textoBoton' => 'Obtener mi moto Ya', 'title' => 'Crédito Motos','color' => '#ec2d35', 'position_text' => 'left', 'enlace' => '/motos'],
		['img' => 'creditoLibranzaSuenos.jpg', 'texto' => '<h1 class="sliderPrincipal-titleSlider">Crédito <strong>Libranza</strong></h1><p class="sliderPrincipal-textSlider">¡Porque es momento de disfrutar la vida!</p>', 'textoBoton' => 'Solicitar crédito', 'title' => 'Crédito Libranza','color' => '#fdbf3c', 'position_text' => 'left', 'enlace' => 'libranza']
    ]);
    
    return view('home')
            ->with('sliderPrincipal', $sliders->all());;
});
