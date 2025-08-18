<div class="container ms-4">
    <h5>ENGINE</h5>
<hr />
<div class="row">
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Engine Number</label>
            <select id="engine_number" name="engine_number" class="form-control">
                <option value="20210520PS">20210520PS</option>
               
            </select>
        </div>
    </div>
    <div class="col-lg-2 col-md-6 col-sm-12">
        <div class="mb-3">
            <label class="form-label">Chassis Number</label>
            <select id="chassis_number" name="chassis_number" class="form-control">
                <option>679VS</option>
                <option value="turbo intercooler">659VR</option>
            </select>
        </div>
    </div>
    
</div>
</div>

  <!-- ACCIDENT & HISTORY-->
<div class="container mt-4 ms-4">
    <h6 class="fw-bold">ACCIDENT & HISTORY</h6>
    <div class="row">
        <!-- Owner -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3 mt-3">
                <label class="form-label">Owner</label>
                <input type="number" id="owner" name="owner" class="form-control" placeholder="1" min="0">
            </div>
        </div>

        <!-- Usage -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3 mt-3">
                <label class="form-label">Usage</label>
                <select id="usage" name="usage" class="form-control">
                    <option>Personal use only</option>
                    <option>Commercial use</option>
                </select>
            </div>
        </div>

        <!-- Car Accident -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3 mt-3">
                <label class="form-label">Car Accident</label>
                <select id="car_accident" name="car_accident" class="form-control">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>
        </div>

        <!-- Flood Car -->
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3 mt-3">
                <label class="form-label">Flood Car</label>
                <select id="flood_car" name="flood_car" class="form-control">
                    <option>No</option>
                    <option>Yes</option>
                </select>
            </div>
        </div>
    </div>
</div>



<div class="container mt-4 ms-4">
    <div class="row">
        <!-- Warranties -->
        <div class="col-lg-4 col-md-12">
            <h6 class="fw-bold">
                WARRANTIES <i class="bi bi-info-circle"></i>
            </h6>
            <div class="row">
                <!-- Manufacturer's Warranty -->
                  <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="mb-3 mt-3">
                <label class="form-label">Manufacturer's Warranty</label>
                <select id="manufacturers_warranty" name="manufacturers_warranty" class="form-control">
                    <option>Basic Warranty</option>
                            <option>Extended Warranty</option>
                </select>
            </div>
        </div>
              

                <!-- CARGURU's Warranty -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mb-3 mt-3">
                        <label class="form-label">CARGURU's Warranty</label>
                        <select id="cargurus_warranty" name="cargurus_warranty" class="form-control">
                            <option>Warranty Smart</option>
                            <option>Premium Warranty</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Road Tax -->
        <div class="col-lg-4 col-md-12">
           <div class="row">   <h6 class="fw-bold">
                ROAD TAX <i class="bi bi-info-circle"></i>
            </h6>
          
                <!-- Amount -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mb-3 mt-3">
                        <label class="form-label">Amount</label>
                        <div class="input-group">
                            <span class="input-group-text">RM</span>
                            <input type="text" id="road_tax_amount" name="road_tax_amount" class="form-control w-75" placeholder="Enter Amount">
                        </div>
                    </div>
                </div>

                <!-- Year -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="mb-3 mt-3">
                        <label class="form-label">Year</label>
                        <select id="road_tax_year" name="road_tax_year" class="form-control">
                            <option>1 Year</option>
                            <option>2 Years</option>
                            <option>3 Years</option>
                        </select>
                    </div>
                </div>
            </div>
        </div><div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
              
            </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="mb-3">
              
            </div>
        </div>
    </div>
</div> 

<!-- Car Description (Optional) -->

<div class="container ms-3 mt-4">
  <h6 class="text-uppercase small fw-bold mb-3">Car Description (Optional)</h6>

  <div class="row g-3">
    <!-- Left: Inspector Feedback -->
    <div class="col-12 col-lg-4">
      <label for="carDescription" class="form-label">Inspector Feedback/Comment</label>
      <textarea id="carDescription" class="form-control" rows="6" placeholder="Enter Car Description"></textarea>
    </div>

    <!-- Right: CARGURU Spotlight -->
    <div class="col-12 col-lg-4">
      <div class="mb-2 small fw-bold">CARGURU Spotlight</div>

      <div class="mb-2">
        <input id="spotlightHeader" type="text" class="form-control" placeholder="Enter Header Copy">
      </div>

      <div class="mb-3">
        <textarea id="spotlightBody" class="form-control" rows="4" placeholder="Enter Body Copy"></textarea>
      </div>
    </div>
  </div>
</div>




<!--Brand Emblem-->
<div class="container mt-5 ms-4">
     <h6 class="fw-bold"> DOCUMENTS UPLOAD</h6>
    <div class="row">

    <!--VOC Document--> 
    <div class="col-lg-2 col-md-6 col-sm-12">
        <label class="form-label mt-3"> VOC Document</label>
        <div class="upload-box-sm">
            <label for="voc_document">
                <div class="upload-content-sm">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <p>Upload Document</p>
                    <small>Drag & drop file here</small>
                </div>
            </label>
            <input type="file" id="voc_document" name="voc_document" accept="image/png, image/jpeg" hidden>
        </div>
    </div>

<!--Roadtax Document-->

  <div class="col-lg-2 col-md-6 col-sm-12">
        <label class="form-label mt-3"> Roadtax Document</label>
        <div class="upload-box-sm">
            <label for="roadtax_document">
                <div class="upload-content-sm">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <p>Upload Document</p>
                    <small>Drag & drop file here</small>
                </div>
            </label>
            <input type="file" id="roadtax_document" name="roadtax_document" accept="image/png, image/jpeg" hidden>
        </div>
    </div>

<!--Picture of Keys-->
  <div class="col-lg-2 col-md-6 col-sm-12">
        <label class="form-label mt-3"> Picture of Keys</label>
        <div class="upload-box-sm">
            <label for="picture_of_keys">
                <div class="upload-content-sm">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <p>Upload Document</p>
                    <small>Drag & drop file here</small>
                </div>
            </label>
            <input type="file" id="picture_of_keys" name="picture_of_keys" accept="image/png, image/jpeg" hidden>
        </div>
    </div>

<!--Others-->
  <div class="col-lg-2 col-md-6 col-sm-12">
        <label class="form-label mt-3"> Others</label>
        <div class="upload-box-sm">
            <label for="others">
                <div class="upload-content-sm">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <p>Upload Document</p>
                    <small>Drag & drop file here</small>
                </div>
            </label>
            <input type="file" id="others" name="others" accept="image/png, image/jpeg" hidden>
        </div>
    </div>


    </div>
   </div>