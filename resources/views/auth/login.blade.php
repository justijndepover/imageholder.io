@extends('layouts.app')

@section('content')
    <h1 class="text-4xl sm:text-6xl font-black leading-none mb-12">Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-2">
            <input type="text" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('email') border border-red-400 @enderror" name="email" placeholder="Your email" required autocomplete="email" autofocus value="{{ old('email') }}">
            @error ('email')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-2">
            <input type="password" class="bg-gray-100 w-full py-2 px-4 outline-none rounded-lg text-sm @error('password') border border-red-400 @enderror" name="password" placeholder="Your password" required autocomplete="current-password">
            @error ('password')
                <span class="text-sm text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6 flex align-items justify-between">
            <div class="">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-sm" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            @if (Route::has('password.request'))
                <div class="">
                    <a class="text-sm text-gray-300 hover:text-indigo-600 font-bold" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            @endif
        </div>

        <button class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-lg text-sm tracking-wide transition duration-300">Login</button>
    </form>
@endsection
