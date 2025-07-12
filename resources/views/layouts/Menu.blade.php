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
 
           <div class="item s-100 m-50 l-25">
 
             <h2 class="main-footer__title h2">CONTÁCTENOS</h2>
 
             <ul class="main-footer__list">
 
               <li><i class="fa fa-fw fa-envelope"></i> info@sjb-lasalle.edu.pe</li>
 
               <li><i class="fab fa-fw fa-whatsapp"></i> +51 999 177 023</li>
 
               <li class="main-footer__list--map"><a
                   href="https://www.google.com/maps/place/Instituto+Superior+Tecnol%C3%B3gico+San+Juan+Bautista+La+Salle/@-15.4923772,-70.1264648,17z/data=!4m8!1m2!2m1!1sinsituto+san+juan+bautista+la+salle+juliaca!3m4!1s0x0:0x238db5a9286382ea!8m2!3d-15.4919737!4d-70.1252228"
                   target="_blank"><span class="fa fa-4x fa-map-marker-alt"></span></a></li>
 
               <li class="main-footer__list--dir">Jr. San Martin 896 Juliaca</li>
 
             </ul>
 
           </div>
 
           <div class="item s-100 m-50 l-25">
 
             <h2 class="main-footer__title h2">Enlaces</h2>
 
             <ul class="main-footer__list">
 
               <li><a href="{{route('nosotros')}}" class="linkMenu">Nosotros</a></li>
 
               <li><a href="{{route('admision')}}" class="linkMenu">Admisión</a></li>
 
               <li><a href="{{route('carreras')}}" class="linkMenu">Carreras Técnicas</a></li>
 
               <li><a href="{{route('trabajeconNosotros')}}" class="linkMenu">Trabaje con Nosotros</a></li>
 
               <li><a href="{{route('contactenos')}}" class="linkMenu">Contáctenos</a></li>

               <li><a <a href="http://sanjuanbautista.q10.com" class="linkMenu">Alumnos</a></li>

               <li><a href="https://sanjuanbautista.q10.com/SolicitudesInstitucionales/NuevaSolicitud" class="linkMenu">
                Postula Aqui
              </a></li>
 
             </ul>
 
           </div>
 
           <div class="item s-100 m-50 l-25">

            <h2 class="main-footer__title h2">PROYECTOS</h2>
        
            <ul class="main-footer__list">
        
                <li><i class="fa fa-check"></i> <a href="{{ route('propiedadeslaqato') }}">Terapeuticas gusano laqato</a></li>
                <li><i class="fa fa-check"></i> <a href="{{ route('vinoAjenjo') }}">Vino medicinal de ajenjo</a></li>
                <li><i class="fa fa-check"></i> <a href="{{ route('jaleadeSabila') }}">JALEA A BASE DE SABILA LINAZA</a></li>
                <li><i class="fa fa-check"></i> <a href="{{ route('farmaceuticaFrutoseco') }}">FORMA FARMACEUTICA FRUTO SECO</a></li>
                <li><i class="fa fa-check"></i> <a href="{{ route('fabricaciondeoximielito') }}">ELABORACIÓN DE OXIMIELITO</a></li>
        
            </ul>
        
          </div>
 
           <div class="item s-100 m-50 l-25">
 
             <h2 class="main-footer__title h2">SAN JUAN BAUTISTA</h2>
 
             <div class="footer-content">
 
               <ul class="main-footer__list">
 
                 <li>Juliaca - Puno - Perú</li>
 
               </ul>
 
               <div class="socials socials-footer">
 
                 <a href="https://www.facebook.com/institutoSJB/" target="_blank" class="icon icon-facebook"><span class="fab fa-facebook-f"></span></a>

                 <a href="https://wa.me/51999177023?text=Hola%2C%20quiero%20más%20información%20sobre%20las%20carreras." class="icon"><span class="fab fa-whatsapp"></span></a>
 
                 <!--<a href="     " class="icon icon-twitter" target="_blank"><span class="fab fa-twitter"></span></a>
 
                 <a href="     " class="icon icon-youtube"><span class="fab fa-youtube"></span></a>
 
                 <a href="     " class="icon icon-google"><span class="fab fa-google-plus-g"></span></a>-->

                    </div><br>
               </div>
 
               <div class="">
 
                 <!--<a style="font-size:.7em;color:white" href="https://www.freepik.es/fotos-vectores-gratis/ninos">Vector
                   de niños creado por freepik - www.freepik.es</a><br>
 
                 <a style="font-size:.7em;color:white" href="https://www.freepik.es/fotos-vectores-gratis/mano">Vector de
                   mano creado por freepik - www.freepik.es</a><br>
 
                 <a style="font-size:.7em;color:white" href="https://www.freepik.es/fotos-vectores-gratis/fondo">Vector
                   de fondo creado por macrovector - www.freepik.es</a>-->
 
               </div>
 
             </div>
 
           </div>
 
         </div>

          <div class="item m-100 abcenter">
  
            <p>
              &copy; 2025 San Juan Bautista. All rights reserved. Designed by <strong>FJH Devs</strong>.
            </p>
  
          </div>
 
         <div class="item m-100 abcenter">
 
         </div>
 
       </div>
 
    </footer>

   </div>
 
  <div id="unique-modal" class="unique-modal">
    <div class="unique-modal-content">
      <span class="unique-close">&times;</span>
      <h2 class="unique-title">APERTURAMOS MATRÍCULAS 2025-II</h2>
      <p class="unique-subtitle"><strong>Cronograma</strong></p>
      <ol class="unique-list">
        <li>Inscripción desde el 1ro de Julio</li>
        <li>Examen de admisión 24 de Agosto</li>
        <li>Matrícula nuevos del 25 al 29 de Agosto</li>
        <li>Inicio de labores académicas 1 de Septiembre</li>
      </ol>
      <table class="unique-table">
        <tr>
          <th>Turnos</th>
          <th>Mañana</th>
          <th>Tarde</th>
          <th>Noche</th>
        </tr>
        <tr>
          <td>Fisioterapia</td>
          <td></td>
          <td>X</td>
          <td></td>
        </tr>
        <tr>
          <td>Prótesis Dental</td>
          <td>X</td>
          <td>X</td>
          <td></td>
        </tr>
        <tr>
          <td>Optometría</td>
          <td></td>
          <td></td>
          <td>X</td>
        </tr>
        <tr>
          <td>Farmacia</td>
          <td>X</td>
          <td>X</td>
          <td></td>
        </tr>
      </table>
      <button class="unique-btn">Matricúlate aquí</button>
      <a href="{{ asset('pdf/ADMISION 2025 I.pdf') }}" target="_blank"><button class="unique-btn">Ver Resultados Admisión 2025-I</button>
      </a>

    </div>
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
  // Muestra el modal automáticamente al cargar la página
window.addEventListener("load", function () {
    document.getElementById("unique-modal").style.display = "block";
});

// Cierra el modal al hacer clic en la 'X'
document.querySelector(".unique-close").addEventListener("click", function () {
    document.getElementById("unique-modal").style.display = "none";
});

// Cierra el modal si el usuario hace clic fuera de él
window.addEventListener("click", function (event) {
    let modal = document.getElementById("unique-modal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
</script>


   <script src="{{asset('js/ed-grid.js')}}"></script>
   <script>
     edgrid.menu('main-nav', 'main-menu');
   </script>
 
 </body>
</html>