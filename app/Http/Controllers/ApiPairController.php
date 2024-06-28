<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispensor;

class ApiPairController extends Controller

{
    //ping endpoint

    
    public function ping()
    {
        return response()->json(['message' => 'pong']);

    }

    //pair endpoint
    public function pair(Request $request)
    {
        //get the serial number from the request
        $serialNumber = $request->input('serialNumber'); 
        //if dispensor with serial number not exists, created it
        $dispensor = Dispensor::firstOrCreate(['serialNumber' => $serialNumber]);
        return response()->json(['message' => 'paired', 'dispensor' => $dispensor]);
    }
}
