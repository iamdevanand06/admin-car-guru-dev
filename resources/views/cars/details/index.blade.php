@extends('layouts.app', ['activePage' => 'table', 'title' => 'Users - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4 class="fw-bold">OPERATION/ CAR DETAILS/ OVERVIEWS</h4>
                    </div>
                </div>
            </div>

            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- /product list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set">
                        <div class="search-input">
                        </div>
                    </div>
                    <div class="page-btn">
                        <a href="{{ route('car-details.create') }}" class="btn btn-primary"><i
                                class="ti ti-circle-plus me-1"></i>Add
                        </a>
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-filter"></i> Filter
                        </a>
                    </div>
                </div>

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Car ID</th>
                                    <th>Category</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Variant</th>
                                    <th>Reg Number</th>
                                    <th>Reg Date</th>
                                    <th>Mileage</th>
                                    <th>Engine Number</th>
                                    <th>Chassis Number</th>
                                    <th>Location</th>
                                    <th>Car Price (RM)</th>
                                    <th>Action</th>
                                    <!-- <th class="no-sort"></th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $carDetail)
                                    <tr>
                                        <td>{{ $carDetail->car_detail_id ?? '' }}</td>
                                        <td>{{ $carDetail->getCarDetailCategory->name ?? '' }}</td>
                                        <td>{{ $carDetail->getVariant->model->brand->brand_name ?? '' }}</td>
                                        <td>{{ $carDetail->getVariant->model->model_name ?? '' }}</td>
                                        <td>{{ $carDetail->getVariant->variant_name ?? '' }}</td>
                                        <td>{{ $carDetail->car_info_registration_number ?? '' }}</td>
                                        <td>{{ $carDetail->car_info_registration_date ?? '' }}</td>
                                        <td>{{ $carDetail->mileage ?? '' }}</td>
                                        <td>{{ $carDetail->engine_number ?? '' }}</td>
                                        <td>{{ $carDetail->chassis_number ?? '' }}</td>
                                        <td>{{ $carDetail->getCountry->country_name ?? '' }}</td>
                                        <td>{{ $carDetail->car_info_price ?? '' }}</td>
                                        <td class="action-table-data">
                                            <div class="edit-delete-action">
                                                <a class="btn me-2 p-2 mb-0"
                                                    href="{{ route('car-details.edit', $carDetail->id) }}">
                                                    <i class="fa-regular fa-eye"></i>
                                                </a>
                                                <!-- <a class="me-2 p-2 mb-0" href="{{ route('car-details.show', $carDetail->id) }}">
                                                                            <i class="fa-solid fa-magnifying-glass"></i>
                                                                        </a> -->
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">There are no data.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $data->links('pagination::bootstrap-5') !!}
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

    .table thead tr th:nth-child(2) {
        background: #FFDCB8 !important;
    }

    .table thead tr th:nth-child(3) {
        background: #FFDCB8 !important;
    }

    .table tbody tr td:nth-child(2) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(3) {
        background: #fcedf5 !important;
    }

    .table thead tr th:nth-child(9) {
        background: #FAE1A0 !important;
    }

    .table thead tr th:nth-child(10) {
        background: #FAE1A0 !important;
    }

    .table tbody tr td:nth-child(9) {
        background: #f7edd2 !important;
    }

    .table tbody tr td:nth-child(10) {
        background: #f7edd2 !important;
    }
</style>