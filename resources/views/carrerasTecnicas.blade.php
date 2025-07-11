@extends('layouts.Menu')
@section('title', 'Carreras Técnicas Profesionales en el Instituto')

<link rel="stylesheet" type="text/css" href="{{ asset('css/carreras.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">


@section('content')
<section>
    <div class="container-main-collage">
        <div class="container">
            <div class="item s-100 m-70 container">
            
                <div class="item s-100 m-100 l-100 main-collage" style="width: 1000px; height: 250px;">
                    <div class="main-collage__content">
                        <h2 class="main-collage__content--title">FARMACIA</h2>
                        <p class="main-collage__content--description">Profesional técnico en Farmacia</p>
                        <div class="main-collage__content--icons">
                            <a href="https://www.facebook.com/institutoSJB/" class="icon"><span class="fab fa-facebook-f"></span></a>
                            <!--<a href="https://twitter.com/institutoSJB" class="icon"><span class="fab fa-twitter"></span></a>-->
                            <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
                        </div><br>
                        <a href="{{route('farmacia')}}" class="btn btn-white">VER CARRERA</a>
                    </div>
                    <div class="main-collage__clip1"></div>
                    <!-- <img class="main-admission__banner--img" src="https://sjb-lasalle.edu.pe/imgs/blue-print.png" alt=""> -->
                    <img src="{{ asset('imgs/carrera-tecnica-de-farmacia-1.jpg')}} " alt="$v[&#39;nam_img&#39;]">

                </div>
            
                <div class="item s-100 m-100 l-100 main-collage" style="width: 1000px; height: 250px;">
                    <div class="main-collage__content">
                        <h2 class="main-collage__content--title">FISIOTERAPIA Y REHABILITACIÓN</h2>
                        <p class="main-collage__content--description">Profesional técnico en Fisioterapia y Reabilitacion</p>
                        <div class="main-collage__content--icons">
                            <a href="https://www.facebook.com/institutoSJB/" class="icon"><span class="fab fa-facebook-f"></span></a>
                            
                            <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
                        </div><br>
                        <a href="{{route('fisioterapiayRehabilitacion')}}" class="btn btn-white">VER CARRERA</a>
                    </div>
                    <div class="main-collage__clip1"></div>
                    <!-- <img class="main-admission__banner--img" src="https://sjb-lasalle.edu.pe/imgs/blue-print.png" alt=""> -->
                    <img src="{{asset('imgs/carrera-tecnica-de-fisioterapia-y-rehabilitacion-1.jpg')}} " alt="$v[&#39;nam_img&#39;]">

                </div>
            
                <div class="item s-100 m-100 l-100 main-collage" style="width: 1000px; height: 250px;">
                    <div class="main-collage__content">
                        <h2 class="main-collage__content--title">PROTESIS DENTAL</h2>
                        <p class="main-collage__content--description">Profesional técnico en Protesis Dental</p>
                        <div class="main-collage__content--icons">
                            <a href="https://www.facebook.com/institutoSJB/" class="icon"><span class="fab fa-facebook-f"></span></a>
                            
                            <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
                        </div><br>
                        <a href="{{route('protesisDental')}}" class="btn btn-white">VER CARRERA</a>
                    </div>
                    <div class="main-collage__clip1"></div>
                    <!-- <img class="main-admission__banner--img" src="https://sjb-lasalle.edu.pe/imgs/blue-print.png" alt=""> -->
                    <img src="{{asset('imgs/carrera-tecnica-de-protesis-dental-1.jpg')}}" alt="$v[&#39;nam_img&#39;]">
                </div>

                 <!--<div class="item s-100 m-100 l-100 main-collage" style="width: 1000px; height: 250px;">
                    <div class="main-collage__content">
                        <h2 class="main-collage__content--title">ENTRENAMIENTO DEPORTIVO</h2>
                        <p class="main-collage__content--description">Profesional técnico en Entrenamiento Deportivo</p>
                        <div class="main-collage__content--icons">
                            <a href="https://www.facebook.com/institutoSJB/" class="icon"><span class="fab fa-facebook-f"></span></a>
                            <a href="https://twitter.com/institutoSJB" class="icon"><span class="fab fa-twitter"></span></a>
                            <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
                        </div><br>
                        <a href="{{route('entrenamientoDeportivo')}}" class="btn btn-white">VER CARRERA</a>
                    </div>
                    <div class="main-collage__clip1"></div>
                    <!-- <img class="main-admission__banner--img" src="https://sjb-lasalle.edu.pe/imgs/blue-print.png" alt=""> 
                    <img src="{{asset('imgs/entrenamiento.deportivo.jpg')}}" alt="$v[&#39;nam_img&#39;]">
                </div>-->

                <div class="item s-100 m-100 l-100 main-collage" style="width: 1000px; height: 250px;">
                    <div class="main-collage__content">
                        <h2 class="main-collage__content--title">ENFERMERIA TECNICA</h2>
                        <p class="main-collage__content--description">Profesional técnico en Enfermeria</p>
                        <div class="main-collage__content--icons">
                            <a href="https://www.facebook.com/institutoSJB/" class="icon"><span class="fab fa-facebook-f"></span></a>
                            
                            <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
                        </div><br>
                        <a href="{{route('enfermeria')}}" class="btn btn-white">VER CARRERA</a>
                    </div>
                    <div class="main-collage__clip1"></div>
                    <!-- <img class="main-admission__banner--img" src="https://sjb-lasalle.edu.pe/imgs/blue-print.png" alt=""> -->
                    <img src="{{asset('imgs/enfermeria.tecnica.jpg')}}" alt="$v[&#39;nam_img&#39;]">
                </div>
                <div class="item s-100 m-100 l-100 main-collage" style="width: 1000px; height: 250px;">
                    <div class="main-collage__content">
                        <h2 class="main-collage__content--title">OPTOMETRIA</h2>
                        <p class="main-collage__content--description">Profesional técnico en Optometria </p>
                        <div class="main-collage__content--icons">
                            <a href="https://www.facebook.com/institutoSJB/" class="icon"><span class="fab fa-facebook-f"></span></a>
                            
                            <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
                        </div><br>
                        <a href="{{route('optometria')}}" class="btn btn-white">VER CARRERA</a>
                    </div>
                    <div class="main-collage__clip1"></div>
                    <!-- <img class="main-admission__banner--img" src="https://sjb-lasalle.edu.pe/imgs/blue-print.png" alt=""> -->
                    <img src="{{asset('imgs/optometria.tecnica.jpg')}}" alt="$v[&#39;nam_img&#39;]">
                </div>
            </div>
            <div class="item container s-100 m-30">
                <div class="item s-100 main-collage__aside">
                    <ul>
                        <li><i class="fa fa-handshake"></i> <br>CONVENIOS INSTITUCIONALES</li>
                        <li><i class="fa fa-award"></i> <br>CALIDAD ACADEMICA</li>
                        <li><i class="fa fa-briefcase"></i> <br>ALTA EMPLEABILIDAD</li>
                        <li><i class="fa fa-building"></i> <br>INFRAESTRUCTURA</li>
                        <li><i class="fa fa-users"></i> <br>EQUIPO DOCENTES</li>
                        <li><i class="fa fa-user-tie"></i> <br>CONCEJERIA ACADEMICA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection