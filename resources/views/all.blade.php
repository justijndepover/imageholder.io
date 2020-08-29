@extends('layout.app')

@section('content')
    <h1 class="text-6xl font-black leading-none mb-12">All our images.</h1>

    <img src="{{ route('image', ['width' => 1000, 'height' => 800]) }}" alt="example image" class="rounded-lg" width="1000" height="800">
@endsection