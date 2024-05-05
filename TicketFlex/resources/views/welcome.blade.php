<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Encabezado de tu página -->
    <title>Vue en Laravel</title>
</head>

<body>
    <!-- Contenido de tu página -->
    <example-component>Hola</example-component>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>