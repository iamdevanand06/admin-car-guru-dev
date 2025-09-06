<?php

namespace App\Http\Controllers;

use App\Models\Inpection;
use Exception;
use Illuminate\Http\Request;

class InspectionCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('cars.inspection_certificate.index');
        } catch (Exception $e) {

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
    public function show(Inpection $inpection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inpection $inpection)
    {
        try {
            return view('cars.inspection_certificate.edit');
        } catch (Exception $e) {

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inpection $inpection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inpection $inpection)
    {
        //
    }
}
