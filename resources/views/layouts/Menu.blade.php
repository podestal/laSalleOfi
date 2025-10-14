<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Instituto de Educación Superior Tecnológico Privado San Juan Bautista La Salle en Juliaca - Puno. Educacion de máxima calidad para tu formación profesional.">
	<meta name="keywords" content="instituto,educacion,superior,tecnologico,privado,juliaca,puno">

  <!-- favicon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('css/plantillaMenu.css') }}"> 
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v14.0&appId=TU_ID_DE_APP&autoLogAppEvents=1"></script>

</head>
<body>
   <div id="contenido" style="display: block;">

    <header class="main-header">
       <div class="container main-header__container full" id="headerContainer">
         
         <div class="item s-100 main-center menu-container">
          <a href="#" class="nav__logo">
            <img class="PublicHeader_publicHeader__logo-img" src="{{asset('imgs/logo-instituto-san-juan-bautista-la-salle-juliaca.svg')}}" alt="Logo">
          </a>
           <nav class="main-nav" id="main-nav">			
             <ul class="main-menu" id="main-menu">
               <li><a href="{{route('inicio')}}" class="linkMenu">INICIO</a></li>
               <li><a href="{{route('nosotros')}}" class="linkMenu">NOSOTROS</a>
                 <ul>
                  <li><a href="{{route('bienestar')}}" class="linkMenu">BIENESTAR ESTUDIANTIL</a></li>
                  <!--<li><a href="{{route('autoridades')}}" class="linkMenu">AUTORIDADES</a></li>-->
                  <li><a href="{{route('transparencia')}}" class="linkMenu">TRANSPARENCIA</a></li>
                  <li><a href="{{route('titulacion')}}" class="linkMenu">TITULACIÓN</a></li>
                  <li><a href="{{route('bolsadeTrabajo')}}" class="linkMenu">BOLSA DE TRABAJO</a></li>
                  <li><a href="{{route('proyectos')}}" class="linkMenu">PROYECTOS</a></li>
                 </ul>
               </li>
               <li><a href="{{route('admision')}}" class="linkMenu">ADMISION</a></li>
               <li class="parent-submenu"><a href="{{route('carreras')}}" class="linkMenu">CARRERAS TÉCNICAS</a>
                 <ul>
                   <li><a href="{{route('farmacia')}}">FARMACIA</a></li>
                   <li><a href="{{route('protesisDental')}}">PROTESIS DENTAL</a></li>
                   <li><a href="{{route('fisioterapiayRehabilitacion')}}">FISIOTERAPIA Y REHABILTACIÓN</a></li>
                   <!--<li><a href="{{route('entrenamientoDeportivo')}}">ENTRENAMIENTO DEPORTIVO</a></li>-->
                   <li><a href="{{route('enfermeria')}}">ENFERMERIA TECNICA</a></li>
                   <li><a href="{{route('optometria')}}">OPTOMETRIA</a></li>
                 </ul>
               </li>
               <li><a href="{{route('trabajeconNosotros')}}" class="linkMenu">TRABAJE CON NOSOTROS</a></li>
               <li><a href="{{route('contactenos')}}" class="linkMenu">CONTÁCTENOS</a></li> 
               
               <li class="parent-submenu"><a class="linkMenu">ALUMNOS</a>
                <ul>
                  <li><a href="http://sanjuanbautista.q10.com">INTRANET</a></li>
                  <li><a href="https://site2.q10.com/BibliotecasVirtuales/Estudiante?aplentInstitucion=424e3e45-1b5a-4f4f-bc30-e0e8150b79c0">BIBLIOTECA</a></li>
                  
                </ul>
              </li>
              <a href="https://sanjuanbautista.q10.com/SolicitudesInstitucionales/NuevaSolicitud" class="btn">
                Postula Aqui
              </a>
             </ul>
           </nav>
           <div class="nav-toggle" id="main-nav-toggle"></div>
         </div>
       </div>
    </header>
    
    <main>
      @yield('content')
    </main>

