<!DOCTYPE html>
<html>
<head>
    <title>Nueva Consulta</title>
</head>
<body>
    <h1>Nueva Consulta</h1>
    <p><strong>Consulta:</strong> {{ $data['txtConsult'] }}</p>
    <p><strong>Nombre:</strong> {{ $data['txtNames'] }}</p>
    <p><strong>Correo:</strong> {{ $data['txtEmail'] }}</p>
    <p><strong>Teléfono:</strong> {{ $data['txtPhone'] ?? 'No especificado' }}</p>
</body>
</html>
