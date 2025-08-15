<h5>CAR MAKES</h5>
<hr />
<div class="row">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Brand<span class="text-danger ms-1">*</span></label>
            <select id="brand_id" name="brand_id" class="form-control" style="width: 100%"></select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Country of Make<span class="text-danger ms-1">*</span></label>
            <select id="brand_country" name="brand_country" class="form-control" placeholder="Select Country">
                <option>Select Country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Model<span class="text-danger ms-1">*</span></label>
            <select id="model_id" name="model_id" class="form-control" style="width: 100%"></select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Variant<span class="text-danger ms-1">*</span></label>
            <select id="variant_id" name="variant_id" class="form-control" style="width: 100%"></select>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <label class="form-label">Brand Emblem<span class="text-danger ms-1">*</span></label>
        <div class="upload-box">
            <label for="brand_logo">
                <div class="upload-content">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <p>Upload Graphic File (30x30px)</p>
                    <small>Drag & drop file here (PNG/JPG)</small>
                </div>
            </label>
            <input type="file" id="brand_logo" name="brand_logo" accept="image/png, image/jpeg" hidden>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Transmission<span class="text-danger ms-1">*</span></label>
            <select id="transmission" name="transmission" class="form-control" style="width: 100%">
                <option>Select Transmission</option>
                <option value="automatic">Automatic</option>
                <option value="manual">Manual</option>
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Fuel Type<span class="text-danger ms-1">*</span></label>
            <select id="fuel_type" name="fuel_type" class="form-control" style="width: 100%">
                <option>Select Fuel Type</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Drive Train<span class="text-danger ms-1">*</span></label>
            <select id="drive_train" name="drive_train" class="form-control" style="width: 100%">
                <option>Select Drive Train</option>
                <option value="front wheel drive">Front Wheel Drive</option>
                <option value="rear wheel drive">Rear Wheel Drive</option>
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Year<span class="text-danger ms-1">*</span></label>
            <select id="year" name="year" class="form-control">
                <option value="">Select Year</option>
                @for ($year = date('Y'); $year >= 1980; $year--)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12"></div>
    <div class="col-lg-2 col-md-6 col-sm-12"></div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Seat<span class="text-danger ms-1">*</span></label>
            <select id="seat" name="seat" class="form-control" style="width: 100%">
                <option>Select Seat</option>
                @for($seat = 1; $seat <= 5; $seat++)
                    <option value="{{ $seat }}">{{ $seat }} Person</option>
                @endfor
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Exterior Color<span class="text-danger ms-1">*</span></label>
            <input type="color" id="exterior_color" name="exterior_color" class="form-control">
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Interior Color<span class="text-danger ms-1">*</span></label>
            <input type="color" id="interior_color" name="interior_color" class="form-control">
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Consumption<span class="text-danger ms-1">*</span></label>
            <select id="drive_train" name="drive_train" class="form-control" style="width: 100%">
                <option>Select Consumption</option>
                <option value="front wheel drive">City Driving</option>
                <option value="rear wheel drive">Rear Wheel Drive</option>
            </select>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        // Start Brand
        $('#brand_id').select2({
            placeholder: 'Select or Add a Brand',
            minimumInputLength: 1,
            ajax: {
                url: '{{ route("brands.search") }}',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data, params) {
                    let results = data.map(item => ({
                        id: item.id,
                        text: item.brand_name
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

        // Handle "Add Brand" option
        $('#brand_id').on('select2:select', function (e) {
            let data = e.params.data;
            if (data.is_new) {
                $.post('{{ route("brands.add") }}', {
                    _token: '{{ csrf_token() }}',
                    brand_name: data.text.replace('➕ Add "', '').replace('"', '')
                }, function (response) {
                    // Set the newly created brand in dropdown
                    let newOption = new Option(response.brand_name, response.id, true, true);
                    $('#brand_id').append(newOption).trigger('change');
                });
            }
        });
        // End Brand
    });
    // Start Models
    $(document).ready(function () {
        // Start Model
        $('#model_id').select2({
            placeholder: 'Select or Add a Model',
            minimumInputLength: 1,
            ajax: {
                url: '{{ route("models.search") }}',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term,
                        brand_id: $('#brand_id').val()
                    };
                },
                processResults: function (data, params) {
                    let results = data.map(item => ({
                        id: item.id,
                        text: item.model_name
                    }));

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

        // Handle adding new model
        $('#model_id').on('select2:select', function (e) {
            let data = e.params.data;
            if (data.is_new) {
                $.post('{{ route("models.add") }}', {
                    _token: '{{ csrf_token() }}',
                    brand_id: $('#brand_id').val(),
                    model_name: data.text.replace('➕ Add "', '').replace('"', '')
                }, function (response) {
                    let newOption = new Option(response.model_name, response.id, true, true);
                    $('#model_id').append(newOption).trigger('change');
                });
            }
        });
        // End Model
    });

    // Start Variant
    $(document).ready(function () {
        $('#variant_id').select2({
            placeholder: 'Select or Add a Variant',
            minimumInputLength: 1,
            ajax: {
                url: '{{ route("variants.search") }}',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        q: params.term,
                        brand_id: $('#brand_id').val(),
                        model_id: $('#model_id').val()
                    };
                },
                processResults: function (data, params) {
                    let results = data.map(item => ({
                        id: item.id,
                        text: item.variant_name
                    }));

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

        // Handle adding new variant
        $('#variant_id').on('select2:select', function (e) {
            let data = e.params.data;
            if (data.is_new) {
                $.post('{{ route("variants.add") }}', {
                    _token: '{{ csrf_token() }}',
                    brand_id: $('#brand_id').val(),
                    model_id: $('#model_id').val(),
                    variant_name: data.text.replace('➕ Add "', '').replace('"', '')
                }, function (response) {
                    let newOption = new Option(response.variant_name, response.id, true, true);
                    $('#variant_id').append(newOption).trigger('change');
                });
            }
        });

    });
</script>