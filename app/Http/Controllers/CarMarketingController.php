<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\CarMake;

class CarMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $data = CarMake::with('getEngine', 'getCarInfo.getCarDetailCategory', 'getVariant.model.brand', 'getTransmission')->paginate(20);
            return view('marketing.promotion.index', compact('data'));
        } catch (Exception $e) {
            Log::error('Error::CAR_MARKAETING_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
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
}
