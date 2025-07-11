@extends('layouts.Menu')
@section('title', 'Trabaje con nosotros | Instituto San Juan Bautista La Salle')

<link rel="stylesheet" type="text/css" href="{{ asset('css/TransparenciaCss/Personal.css') }}">
<link rel="shortcut icon" href="{{ asset('imgs/escudo.ico') }}">

@section('content')
<div class="content-container">
    <div class="section-wrapper">
        <div class="perfil-puestos-section">
            <h2>PERFIL DE <span>PUESTOS</span></h2>
            <p>¡Descubre el manual del perfil de puestos de nuestra institución educativa! Este documento detalla las descripciones, responsabilidades y requisitos de cada puesto dentro de nuestra organización.</p>
            <div class="perfil-puestos-card">
                <img src="{{ asset('imgs/pdf.png') }}" alt="Manual">
                <p>Manual <br> Perfil de Puestos</p>
                <a href="{{ asset('documents/Manual_Perfil_de_Puestos.pdf') }}" download>Descargar</a>
            </div>
        </div>

        <div class="nuestros-docentes-section">
            <h2>NUESTROS <span>DOCENTES</span></h2>
            <p>¡Descubre a nuestra destacada plana de docentes! Encontrarás a un equipo de profesionales altamente cualificados y apasionados por la enseñanza, especializados en cada uno de los programas académicos que ofrecemos.</p>
            
            <div class="docentes-table-container">
                <div class="table-controls">
                    <select>
                        <option>Enfermeria</option>
                        <option>Protesis Dental</option>
                        <option>Farmacia</option>
                        <option>Entrenamiento Deportivo</option>
                        <option>Fisio Terapia y Rehabilitacion</option>
                        <option>Optometria</option>
                        <!-- Más opciones aquí -->
                    </select>
                    <p>Entradas</p>
                    <div class="search-box">
                        <label for="search">Búsqueda</label>
                        <input type="text" id="search" placeholder="Búsqueda en tabla">
                    </div>
                </div>
                
                <table>
                    <thead>
                        <tr>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Estado</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AVILA BERNAL</td>
                            <td>MIGUEL YESID</td>
                            <td>Activo</td>
                            <td><a href="#">CV</a></td>
                        </tr>
                        <!-- Más filas aquí -->
                    </tbody>
                </table>
                
                <div class="table-footer">
                    <p>información</p>
                    <div class="pagination">
                        <a href="#">anterior</a>
                        <span>1</span>
                        <a href="#">2</a>
                        <a href="#">siguiente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection