@extends('layouts.app')

@section('content')
    <h1 class="text-4xl sm:text-6xl font-black leading-none mb-12">{{ __('Reset Password') }}</h1>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-2">
            <input type="text" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('email') border border-red-400 @enderror" name="email" placeholder="Your email" required autocomplete="email" autofocus value="{{ $email ?? old('email') }}">
            @error ('email')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2">
            <input type="password" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('password') border border-red-400 @enderror" name="password" placeholder="Your password" required autocomplete="new-password">
            @error ('password')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <input type="password" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('password') border border-red-400 @enderror" name="password_confirmation" placeholder="Repeat your password" required autocomplete="new-password">
        </div>

        <button class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-lg text-sm tracking-wide transition duration-300">{{ __('Reset Password') }}</button>
    </form>
@endsection
