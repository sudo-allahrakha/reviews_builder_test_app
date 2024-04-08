<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsBuilderController extends Controller
{
    public function showBuilderView($view)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        return view('builder.'. $view);
    }

    public function getReviews()
    {
        // Read the JSON file
        $jsonData = file_get_contents(public_path('data/sample-data.json'));

        // Decode the JSON data into an associative array
        $data = json_decode($jsonData, true);

        // Return the data as a JSON response
        return response()->json($data);
    }
    
}
