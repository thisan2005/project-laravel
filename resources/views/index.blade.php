<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/css/main.css">

    </head>
    <body>
        <div class="title">
            <h1>ContactsDB</h1>
            @foreach ($contacts as $contact)
                <p>{{$contact->name}} - {{$contact->about}}</p>
            @endforeach
            <p class="popup">{{session('popup')}}</p>
        </div>
    </body>
</html>