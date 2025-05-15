@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

<h1 class="text-4xl font-extrabold text-white text-center mb-10" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">Find Your Dream Job</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ route('jobs.index') }}" class="flex justify-center mb-10">
        <input type="text" name="query" value="{{ $keyword ?? '' }}"
            class="w-full max-w-2xl p-4 rounded-l-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
            placeholder="Search e.g. frontend, AI, data science...">
        <button type="submit"
            class="bg-orange-500 text-white px-8 rounded-r-lg hover:bg-blue-700 transition">FIND JOBS</button>

            
    </form>

    <!-- Jobs List -->
    @if(count($jobs) > 0)
        <div class="space-y-8 animate-fadeIn">
            @foreach($jobs as $job)
                <div class="bg-white/50 p-6 rounded-2xl shadow-md hover:shadow-2xl hover:scale-[1.02] transition-all border border-gray-200">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">{{ $job['job_title'] }}</h2>
                        <p class="text-sm text-white">{{ $job['employer_name'] }} &mdash; {{ $job['job_city'] ?? 'Remote' }}</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="bg-gray-100 text-gray-600 text-xs font-medium px-2 py-1 rounded">{{ $job['job_type'] ?? 'Full-Time' }}</span>
                        <span class="text-xs text-white">Posted {{ \Carbon\Carbon::parse($job['job_posted_at'])->diffForHumans() }}</span>
                    </div>
                    <p class="text-black-600 text-sm">
                        {{ \Illuminate\Support\Str::limit($job['job_description'], 100) }}
                    </p>
                    <div class="flex justify-end">
                        <a href="{{ $job['job_apply_link'] }}" target="_blank"
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-gray-900 transition">
                            Apply Now
                        </a>l
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center text-gray-300">No jobs found. Try a different keyword.</p>
    @endif

</div>
@endsection
