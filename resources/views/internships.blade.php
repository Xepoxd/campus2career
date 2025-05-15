@extends('layouts.app')

@section('title', 'Internships')

@section('content')

<!-- Background -->
<div class="fixed top-0 left-0 w-full h-full -z-10">
    <img src="https://images.unsplash.com/photo-1581090700227-1e37b190418e?q=80"
         class="w-full h-full object-cover" alt="Internship Background">
</div>

<!-- Page Header -->
<section class="py-20 px-6 text-white text-center">
    <div class="container mx-auto">
        <h1 class="text-5xl font-bold">Explore Internships</h1>
        <p class="mt-4 text-xl">Real-time internships loaded from an API.</p>
    </div>
</section>

<!-- Internship Listings -->
<section class="py-16 px-6 bg-white/80 backdrop-blur-sm rounded-t-3xl">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-blue-900 text-center mb-10">Available Internships</h2>

        @if(count($internships) > 0)
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($internships as $intern)
            <div class="bg-white shadow-lg p-6 rounded-xl hover:-translate-y-1 transition-all duration-300">
                <img src="{{ $intern['logo'] ?? 'https://via.placeholder.com/100' }}" class="h-16 mb-4 object-contain" alt="Logo">
                <h3 class="text-xl font-bold text-blue-800">{{ $intern['role'] }}</h3>
                <p class="text-gray-700">{{ $intern['company'] }}</p>
                <a href="{{ $intern['apply_url'] ?? '#' }}" target="_blank" class="mt-4 inline-block text-blue-600 font-semibold hover:underline">Apply Now →</a>
            </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-gray-600">No internships found at the moment.</p>
        @endif
    </div>
</section>

@endsection
