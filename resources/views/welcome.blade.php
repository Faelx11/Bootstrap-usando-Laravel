<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.css',
           ])
        
    </head>
    <body class="antialiased">
        <div class="container py-4 px-3 mx-auto">
            <h1 class="text-center"><b>Tela de Login!</b></h1>
        </div>

        <div class="row">
            <h1 class="text-center">Cadastrar Informações</h1>
        </div>

    </body>
</html>
