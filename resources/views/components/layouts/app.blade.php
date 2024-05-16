<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rasen | {{$title ?? ""}}</title>
    </head>
    <body>
        <x-layouts.nav/>
    <!-- Aqui se imprimira el contenido variable de cada pagina -->
    <!-- Yield recibe como parametro el nombre de la seccion que queremos imprimir, aunque puede ser cualquier nombre, por convension se llama "content" al contenido principal de cada pagina -->
    {{ $slot}}
    </body>
</html>