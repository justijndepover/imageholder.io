@extends('layouts.app')

@section('content')
    <h1 class="text-4xl sm:text-6xl font-black leading-none mb-12">Submit a new image.</h1>

    <p>Each image is carefully selected.</p>
    <p>We will review your submission and if the image is sufficient, we'll add it to the list!</p>

    @if (Session::has('message'))
        <div class="bg-green-200 text-green-700 p-4 text-sm rounded-lg mt-12">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('submit') }}" method="POST" class="mt-12">
        @csrf

        <div class="mb-2">
            <input type="text" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('name') border border-red-400 @enderror" name="name" placeholder="Your name" value="{{ old('name') }}">
            @error ('name')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2">
            <input type="text" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('website') border border-red-400 @enderror" name="website" placeholder="Website" value="{{ old('website') }}">
            @error ('website')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <input-file name="image" id="image" class="@error('image') border border-red-400 @enderror"></input-file>
            @error ('image')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <button class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-lg text-sm tracking-wide transition duration-300">Submit</button>
    </form>
@endsection