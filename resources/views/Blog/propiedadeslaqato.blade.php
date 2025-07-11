@extends('layouts.Menu')
@section('title', 'Contáctenos / Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/BlogCss/proyectoscss/propiedadeslaqato.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')

<main><section class="main-article">
	<div class="container">
		<div class="item s-100 l-70 main-article__content">
			<div class="item s-100 main-article__title">
				<h1 class="h2">Propiedades terapéuticas del gusano laqato contra las enfermedades respiratorias mas comunes de la región de Puno 2011</h1>
			</div>
			<div class="item">
				<div class="div">
					<p>Debido a la problemática de enfermedades respiratorias en nuestra región es que nuestras investigadoras y egresadas ÁLVAREZ HUANCA, VERÓNICA y CJUIRO GALLEGOS, LIZ SANDRA&nbsp; plantearon realizar un preparado a base del gusano Laq´ato el que desde tiempos ancestrales se le ha utilizado y al cual se le atribuyen propiedades antitusígenas y de alivio de enfermedades respiratorias en toda nuestra región. El hábitat y ciclo de vida del gusano Laq’ato lo realiza en la Tika.</p>

						<p>La Tika es una planta oriunda del altiplano puneño que se encuentra situada en zonas rocosas de los cerros de la provincia de Moho, Azángaro, Huancané, etc. Esta planta crece a una altura de de 3850 msnm aproximadamente. Y se le encuentra por grupos en determinadas zonas. Su tronco es en forma circular de color negro y amarillo, sus hojas son de color verde y marrón y largas también es espinosa y tiene espinas en forma de uñas como la del gato por lo que también se le denomina como la uña de gato serrana; su tallo crece aproximadamente 1.50 m de altura con un casquete donde se desarrolla la larva del gusano laq´ato.</p>

						<p>Cuando llega el invierno la mazorca de la planta Tika se marchita y es el lugar donde la mariposa nocturna coloca sus huevos luego de estas emergen los pequeños gusanos de apenas algunos milímetros (1-2mm), las larvas se alimentan de la planta (de su tejido de almacenamiento y savia), estas larvas son muy voraces ya que al poco tiempo alcanzan algunos centímetros llegando incluso hasta 5cm de tamaño y muy engordadas, por su puesto en el metabolismo convirtieron estas sustancias (carbohidratos) de la planta en grasa de almacenamiento, es allí donde se encuentran los principios activos de acción farmacológica que alivia los síntomas de la tos actuando como surfactante en el proceso de la tos.</p>

						<p><img alt="Propiedades terapéuticas de gusano laqato contra enfermedades respiratorias" src="{{ asset('imgs/propiedades-terapeuticas-de-gusano-laqato.png') }}" style="height:396px; width:288px"></p>

						<p>Las propiedades farmacológicas del gusano Laq’ato son Surfactante, Lubricante, Antibiótico, Desinflamante, Expectorante, Antitusígeno, Broncodilatador, Fluidificante. Se propone la forma farmacéutica de Jarabe en base a gusano Laq´ato utilizando técnicas apropiadas.</p>

						<p>Si deseas saber más sobre la investigación puedes encontrarla completa aquí:</p>

						<p><a href="{{ asset('pdf/propiedades-terapeuticas-de-gusano-laqato.pdf')}}">Propiedades terapéuticas de gusano laqato</a></p>
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
              <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/institutoSJB/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FinstitutoSJB%2F&amp;locale=es_ES&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 340px; height: 500px;"><iframe name="f8171483edf872aa2" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="./Propiedades terapéuticas de gusano laqato_files/page.html" style="border: none; visibility: visible; width: 340px; height: 500px;" class=""></iframe></span></div>
            </div>
		</div>
	</div>
</section></main>

@endsection