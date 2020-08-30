@extends('layout.app')

@section('content')
    <h1 class="text-6xl font-black leading-none mb-12">422.</h1>
    <p>We support images up to <mark class="rounded bg-gray-200 text-xs p-1 tracking-wider">1500x1500</mark>.</p>
    <p>Anything outside of that range will result in an incomplete request.</p>
@endsection