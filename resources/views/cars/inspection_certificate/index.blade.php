@extends('layouts.app', ['activePage' => 'table', 'title' => 'Dynamic Drop Down - Fule Type - Admin Panel - CarGuru', 'navName' => 'Table List', 'activeButton' => 'laravel'])
@section('content')
  <div class="page-wrapper">
    <div class="content">
      <h5 class="fw-bold mb-2">CAR MASTER DATA / INSPECTION & CERTIFICATION</h5>

      {{-- <div class="page-header ">
        <div class="add-item d-flex">
          <div class="page-title">
            <div class="container "> --}}

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
                    <div class="d-flex justify-content-end gap-2">
                      <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                  </div>
                </div>

                <div class="card-body p-0">
                  <form class="w-80 bg-muted">

                    <div class="container py-4">
                      <!-- Buttons -->







                      <!-- Car Category -->
                      <div class="mb-3">
                        <label class="form-label fw-bold">CAR CATEGORY</label>
                        <select class="form-select w-25" name="car_category" required>
                          <option value="">Select Car Category</option>
                          <option value="certified">Certified</option>
                          <option value="bidding">Bidding</option>
                        </select>
                      </div>

                      <!-- State + Icon -->
                      <div class="row g-3 mb-3">
                        <div class="col-md-4">
                          <label class="form-label fw-bold">STATUS</label>
                          <input type="text" class="form-control w-20" name="state" placeholder="Add State">
                        </div>
                        <div class="col-md-4">
                          <label class="form-label fw-bold">STATUS ICON</label>
                          <div class="upload-box" id="uploadBox">
                            <div class="preview" id="preview"></div>
                            <label for="brand_logo">
                              <div class="upload-content">
                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                <p>Upload Graphic File (30x30px)</p>
                                <small>Drag & drop file here (PNG/JPG)</small>
                              </div>
                            </label>
                            <input type="file" id="brand_logo" name="brand_emblem" accept="image/png, image/jpeg" hidden>
                          </div>
                        </div>



                        <!-- Topic -->
                        <div class="mb-1 w-15">
                          <label class="form-label fw-bold">TOPIC</label>
                          <input type="text" class="form-control w-25" name="topic" placeholder="Enter Headline Topic">
                        </div>








                      </div>




                      <!-- Area + Specific Area -->
                      <div class="row g-3 mb-3 ms-1">
                        <div class="col-md-5">
                          <label class="form-label">AREA <span class="text-muted">ⓘ</span></label>
                          <input type="text" class="form-control" placeholder="Enter Inspection Area">
                        </div>
                        <div class="col-md-5">
                          <label class="form-label">SPECIFIC AREA <span class="text-muted">ⓘ</span></label>
                          <input type="text" class="form-control" placeholder="Enter Specific Area">
                        </div>
                      </div>

                      <!-- Reasons -->
                      <div class="row g-3 mb-3 ms-1">
                        <div class="col-md-5">
                          <div class="mb-3">
                            <label class="form-label ">REASONS <span class="text-muted">ⓘ</span></label>
                            <input type="text" class="form-control mb-2" placeholder="Add Reasons">
                          </div>
                        </div>
                      </div>
                      <!-- Photo / Video Capture -->
                      <div class="row mb-3 ms-1">
                        <div class="col-md-3">
                          <div class="mb-3">
                            <label class="form-label w-200">PHOTO / VIDEO CAPTURE <span
                                class="text-muted">ⓘ</span></label>
                            <select class="form-select">
                              <option selected>Allow Capture Format</option>
                              <option value="single-photo">Single Photo Capture</option>
                              <option value="multi-photo">Multiple Photos Capture</option>
                              <option value="single-video">Single Video Capture</option>
                              <option value="multi-video">Multiple Videos Capture</option>
                            </select>

                          </div>
                        </div>
                      </div>
                      <!-- Add Notes Option -->
                      <div class="mb-3 ms-1">
                        <label class="form-label">ADD NOTES OPTION <span class="text-muted">ⓘ</span></label>
                        <textarea class="form-control" rows="3" placeholder="Enter additional notes"></textarea>
                      </div>
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
        </div>
        </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        // Handle single-select (status)
        document.querySelectorAll('.btn.selectable').forEach(button => {
          button.addEventListener('click', function () {
            document.querySelectorAll('.btn.selectable').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('statusInput').value = this.getAttribute('data-value');
          });
        });

        // Handle multi-select (reasons)
        let selectedReasons = [];
        document.querySelectorAll('.badge.selectable').forEach(badge => {
          badge.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            this.classList.toggle('active');

            if (selectedReasons.includes(value)) {
              selectedReasons = selectedReasons.filter(r => r !== value);
            } else {
              selectedReasons.push(value);
            }

            document.getElementById('reasonsInput').value = selectedReasons.join(',');
          });
        });
      </script>



      <script>
        // Handle single-select (status)
        document.querySelectorAll('.btn.selectable').forEach(button => {
          button.addEventListener('click', function () {
            document.querySelectorAll('.btn.selectable').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            document.getElementById('statusInput').value = this.getAttribute('data-value');
          });
        });

        // Handle multi-select (reasons)
        let selectedReasons = [];
        document.querySelectorAll('.badge.selectable').forEach(badge => {
          badge.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            this.classList.toggle('active');

            if (selectedReasons.includes(value)) {
              selectedReasons = selectedReasons.filter(r => r !== value);
            } else {
              selectedReasons.push(value);
            }

            document.getElementById('reasonsInput').value = selectedReasons.join(',');
          });
        });
      </script>















@endsection