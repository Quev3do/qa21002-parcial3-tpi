<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-black flex p-6 items-center lg:justify-center flex-col">
        <div class="w-full p-0 m-0 flex items-center lg:justify-center flex-col">
            <a href="{{ route('usuarios.login') }} " class="w-1/3 bg-amber-500 text-white h-15 p-1 text-bold text-2xl mb-4 text-center">
                login
            </a>
        </div>
    </body>
</html>