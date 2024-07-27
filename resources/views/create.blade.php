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
    <body class="font-body text-sky-700 bg-gradient-to-r from-cyan-400 to-sky-100">
        <div class="text-sky-700 ">
            <div class="flex justify-center text-4xl mb-10 mt-10">
                <h1 class="">Create Contact</h1>
            </div>
            <div class="text-xl flex justify-center">
                <form  action="/contacts" method="POST">
                    <div class="grid grid-cols-2 place-items-center space-y-8" >
                        @csrf
                        <div>
                            <label for="name">Name</label>
                        </div>
                        <div>
                            <input type="string" id="name" name="name"></input>
                        </div>

                        <div>
                            <label for="about">About</label>
                        </div>
                        <div>
                            <input type="string" id="about" name="about">
                        </div>

                        <div>
                            <label for="dob">Date of Birth</label>
                        </div>
                        <div>
                            <input type="string" id="dob" name="dob">   
                        </div>

                        <div>
                            <label for="mobile">Mobile Number</label> 
                        </div>
                        <div>
                            <input type="number" id="mobile" name="mobile">
                        </div>

                        <div>
                            <label for="email">Email</label>                            
                        </div>
                        <div>
                            <input type="string" id="email" name="email">
                        </div>

                        <div>
                            <label for="country">Country</label>
                        </div>
                        <div>
                            <input type="string" id="country" name="country">
                        </div>
                    </div>

                    <div class="border-6 flex justify-center text-2xl mt-10 border-4 rounded-2xl border-sky-900">
                        <input type="submit" value="Create contact">
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>
