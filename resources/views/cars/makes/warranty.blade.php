<div class="row">
    <div class="col-sm-4">
        <h5>CAR WARRANTIES</h5>
        <hr />
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Manufacturer’s Warranty<span class="text-danger ms-1">*</span></label>
                    <select id="manufacturers_warranty" name="manufacturers_warranty" class="form-control">
                        <option>Select Front</option>
                        <option value="Basic 2-Year Warranty">Basic 2-Year Warranty</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">CARGURU’s Warranty<span class="text-danger ms-1">*</span></label>
                    <select id="cargurus_warranty" name="cargurus_warranty" class="form-control">
                        <option>Select Front</option>
                        <option value="Warranty Smart">Warranty Smart</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <h5>ROAD TAX</h5>
        <hr />
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Amount<span class="text-danger ms-1">*</span></label>
                    <input type="text" id="road_tax_amount_rm" name="road_tax_amount_rm" class="form-control">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="mb-3">
                    <label class="form-label">Year<span class="text-danger ms-1">*</span></label>
                    <select id="road_tax_year" name="road_tax_year" class="form-control">
                        <option>Select Year</option>
                        @for($count = 1; $count <= 10; $count++)
                            <option value="{{ $count }}">{{ $count }} Year</option>
                        @endfor
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>