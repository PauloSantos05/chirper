<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'id' => 1, 
                'user' => 'Alice', 
                'message' => 'Hello, world!'
            ],

            [
                'id' => 2, 
                'user' => 'Bob', 
                'message' => 'Laravel is awesome!'
            ],

            [
                'id' => 3, 
                'user' => 'Charlie', 
                'message' => 'Just chirping around.'
            ],
        ];

        return view('home', ['chirps' => $chirps]);
    }
}
