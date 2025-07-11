@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/nosotros/titulacion.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
  <div class="item s-100 m-100 header__banner">
	<img src="{{ asset('imgs/header-instituto-san-juan-bautista-la-salle-juliaca.jpg') }}" alt="" class="main-contact__img">
	<div class="header__title">
		<h1>EL MOMENTO ES AHORA <br> <span>¡TITÚLATE!</span></h1>
		<p>y abre las puertas a un futuro exitoso</p>
	</div>
</div>

<section class="pack-section">
    <h2>PACK DE TITULACIÓN</h2>
    <p>¡Egresado!. Obtén tu título profesional de forma rápida y sin complicaciones, mientras accedes a oportunidades únicas para impulsar tu carrera. ¡Tu futuro brillante comienza aquí, contáctanos hoy mismo y sé parte de este emocionante viaje hacia el éxito!</p>
</section>

<section class="includes-section">
    <h2>¿QUÉ CONTIENE EL PACK DE TITULACIÓN?</h2>
    <div class="icons-container">
      <div class="icon-box">
        <a href="{{ asset('pdfs/certificado.pdf') }}" download="Certificado_de_Educacion_Superior.pdf">
            <img src="{{ asset('imgs/certificado.png') }}" alt="Certificado de Educación Superior">
        </a>
        <p>Certificado de Educación Superior</p>
      </div>
      <div class="icon-box">
        <a href="{{ asset('pdfs/constancia.pdf') }}" download="Constancia_de_Egresado.pdf">
            <img src="{{ asset('imgs/prestamo.png') }}" alt="Constancia de Egresado">
        </a>
        <p>Grados Academicos</p>
      </div>
      <div class="icon-box">
        <a href="{{ asset('pdfs/diploma.pdf') }}" download="Constancia_de_Bachiller.pdf">
            <img src="{{ asset('imgs/diploma-de-graduacion.png') }}" alt="Diploma de Graduación">
        </a>
        <p>Titutlo Emitido por el Instituto</p>
      </div>
    </div>
  </section>


  <section class="requirements-section">
    <div class="requirements-content">
        <h2>REQUISITOS PARA LA TITULACION:</h2>
        <ul>
            <li>Certificado de estudios que acredite la aprobación del plan de estudios correspondiente a un programa de estudios con un mínimo de ciento veinte (120) créditos.</li>
            <li>Certificado que acredite el conocimiento de un idioma extranjero o de una lengua originaria.</li>
            <li>Constancia de las experiencias formativas en situaciones reales de trabajo. (consolidado).</li>
            <li>Constancia de no adeudo emitido por la Administración</li>
            <li>Constancia de no adeudo emitido por la Biblioteca del Instituto</li>
            <li>Comprobante de pago por el concepto</li>
            <li>Copia del DNI</li>
            <li>Tres (03) fotografías tamaño pasaporte, reciente y a colores en fondo blanco</li>
        </ul>
    </div>
</section>

<section class="price-section">
    <h2>OTORGAMIENTO DE CERTIFICACIÓN Y CONSTANCIA</h2>
    <div class="icon-box" style="text-align: center;">
      <a href="{{ asset('pdf/Otorgamiento-Certificacion-Constancia.pdf') }}" download="Otorgamiento-Certificacion-Constancia.pdf"style="text-decoration: none; color: inherit;">
          <img src="{{ asset('imgs/logocertificado.png') }}" alt="Título de Profesional"style="width: 100px; height: auto; margin-bottom: 10px;">
          <br>
          <span style="display: inline-block; margin-top: 5px; padding: 6px 12px; background-color: #3490dc; color: white; border-radius: 5px; font-size: 14px;">
              Descargar
          </span>
      </a>
      <p style="margin-top: 10px;">Modalidad de Titulación</p>
  </div>
  
  
</section>
@endsection
