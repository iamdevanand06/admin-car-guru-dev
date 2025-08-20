<?php

namespace App\Http\Controllers;

use App\Models\CarDetailUsage;
use App\Traits\commonTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class CarDetailUsageController extends Controller
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
    public function show(CarDetailUsage $carDetailUsage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarDetailUsage $carDetailUsage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarDetailUsage $carDetailUsage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarDetailUsage $carDetailUsage)
    {
        //
    }
    public function getUsage(Request $request)
    {
        try {
            return $this->getDropdownOptions($request->field_id, $request->q);
        } catch (Exception $e) {
            Log::error('Error::CAR_DETAIL_Usage_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postUsage(Request $request)
    {
        try {
            $request->validate(['name' => 'required|string|max:255|unique:car_detail_usages,name']);
            return $this->postDropdownOptions($request->field_id, $request->name);
        } catch (Exception $e) {
            Log::error('Error::CAR_DETAIL_Usage_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }
}
