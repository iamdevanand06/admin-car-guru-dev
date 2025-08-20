<?php

namespace App\Http\Controllers;

use App\Models\CarMakeBrake;
use App\Traits\commonTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class CarMakeBrakeController extends Controller
{
    use commonTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(CarMakeBrake $carMakeBrake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarMakeBrake $carMakeBrake)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarMakeBrake $carMakeBrake)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarMakeBrake $carMakeBrake)
    {
        //
    }

    public function getBrakes(Request $request)
    {
        try {
            return $this->getDropdownOptions($request->field_id, $request->q);
        } catch (Exception $e) {
            Log::error('Error::CAR_MAKE_BRAKES_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postBrakes(Request $request)
    {
        try {
            $request->validate(['name' => 'required|string|max:255|unique:car_make_brakes,name']);
            return $this->postDropdownOptions($request->field_id, $request->name);
        } catch (Exception $e) {
            Log::error('Error::CAR_MAKE_BRAKES_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }
}
