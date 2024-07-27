<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        @vite('resources/css/app.css')

    </head>
    <body class="text-sky-700 bg-gradient-to-r from-cyan-400 to-sky-100">
        <div class="title">
            <h1>Name - {{$contact->name}}</h1>
            <h1>About - {{$contact->about}}</h1>
            <form action="/contacts/{{$contact->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete Contact</button>
            </form>
        </div>
    </body>
</html>