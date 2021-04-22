<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>DIRETTORE</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </head>
    <body class="font-sans antialiased">
       
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
        <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Priorita'</th>
            <th scope="col">Descrzione</th>
            <th scope="col">Id Utente</th>
            <th scope="col">Id Tecnico</th>
            <th scope="col">Id Docente</th>
            <th scope="col">Id Dipartimento</th>
            <th scope="col">Id Locale</th>
            <th scope="col">Id Categoria</th>
            <th scope="col">Stato</th>
            <th scope="col">Operazioni</th>
            </tr>
        </thead>
        <tbody>

            @foreach($problema as $problema)
            <tr>

            <td>{{$problema->id}}</td>
            <td>{{$problema->priorita}}</td>
            <td>{{$problema->descrizione}}</td>
            <td>{{$problema->id_utente}}</td>
            <td>{{$problema->id_tecnico}}</td>
            <td>{{$problema->id_docente}}</td>
            <td>{{$problema->id_dipartimento}}</td>
            <td>{{$problema->id_locale}}</td>
            <td>{{$problema->id_categoria}}</td>
            <td>{{$problema->stato}}</td>
            <td>
                <a href="#" class="btn btn-sm btn-info">SHOW</a>
                <a href="{{url ('/edit')}}" class="btn btn-sm btn-warning">ASSEGNA</a>
                <a href="#" class="btn btn-sm btn-danger">DELETE</a>

            </td>
            </tr>
            @endforeach

        </tbody>
        </table>





    </div>





    </body>
</html>
