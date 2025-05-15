@extends('layouts.app')

@section('title', 'ABOUT')

@section('content')

<section class="py-16 px-6 bg-white/50 rounded-xl shadow-lg backdrop-blur-md mx-4">
    <div class="container mx-auto flex flex-col md:flex-row items-center animate-fadeIn">

        <div class="md:w-1/2 text-center md:text-left">
            <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">About Campus2Career</h2>
            <p class="mt-4 font-bold text-justify text-gray-800 leading-relaxed">
            Campus2Career is an innovative platform created to bridge the gap between education and professional success. Designed with students in mind, it provides essential resources to help them transition smoothly from academia to the workforce. The platform offers access to a wide range of opportunities, including internships that provide hands-on experience, job listings for fresh graduates, and final year project ideas to inspire meaningful research and innovation. In addition, Campus2Career offers career guidance to help students refine their resumes, prepare for interviews, and enhance their professional skills. With mentorship opportunities, networking events, and access to skill development programs, Campus2Career equips students with the tools they need to excel in their careers. Whether it’s building connections with industry professionals or gaining certifications, Campus2Career supports every step of a student's journey towards career success.
            </p>
        </div>

 
        <div class="md:w-1/2 mt-6 md:mt-0 flex justify-center">
            <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=1200" 
                alt="Campus2Career" class="w-full md:w-4/5 rounded-lg shadow-lg transition-transform duration-500 hover:scale-105">
        </div>
    </div>
</section>



 <div class="max-w-9xl py-16 mx-auto flex justify-between space-x-20 mb-5">
        
       
        <div class="bg-white/50 p-8 rounded-xl shadow-md space-y-4 w-1/2">
            <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">Objectives</h2>
            <ul class="list-disc pl-8 font-semibold text-justify text-black">
                <li>To connect students with valuable internship opportunities that offer real-world experience.</li>
                <li>To provide access to job listings for recent graduates to help them secure their first professional roles.</li>
                <li>To offer innovative final year project ideas that challenge students to think creatively and apply their academic knowledge.</li>
                <li>To offer career guidance and support, helping students improve their resumes, interview skills, and networking capabilities.</li>
                <li>To provide a platform for students to develop essential soft skills that are critical in the workplace, such as communication, leadership, and problem-solving.</li>
            </ul>
        </div>

        
        <div class="bg-white/50 p-8 rounded-xl shadow-md space-y-4 w-1/2">
            <h2 class="text-4xl font-bold text-purple-600 leading-tight mb-4">Goals</h2>
            <ul class="list-disc pl-8 text-black text-justify font-semibold">
                <li>To create a seamless transition from academic life to professional life by providing tailored resources and opportunities for students.</li>
                <li>To build strong connections between students and industry professionals, ensuring students have access to a wide range of career paths and mentors.</li>
                <li>To foster a community of learners and professionals who collaborate, share knowledge, and support one another in their career journeys.</li>
                <li>To continuously improve our platform by adding new features, partnerships, and resources to meet the evolving needs of students and employers.</li>
                <li>To increase the employability of students by equipping them with the skills, knowledge, and experience necessary to succeed in their careers.</li>
            </ul>
        </div>

    </div>
<!-- Success Stories -->
<section class="py-16 bg-white/50 rounded-xl shadow-lg mx-4 mt-12">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold text-purple-600 mb-6">Success Stories</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['name' => 'Sarah Ali', 'story' => 'Thanks to Campus2Career, I found my dream internship in a top tech company!', 'img' => asset('images/girl1.png')],
                ['name' => 'Ali Rehman', 'story' => 'Career counseling helped me choose the right path for my future and get hired at a leading firm.', 'img' => asset('images/boy1.png')],
                ['name' => 'Mariam Khan', 'story' => 'The resources and job opportunities from Campus2Career helped me secure a great job after graduation.', 'img' => asset('images/girl1.png')]
            ] as $story)
            <div class="bg-white shadow-xl rounded-lg p-6 transform hover:-translate-y-2 transition-all duration-300">
                <img src="{{ $story['img'] }}" alt="{{ $story['name'] }}" class="w-24 h-24 object-cover rounded-full mb-4 mx-auto">
                <h3 class="text-xl font-semibold text-blue-700">{{ $story['name'] }}</h3>
                <p class="mt-2 text-gray-700">{{ $story['story'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- Partnerships and Collaborations -->


<!-- Footer: Contact Us -->
<footer class="py-6 bg-blue-900 text-white text-center mt-12">
    <h3 class="text-2xl font-bold mb-4">Contact Us</h3>
    <p>If you have any questions or need support, feel free to reach out to us.</p>
    <a href="mailto:contact@campus2career.com" class="mt-4 inline-block text-purple-500 font-semibold hover:underline transition-all duration-300">Email Us</a>
</footer>
@endsection
