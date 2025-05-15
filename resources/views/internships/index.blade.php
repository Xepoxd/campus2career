@extends('layouts.app')

@section('title', 'Internships')

@section('content')

<h1 class="text-4xl font-bold text-white leading-tight mb-4 text-center" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">Available Internships</h1>

<!-- Display Error Message (if any) -->
@if(session('error'))
    <div class="text-center text-red-500 mb-4">
        <p>{{ session('error') }}</p>
    </div>
@endif

<!-- Internships List -->
@if(is_array($internships) && count($internships) > 0)
    <div class="space-y-8 animate-fadeIn">
        @foreach($internships as $internship)
            <div class="bg-white/50 text-black p-6 rounded-xl shadow-md hover:shadow-xl hover:scale-[1.02] transition-all border border-gray-200">
                <div>
                    <h2 class="text-2xl font-bold">{{ $internship['title'] ?? 'Internship Title' }}</h2>
                </div>
                <div class="space-y-2 mt-4">
                    <p class="text-sm">
                        {{ \Illuminate\Support\Str::limit($internship['organization'] ?? 'No description available', 100) }}
                    </p>
                </div>
                <div class="flex justify-between mt-4">
                    <a href="{{ $internship['url'] ?? '#' }}" target="_blank"
                        class="bg-orange-500 text-white px-4 py-2 rounded hover:bg-orange-600 transition">
                        Read more &gt;&gt;&gt;
                    </a>
                    <a href="{{ $internship['url'] ?? '#' }}" target="_blank"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-900 transition">
                        Apply now
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p class="text-center text-gray-300">No internships found or failed to fetch data. Try again later.</p>
@endif

@endsection
