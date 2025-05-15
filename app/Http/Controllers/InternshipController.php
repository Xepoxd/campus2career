<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InternshipController extends Controller
{
    public function index()
    {
        $apiKey = '4737154b8cmsh5324c9208a0971ap1e169bjsn8b20f94b2eab';
        $host = 'internships-api.p.rapidapi.com';
    
        // Make the API request using Laravel's Http client
        $response = Http::withHeaders([
            'x-rapidapi-host' => $host,
            'x-rapidapi-key' => $apiKey
        ])->get("https://internships-api.p.rapidapi.com/active-jb-7d");
    
        // Check for successful response
        if ($response->successful()) {
            $internships = $response->json(); // Directly use the response as an array
    
            return view('internships.index', ['internships' => $internships]); // Pass data to the view
        } else {
            \Log::error('API Error: ' . $response->status()); // Log any error
            return view('internships.index', ['error' => 'Failed to fetch internships']);
        }
    }
    
}
