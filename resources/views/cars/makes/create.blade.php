<?php $page = 'create-carmake'; ?>
@extends('layouts.app', ['activePage' => 'table', 'title' => 'Create Car Makes - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4 class="fw-bold">Create Car Make</h4>
                        <h6>Create Make</h6>
                    </div>
                </div>
                <ul class="table-top-head">
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                class="ti ti-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="page-btn mt-0">
                    <a href="{{route('carmakes.index')}}" class="btn btn-secondary"><i data-feather="arrow-left"
                            class="me-2"></i>Back</a>
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
            <form method="POST" action="{{ route('carmakes.store') }}" class="add-role-form" enctype="multipart/form-data">
                @csrf
                <div class="add-product">
                    <div class="accordions-items-seperate" id="accordionSpacingExample">
                        <div class="accordion-item border mb-4">
                            <div id="SpacingOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingSpacingOne">
                                <div class="accordion-body border-top">
                                    @include('cars.makes.mmv')
                                    @include('cars.makes.enigne')
                                    @include('cars.makes.dimension')
                                    @include('cars.makes.brakes')
                                    @include('cars.makes.warranty')
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center justify-content-end mb-4">
                                            <button type="button" class="btn btn-secondary me-2"
                                                href="{{ route('carmakes.index') }}">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('layouts.partials.footer-moden')
    </div>
@endsection

@push('scripts')
    <script>
        //Select2 Dropdown
        $(document).ready(function () {
            // Initialize all select2-ajax dropdowns
            $('.select2-ajax').each(function () {
                let $el = $(this);

                dropDown(
                    $el.attr('id'),
                    $el.data('placeholder'),
                    $el.data('search-url'),
                    $el.data('add-url')
                );
            });

            function dropDown(field_id, placeholder, routePathSearch, routePathAdd) {
                $('#' + field_id).select2({
                    placeholder: placeholder,
                    minimumInputLength: 0, // 👈 allow fetching without typing
                    ajax: {
                        url: routePathSearch,
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                q: params.term || '',  // empty string means "all"
                                field_id: field_id
                            };
                        },
                        processResults: function (data, params) {
                            let results = data.map(item => ({
                                id: item.id,
                                text: item.name
                            }));

                            // If no results, show option to add
                            if (results.length === 0 && params.term) {
                                results.push({
                                    id: 'new_' + params.term,
                                    text: '➕ Add "' + params.term + '"',
                                    is_new: true
                                });
                            }

                            return { results: results };
                        },
                        cache: true
                    }
                });

                // 👇 Trigger search when clicking (to load all records by default)
                $('#' + field_id).on('select2:open', function () {
                    if (!$('#' + field_id).data('select2').results.lastParams) {
                        $('#' + field_id).select2('search', '');
                    }
                });

                // Handle "Add New" option
                $('#' + field_id).on('select2:select', function (e) {
                    let data = e.params.data;
                    if (data.is_new) {
                        $.post(routePathAdd, {
                            _token: '{{ csrf_token() }}',
                            name: data.text.replace('➕ Add "', '').replace('"', ''),
                            field_id: field_id
                        }, function (response) {
                            // Add and select the newly created option
                            let newOption = new Option(response.name, response.id, true, true);
                            $('#' + field_id).append(newOption).trigger('change');
                        });
                    }
                });
            }
        });
    </script>
@endpush