<?php

namespace App\Http\Controllers;

use App\Models\Dispensor;
use Illuminate\Http\Request;

class DispensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return dispensor.index view with all dispensors
        return view('Dispensor.index')->with('dispensors', Dispensor::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dispensor $dispensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispensor $dispensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dispensor $dispensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispensor $dispensor)
    {
        //delete dispensor
        $dispensor->delete();
        //redirect to dispensor.index
        return redirect()->route('dispensors.index');
        
    }
}
