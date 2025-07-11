@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/nosotros/autoridades.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<main><div class="container full main-about header">
	<div class="item s-100 m-100 header__banner">
		<img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="" class="main-contact__img">
		<div class="header__title">
			<h1>Nuestras autoridades</h1>
			<p>Conoce más acerca de nuestras autoridades</p>
		</div>
	</div>

	<div class="item container s-100 main-about__content">
        <div class="section-title mb-10 display-medium-bold">
			
		</div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_01_5fade0c35f.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Mba. Jhoan Vega Villareal</div>
                        <div class="auto_item__desc text-small">Gerente general</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_02_9c97a2ef02.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Dra. Lorena Gaona Durand</div>
                        <div class="auto_item__desc text-small">Directora general</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_03_8f3370e84d.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Mg. Maria Elisa Kok Talavera</div>
                        <div class="auto_item__desc text-small">Directora de marketing</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_04_0ee54a36af.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Ing. Henry Emiliano Quinteros Hijar</div>
                        <div class="auto_item__desc text-small">Jefe de la escuela de Tecnologías de la Información</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_05_4d9cefa052.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Cheff. Juneth Valverde Gómez</div>
                        <div class="auto_item__desc text-small">Jefe de la escuela de Hotelería y Arte Culinario</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_06_2865348082.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Lic. Mirko Luis Bayetto Vasquez</div>
                        <div class="auto_item__desc text-small">Jefe de la escuela de Diseño y Comunicaciones, Modas</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_07_68bfd6048f.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Lic. Veruska Micaela Mori Insapillo</div>
                        <div class="auto_item__desc text-small">Jefe de la escuela de Gestión y Negocios</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_08_f8fb8b52b1.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Lic. Jannet Huamán Rosales</div>
                        <div class="auto_item__desc text-small">Jefe de la escuela de Salud</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_09_62a70d24c5.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Lic. Stewart Edilberto Aguinaga Valle</div>
                        <div class="auto_item__desc text-small">Jefe de la escuela de Banca y Finanzas</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_10_28ca86d287.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Dra. Jannet Margot Llanovarced Tupia</div>
                        <div class="auto_item__desc text-small">Jefe de Acreditación y Calidad Académica</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_11_0084a5f182.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Mag. Rita Grijalva Tejeda</div>
                        <div class="auto_item__desc text-small">Jefe de Educación Virtual</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_12_ecbf1881d5.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Mag. Liliana Beatriz Chaparro Huauya</div>
                        <div class="auto_item__desc text-small">Jefe de Investigación e Innovación educativa</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_13_678c011e28.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Mag. Alicia Mariella Morales Montenegro</div>
                        <div class="auto_item__desc text-small">Jefe de Oportunidades Laborales</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_14_13f1ae2181.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Lic. Silvia Elena Sumari Yarasca</div>
                        <div class="auto_item__desc text-small">Jefe de Gestión Docente</div>
                    </div>
                </div>
            </div>
            <div class="item_autoridades rounded-lg bg-white">
                <div class="auto_item">
                    <img class="auto_item__img" src="https://back.sise.edu.pe/uploads/Foto_autoridades_15_7c31602578.jpg">
                    <div class="p-4">
                        <div class="auto_item__nombre link-medium">Mag. Raúl Andrés Aguirre Quintana</div>
                        <div class="auto_item__desc text-small">Jefe de Secretaría General</div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>

</div></main>
@endsection