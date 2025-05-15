@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="form-container bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-center text-2xl font-bold mb-6">Login Form</h2>
        
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Login</button>

            @if (session('error'))
                <div class="error-message mt-4 text-center text-red-500">{{ session('error') }}</div>
            @endif
        </form>

        <div class="text-center mt-4">
            <span>Not a member? </span><a href="{{ route('signup') }}" class="text-blue-600 hover:underline">Signup now</a>
        </div>
    </div>
</div>
@endsection
