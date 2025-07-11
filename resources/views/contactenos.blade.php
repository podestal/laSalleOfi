@extends('layouts.Menu')
@section('title', 'Contáctenos / Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/contactenos.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<section class="main-contact">
    <div class="container full header">
        
        <div class="container s-100 item main-form">
            <div class="item container s-100 m-60 main-form__formulario">
                <div class="item s-100">
                    <h2 class="main-form__formulario--subtitle1">Escribenos y te contactaremos inmediatamente</h2>
                </div>
                <div class="item s-80 main-contact__form">
                    <form action="{{ route('contactenos.enviar') }}" method="POST">
                        @csrf
                        <label for="txtConsult">¿Cual es su consulta?</label><br>
                        <textarea name="txtConsult" id="txtConsult" cols="30" rows="10" title="Consulta" required></textarea><br>
                        @error('txtConsult')
                            <span id="errorConsult" style="color: red;">{{ $message }}</span><br>
                        @enderror
                
                        <label for="txtNames">Nombre Completo:</label><br>
                        <input type="text" id="txtNames" name="txtNames" required title="Nombre Completo"><br>
                        @error('txtNames')
                            <span id="errorNames" style="color: red;">{{ $message }}</span><br>
                        @enderror
                
                        <label for="txtEmail">Correo Electrónico:</label><br>
                        <input type="email" required id="txtEmail" name="txtEmail" title="Correo Electrónico"><br>
                        @error('txtEmail')
                            <span id="errorEmail" style="color: red;">{{ $message }}</span><br>
                        @enderror
                
                        <label for="txtPhone">Celular:</label><br>
                        <input type="text" id="txtPhone" name="txtPhone" title="Celular"><br>
                        @error('txtPhone')
                            <span id="errorPhone" style="color: red;">{{ $message }}</span><br>
                        @enderror
                
                        <button type="submit">Enviar</button>
                    </form>
                    <div id="mensaje" style="color:#38a63f;padding-bottom: .5em;text-align: center;">
                        @if(session('mensaje'))
                            {{ session('mensaje') }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="item s-100 m-40 main-form__contact">
                <h2 class="main-form__contact--subtitle2">Contáctanos y responderemos al instante</h2>
                <ul class="main-form__contact--list">
                    <li><i class="fa fa-fw fa-envelope"></i> Correo Electrónico
                        <ul>
                            <li><i class="fa fa-check"></i> info@sjb-lasalle.edu.pe</li>
                        </ul>
                    </li>
                    <li><i class="fab fa-fw fa-whatsapp"></i> Número de contacto
                        <ul>
                            <li><i class="fa fa-check"></i>  +51 999 177 023</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-map-marker-alt"></i> Dirección 
                        <ul>
                            <li><i class="fa fa-check"></i> Jr. San Martin 896 Juliaca</li>
                        </ul>
                    </li>
                    <li><i class="fa fa-clock"></i> Nuestro horario de atención 
                        <ul>
                            <li><i class="fa fa-check"></i> 08:00 am a 12:00 pm</li>
                            <li><i class="fa fa-check"></i> 03:00 pm a 06:00 pm</li>
                        </ul>
                    </li>
                </ul>
                <img class="main-form__contact--img" src="{{asset('imgs/escudo-instituto-san-juan-bautista-la-salle-juliaca.png')}} " alt="">
            </div>
        </div>
        <div class="item s-100 container main-contact__maps">
            <div class="item s-100">
                <h2 class="main-contact__subtitle">Puedes Visitarnos y estaremos para atenderte</h2>
                <iframe class="main-contact__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.725916149179!2d-70.12649945390378!3d-15.492011286750405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x238db5a9286382ea!2sInstituto+Superior+Tecnol%C3%B3gico+San+Juan+Bautista+La+Salle!5e0!3m2!1ses!2spe!4v1553615536691" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/Forms.js') }}"></script>

@endsection