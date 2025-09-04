<?php $page = 'edit-role'; ?>
@extends('layouts.app', ['activePage' => 'table', 'title' => 'Create Role - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="page-wrapper">
       <div class="content">
             <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4 class="fw-bold">Promos & Discounts</h4>
                        <h6>Manage your Promos & Discounts</h6>
                    </div>
                </div>
            </div>  
            <div class="">
    <!-- A&P MECHANICS -->
    <div class="card shadow-sm p-4 mb-4">
    
       <div class="row">
                  <div class="col-11">
                      <h6 class="fw-bold">A&P MECHANICS</h6>
                  </div>
                    <div class="col-1">
 <button class="btn btn-warning text-dark">Reset</button>
                    </div>
              </div>
<hr>
      <div class="mb-3">
        <label class="form-label">PROMOTION ID</label>
        <div class="d-flex align-items-center gap-3">
      
 
  <input type="text" class="form-control w-25" id="name" placeholder="PROMOTION ID">

        </div>
      </div>

      <div class="row g-3">
        <div class="col-md-4">
          <label for="promoName" class="form-label">Promotion</label>
          <input type="text" class="form-control" id="promoName" placeholder="Enter Promotion (max 30 letters)">
        </div>
        <div class="col-md-4">
          <label for="promoDetail" class="form-label">Promotion Detail</label>
          <input type="text" class="form-control" id="promoDetail" placeholder="Enter Amount or Discount %">
        </div>
      </div>

      <div class="row g-3 mt-2">
        <div class="col-md-3">
          <label for="startDate" class="form-label">Start Date</label>
          <input type="date" class="form-control" id="startDate">
        </div>
        <div class="col-md-3">
          <label for="endDate" class="form-label">End Date</label>
          <input type="date" class="form-control" id="endDate">
        </div>
        <div class="col-md-3">
          <label for="startTime" class="form-label">Start Time</label>
          <select id="startTime" class="form-select">
            <option>Select Promo Start Time</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="endTime" class="form-label">End Time</label>
          <select id="endTime" class="form-select">
            <option>Select Promo End Time</option>
          </select>
        </div>
      </div>
    </div>

    <!-- CARS ON PROMO -->
    <div class="card shadow-sm p-4 mb-4">
      <h6 class="fw-bold">CARS ON PROMO</h6>
      <div class="row g-3 align-items-end">
        <div class="col-md-3">
          <label for="carCategory" class="form-label">Car Category</label>
          <select id="carCategory" class="form-select">
            <option>Select Car Category</option>
          </select>
        </div>
        <div class="col-md-4">
          <button class="btn btn-warning fw-bold text-dark">Shortlist Cars for Promo</button>
        </div>
      </div>
    </div>
@endsection