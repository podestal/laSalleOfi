@extends('layouts.Menu')
@section('title', 'Bolsa de Trabajo | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/nosotros/bolsadetrabajo.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section class="main-blog">
    <div class="container full header">
        <div class="item s-100 header__banner">
            <img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="" class="main-contact__img">
            <div class="header__title">
                <h1>Bolsa de Trabajo</h1>
                <p>Las mejores ofertas de trabajo para nuestros alumnos y egresados</p>
            </div>
        </div>



        <div class="item s-100 call-to-action" style="text-align: center; padding: 30px; background-color: #67d670; border-radius: 10px; margin-top: 20px;">
            <h2 style="color: #002f6c; margin-bottom: 10px;">¿Deseas solicitar un trabajo?</h2>
            <p style="margin-bottom: 20px; color: #333;">
                Accede fácilmente a la plataforma institucional para enviar tu solicitud de trabajo o encontrar oportunidades disponibles.
            </p>
            <a href="http://sanjuanbautista.q10.com" 
            class="btn" 
            style="padding: 12px 25px; font-size: 16px; background-color: #4a9e4e; color: white; text-decoration: none; border-radius: 5px;">
                Solicitar Trabajo
            </a>
        </div>





        <div class="item container s-100 main-blog__item">
            <div class="item s-100 m-60 l-70">
                <div class="item s-100 container main-blog__content">
                    <div class="item s-100 l-30 main-blog__content--img">
                        <img src="{{asset('imgs/14963350_1028491087260004_8628035587142387830_n1.jpg')}}" alt="">
                    </div>
                    <div class="item s-100 l-70 main-blog__content--description">
                        <span class="categoria">FARMACIA</span>
                        <h2>
                            <a href="">
                                Trabajo para egresados o estudiantes de últimos semestres en farmacia
                            </a>
                        </h2>
                        <span class="fecha">Fecha de Publicación: 2020-09-17 17:24:59</span>
                        <p>
                            Se requiere egresados o estudiantes de &uacute;ltimos semestres de Farmacia que deseen acomodar su horario para trabajar en una farmacia, comunicarse al n&uacute;mero 990920000, preguntar por la Dra. Ruth.
                        </p>
                    </div>
                </div>
                <div class="item s-100 container main-blog__content">
                    <div class="item s-100 l-30 main-blog__content--img">
                        <img src="{{asset('imgs/shutterstock-549938128_41-126653_201902111643571.jpg')}}" alt="">
                    </div>
                    <div class="item s-100 l-70 main-blog__content--description">
                        <span class="categoria">FARMACIA</span>
                        <h2>
                            <a href="">
                                Señorita Técnico en Farmacia para trabajar en Lampa
                            </a>
                        </h2>
                        <span class="fecha">Fecha de Publicación: 2020-08-29 11:38:12</span>
                        <p>
                            Se&ntilde;orita T&eacute;cnico en Farmacia para trabajar en Lampa, comunicarse al 913037929
                        </p>
                    </div>
                </div>
            </div>
            <div class="item s-100 m-40 l-30 container main-blog__aside">
                <div class="item s-100 main-blog__aside--list">
                    <h3>OTRAS PUBLICACIONES</h3>
                    <ul>
                        <li><i class="fa fa-check"></i> <a href="">Trabajo para egresados o estudiantes de últimos semestres en</a></li>
                        <li><i class="fa fa-check"></i> <a href="">Señorita Técnico en Farmacia para trabajar en Lampa</a></li>
                    </ul>
                </div>
                <div class="item s-100">
                    <div class="fb-page" data-href="https://www.facebook.com/institutoSJB/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/institutoSJB/" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/institutoSJB/">Instituto San Juan Bautista de La Salle Juliaca</a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection