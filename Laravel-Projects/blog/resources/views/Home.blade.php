@extends('layouts.Master')

@section('title', 'Home')

@section('content')

<div class="bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-4xl font-bold text-blue-600 mb-4">
        Welcome to Our {{ $page }} Page
    </h1>

    <p class="text-gray-700 mb-6">
        This is the home page of our simple blog.
    </p>

    <div class="space-x-4">
        <a href="/about"
           class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">
            Learn More About Us
        </a>

        <a href="/contact"
           class="bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700">
            Contact Us
        </a>
    </div>
</div>

@endsection