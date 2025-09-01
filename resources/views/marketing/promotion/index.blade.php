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

                            <div class="container mt-4">
                                <div class="row g-3">

                                      <!-- Cars Discounts & Rebates -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm">
        <div class="card-header bg-muted text-center fw-light shadow-sm text-uppercase">
          CARS DISCOUNTS & REBATES
        </div>
        <div class="card-body text-center" style="background-color: #ede6ea">
          <div class="row">
            <div class="col">
              <h2 class="text-danger mb-0">5</h2>
              <small class="fw-semibold text-uppercase">BID CARS</small>
            </div>
            <div class="col">
              <h2 class="text-primary mb-0">12</h2>
              <small class="fw-semibold text-uppercase">CERTIFIED CARS</small>
            </div>
            <div class="col">
              <h2 class="text-purple mb-0">8</h2>
              <small class="fw-semibold text-uppercase">AS-IT-IS CARS</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Advertising Campaign -->
   <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm">
        <div class="card-header text-center fw-bold text-uppercase" style="background-color: #fabf8e">
          ADVERTISING CAMPAIGN
        </div>
        <div class="card-body text-center"  style="background-color:#faf2e1">
          <div class="row">
            <div class="col">
              <h2 class="text-warning  mb-0">10</h2>
              <small class="fw-semibold text-uppercase">INACTIVE</small>
            </div>
            <div class="col">
              <h2 class="text-danger mb-0">124</h2>
              <small class="fw-semibold text-uppercase">ACTIVE</small>
            </div>
            <div class="col">
              <h2 class="text-success mb-0">4</h2>
              <small class="fw-semibold text-uppercase">TO START</small>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Design Car Assets -->
     <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm">
        <div class="card-header bg-info text-center fw-bold text-uppercase" style="background-color:#a8cdf0">
         DESIGN CAR ASSETS
        </div>
        <div class="card-body text-center" style="background-color:#d5e3f5">
          <div class="row">
            <div class="col">
              <h2 class="text-primary mb-0">10</h2>
              <small class="fw-semibold text-uppercase">BID CARS</small>
            </div>
            <div class="col">
              <h2 class="text- mb-0">124</h2>
              <small class="fw-semibold text-uppercase">CERTIFIED CARS</small>
            </div>
            <div class="col">
              <h2 class="text-primary  mb-0">4</h2>
              <small class="fw-semibold text-uppercase">AS-IT-IS CARS</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Customers Enrollment -->
    <div class="col-md-3 col-sm-6">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-center fw-bold text-uppercase" style="background-color#a9ebd4">
          CUSTOMERS ENROLLMENT
        </div>
        <div class="card-body text-center"style="background-color:#dff5ed">
          <div class="row">
            <div class="col">
              <h2 class="text-success mb-0">10</h2>
              <small class="fw-semibold text-uppercase">IN PROGRESS</small>
            </div>
            <div class="col">
              <h2 class="text-dark mb-0">124</h2>
              <small class="fw-semibold text-uppercase">SUCCESS</small>
            </div>
            <div class="col">
              <h2 class="text-danger mb-0">4</h2>
              <small class="fw-semibold text-uppercase">DROP-OFF</small>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>
</div>

                <h5>ADVERTISING & PROMOTION / OVERVIEW</h5><br>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>

                                    <th>Ad Placement</th>
                                    <th>Ad Format</th>
                                    <th>Ad Topic</th>
                                    <th>Banner Type</th>

                                    <th>Promotion Type</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Home - Main Banner</td>
                                    <td>Multiple</td>
                                    <td>Multiple</td>
                                    <td>Carousel (4)</td>
                                    <td>Best Deal In Town!, Promo 2, Promo 3, Promo 4</td>
                                      <td><span class="badge bg-success">Activated</span></td>
                                     <td><button class="btn btn-sm btn-outline-primary">View</button></td>
                                    </tr>

                                    </tr>

                                <tr>
                                    <td>Home - Side Search - Mini Banner</td>
                                    <td>Single</td>
                                    <td>Car - Bid</td>
                                    <td>Single</td>
                                    <td>Fantastic Bidding Frenzy!</td>
                                     <td><span class="badge bg-success">Activated</span></td>
                                     <td><button class="btn btn-sm btn-outline-primary">View</button></td>
                                    </tr>


          <tr>
          <td>Bid - Main Banner</td>
          <td>Multiple</td>
          <td>Multiple</td>
          <td>Carousel (8)</td>
          <td>Fantastic Bidding Frenzy! (8 Cars)</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
         <tr>
          <td>Buy - Main Banner</td>
          <td>Multiple</td>
          <td>Multiple</td>
          <td>Carousel (4)</td>
          <td>Local Cars Specials! (4 Cars)</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
         <tr>
          <td>Buy - Product page - Banner</td>
          <td>Single</td>
          <td>Loan</td>
          <td>Single</td>
          <td>CARGURU Value Savings!</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Buy - Book Car - Mini Side Banner</td>
          <td>Single</td>
          <td>Warranty</td>
          <td>Single</td>
          <td>FREE Extended Warranty</td>
          <td><span class="badge bg-secondary">NA</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Buy - Test Drive - Mini Side Banner</td>
          <td>Single</td>
          <td>Multiple</td>
          <td>Single</td>
          <td>CARGURU Branding</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Buy - Get Loan - Mini Side Banner</td>
          <td>Single</td>
          <td>Loan</td>
          <td>Single</td>
          <td>CARGURU Service</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Sell - Main Banner</td>
          <td>Multiple</td>
          <td>Multiple</td>
          <td>Carousel (4)</td>
          <td>Don’t Lose Out!, Promo 2, Promo 3, Promo 4</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Sell - Mini Side Banner</td>
          <td>Single</td>
          <td>Inspection</td>
          <td>Single</td>
          <td>CARGURU Service</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Sell - Product page - Banner</td>
          <td>Single</td>
          <td>Product</td>
          <td>Single</td>
          <td>FREE Battery</td>
          <td><span class="badge bg-success">Activated</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>Services - Main Banner</td>
          <td>Single</td>
          <td>Warranty</td>
          <td>Single</td>
          <td>CARGURU Service</td>
          <td><span class="badge bg-secondary">NA</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
        </tr>
        <tr>
          <td>About - Main Banner</td>
          <td>Single</td>
          <td>Inspection</td>
          <td>Single</td>
          <td>CARGURU Service</td>
          <td><span class="badge bg-secondary">NA</span></td>
          <td><button class="btn btn-sm btn-outline-primary">View</button></td>
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
        background:#fcedf5 !important;
    }

    .table tbody tr td:nth-child(6) {
        background: #ffeebf !important;
    }


</style>





