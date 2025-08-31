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
                            <!-- <form method="GET" action="{{ route('carmakes.index') }}">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col"><input type="text" id="user-search" name="user-search"
                                                                                    class="form-control" placeholder="Search Make" /></div>
                                                                            <div class="col"><button class="btn btn-primary" type="submit">Search</button></div>
                                                                        </div>
                                                                    </form> -->
                        </div>
                    </div>
                    <div class="page-btn">
                        <a href="{{ route('carmakes.create') }}" class="btn btn-primary"><i
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
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Start Year</th>
                                    <th>Variant</th>
                                    <th>Transmission</th>
                                    <th>Drive Train</th>
                                    <th>Fuel Type</th>
                                    <th>Engine (CC)</th>
                                    <th>Engine Type</th>
                                    <th>Action</th>
                                    <!-- <th class="no-sort"></th> -->
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($data as $carMake)
                                    <tr>
                                        <td>{{ $carMake->car_id ?? '' }}</td>
                                        <td>{{ $carMake->getVariant->model->brand->brand_name ?? '' }}</td>
                                        <td>{{ $carMake->getVariant->model->model_name ?? '' }}</td>
                                        <td>{{ $carMake->getStartYear->name ?? '' }}</td>
                                        <td>{{ $carMake->getVariant->variant_name ?? '' }}</td>
                                        <td>{{ $carMake->getTransmission->name ?? '' }}</td>
                                        <td>{{ $carMake->getDriveTrain->name ?? '' }}</td>
                                        <td>{{ $carMake->getFuelType->name ?? '' }}</td>
                                        <td>{{ $carMake->getEngine->getEngineCC->name ?? '' }}</td>
                                        <td>{{ $carMake->getEngine->getEngineType->name ?? '' }}</td>
                                        <td class="action-table-data">
                                            <div class="edit-delete-action">
                                                <a class="btn me-2 p-2 mb-0" href="{{ route('carmakes.edit', $carMake->id) }}">
                                                    Modify
                                                </a>
                                                <a class="me-2 p-2 mb-0" href="{{ route('carmakes.show', $carMake->id) }}">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </a>
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

    /* .table tbody tr td:nth-child(10) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(11) {
        background: #fcedf5 !important;
    }

    .table tbody tr td:nth-child(12) {
        background: #f7edd2 !important;
    } */
</style>