@extends('layouts.app', ['activePage' => 'table', 'title' => 'Users - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4 class="fw-bold">Make</h4>
                        <h6>Manage your Make</h6>
                    </div>
                </div>
                <div class="page-btn">
                    @can('make-create')
                        <a href="{{ route('makes.create') }}" class="btn btn-primary"><i class="ti ti-circle-plus me-1"></i>Add
                            Make</a>
                    @endcan
                </div>
            </div>


            <!-- /product list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set">
                        <div class="search-input">
                            <!-- <form method="GET" action="{{ route('makes.index') }}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col"><input type="text" id="user-search" name="user-search"
                                                                    class="form-control" placeholder="Search Make" /></div>
                                                            <div class="col"><button class="btn btn-primary" type="submit">Search</button></div>
                                                        </div>
                                                    </form> -->
                            <div class="container mt-4">
                                <div class="row g-3">

                                    <!-- Card 1 -->
                                    <div class="col-md-3">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-header text-center text-white fw-bold"
                                                style="background:#c2185b;">
                                                CARS DISCOUNTS & REBATES
                                            </div>
                                            <div class="card-body text-center d-flex" style="background:#ebe4e8;">
                                                <p class="mb-2"><span class="fw-bold fs-3 text-danger">5</span> <br>BID
                                                    CARS</p>
                                                <p class="mb-2"><span class="fw-bold fs-3 text-primary">12</span>
                                                    CERTIFIED CARS</p>
                                                <p class="mb-0"><span class="fw-bold fs-3 text-dark">8</span><br>
                                                    BUY-AS-IT-IS CARS</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 2 -->
                                    <div class="col-md-3">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-header text-center text-white fw-bold"
                                                style="background:#ef6c00;">
                                                ADVERTISING CAMPAIGN
                                            </div>
                                            <div class="card-body text-center d-flex" style="background:#fde2c1;">
                                                <p class="mb-2"><span class="fw-bold fs-3 text-warning">0</span>
                                                    INACTIVE</p>
                                                <p class="mb-2"><span class="fw-bold fs-3 text-success">25</span> ACTIVE
                                                </p>
                                                <p class="mb-0"><span class="fw-bold fs-3 text-danger">3</span> <br>TO
                                                    START</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 3 -->
                                    <div class="col-md-3">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-header text-center text-white fw-bold"
                                                style="background:#1976d2;">
                                                DESIGN CAR ASSETS
                                            </div>
                                            <div class="card-body text-center d-flex" style="background:#e1effb;">
                                                <p class="mb-2"><span class="fw-bold fs-3 text-primary">2</span><br> BID
                                                    CARS</p>
                                                <p class="mb-2"><span class="fw-bold fs-3 text-info">11</span> CERTIFIED
                                                    CARS</p>
                                                <p class="mb-0"><span class="fw-bold fs-3 text-secondary">7</span><br>
                                                    BUY-AS-IT-IS CARS</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card 4 -->
                                    <div class="col-md-3">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-header text-center text-white fw-bold"
                                                style="background:#388e3c;">
                                                CUSTOMERS ENROLMENT
                                            </div>
                                            <div class="card-body text-center d-flex" style="background:#d6f4df;">
                                                <p class="mb-2"><span class="fw-bold fs-3 text-info">10</span><br> IN
                                                    PROGRESS</p>
                                                <p class="mb-2"><span class="fw-bold fs-3 text-success">124</span>
                                                    SUCCESS</p>
                                                <p class="mb-0"><span class="fw-bold fs-3 text-danger">4</span><br>
                                                    DROP-OFF</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>

                                    <th>Car ID</th>
                                    <th>Car Category</th>
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Mileage</th>
                                    <th>Transmission</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Loan Description</th>
                                    <th>Promotion Type</th>
                                    <th>Discount</th>
                                    <th>Custom Images & Videos</th>
                                    <th>Action</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12345
                                    <td>
                                    <td>C000001</td>
                                    <td></td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>
                                    <td>C000001</td>


                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /product list -->
        </div>
        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0 text-gray-9">2014 - 2025 &copy; DreamsPOS. All Right Reserved</p>
            <p>Designed &amp; Developed by <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
        </div>
    </div>
@endsection

<style>
    .table thead tr th {
        background: #ffeebf !important;
    }

    .table tbody tr td:nth-child(2) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(8) {
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
</style>