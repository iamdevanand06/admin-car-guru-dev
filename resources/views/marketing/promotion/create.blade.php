<div class="container-fluid bg-light py-2">
  <div class="d-flex justify-content-between align-items-center">
    <!-- Left Title -->
    <h6 class="fw-bold mb-0">ADVERTISING & PROMOTION BANNERS</h6>

    <!-- Right Buttons -->
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
<div class="mt-0">
  <!-- Card -->
  <div class="card">
    <!-- Header -->
    <div class="card-header d-flex justify-content-between bg-black text-white p-1">
      <h6 class="text-center  text-white">BUY CAR MAIN BANNER</h6>
      <button class="btn-close btn-close-white"></button>
    </div>

    <!-- Body -->
    <div class="card-body">
      <div class="row g-4 mb-3 align-items-center ">
        <div class="col-md-2">
          <select class="form-select  mt-0">
            <option>View Ad Set (0)</option>
          </select>
        </div>
        <div class="col-md-5 d-flex ">
            <p class="ms-5  mt-3">Banner Link</p>
          <input type="text" class="form-control w-50 p-2 h-25 mt-2 m-1 " placeholder="Enter Link to redirect to Promo/Discount Page">
       <button class="btn btn-light p-1 h-25 mt-2">Modify</button>  </div>
       
       <div class="col-md-5 ">
          <div class="d-flex justify-content-start gap-2 mt-0">
           <button class="btn btn-light p-2 h-25">Delete</button>
    <button class="btn btn-light p-2 h-25">Archive</button>
    <button class="btn btn-light p-2 h-25">De Activate</button>
    <button class="btn btn-light p-2 h-25">Preview</button>
    <button class="btn btn-light p-2 h-25">Activate</button>
          </div>
        </div>
      </div>

      <!-- Upload Section -->
  <div class="container mt-5">
  <div class="row g-3 ">
    <!-- Web Version -->
    <div class="col-md-8 mt-5">
      <label for="webUpload" class="w-100">
        <div class="d-flex flex-column justify-content-center align-items-center p-5"
             style="border:2px dashed #ccc; cursor:pointer;">
          <i class="fa-solid fa-cloud-arrow-up fs-2"></i>
          <p class="mb-1">Browse File (Front Photo)</p>
          <small class="text-muted">Drag & drop file here</small>
      
        </div>
      </label> <small class=" d-block">WEB VERSION: 1508 X 480 PIXELS </small>
      <input type="file" id="webUpload" class="d-none">
    </div>

    <!-- Mobile Version -->
    <div class="col-md-4">
      <label for="mobileUpload" class="w-100">
        <div class="d-flex flex-column justify-content-center align-items-center p-5"
             style="border:2px dashed #ccc; cursor:pointer;">
          <i class="fa-solid fa-cloud-arrow-up fs-2"></i>
          <p class="mb-1">Browse File (Front Photo)</p>
          <small class="text-muted">Drag & drop file here</small>
          <div class="mt-2 text-center">
         <p>adaptation mobile sized banner here.</p>
            <small class="text-muted">*Leave blank if using original web banner.</small>
          </div>
        </div>
      </label>   <small class=" d-block">MOBILE VERSION: 480 x 600 PIXELS</small>
      <input type="file" id="mobileUpload" class="d-none">
    </div>
  </div>
</div>
      <!-- Footer -->
      <div class="mt-3">
        <span class="text-muted">AD SET 0</span>
      </div>
    </div>
  </div>
</div>