<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        @vite('resources/css/app.css')

    </head>
    <body class="text-sky-700 bg-gradient-to-r from-cyan-400 to-sky-100">
        <div class="text-sky-700 font-body">
            <div class="flex justify-center text-4xl mb-10 mt-10">
                <h1>ContactsDB</h1>
            </div>
            @foreach ($contacts as $contact)
                <div>
                    <p>Name: {{$contact->name}}</p>
                    <p>About: {{$contact->about}}</p>
                    <p>Birthday: {{$contact->dob}}</p>
                    <p>Mobile Number: {{$contact->mobile}}</p>
                    <p>Email: {{$contact->email}}</p>
                    <p>Country: {{$contact->country}}</p>
                </div>
            @endforeach
            <p class="popup">{{session('popup')}}</p>
            <div>
                <a href="/">Return to Home</a>
            </div>
        </div>
    </body>
</html>