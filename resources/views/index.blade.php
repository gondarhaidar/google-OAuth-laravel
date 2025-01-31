<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="font-oswald bg-slate-100 md:p-0 px-2">
    <div class="mx-auto border lg:w-1/2 mt-[30vh] p-4 rounded shadow-slate-700 shadow-sm bg-slate-50 w-full md:w-[80%]">
        <div class="my-4">
            <h1 class="text-center text-2xl">Hi {{auth('web')->user()->name}}</h1>
            <h2 class="text-center text-xl">You are already logged in</h2>
        </div>
        <div class="flex justify-center my-4">
            <ul class="inline-block">
                <li>Your name : {{auth('web')->user()->name}}</li>
                <li>Your email : {{auth('web')->user()->email}}</li>
            </ul>
        </div>
        <p class="text-center">Thanks for login, have you nice day</p>
        <form action="/logout" method="post" class="my-2">
            @csrf
            <button class="w-full px-5 py-2 rounded bg-slate-800 text-slate-200 hover:bg-black hover:text-white">Logout</button>
        </form>
    </div>
    
</body>
</html>