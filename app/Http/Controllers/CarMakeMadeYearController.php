<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarMakeMadeYear;
use Illuminate\Support\Facades\Log;
use App\Traits\commonTrait;
use Exception;

class CarMakeMadeYearController extends Controller
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getMadeYear(Request $request)
    {
        try {
            return $this->getDropdownOptions($request->field_id, $request->q);
        } catch (Exception $e) {
            Log::error('Error::CAR_MAKE_MADE_YEAR_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postMadeYear(Request $request)
    {
        try {
            $request->validate(['name' => 'required|string|max:255|unique:car_make_transmissions,name']);
            return $this->postDropdownOptions($request->field_id, $request->name);
        } catch (Exception $e) {
            Log::error('Error::CAR_MAKE_MADE_YEAR_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }
}
