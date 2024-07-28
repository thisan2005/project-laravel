<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacts</title>

        @vite('resources/css/app.css')

    </head>
    <body class="text-sky-700 bg-gradient-to-r from-cyan-400 to-sky-100 font-body">
        <div class="text-sky-700">
            <div class="flex justify-center text-4xl mb-10 mt-10">
                <h1>ContactsDB</h1>
            </div>
            @foreach ($contacts as $contact)
                <a href="/contacts/{{$contact->id}}">
                    <div class="flex justify-center space-x-5 text-xl bg-white pt-5 pb-5 m-10 shadow-lg rounded-2xl">
                        <p>Name: {{$contact->name}}</p>
                        <p>Birthday: {{$contact->dob}}</p>
                        <p>Mobile Number: {{$contact->mobile}}</p>
                        <p>Email: {{$contact->email}}</p>
                        <p>Country: {{$contact->country}}</p>
                    </div>
                </a>
            @endforeach
            <div>
                @if(empty($contact))
                    <div class="flex justify-center">
                        <a href="/contacts/create"><p>Contact not found, click here to create one</p></a>
                    </div>
                @endif
                <div class="flex justify-center mt-5">
                    <p class="popup">{{session('popup')}}</p>
                </div>
            </div>

        </div>

        <div class="flex justify-center text-2xl mt-10">
            <a class="border-2 rounded-2xl border-sky-900 p-2" href="/">Return to Home</a>
        </div>
    </body>
</html>