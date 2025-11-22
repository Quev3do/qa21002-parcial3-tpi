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
                <a href="{{ route('usuarios.store') }} " class="w-2/5 bg-amber-500 text-white h-15 p-1 text-bold text-2xl mb-4 text-center">Create</a>
            <table class="text-white w-3/4">
                <thead>
                    <tr>
                        <th class="px-1">id</th>
                        <th class="px-1 w-2/3">name</th>
                        <th class="px-1">edad</th>
                        <th class="px-1">universidad</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($usuarios as $user)
                        <tr class="hover:bg-amber-400 cursor-pointer">
                            <td class="px-1 text-center">{{ $user->id }}</td>
                            <td class="px-1 w-2/3">{{ $user->name }}</td>
                            <td class="px-1 text-center">{{ $user->edad }}</td>
                            <td class="px-1 text-center">{{ $user->univer->universidad }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