<footer class="main-footer">
  <div class="container">
    <div class="item container main-footer__container m-100 s-80">

      <!-- 1. CONTACTO -->
      <div class="item s-100 m-50 l-25">
        <h2 class="main-footer__title">CONTÁCTENOS</h2>
        <ul class="main-footer__list">
          <li><i class="fa fa-envelope"></i> <a href="mailto:info@sjb-lasalle.edu.pe">INFO@SJB-LASALLE.EDU.PE</a></li>
          <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/51999177023">+51 999 177 023</a></li>
          <li><i class="fa fa-map-marker-alt"></i> <a href="https://www.google.com/maps/place/Instituto+Superior+Tecnol%C3%B3gico+San+Juan+Bautista+La+Salle/@-15.4923772,-70.1264648,17z/data=!4m8!1m2!2m1!1sinsituto+san+juan+bautista+la+salle+juliaca!3m4!1s0x0:0x238db5a9286382ea!8m2!3d-15.4919737!4d-70.1252228" target="_blank">JR. SAN MARTÍN 896, JULIACA</a></li>
        </ul>
      </div>

      <!-- 2. NOSOTROS (SIN MODIFICAR) -->
      <div class="item s-100 m-50 l-25">
        <h2 class="main-footer__title h2">NOSOTROS</h2>
        <ul class="main-footer__list">
          <li>QUIENES SOMOS</li>
          <li>VISIÓN</li>
          <li>MISIÓN</li>
          <li>VALORES</li>
          <li>PRINCIPIOS</li>
        </ul>
      </div>

      <!-- 3. PROYECTOS -->
      <div class="item s-100 m-50 l-25">
        <h2 class="main-footer__title">PROYECTOS</h2>
        <ul class="main-footer__list">
          <li><a href="{{ route('propiedadeslaqato') }}">TERAPÉUTICAS GUSANO LAQATO</a></li>
          <li><a href="{{ route('vinoAjenjo') }}">VINO MEDICINAL AJENJO</a></li>
          <li><a href="{{ route('jaleadeSabila') }}">JALEA SÁBILA-LINAZA</a></li>
          <li><a href="{{ route('farmaceuticaFrutoseco') }}">FORMA FARMACÉUTICA FRUTO SECO</a></li>
          <li><a href="{{ route('fabricaciondeoximielito') }}">ELABORACIÓN OXIMIELITO</a></li>
        </ul>
      </div>

      <!-- 4. SAN JUAN BAUTISTA -->
      <div class="item s-100 m-50 l-25">
        <h2 class="main-footer__title">SAN JUAN BAUTISTA</h2>
        <p>JULIACA – PUNO – PERÚ</p>

        <!-- Estilos vistosos para los logos -->
        <style>
          .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            color: #fff;
            font-size: 22px;
            margin: 0 6px;
            transition: transform .3s ease, box-shadow .3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,.2);
          }
          .social-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0,0,0,.35);
          }
          .social-btn.fb  { background: linear-gradient(135deg,#1877F2,#42A5F5); }
          .social-btn.wsp { background: linear-gradient(135deg,#25D366,#00E676); }
        </style>

        <!-- Logos vistosos -->
        <div class="socials-footer">
          <a class="social-btn fb" href="https://www.facebook.com/institutoSJB/" target="_blank" aria-label="Facebook">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a class="social-btn wsp" href="https://wa.me/51999177023?text=HOLA%2C%20QUIERO%20MÁS%20INFORMACIÓN%20SOBRE%20LAS%20CARRERAS." target="_blank" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Copyright -->
    <div class="item m-100 abcenter">
      <p>&copy; {{ date('Y') }} SAN JUAN BAUTISTA. ALL RIGHTS RESERVED. DESIGNED BY <strong>FJH DEVS</strong>.</p>
    </div>
  </div>
</footer>

   </div>


<style>
 /* Estilos únicos para evitar conflictos */
.unique-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    font-family: Arial, sans-serif;
}

.unique-modal-content {
    background-color: #ffffff;
    margin: 10% auto;
    padding: 25px;
    border-radius: 10px;
    width: 30%;
    text-align: center;
    position: relative;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
}

.unique-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

.unique-close:hover {
    color: red;
}

.unique-title {
    color: #0056b3;
    font-size: 22px;
}

.unique-subtitle {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
}

.unique-list {
    text-align: left;
    padding-left: 20px;
}

.unique-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.unique-table th, .unique-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

.unique-table th {
    background-color: #f2f2f2;
}

.unique-btn {
    display: block;
    width: 100%;
    margin-top: 10px;
    padding: 10px;
    background-color: #0056b3;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.unique-btn:hover {
    background-color: #003d82;
}

/* Responsive styles */
/* Responsive styles */
@media screen and (max-width: 1024px) {
    .unique-modal-content {
        width: 40%;
        padding: 22px;
    }
}

@media screen and (max-width: 768px) {
    .unique-modal-content {
        width: 60%;
        margin: 12% auto;
        padding: 18px;
    }

    .unique-title {
        font-size: 20px;
    }

    .unique-subtitle {
        font-size: 16px;
    }

    .unique-table th, .unique-table td {
        font-size: 14px;
    }

    .unique-btn {
        padding: 12px;
    }
}

@media screen and (max-width: 480px) {
    .unique-modal-content {
        width: 90%;
        margin: 15% auto;
        padding: 14px;
    }

    .unique-title {
        font-size: 18px;
    }

    .unique-subtitle {
        font-size: 14px;
    }

    .unique-table th, .unique-table td {
        font-size: 12px;
    }

    .unique-btn {
        padding: 12px;
    }
}

</style>

<script>
  const MODAL_ID      = 'unique-modal';
  const CLOSE_BTN     = '.unique-close';
  const INTERVALO_MIN = 60;                    // <-- minutos entre cada aparición
  const STORAGE_KEY   = 'modalClosedTime';

  // helpers
  const $   = id => document.getElementById(id);
  const now = () => Date.now();

  function mostrarModal() {
    $(MODAL_ID).style.display = 'block';
  }
  function ocultarModal() {
    $(MODAL_ID).style.display = 'none';
    localStorage.setItem(STORAGE_KEY, now());
  }
  function tiempoRestante() {
    const closed = localStorage.getItem(STORAGE_KEY);
    return closed ? (INTERVALO_MIN * 60 * 1000) - (now() - closed) : 0;
  }

  // Lógica de inicio
  const falta = tiempoRestante();
  if (falta <= 0) {               // ya pasó el tiempo o es la primera vez
    mostrarModal();
  } else {                        // todavía no toca, esperamos el tiempo restante
    setTimeout(mostrarModal, falta);
  }

  // Cerrar con la “X”
  document.querySelector(CLOSE_BTN).addEventListener('click', ocultarModal);

  // Cerrar clic fuera
  window.addEventListener('click', e => {
    if (e.target === $(MODAL_ID)) ocultarModal();
  });
</script>


   <script src="{{asset('js/ed-grid.js')}}"></script>
   <script>
     edgrid.menu('main-nav', 'main-menu');
   </script>
 
 </body>
</html>