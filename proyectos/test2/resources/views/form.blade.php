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
            <section class="bg-amber-600">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto w-lg">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-amber-900 md:text-2xl dark:text-amber-100">
                            Create
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="{{ route('usuarios.create') }}" method="post">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="quevedo" required="">
                            </div>
                            <div>
                                <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad:</label>
                                <input type="number" name="edad" id="edad" step="1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="26" required="">
                            </div>
                            <div>
                                <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Universidad:</label>
                                <select id="uni" name="uni" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach($universidades as $uni)
                                        <option value={{ $uni->id }}>{{ $uni->universidad }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="w-full text-white bg-amber-500 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create</button>
                        </form>
                    </div>
                </div>
            </div>
            </section>
        </div>
    </body>
</html>
