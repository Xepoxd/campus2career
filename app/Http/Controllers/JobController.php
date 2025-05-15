<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class JobController extends Controller
{
    

    public function fetchJobs(Request $request)
    {

        $keyword = $request->input('query', 'Information Technology');
    
        $response = Http::withHeaders([
            'X-RapidAPI-Key' => env('RAPIDAPI_KEY'),
            'X-RapidAPI-Host' => 'jsearch.p.rapidapi.com',
        ])->get('https://jsearch.p.rapidapi.com/search', [
            'query' => $keyword,  
            'page' => 1,
            'num_pages' => 1
        ]);
    
        $jobs = $response->json()['data'] ?? [];
    
        return view('jobs', compact('jobs', 'keyword'));


    }
    
    
    
}

