<div class="container">
    <h5>CAR INFO</h5>
    <hr />

    <div class="row">
        <!-- Car Category -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label ">Car Category</label>
                <select id="car_info_category" name="car_info_category" class="form-control select2-ajax"
                    data-placeholder="Select or Add Category" data-search-url="{{ route('category.search') }}"
                    data-add-url="{{ route('category.add') }} ">
                </select>
            </div>
        </div>

        <!-- CAR ID -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label ">CAR ID</label>
                <select id="car_id" name="car_id" class="form-control">
                    @foreach ($carIds as $carId)
                        <option value="{{ $carId->car_id }}">{{ $carId->car_id }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Car Price -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label">Car Price</label>
                <input type="text" id="car_info_price" name="car_info_price" class="form-control"
                    placeholder="RM 40,550">
            </div>
        </div>

        <!-- Location -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label">Location</label>
                <select id="car_info_location" name="car_info_location" class="form-control">
                    <option>Puchong</option>
                    <option value="Kuala Lumpur">Kuala Lumpur</option>
                </select>
            </div>
        </div>
        <!-- Location -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">

            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">

            </div>
        </div>
    </div>


    <div class="row">
        <!-- Registration Type -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label">Registration Type</label>
                <select id="car_registration_type" name="car_info_registration_type" class="form-control select2-ajax"
                    data-placeholder="Select or Add Registration Type"
                    data-search-url="{{ route('registrationType.search') }}"
                    data-add-url="{{ route('registrationType.add') }}">
                </select>
            </div>
        </div>


        <!-- Registration Number -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label">Registration Number</label>
                <input type="text" id="car_info_registration_number" name="car_info_registration_number"
                    class="form-control" placeholder="JDV5817">
            </div>
        </div>

        <!-- Registration Date -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label">Registration Date</label>
                <input type="date" id="car_info_registration_date" name="car_info_registration_date"
                    class="form-control">
            </div>
        </div>

        <!-- Car Make Year -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
                <label class="form-label">Car Make Year</label>
                <input type="date" id="car_info_car_make_year" name="car_info_car_make_year" class="form-control">
            </div>
        </div>
    </div>
</div>
<div class="row ms-0">
    <!-- Exterior Color -->
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3 ">
            <label class="form-label">Exterior Color</label>
            <select id="car_info_exterior_color" name="car_info_exterior_color" class="form-control select2-ajax"
                data-placeholder="Select or Add Exterior Color" data-search-url="{{ route('exteriorColor.search') }}"
                data-add-url="{{ route('exteriorColor.add') }}">
            </select>
        </div>
    </div>

    <!-- Interior Color -->
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Interior Color</label>
            <select id="interior_color" name="interior_color" class="form-control select2-ajax"
                data-placeholder="Select or Add Exterior Color" data-search-url="{{ route('interiorColor.search') }}"
                data-add-url="{{ route('interiorColor.add') }}">
            </select>
        </div>
    </div>

    <!-- Number of Keys -->
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Number of Keys</label>
            <input type="number" id="number_of_keys" name="number_of_keys" class="form-control" placeholder="2" min="0">
        </div>
    </div>
</div>
</div>