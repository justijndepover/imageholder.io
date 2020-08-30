@extends('layout.app')

@section('content')
    <h1 class="text-6xl font-black leading-none mb-2">All our images.</h1>
    <a href="{{ route('submit') }}" class="text-gray-300 hover:text-indigo-600 font-bold mb-10 inline-block">
        <div class="flex items-center">
            <svg class="w-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span>Submit your own</span>
        </div>
    </a>

    <div class="flex flex-wrap -m-2">
        @foreach (range(1, 5) as $number)
            <div class="sm:w-1/2 p-2">
                <img src="{{ route('image', ['width' => 1000, 'height' => 800, 'image' => $number]) }}" alt="example image" class="rounded-lg" width="1000" height="800">
            </div>
        @endforeach
    </div>
@endsection