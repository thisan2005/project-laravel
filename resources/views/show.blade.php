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
    <body class="text-sky-700 bg-gradient-to-r from-cyan-400 to-sky-100 font-body">
        <div class="flex justify-center text-4xl mb-10 mt-10">
            <h1 class="">{{$contact->name}}</h1>
        </div>
        <div class="flex justify-center items-center text-xl space-x-12">
            <ul class="grid grid-cols-1 space-y-10">
                <li>Name - {{$contact->name}}</li>
                <li>Birthday - {{$contact->dob}}</li>
                <li>Mobile Number - {{$contact->mobile}}</li>
                <li>Email - {{$contact->email}}</li>
                <li>Country - {{$contact->country}}</li>
                <li>About - {{$contact->about}}</li>
            </ul>
            <div class="pl-12">
                <form class="p-2 border-2 border-sky-500 rounded-2xl hover:border-sky-900 hover:shadow-lg mb-5" action="/contacts/{{$contact->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete Contact</button>
                </form>
                <a class="p-2 border-2 border-sky-500 rounded-2xl hover:border-sky-900 hover:shadow-lg" href="/contacts/{{$contact->id}}/edit">Edit contact</a>
                <a class="p-2 border-2 border-sky-500 rounded-2xl hover:border-sky-900 hover:shadow-lg" href="/">Back to home</a>
            </div>
        </div>
    </body>
</html>