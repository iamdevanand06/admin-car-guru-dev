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
                            <form method="GET" action="{{ route('makes.index') }}">
                                @csrf
                                <div class="row">
                                    <div class="col"><input type="text" id="user-search" name="user-search"
                                            class="form-control" placeholder="Search Make" /></div>
                                    <div class="col"><button class="btn btn-primary" type="submit">Search</button></div>
                                </div>
                            </form>
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

                                @forelse ($data as $market)
                                    <tr>
                                        <td>{{ $market->car_id }}</td>
                                        <td>{{ $market->getCarInfo->getCarDetailCategory->name ?? '-' }}</td>
                                        <td>{{ $market->getVariant->model->brand->brand_name }}</td>
                                        <td>{{ $market->getVariant->model->model_name }}</td>
                                        <td>C000001</td>
                                        <td>{{ $market->getTransmission->name }}</td>
                                        <td>{{ $market->getCarInfo->car_info_location ?? '-' }}</td>
                                        <td>{{ $market->getCarInfo->car_info_price ?? '-' }}</td>
                                        <td>C000001</td>
                                        <td>C000001</td>
                                        <td>C000001</td>
                                        <td>C000001</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">There are no data.</td>
                                    </tr>
                                @endforelse

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