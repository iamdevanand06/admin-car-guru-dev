<div class="row">
    <div class="col">
        <h5>BRAKES</h5>
        <hr />
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Front<span class="text-danger ms-1">*</span></label>
                    <select id="brake_front" name="brake_front" class="form-control">
                        <option>Select Front</option>
                        <option value="dv">DV</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Rear<span class="text-danger ms-1">*</span></label>
                    <select id="brake_rear" name="brake_rear" class="form-control">
                        <option>Select Front</option>
                        <option value="dc">DC</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5>SUSPENSION</h5>
        <hr />
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Front<span class="text-danger ms-1">*</span></label>
                    <select id="suspension_front" name="suspension_front" class="form-control">
                        <option>Select Front</option>
                        <option value="MCST">MCST</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Back<span class="text-danger ms-1">*</span></label>
                    <select id="suspension_back" name="suspension_Back" class="form-control">
                        <option>Select Front</option>
                        <option value="MLS">MLS</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <h5>STEERING</h5>
        <hr />
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Steering<span class="text-danger ms-1">*</span></label>
                    <select id="Steering" name="Steering" class="form-control">
                        <option>Select Front</option>
                        <option value="Back & Pinion Power">Back & Pinion Power</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<h5>TYPE OF WHEELS</h5>
<hr />
<div class="row">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Front<span class="text-danger ms-1">*</span></label>
            <input type="text" id="wheel_type_front" name="wheel_type_front" class="form-control">
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Rear<span class="text-danger ms-1">*</span></label>
            <input type="text" id="wheel_type_rear" name="wheel_type_rear" class="form-control">
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Front Rims<span class="text-danger ms-1">*</span></label>
            <input type="input" id="wheel_type_front_rims" name="wheel_type_front_rims" class="form-control">
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Rear Rims<span class="text-danger ms-1">*</span></label>
            <input type="input" id="wheel_type_rear_rims" name="wheel_type_rear_rims" class="form-control">
        </div>
    </div>
</div>
<h5>STANDARD FEATURES / EQUIPMENTS</h5>
<hr />
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="mb-3">
            <select id="features_equipments" name="features_equipments[]" multiple="multiple"
                style="width: 100%"></select>
        </div>
    </div>
</div>
<!-- Start Feature & Equipments -->
<script>
    $(document).ready(function () {
        $('#features_equipments').select2({
            placeholder: 'Select or Add',
            tags: true,
            minimumInputLength: 1,
            ajax: {
                url: '{{ route("feature.search") }}',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return { q: params.term };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            },
            createTag: function (params) {
                let term = $.trim(params.term);
                if (term === '') return null;
                return {
                    id: 'new_' + term,
                    text: term,
                    is_new: true
                };
            }
        });

        // Handle new tag creation (same as brand)
        $('#features_equipments').on('select2:select', function (e) {
            let data = e.params.data;
            if (data.is_new) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route("feature.add") }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        feature_name: data.text
                    },
                    success: function (response) {
                        // Remove the temp new_* tag
                        $('#features_equipments').find('option[value="' + data.id + '"]').remove();
                        // Add real saved option
                        let option = new Option(response.text, response.id, true, true);
                        $('#features_equipments').append(option).trigger('change');
                    }
                });
            }
        });
    });
</script>