<?php

namespace App\Http\Controllers;

use App\Models\PromoDiscount;
use Illuminate\Http\Request;

class PromosDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
 try {
           
            return view('marketing.promo_discounts.index');
        } catch (Exception $e) {
            Log::error('Error::CAR_MARKAETING_DATA, Message: ' . $e->getMessage() . ' Line No: ' . $e->getLine());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
              try {
            return view('marketing.promo_discounts.create');
            
        } 
        catch (Exception $e) {
            Log::error('Error::CAR_MAKE_SUSPENSION_INDEX, Message: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong while fetching suspensions.');
        }
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
    public function show(PromoDiscount $promoDiscount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PromoDiscount $promoDiscount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PromoDiscount $promoDiscount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PromoDiscount $promoDiscount)
    {
        //
    }
}
