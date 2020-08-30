@extends('layout.app')

@section('content')
    <h1 class="text-6xl font-black leading-none mb-12">The solution for all your placeholder needs.</h1>
    <p><a href="{{ route('home') }}" class="hover:text-indigo-600 font-bold">imageholder.io</a> is an easy to use image placeholder tool.</p>

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
        <br>
        <br>
        <span class="text-gray-600">// you can also specify a specific image</span>
        <br>
        <span class="text-blue-300">&lt;img</span>
        <span class="text-green-300">src</span><span>=</span><span class="text-yellow-300">"{{ route('image', ['width' => 500, 'height' => 1000, 'image' => '1']) }}"</span>
        <span class="text-green-300">alt</span><span>=</span><span class="text-yellow-300">""</span><span class="text-blue-300">&gt;</span>
    </code>

    <p class="my-6">Example</p>

    <img src="{{ route('image', ['width' => 1000, 'height' => 800]) }}" alt="example image" class="rounded-lg" width="1000" height="800">
@endsection