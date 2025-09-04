@extends('layouts.app', ['activePage' => 'table', 'title' => 'Users - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
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


            <!-- /product list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set">
                        <div class="search-input">
                            <div class="container mt-4">
                                <div class="row g-3">
                                    <!-- Card 1 -->
                                    <div class="col-md-3">
                                        <div class="card h-75 shadow-sm border-0">
                                            <div class="card-header text-center text-black fw-bold h-25"
                                                style="background:#EABDD8; font-size:12px;">
                                                CARS DISCOUNTS & REBATES
                                            </div>
                                            <div class="card-body text-center d-flex h-50" style="background:#ECE4E8;">
                                                <p class="m-2"><span class="fw-light fs-3 text-danger">5</span>
                                                    <br><small>BID
                                                        CARS</small>
                                                </p>
                                                <p class="m-2"><span class="fw-light fs-3 text-primary">12</span>
                                                    <br><small>CERTIFIED CARS</small>
                                                </p>
                                                <p class="m-2"><span class="fw-light fs-3 text-dark">8</span><br>
                                                    <small>AS-IT-IS CARS</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col-md-3">
                                        <div class="card h-75 shadow-sm border-0">
                                            <div class="card-header text-center text-black fw-bold h-25"
                                                style="background:#FABE8E;font-size:12px;">
                                                ADVERTISING CAMPAIGN
                                            </div>
                                            <div class="card-body text-center d-flex h-50" style="background:#FBF3E2;">
                                                <p class="m-3"><span class="fw-light fs-3 text-danger">0</span>
                                                    <br><small>INACTIVE</small>
                                                </p>
                                                <p class="m-3"><span class="fw-light fs-3 text-primary">25</span>
                                                    <br><small>ACTIVE</small>
                                                </p>
                                                <p class="m-3"><span class="fw-light fs-3 text-dark">3</span><br>
                                                    <small>TO START</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col-md-3">
                                        <div class="card h-75 shadow-sm border-0">
                                            <div class="card-header text-center text-black fw-bold h-25"
                                                style="background:#A7CDF0;font-size:12px;">
                                                DESIGN CAR ASSETS
                                            </div>
                                            <div class="card-body text-center d-flex h-50" style="background:#e1effb;">
                                                <p class="m-2"><span class="fw-light fs-3 text-primary">2</span><br>
                                                    <small>BIDCARS</small>
                                                </p>
                                                <p class="m-2"><span class="fw-light fs-3 text-info">11</span><br>
                                                    <small>CERTIFIED</small>
                                                    CARS
                                                </p>
                                                <p class="m-2"><span class="fw-light fs-3 text-secondary">7</span><br>
                                                    <small>AS-IT-IS CAR</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="col-md-3">
                                        <div class="card h-75 shadow-sm border-0">
                                            <div class="card-header text-center text-black fw-bold h-25"
                                                style="background:#388e3c;font-size:12px;">
                                                CUSTOMERS ENROLMENT
                                            </div>
                                            <div class="card-body h-50 text-center d-flex" style="background:#d6f4df;">
                                                <p class="m-2"><span class="fw-light fs-3 text-primary">10</span><br>
                                                    <small>IN PROGRESS</small>
                                                </p>
                                                <p class="m-2"><span class="fw-light fs-3 text-info">124</span><br>
                                                    <small>SUCCESS</small>
                                                    CARS
                                                </p>
                                                <p class="m-2"><span class="fw-light fs-3 text-secondary">4</span><br>
                                                    <small>DROP-OFF</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 mt-5">
                    <div class="row m-2">
                        <div class="col-10">
                            <h5 class="m-2">MARKETING / PROMOS & DISCOUNTS / OVERVIEW</h5>
                        </div>
                        <div class="col-2">
                            <a href="{{ route('promo_discounts.create') }}" class="btn btn-primary float-end">+New 
                               Promotion </a>
                        </div>
                    </div>

                    <div class="page-btn">

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Promotion ID</th>
                                    <th>Date & Time</th>
                                    <th>Promotion Type</th>
                                    <th>Discount</th>
                                    <th>Total CarsAdded</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
        @include('layouts.partials.footer-moden')
    </div>
@endsection

<style>
    .table thead tr th {
        background: #ffeebf !important;
    }

    .table tbody tr td:nth-child(2) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(3) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(4) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(6) {
        background: #f7edd2 !important;
    }

    .table tbody tr td:nth-child(10) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(11) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(12) {
        background: #f7edd2 !important;
    }

    .card-body p small {
        font-size: 12px;
    }
</style>