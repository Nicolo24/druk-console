<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiPairController extends Controller
{
    //ping endpoint
    public function ping()
    {
        return response()->json(['message' => 'pong']);
    }
}
