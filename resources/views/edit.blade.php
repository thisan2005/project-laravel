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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body class="font-body text-sky-700 bg-gradient-to-r from-cyan-400 to-sky-100">
        <div class="text-sky-700 ">
            <div class="flex justify-center text-4xl mb-10 mt-10">
                <h1 class="">Edit Contact</h1>
            </div>
            <div class="text-xl flex justify-center">
                <form  id= "contact-form" action="/contacts/{{$contact->id}}/edit" method="POST">
                    <div>
                        <div class="grid grid-cols-3 place-items-center space-y-8" >
                            @csrf
                            <div>
                                <label for="name">Name</label>
                            </div>
                            <div class="text-black">
                                <input type="string" id="name" name="name" value="{{$contact->name}}"></input>
                            </div>
                            <div class="text-red-500 text-sm">
                                <p class="name-error"></p>
                            </div>
    
                            <div>
                                <label for="about">About</label>
                            </div>
                            <div class="text-black">
                                <input type="string" id="about" name="about" value="{{$contact->about}}">
                            </div>
                            <div>
                            </div>
    
                            <div>
                                <label for="dob">Date of Birth</label>
                            </div>
                            <div class="text-black">
                                <input type="string" id="dob" name="dob" value="{{$contact->dob}}">   
                            </div>
                            <div class="text-red-500 text-sm">
                                <p class="dob-error"></p>
                            </div>
    
                            <div>
                                <label for="mobile">Mobile Number</label> 
                            </div>
                            <div class="text-black">
                                <input type="string" id="mobile" name="mobile" value="{{$contact->mobile}}">
                            </div>
                            <div class="text-red-500 text-sm">
                                <p class="mobile-error"></p>
                            </div>
    
                            <div>
                                <label for="email">Email</label>                            
                            </div>
                            <div class="text-black">
                                <input type="string" id="email" name="email" value="{{$contact->email}}">
                            </div>
                            <div class="text-red-500 text-sm">
                                <p class="email-error"></p>
                            </div>
    
                            <div>
                                <label for="country">Country</label>
                            </div>
                            <div class="text-black">
                                <input type="string" id="country" name="country" value="{{$contact->country}}">
                            </div>
                            <div class="text-red-500 text-sm">
                                <p class="country-error"></p>
                            </div>
                        </div>
                    </div>

                    <div class="border-2 flex justify-center text-2xl mt-10 rounded-2xl border-sky-900 hover:shadow-xl">
                        <input type="submit" value="Update contact">
                    </div>
                    <div class="border-2 flex justify-center text-2xl mt-10 rounded-2xl border-sky-900 hover:shadow-xl">
                        <a href="/">Back to home<a>
                    </div>
                    
                </form>
            </div>
        </div>

        <script src="{{asset('js/validation-script.js')}}"></script>
    </body>
</html>
