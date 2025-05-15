@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen">
    <div class="form-container bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-center text-2xl font-bold mb-6">Signup Form</h2>

    
        @if ($errors->any())
            <div class="alert alert-error mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success mb-4">
                {{ session('status') }}
            </div>
        @endif
        
        @if (session('error'))
            <div class="alert alert-error mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('signup') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ old('username') }}">

            <input type="email" name="email" placeholder="Email Address" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" value="{{ old('email') }}">
            
            <input type="password" name="password" placeholder="Password" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required class="w-full p-3 mb-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600">
            
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Sign Up</button>
        </form>

        <div class="text-center mt-4">
            <span>Already have an account? </span><a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
        </div>
    </div>
</div>
@endsection

<style>
  .alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    font-size: 16px;
  }
  .alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
  }
  .alert-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
  }
</style>
