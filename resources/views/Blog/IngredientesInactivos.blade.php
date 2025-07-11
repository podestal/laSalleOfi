@extends('layouts.Menu')
@section('title', 'Contáctenos / Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/BlogCss/IngredientesInactivos.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')

<main><section class="main-article">
	<div class="container">
		<div class="item s-100 l-70 main-article__content">
			<div class="item s-100 main-article__title">
				<h1 class="h2">Ingredientes inactivos de fármacos también tienen efectos</h1>
			</div>
			<div class="item">
				<div class="div">
					<p>Cuando pensamos en un medicamento solemos recordar el principio activo que lo hace valioso para tratar una enfermedad. Sin embargo, hay una gran cantidad de sustancias que también tomamos con los fármacos, que se consideran ingredientes inactivos, pero son importantes para que una pastilla tenga una estructura o para que podamos absorber bien su contenido.</p> <p><img alt="Ingredientes inactivos de farmacos tambien tienen efectos" src="{{ asset('imgs/Ingredientes inactivos de farmacos tambien tienen efectos.png') }}" style="height:200px; width:980px"><p>

Y, a pesar de considerarse inactivos, estos ingredientes pueden tener efectos sobre la salud. Hace unos días, un equipo del Brigham and Women’s Hospital y el Massachusetts Institute of Technology, ambos de Boston (Estados Unidos), publicaba en <em>Science Translational Medicine</em> un análisis en el que se calculaba que la mayor parte de las medicinas prescritas con mayor frecuencia en EE UU, contienen al menos un ingrediente capaz de provocar una reacción adversa a personas sensibles.</p>

<p>Para la mayor parte de los pacientes, una cantidad ínfima de fructosa o de lactosa es inocua, pero no sucede lo mismo para alguien alérgico. Giovanni Traverso, médico del Brigham y uno de los autores del artículo, comenzó a interesarse por estos efectos adversos hace cinco años a partir de su relación con un paciente celíaco que tenía problemas con el omeprazol, un fármaco habitual para tratar la acidez de estómago. El estudio encontró 354.597 ingredientes inactivos en 42.052 medicamentos orales analizados. Más del 90% de esos fármacos contenían al menos un ingrediente que puede provocar reacciones alérgicas o problemas estomacales a personas sensibles. En total, alrededor del 45% de los medicamentos contenían lactosa y el 33% algún colorante.</p>

<p>Cristina Avendaño, presidenta de la Sociedad Española de Farmacología Clínica, explica que en Europa existe una información detallada sobre los ingredientes inactivos de los fármacos con potencial dañino para personas alérgicas o intolerantes. “Se identifica muy bien la diferencia entre un alérgico y un intolerante, al gluten, por ejemplo”, señala. “Para el primero, cualquier cantidad es dañina, y para el segundo, se especifica la cantidad que contiene para que sepa si está por encima o por debajo de la que genera daño”, añade.</p>

<p>Para limitar el riesgo de los excipientes, los fabricantes siguen unas pautas. Según explica Antonio Martín, director técnico de la farmacéutica Sanofi, en primer lugar se comprueba que no hay interacciones entre los excipientes y el principio activo y que estos permiten que la dosis de medicamento sea homogénea. Después, se seleccionan los excipientes tolerados por la gran mayoría de la población y, en general, para reducir riesgos se emplean materiales utilizados en otros productos de consumo humano habitual.</p>

<p>La Agencia Española de Medicamentos y Productos Sanitarios mantiene <a href="https://www.aemps.gob.es/informa/circulares/medicamentosUsoHumano/2018/docs/circular_1-2018-actualizacion-excipientes-medicamentos.pdf">una lista</a> de excipientes que actualiza regularmente. Esa lista es un reflejo del conocimiento acumulado, que ha variado mucho en las últimas décadas. Según cuenta Avendaño, “antes había muchos jarabes en solución alcohólica y eso para los niños pequeños es un problema”. Martín explica que también se han sustituido los disolventes orgánicos, que podían suponer un riesgo, sobre todo para personas que toman medicamentos durante toda su vida, por agua purificada. Aunque, según el análisis publicado en <em>Science Translational Medicine,</em> el gluten está presente en muchos fármacos, ya hay compañías que han eliminado la presencia de gluten y látex como excipientes.</p>

<p>Otro de los elementos que pueden provocar reacciones en algunas personas son los fragmentos de material genético viral que pueden ir unidos a lactosas o caseínas, que son de origen animal. “Si no tienen un certificado de que no hay riesgo viral, no las utilizamos”, apunta Martín. Además, continúa, “en los últimos meses la industria ha completado un análisis total de materiales, para evaluar y reducir el contenido de metales pesados que, como es conocido, están presentes en todas la materias que nos rodean y que usamos cada día”.</p>

<p>Avendaño cree que uno de los espacios en los que puede haber cierto riesgo en torno a los excipientes es la sustitución de medicamentos. “Tenemos genéricos que son intercambiables en cuanto a principio activo, pero no en cuanto a excipientes. A una persona le pueden cambiar la pastilla blanca por la amarilla y se pueden generar problemas de confusión”, afirma. “Este juego de las sustituciones de medicamentos se hereda de sitios que no tienen precios de referencia, como sucede en España. A nosotros no nos hace falta la competitividad entre marcas. Aquí, una vez que hay un genérico, todos los medicamentos de ese principio activo, incluido el original, bajan a un precio de referencia. La sustitución no le supone beneficio al sistema y genera desconfianza en los pacientes”, asevera.</p>

<p>Los excipientes, como parte esencial de los medicamentos, se deberá incluir dentro de los protocolos que están haciendo la medicina cada vez más personalizada. Junto a la información que se reciba del médico, Martín recomienda aprovechar que la información sobre sustancias que pueden hacer daño a alérgicos e intolerantes se especifica en los prospectos. Cuando se tiene alguno de estos problemas, leerlos con detalle puede ahorrar problemas.</p>
				</div>
			</div>
		</div>
		<div class="item s-100 l-30">
			<div class="item s-100 main-article__aside--list">
				<h3>OTRAS PUBLICACIONES</h3>
					<ul>
  						<li><i class="fa fa-check"></i> <a href="{{ route('IngredientesInactivos') }}">Ingredientes inactivos de fármacos también tienen efectos</a></li>
  						<li><i class="fa fa-check"></i> <a href="{{ route('OpenDaysalle') }}">Open Day 2019 - San Juan Bautista La Salle</a></li>
  						<li><i class="fa fa-check"></i> <a href="{{ route('razones') }}">7 Razones por las que deberías estudiar una Carrera Técnica</a></li>
					</ul>
			</div>
			<div class="item s-100 main-article__aside--face">
              <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/institutoSJB/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=0&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FinstitutoSJB%2F&amp;locale=es_ES&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 340px; height: 500px;"><iframe name="fe1fd8a6754690a32" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="./Ingredientes inactivos de fármacos tienen efectos_files/page.html" style="border: none; visibility: visible; width: 340px; height: 500px;" class=""></iframe></span></div>
            </div>
		</div>
	</div>
</section></main>
@endsection