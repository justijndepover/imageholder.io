@extends('layouts.app')

@section('content')
    <h1 class="text-4xl sm:text-6xl font-black leading-none mb-12">Forgot your password?</h1>

    @if (session('status'))
        <div class="bg-green-200 text-green-700 p-4 text-sm rounded-lg mb-12">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-2">
            <input type="text" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('email') border border-red-400 @enderror" name="email" placeholder="Your email" required autocomplete="email" autofocus value="{{ old('email') }}">
            @error ('email')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <button class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-lg text-sm tracking-wide transition duration-300">{{ __('Send Password Reset Link') }}</button>
    </form>
@endsection
