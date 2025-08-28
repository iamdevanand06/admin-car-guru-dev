<?php

namespace App\Http\Controllers;

use App\Models\CarDetailRegistrationType;
use App\Traits\commonTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class CarDetailRegistrationTypeController extends Controller
{
    use commonTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = CarMakeRegistrationType::paginate(20);
            return view('dynami', compact('data'));
        } catch (Exception $e) {
            Log::error('ERROR::INDEX_CAR_MAKE_MANUFACTUREWRS_WARRANTY ' . $e->getMessage() . ' Line No: ' . $e->getLine());
            return back()->with('error', 'Unable to fetch Manufacturers_warrenty.');
        }
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
    public function show(CarDetailRegistrationType $carDetailRegistrationType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarDetailRegistrationType $carDetailRegistrationType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarDetailRegistrationType $carDetailRegistrationType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarDetailRegistrationType $carDetailRegistrationType)
    {
        //
    }

    public function getRegistrationType(Request $request)
    {
        try {
            return $this->getDropdownOptions($request->field_id, $request->q);
        } catch (Exception $e) {
            Log::error('Error::CAR_DETAIL_Registration_Type_SEARCH_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    public function postRegistrationType(Request $request)
    {
        try {
            $request->validate(['name' => 'required|string|max:255|unique:car_detail_category,name']);
            return $this->postDropdownOptions($request->field_id, $request->name);
        } catch (Exception $e) {
            Log::error('Error::CAR_DETAIL_Registration_Type_SEARCH_ADD_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }
}
