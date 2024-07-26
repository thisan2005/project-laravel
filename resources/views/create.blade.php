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
        <div class="create-form">
            <h1>Create Contact</h1>
            <form action="/contacts" method="POST">
                @csrf
                <label for="name">Name</label>
                <input type="string" id="name" name="name"></input>
                <label for="about">About</label>
                <input type="string" id="about" name="about">
                <label for="dob">Date of Birth</label>
                <input type="string" id="dob" name="dob">
                <label for="about">Mobile Number</label>
                <input type="string" id="mobile" name="mobile">
                <label for="about">Email</label>
                <input type="string" id="email" name="email">
                <label for="about">Country</label>
                <input type="string" id="country" name="country">
                <input type="submit" value="Create contact">
            </form>
        </div>
    </body>
</html>
