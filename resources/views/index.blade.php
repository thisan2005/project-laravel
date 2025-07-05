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
            <div class="flex justify-center text-4xl mb-5 mt-10">
                <h1>ContactsDB</h1>
            </div>
            <form  id= "contact-form" action="/contacts" method="GET">
                <div class= "text-4xl mb-6">
                    <div class="flex justify-center space-x-2" >
                        <div class="text-black text-xl">
                            <input type="string" id="search" name="search"></input>
                        </div>
                        <div class="text-xl">
                            <button class="border-2 rounded-2xl border-sky-900 pl-1 pr-1">Search</button>
                        </div>
                        <div class="text-xl">
                            <a href="/contacts" class="border-2 rounded-2xl border-sky-900 p-1 align-middle"> Clear</a>
                        </div>
                    </div>
                </div>
            </form>
            <div class="grid justify-items-center grid-cols-5 mb-5 mt-8 text-black text-xl">
                <p>Name </p>
                <p>Birthday</p>
                <p>Mobile Number</p>
                <p>Email</p>
                <p>Country</p>
            </div>

            @foreach ($contacts as $contact)
                <a href="/contacts/{{$contact->id}}">
                    {{-- <div class="flex justify-center space-x-5 text-xl bg-white pt-5 pb-5 m-10 shadow-lg rounded-2xl"> --}}
                    <div class="grid justify-items-center grid-cols-5  bg-white pt-3 pb-3 ml-3 mr-3 mb-2 hover:shadow-xl rounded-2xl">
                        <p>{{$contact->name}}</p>
                        <p>{{$contact->dob}}</p>
                        <p>{{$contact->mobile}}</p>
                        <p>{{$contact->email}}</p>
                        <p>{{$contact->country}}</p>
                    </div>
                </a>
            @endforeach

            <div>
                @if(empty($contact))
                    <div class="flex justify-center mt-12">
                        <p>Contact not found</p>
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