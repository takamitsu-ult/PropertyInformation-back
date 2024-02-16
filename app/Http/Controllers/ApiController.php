<?php
// app/Http/Controllers/ApiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getSampleData()
    {
        return response()->json(['message' => 'This is a sample API response.'], 200);
    }
}
