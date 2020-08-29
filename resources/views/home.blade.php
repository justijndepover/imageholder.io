<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Home | img-api.com</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="antialiased font-sans bg-white text-gray-900 min-h-screen">
        <header class="border-t-4 border-indigo-600 py-24">
            <div class="w-full max-w-3xl mx-auto px-6 flex items-center justify-between">
                <a href="#" class="block w-8 text-gray-300 hover:text-indigo-600 transition duration-300">
                    <svg class="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" fill="currentColor">
                        <path d="M150,5.1L4.6,203.7L150,294.9l145.4-91.2L150,5.1z M150,272.3L32.1,198.4l31.7-43.3l27.8,17.4l-13.8,18.8 l36.5,22.9v-72.7V86.2L150,37.4V272.3z M185.7,141.5l36.5,49.8l-36.5,22.9V141.5z"/>
                    </svg>
                </a>

                <a href="{{ route('image.square', ['width' => 500]) }}" target="_blank" class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-full text-sm tracking-wide transition duration-300 flex items-center justify-between">
                    <span class="mr-4">Open an image</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 inline">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </header>

        <main class="w-full max-w-3xl mx-auto px-6">
            <h1 class="text-6xl font-black leading-none mb-12">The solution for all your placeholder needs.</h1>
            <p><a href="{{ route('home') }}" class="hover:text-indigo-600 font-bold">img-api.com</a> is an easy to use image placeholder tool.</p>

            <code class="text-sm bg-gray-800 w-full block mt-6 px-4 py-6 text-white rounded-lg">
                <span class="text-gray-600">// returns a square 500 x 500 image</span>
                <br>
                <span class="text-blue-300">&lt;img</span>
                <span class="text-green-300">src</span><span>=</span><span class="text-yellow-300">"{{ route('image.square', ['width' => 500]) }}"</span>
                <span class="text-green-300">alt</span><span>=</span><span class="text-yellow-300">""</span><span class="text-blue-300">&gt;</span>
                <br>
                <br>
                <span class="text-gray-600">// returns a 500 x 1000 image</span>
                <br>
                <span class="text-blue-300">&lt;img</span>
                <span class="text-green-300">src</span><span>=</span><span class="text-yellow-300">"{{ route('image', ['width' => 500, 'height' => 1000]) }}"</span>
                <span class="text-green-300">alt</span><span>=</span><span class="text-yellow-300">""</span><span class="text-blue-300">&gt;</span>
            </code>

            <p class="my-6">Example</p>

            <img src="{{ route('image', ['width' => 1000, 'height' => 800]) }}" alt="example image" class="rounded-lg">
        </main>

        <footer class="w-full max-w-3xl mx-auto px-6">
            <div class="py-12 text-gray-500">
                <span>A product by </span>
                <a href="#" class="font-bold hover:text-indigo-600">Justijn Depover</a>
            </div>
        </footer>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>