@extends('layout.app')

@section('content')
    <h1 class="text-6xl font-black leading-none mb-12">All our images.</h1>

    <div class="flex flex-wrap -m-2">
        @foreach (range(1, 5) as $number)
            <div class="sm:w-1/2 p-2">
                <img src="{{ route('image', ['width' => 1000, 'height' => 800, 'image' => $number]) }}" alt="example image" class="rounded-lg" width="1000" height="800">
            </div>
        @endforeach
    </div>

@endsection