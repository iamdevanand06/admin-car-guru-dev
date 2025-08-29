<?php $page = 'create-cardetails'; ?>
@extends('layouts.app', ['activePage' => 'table', 'title' => 'Create Car Details - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="add-item d-flex">
                    <div class="page-title">
                        <h4 class="fw-bold">Create Car Details</h4>
                        <h6>Create Details</h6>
                    </div>
                </div>
                <div class="page-btn mt-0">
                    <a href="{{route('carmakes.index')}}" class="btn btn-secondary"><i data-feather="arrow-left"
                            class="me-2"></i>Back</a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

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

            <!-- Banner Header -->
            <div class="container-fluid bg-light py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold mb-0">ADVERTISING & PROMOTION BANNERS</h6>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-dark btn-sm">
                            <i class="bi bi-image"></i> +New
                        </button>
                        <div class="dropdown">
                            <button class="btn btn-warning btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                Banner Category
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Category 1</a></li>
                                <li><a class="dropdown-item" href="#">Category 2</a></li>
                            </ul>
                        </div>
                        <button class="btn btn-outline-secondary btn-sm">
                            <i class="bi bi-funnel"></i> Filters
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Section -->
            <div class="mt-0">
                <div class="card">
                    <div class="card-body">

                        <!-- Options -->
                        <div class="row g-4 mb-3 align-items-center ">
                            <div class="col-md-2">

                                <select id="set" name="set" class="form-select">
                                    <option value="">Select or Add Set</option>
                                    <option value="add">+ Add New</option>
                                </select>
                            </div>
                            <div class="col-md-5 d-flex">
                                <p class="ms-4 mt-3">Banner Link</p>
                                <input type="text" id="banner_url" class="form-control w-50 p-2 h-25 mt-2 m-1"
                                    placeholder="Enter Link to redirect to Promo/Discount Page">
                                <button class="btn btn-light p-2 h-25 mt-2">Modify</button>
                            </div>
                            <div class="col-md-5 ">
                                <div class="d-flex justify-content-start gap-2 mt-0 fs-6">
                                    <button class="btn btn-light p-2 h-25">Delete</button>
                                    <button class="btn btn-light p-2 h-25">Archive</button>
                                    <button class="btn btn-light p-2 h-25">Preview</button>
                                    <button id="saveBanner" type="submit" class="btn btn-light p-2 h-25">Save</button>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                    </div>
                                    <input type="hidden" id="status" name="status" value="1">
                                </div>
                            </div>
                        </div>

                        <!-- Upload Section -->
                        <div class="container mt-5">
                            <div class="row g-5">
                                <!-- Web Version -->
                                <div class="col-md-8 mt-5 ps-3">
                                    <label for="webUpload" class="w-100">
                                        <div id="webBox"
                                            class="d-flex flex-column justify-content-center align-items-center  position-relative"
                                            style="border:2px dashed #ccc; cursor:pointer; min-height:200px;">

                                            <!-- Upload Icon + Text -->
                                            <div id="webText" class="text-center">
                                                <i class="fa-solid fa-cloud-arrow-up fs-2"></i>
                                                <p class="mb-1">Browse File (Front Photo)</p>
                                                <small class="text-muted">Drag & drop file here</small>
                                            </div>

                                            <!-- Image Preview -->
                                            <img id="webPreview"
                                                class="img-fluid d-none position-absolute top-0 start-0 w-100 h-100 object-fit-cover p-1 " />
                                        </div>
                                    </label>
                                    <small class="d-block">WEB VERSION: 1508 X 480 PIXELS </small>
                                    <input type="file" id="webUpload" class="d-none" accept="image/*">
                                </div>

                                <!-- Mobile Version -->
                                <div class="col-md-4 mt-3">
                                    <label for="mobileUpload" class="w-75">
                                        <div id="mobileBox"
                                            class="d-flex flex-column justify-content-center align-items-center p-5 position-relative"
                                            style="border:2px dashed #ccc; cursor:pointer; min-height:280px;">

                                            <!-- Upload Icon + Text -->
                                            <div id="mobileText" class="text-center">
                                                <i class="fa-solid fa-cloud-arrow-up fs-2"></i>
                                                <p class="mb-1">Browse File (Mobile Photo)</p>
                                                <small class="text-muted">Drag & drop file here</small>
                                            </div>

                                            <!-- Image Preview -->
                                            <img id="mobilePreview"
                                                class="img-fluid d-none position-absolute top-0 start-0 w-100 h-100 object-fit-cover p-1" />
                                        </div>
                                    </label>
                                    <small class="d-block">MOBILE VERSION: 480 x 600 PIXELS</small>
                                    <input type="file" id="mobileUpload" class="d-none" accept="image/*">
                                </div>
                                <!-- Footer -->
                                <div class="mt-3">
                                    <span class="text-muted">AD SET 0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preview Script -->
            <script>
                // Generic preview function
                function previewImage(event, previewId, textId) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            const img = document.getElementById(previewId);
                            img.src = e.target.result;
                            img.classList.remove("d-none");

                            // Hide upload text but keep box
                            document.getElementById(textId).style.display = "none";
                        }
                        reader.readAsDataURL(file);
                    }
                }

                // Web banner preview
                document.getElementById("webUpload").addEventListener("change", function (event) {
                    previewImage(event, "webPreview", "webText");
                });

                // Mobile banner preview
                document.getElementById("mobileUpload").addEventListener("change", function (event) {
                    previewImage(event, "mobilePreview", "mobileText");
                });
            </script>

            <script>
                $('#saveBanner').click(function (e) {
                    e.preventDefault();

                    // Use FormData for files
                    let formData = new FormData();
                    formData.append('_token', $('meta[name="csrf-token"]').attr('content')); // CSRF token
                    formData.append('banner_id', "{{ rand(0000, 9999) }}");
                    formData.append('set', $('#set').val());
                    formData.append('banner_web', $('#webUpload')[0].files[0]);   // file input
                    formData.append('banner_mob', $('#mobileUpload')[0].files[0]); // file input
                    formData.append('status', $('#status').val());

                    $.ajax({
                        url: "{{ route('advertisment.store') }}",
                        type: "POST",
                        data: formData,
                        processData: false, // important for FormData
                        contentType: false, // important for FormData
                        success: function (response) {
                            $('#result').html('<p style="color:green;">' + response.message + '</p>');

                            $('#banner_url').val(response.set);

                        },
                        error: function (xhr) {
                            $('#result').html('');
                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                $.each(xhr.responseJSON.errors, function (key, value) {
                                    $('#result').append('<p style="color:red;">' + value + '</p>');
                                });
                            } else {
                                $('#result').append('<p style="color:red;">Something went wrong</p>');
                            }
                        }
                    });
                });
            </script>

            <script>
                let counter = 0; // start from 0

                $("#set").on("change", function () {
                    if ($(this).val() === "add") {
                        // create new option
                        let newOption = $("<option>", {
                            value: counter,
                            text: "Set (" + counter + ")"
                        });

                        // add new option before "Add New"
                        $("#set option[value='add']").before(newOption);

                        // select the new option
                        $("#set").val(counter);

                        // increment counter
                        counter++;

                        $('#webUpload').val("");
                        $('#mobileUpload').val("");
                    }


                });
            </script>
            <script>
                let counter = 1; // start with Set 1

                $("#banner_url").on("change keyup", function () {
                    let bannerUrl = $(this).val().trim();

                    if (bannerUrl !== "") {
                        // check if already added
                        let exists = false;
                        $("#set option").each(function () {
                            if ($(this).data("banner-url") === bannerUrl) {
                                exists = true;
                            }
                        });

                        if (!exists) {
                            // create new option
                            let newOption = $("<option>", {
                                value: "Set " + counter,
                                text: "Set " + counter + " - " + bannerUrl, // show with url
                                "data-banner-url": bannerUrl
                            });

                            // insert before "Add New"
                            $("#set option[value='add']").before(newOption);

                            // auto-select new option
                            $("#set").val("Set " + counter);

                            counter++;
                        }
                    }
                });
            </script>




            <style>
                .toggle {
                    --w: 90px;
                    --h: 34px;
                    --p: 4px;
                    position: relative;
                    width: var(--w);
                    height: var(--h);
                    border-radius: 999px;
                    cursor: pointer;
                    display: inline-flex;
                    align-items: center;
                    padding-left: 12px;
                    font: 600 12px/1 sans-serif;
                    border: none;
                    outline: none;
                    transition: background .2s;
                }

                .toggle .thumb {
                    position: absolute;
                    top: var(--p);
                    right: var(--p);
                    width: calc(var(--h) - var(--p)*2);
                    height: calc(var(--h) - var(--p)*2);
                    border-radius: 50%;
                    background: #fff;
                    transition: .2s;
                }

                .toggle[aria-checked="true"] {
                    background: #f7b500;
                    color: #000;
                }

                .toggle[aria-checked="false"] {
                    background: #ddd;
                    color: #555;
                    padding-left: 32px;
                }

                .toggle[aria-checked="false"] .thumb {
                    left: var(--p);
                    right: auto;
                }
            </style>
            <script>
                const t = document.getElementById('t');
                t.addEventListener('click', () => {
                    const on = t.getAttribute('aria-checked') === "true";
                    t.setAttribute('aria-checked', !on);
                    t.querySelector('.label').textContent = !on ? "Activated" : "Deactivated";
                });
            </script>
@endsection