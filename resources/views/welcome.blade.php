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
        <div class="text-4xl font-body">
            <div class=" mt-32 mb-20 font-medium">
                <nav class="space-x-8 flex justify-center">
                        <div class="border-2 border-sky-500 rounded-2xl hover:border-sky-900 hover:shadow-lg">
                            <a class="p-4" href="/contacts/create">Add Contact</a>
                        </div>
                        <div class="border-2 border-sky-500 rounded-2xl hover:border-sky-900 hover:shadow-lg">
                            <a class="p-4" href="/contacts">View and Edit Contacts</a>
                        </div>
                </nav>
            </div>
            <main class="align-middle">
                <div class=" flex items-center justify-center space-x-9 mt-12">
                    <div class="w-1/4">
                        <img src="contacts-icon.png" alt="contacts logo">
                    </div>
                    <div class="flex justify-center text-6xl">
                        <h1>ContactsDB</h1>
                    </div>
                    <p class="popup">{{session('popup')}}</p>
                </div>
            </main>
        </div>
    </body>
</html>
