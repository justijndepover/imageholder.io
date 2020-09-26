@extends('layouts.app')

@section('content')
    <h1 class="text-4xl sm:text-6xl font-black leading-none mb-12">All submissions.</h1>

    @if (Session::has('message'))
        <div class="bg-green-200 text-green-700 p-4 text-sm rounded-lg mb-12">
            {{ Session::get('message') }}
        </div>
    @endif

    @if (Session::has('error'))
        <div class="bg-red-200 text-red-700 p-4 text-sm rounded-lg mb-12">
            {{ Session::get('error') }}
        </div>
    @endif

    <form action="{{ route('submissions') }}" method="post">
        @csrf

        <div class="flex flex-wrap -m-2">
            @foreach ($submissions as $submission)
                <div class="sm:w-1/2 p-2">
                    <div class="rounded-lg bg-gray-100 overflow-hidden">
                        <img src="/storage/submissions/{{ $submission->image }}">

                        <div class="p-4">
                            <span class="block text-gray-700 font-bold">{{ $submission->name }}</span>
                            <a href="{{ $submission->website }}" target="_blank" class="block text-indigo-700">{{ $submission->website }}</a>
                        </div>

                        <div class="flex border-t">
                            <button name="accept" value="{{ $submission->id }}" class="flex-1 hover:bg-gray-200 p-4 border-r">Accept</button>
                            <button name="reject" value="{{ $submission->id }}" class="flex-1 hover:bg-gray-200 p-4">Reject</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if ($submissions->isEmpty())
            <span>There are no more submissions</span>
        @endif
    </form>
@endsection