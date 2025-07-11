@extends('layouts.Menu')
@section('title', 'Contáctenos / Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/BlogCss/proyectoscss/fabricaciondeoximielito.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')

<main><section class="main-article">
	<div class="container">
		<div class="item s-100 l-70 main-article__content">
			<div class="item s-100 main-article__title">
				<h1 class="h2">Elaboración de oximielito a base de Huira Huira para el tratamiento de infecciones respiratorias en la urbanización Santa Celedonia distrito de Juliaca agosto – diciembre 2011</h1>
			</div>
			<div class="item">
				<div class="div">
					<p>La investigación realizada por nuestras Egresadas Quispe Mamani, Yaneth Nancy y Mamani Quispe, Lucila Mercedes está basada en una planta de la región, más concretamente de la zona de Pallasca,&nbsp; conocida como Huira Huira. Las investigadoras se basaron en diversos estudios previos donde se recomienda el uso de la infusión de esta especie de planta para combatir enfermedades respiratorias y aliviar el asma bronquial.</p>

					<p><img alt="Elaboracion de oximielito a base de huira huira para tratamientos respiratorios" src="{{ asset('imgs/elaboracion-de-oximielito-a-base-de-huira-huira-tratamientos-respiratorios.png') }}" style="height:309px; margin:auto; width:500px"></p>

<p>Con este conocimiento y los adquiridos durante su formación en la carrera de Farmacia del Instituto Tecnológico San Juan Bautista, fueron capaces de elaborar un Oximielito (Una combinación de elementos de forma líquida, semejantes a los jarabes; disoluciones de miel en vinagre cargado de principio medicamentoso o principio activo de una droga vegetal) para el tratamiento de infecciones respiratorias.</p>

<p>Dejan como recomendación, a pesar de no haber sido comprobados los efectos secundarios, no administrar en personas gestantes, consumirlo sólo cada 8 horas, y no consumir si el paciente padece de gastritis. Si deseas leer la investigación completa, puedes verla aquí.</p>

<p><a href="{{ asset ('pdf/elaboracion-de-oximielito-a-base-de-huira-huira.pdf')}}">Elaboración de oximielito a base de Huira Huira</a></p>

<!--<p><img alt="Elaboración de oximielito a base de huira huira para tratamientos" src="{{ asset('imgs/elaboracion-de-oximielito-a-base-de-huira-huira-para-tratamientos.png') }}" style="height:325px; width:500px"></p>-->
				</div>
			</div>
		</div>
		<div class="item s-100 l-30">
			<div class="item s-100 main-article__aside--list">
				<h3>OTRAS PUBLICACIONES</h3>
				<ul>
                    <li><i class="fa fa-check"></i> <a href="{{ route('propiedadeslaqato') }}">Terapeuticas gusano laqato</a></li>
                	<li><i class="fa fa-check"></i> <a href="{{ route('vinoAjenjo') }}">Vino medicinal de ajenjo</a></li>
                	<li><i class="fa fa-check"></i> <a href="{{ route('jaleadeSabila') }}">JALEA A BASE DE SABILA LINAZA</a></li>
                	<li><i class="fa fa-check"></i> <a href="{{ route('farmaceuticaFrutoseco') }}">FORMA FARMACEUTICA FRUTO SECO</a></li>
                	<li><i class="fa fa-check"></i> <a href="{{ route('fabricaciondeoximielito') }}">ELABORACIÓN DE OXIMIELITO</a></li>
					</ul>
			</div>
			<div class="item s-100 main-article__aside--face">
				<div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/institutoSJB/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FinstitutoSJB%2F&amp;locale=es_ES&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 340px; height: 500px;"><iframe name="f424818c6f397e691" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="./Elaboración de una forma farmacéutica con fruto seco_files/page.html" style="border: none; visibility: visible; width: 340px; height: 500px;" class=""></iframe></span></div>
			  </div>
		</div>
	</div>
</section></main>

@endsection