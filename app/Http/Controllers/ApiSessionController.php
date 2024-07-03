<?php

namespace App\Http\Controllers;

use App\Models\Dispensor;
use Illuminate\Http\Request;

class ApiSessionController extends Controller
{
    public function getUpdates(Request $request)
    {
        //get the serial number from the request
        $serialNumber = $request->input('serialNumber'); 
        $dispensor = Dispensor::where('serialNumber', $serialNumber)->firstOrFail();
        return response()->json([
            "dispensor"=> $dispensor,
            "updates"=> [
                "enabled" => $dispensor->can_dispense,
                "maxPressTime" => 5000
            ]
        ]);

    }

    public function startSession(Request $request)
    {
        //get the serial number from the request
        $serialNumber = $request->input('serialNumber'); 
        $dispensor = Dispensor::where('serialNumber', $serialNumber)->firstOrFail();
        //if can_dispense is true, return error
        if($dispensor->can_dispense){
            return response()->json([
                "error"=> "Dispensor is busy"
            ]);
        }

        $session = $dispensor->sessions()->create([
            'user_id' => 1,
            'qty_approved' => 0,
            'qty_dispensed' => 0,
            'status' => 'in-course'
        ]);
        return response()->json([
            "session"=> $session
        ]);
    }

    //stop session
    public function stopSession(Request $request)
    {
        //get the serial number from the request
        $serialNumber = $request->input('serialNumber'); 
        $qtyDispensed = $request->input('qty_dispensed');
        $dispensor = Dispensor::where('serialNumber', $serialNumber)->firstOrFail();
        //if can_dispense is false, return error
        if(!$dispensor->can_dispense){
            return response()->json([
                "error"=> "Dispensor is not busy"
            ]);
        }

        $session = $dispensor->sessions()->where('status', 'in-course')->firstOrFail();
        $session->update([
            'status' => 'completed',
            'qty_dispensed' => $qtyDispensed
        ]);
        return response()->json([
            "session"=> $session
        ]);
    }
}
