@extends('layouts.app', ['activePage' => 'table', 'title' => 'Vehicle Models - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4 class="fw-bold">Variant</h4>
                        <h6>Manage your Variant</h6>
                    </div>
                </div>
                <div class="page-btn">
                    @can('make-create')
                        <a href="{{ route('variants.create') }}" class="btn btn-primary"><i
                                class="ti ti-circle-plus me-1"></i>Add
                            Variant</a>
                    @endcan
                </div>
            </div>


            <!-- /product list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <div class="search-set">
                        <div class="search-input">
                            <form method="GET" action="{{ route('variants.index') }}">
                                @csrf
                                <div class="row">
                                    <div class="col"><input type="text" id="user-search" name="user-search"
                                            class="form-control" placeholder="Search Variant" /></div>
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
                                    <th>Brand</th>
                                    <th>Model</th>
                                    <th>Variant Name</th>
                                    <th>Status</th>
                                    <th class="no-sort"></th>
                                </tr>
                            </thead>
                            @foreach ($data as $key => $variant)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!-- <a href="javascript:void(0);" class="avatar avatar-md me-2">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img src="{{URL::asset('build/img/users/user-47.png')}}" alt="product">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </a> -->
                                                <a href="javascript:void(0);">{{ $variant->brand->brand_name }}</a>
                                            </div>
                                        </td>
                                        <td>{{ $variant->model->model_name }}</td>
                                        <td>{{ $variant->variant_name }}</td>
                                        <td><span
                                                class="d-inline-flex align-items-center p-1 pe-2 rounded-1 text-white {{ $variant->status == 1 ? 'bg-success' : 'bg-danger'}} fs-10"><i
                                                    class="ti ti-point-filled me-1 fs-11"></i>{{ $variant->status == 1 ? 'Active' : 'In-Active'}}</span>
                                        </td>
                                        <td class="action-table-data">
                                            <div class="edit-delete-action">
                                                @can('variant-edit')
                                                    <a class="me-2 p-2 mb-0" href="{{ route('variants.edit', $variant->id) }}">
                                                        <i data-feather="edit" class="feather-edit"></i>
                                                    </a>
                                                @endcan

                                                @can('variant-delete')
                                                    <form method="POST" action="{{ route('variants.destroy', $variant->id) }}"
                                                        style="display:inline">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" class="btn btn-sm ml-1"><i data-feather="trash-2"
                                                                class="feather-trash-2"
                                                                onclick="return confirm('Are you sure to delete?')"></i></button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        {!! $data->links('pagination::bootstrap-5') !!}
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