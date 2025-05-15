@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="py-24 bg-white/50 rounded-xl text-black">
    <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
        
        <div class="md:w-1/2 mb-12 md:mb-0 text-center md:text-left">
            <h1 class="text-4xl font-bold text-purple-600 leading-tight mb-4">
                Welcome to Campus2Career
            </h1>
            <p class="text-lg font-medium text-justify mb-6">
                Campus2Career (C2C) is the dedicated Career Development Center for students at COMSATS University Islamabad, Attock Campus. Our mission is to empower students by providing them with the essential tools and resources to bridge the gap between academic learning and career success. C2C offers a wide range of services, including internship and job placement opportunities, career counseling, professional development workshops, and access to final year projects. We strive to help students build the skills, confidence, and connections they need to thrive in their chosen career paths. Whether you are looking for your first internship or seeking guidance on professional growth, Campus2Career is here to support you every step of the way.
            </p>
            <a href="{{ route('signup') }}" class="inline-block px-8 py-3 bg-yellow-400 text-black font-bold rounded-lg shadow-lg hover:bg-yellow-300 transition duration-300">
                Get Started
            </a>
        </div>

        <div class="md:w-1/2 md:pl-10">
            <img src="{{ asset('images/dept.jpg') }}" alt="University" class="w-full h-auto rounded-lg shadow-lg">
        </div>
        
    </div>
</section>


<section class="py-16 bg-white/50 rounded-xl shadow-lg backdrop-blur-md mx-4 mt-12">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">What We Offer</h2>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach([
                ['title' => 'Internships & Jobs', 'desc' => 'Find internships and job opportunities to kickstart your career.', 'img' => asset('images/jobs2.png')],
                ['title' => 'FYP Projects', 'desc' => 'Discover and collaborate on final year projects.', 'img' => asset('images/fyp1.png')],
                ['title' => 'Career Counseling', 'desc' => 'Get expert guidance and AI-powered counseling for career decisions.', 'img' => asset('images/career2.png')]
            ] as $offer)
            <div class="p-6 bg-white/80 shadow-xl rounded-lg transform hover:-translate-y-2 transition-all duration-300 backdrop-blur-md">
                <img src="{{ $offer['img'] }}" alt="{{ $offer['title'] }}" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-blue-700">{{ $offer['title'] }}</h3>
                <p class="mt-2 text-gray-700 text-justify">{{ $offer['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-white/50 rounded-xl shadow-lg backdrop-blur-md mx-4 mt-12">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">Upcoming Events</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['title' => 'Job Fair 2025', 'date' => 'TBD, 2025', 'desc' => 'Meet top companies and explore job opportunities.', 'img' => asset('images/jobfair.png')],
                ['title' => 'Students Week 2025', 'date' => 'TBD, 2025', 'desc' => 'A Week full of sports and extra ciruclar activites', 'img' => asset('images/sweek.png')],
                ['title' => 'Convocation 2025', 'date' => 'TBD, 2025', 'desc' => 'Convocation Ceremony 2025.', 'img' => asset('images/convo.png')]
            ] as $event)
            <div class="bg-white/80 shadow-xl rounded-lg p-6 transform hover:scale-105 transition-all duration-300">
                <img src="{{ $event['img'] }}" alt="{{ $event['title'] }}" class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-2xl font-semibold text-blue-700">{{ $event['title'] }}</h3>
                <p class="text-gray-700">{{ $event['date'] }}</p>
                <p class="mt-2 text-gray-600 text-justify">{{ $event['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-white/50 rounded-xl shadow-lg backdrop-blur-md mx-4 mt-12">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">Career Development Articles</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['title' => 'How to Write a Winning Resume', 'desc' => 'A well-crafted resume can open doors to new career opportunities.', 'img' => asset('images/resume.png')],
                ['title' => 'Mastering Job Interviews', 'desc' => 'Learn how to ace job interviews with expert tips.', 'img' => asset('images/inter.png')],
                ['title' => 'Building a Strong LinkedIn Profile', 'desc' => 'Optimize your LinkedIn profile to attract recruiters.', 'img' => asset('images/linkdin.png')]
            ] as $article)
            <div class="bg-white/80 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition-all duration-300 backdrop-blur-md">
                <img src="{{ $article['img'] }}" alt="Article Image" class="w-full h-40 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-blue-700">{{ $article['title'] }}</h3>
                    <p class="mt-2 text-gray-700 text-justify">{{ $article['desc'] }}</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-semibold hover:underline transition-all duration-300">Read More →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">University Gallery</h2>
        <p class="text-lg text-gray-600 mb-6 text-justify">A glimpse into the vibrant campus life. More coming soon!</p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-gray-200 p-6 rounded-lg">
                <p class="text-gray-600">Image coming soon</p>
            </div>
            <div class="bg-gray-200 p-6 rounded-lg">
                <p class="text-gray-600">Image coming soon</p>
            </div>
            <div class="bg-gray-200 p-6 rounded-lg">
                <p class="text-gray-600">Image coming soon</p>
            </div>
        </div>
    </div>
</section>

<section class="py-16 bg-black-900 text-center text-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Ready to Start Your Career Journey?</h2>
        <p class="text-lg mb-8 text-justify">Join Now To get the best career resources.</p>
        <a href="{{ route('signup') }}" class="inline-block px-8 py-4 bg-yellow-400 text-blue-900 font-bold rounded-lg shadow-lg hover:bg-yellow-300 transition-all duration-300">
            Join Now
        </a>
    </div>
</section>

@endsection

@push('styles')
<style>
    .bg-white:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
</style>
@endpush
