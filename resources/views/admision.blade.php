@extends('layouts.Menu')

@section('title', 'Admisión | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/admision.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section class="main-admission">
    <div class="container full">
        <div class="item s-100 main-admission__banner">
            <img src="{{asset('imgs/carrera-tecnica-de-farmacia-sjb-la-salle-juliaca.jpg')}} " alt="">
            <div class="main-admission__banner--title">
                <h1>Examen de Admisión I</h1>
                <p>30 de Marzo</p>
                <div class="container">
                    <div class="item s-20 main-admission__banner--direccion">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="item s-50 main-admission__banner--direccion">
                        Informes e Inscripciones
                        <br> Jr. San martin 868, Juliaca
                        <br> O al <i class="fab fa-fw fa-whatsapp"></i> +51 999 177 023
                    </div>
                </div>
            </div>--&gt;
            <div class="main-admission__banner--inicio">

                <!-- Inicio de clases: -->

                <!-- 1 de Setiembre -->

            </div>
        </div>
    </div>
    <div class="container full">

        <div class="item container s-100 m-70 main-admission__carreras">
            <div class="item s-100 main-admission__carreras--title">
                <h2 class="h1">Nuestras Carreras</h2>
            </div>
            <div class="item container s-100 main-admission__svg">
                <div class="item s-100 m-1-3">
                    
                        <img src="{{asset('imgs/carrera-tecnica-de-farmacia.png')}}" alt="">
                    <p>FARMACIA</p>
                </div>
                <div class="item s-100 m-1-3">
                    
                        <img src="{{asset('imgs/fisioterapia-y-rehabilitacion.png')}}" alt="">
                    <p>FISIOTERAPIA Y REHABILITACIÓN</p>
                </div>
                <div class="item s-100 m-1-3">
                    
                        <img src="{{asset('imgs/carrera-tecnica-de-protesis-dental.png')}}" alt="">
                    <p>PRÓTESIS DENTAL</p>
                </div>
                <div class="item s-100 m-1-3">
                    
                        <img src=" {{asset('imgs/carrera-tecnica-enfermeria.png')}}" alt="">
                    <p>ENFERMERIA TECNICA</p>
                </div>
                <div class="item s-100 m-1-3">
                    
                        <img src=" {{asset('imgs/imagen-de-optometria.png')}}" alt="">
                    <p>OPTOMETRIA</p>
                </div>
                <!--<div class="item s-100 m-1-3">
                    
                        <img src="{{asset('imgs/entrenamiento-deportivo.png')}}" alt="">
                    <p></p>
                </div>-->
            </div>
        </div>
        <div class="item s-100 m-30 main-admission__fecha">
            <h2>EXAMEN DE ADMISIÓN</h2>
            <div class="main-admission__fecha--icon">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="main-admission__fecha--numero">
                30
            </div>

        </div>

    </div>
    <div class="container full">

        <div class="item s-100 main-admission__inscripcion">

            <h2 class="h1">Inscripciones hasta el 29 de Marzo</h2>

        </div>

    </div>
    <div class="container full">

        <div class="item container full s-100 main-admission__contador">

            <div class="item s-100 main-admission__contador--title">

                <h3 class="h1">Corre, las inscripciones acaban en:</h3>

            </div>

            <div class="item container full s-100 main-admission__contador--horario">

                <div class="item s-25 main-admission__contador--dia">

                    <div id="dia" class="hora"></div>

                    <div class="main-admission__contador--diaTitle">días</div>

                </div>

                <div class="item s-25 main-admission__contador--hora">

                    <div id="hora" class="hora"></div>

                    <div class="main-admission__contador--diaTitle">horas</div>

                </div>

                <div class="item s-25 main-admission__contador--minuto">

                    <div id="minuto" class="hora"></div>

                    <div class="main-admission__contador--diaTitle">minutos</div>

                </div>

                <div class="item s-25 main-admission__contador--segundo">

                    <div id="segundo" class="hora"></div>

                    <div class="main-admission__contador--diaTitle">segundos</div>

                </div>

                <script>
                    function actualizarContadorPeru() {
                        // Fecha límite para las inscripciones (29 de marzo)
                        const fechaLimite = new Date('2025-03-29T23:59:59'); // Fecha y hora en que terminan las inscripciones
                
                        // Hora actual en Perú (UTC-5)
                        const ahora = new Date();
                        const horaPeru = new Date(ahora.getTime() - (5 * 60 * 60 * 1000));
                
                        // Calcular la diferencia entre la fecha límite y la hora actual
                        const diferencia = fechaLimite - horaPeru;
                
                        if (diferencia <= 0) {
                            document.getElementById("dia").textContent = '00';
                            document.getElementById("hora").textContent = '00';
                            document.getElementById("minuto").textContent = '00';
                            document.getElementById("segundo").textContent = '00';
                            return;
                        }
                
                        const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
                        const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
                        const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);
                
                        // Actualizar los elementos del contador
                        document.getElementById("dia").textContent = dias.toString().padStart(2, '0');
                        document.getElementById("hora").textContent = horas.toString().padStart(2, '0');
                        document.getElementById("minuto").textContent = minutos.toString().padStart(2, '0');
                        document.getElementById("segundo").textContent = segundos.toString().padStart(2, '0');
                    }
                
                    // Llamar a la función inicialmente
                    actualizarContadorPeru();
                
                    // Actualizar el contador cada segundo
                    setInterval(actualizarContadorPeru, 1000);
                </script>
                

            </div>

        </div>



    </div>
    <div class="container full">

        <div class="item container full s-100 main-admission__requisitos">

            <div class="item s-100 main-admission__requisitos--title">

                <h3 class="h1">Toma las riendas de tu futuro, postula ahora!</h3>

            </div>

            <div class="item s-100 m-40 main-admission__requisitos--subtitle">

                <h4>REQUISITOS:</h4>

            </div>

            <div class="item s-100 m-60 main-admission__requisitos--list">

                <ul>

                    <li><i class="fa fa-check"></i> &nbsp;&nbsp;Recibo de pago en caja</li>

                    <li><i class="fa fa-check"></i> &nbsp;&nbsp;Certificado de estudios secundarios originales</li>

                    <li><i class="fa fa-check"></i> &nbsp;&nbsp;Partida de nacimiento original</li>

                    <li><i class="fa fa-check"></i> &nbsp;&nbsp;Fotocopia de DNI, L.M. o B.I.M.</li>

                    <li><i class="fa fa-check"></i> &nbsp;&nbsp;02 Fotografías tamaño carnet</li>

                </ul>

            </div>

        </div>



    </div>
</section>


@endsection