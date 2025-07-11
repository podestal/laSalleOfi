<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nueva Postulación</title>
</head>
<body>
    <h2>Nueva Postulación</h2>

    <p><strong>Nombre Completo:</strong> {{ $data['txtNamesWork'] }}</p>
    <p><strong>Correo Electrónico:</strong> {{ $data['txtEmailWork'] }}</p>
    <p><strong>Celular:</strong> {{ $data['txtPhoneWork'] ?? 'No proporcionado' }}</p>
    <p><strong>Especialidad:</strong> {{ $data['txtEspecialtyWork'] ?? 'No proporcionado' }}</p>
    <p><strong>Curso:</strong> {{ $data['txtCourseWork'] ?? 'No proporcionado' }}</p>
    <p><strong>Descripción:</strong></p>
    <p>{{ $data['txtDescriptionWork'] ?? 'No proporcionado' }}</p>

    <p>Se adjunta el CV del postulante en formato PDF.</p>
</body>
</html>
