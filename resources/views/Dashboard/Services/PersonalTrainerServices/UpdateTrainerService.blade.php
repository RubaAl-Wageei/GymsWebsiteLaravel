




@include('Layout.master')
@section('TrainerServiceActive', 'active')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('Layout.AdminSidbar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('Layout.AdminNav')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Update Personal Trainer's Sevice Data</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic with Icons -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Basic with Icons</h5>
                      <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                      <form action="{{route('TrainerServices.update', $TrainerService->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Trainer Id</label>
                                <div class="col-sm-10">
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class='bx bx-dumbbell' ></i>
                                    </span>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="basic-icon-default-fullname"
                                      placeholder="Trainer Id"
                                      aria-label="Trainer Id"
                                      aria-describedby="basic-icon-default-fullname2"
                                      name="Trainer_id"
                                      value="{{$TrainerService->TrainerId}}"
                                    />
                                  </div>
                                </div>
                              </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Service Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Gym Name"
                                aria-label="Gym Name"
                                aria-describedby="basic-icon-default-fullname2"
                                name="Service_name"
                                value="{{$TrainerService->ServiceName}}"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Service Price</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-phone2" class="input-group-text"
                                ><i class="bx bx-phone"></i
                              ></span>
                              <input
                                type="text"
                                id="basic-icon-default-phone"
                                class="form-control phone-mask"
                                placeholder="658 799 8941"
                                aria-label="658 799 8941"
                                aria-describedby="basic-icon-default-phone2"
                                name="Service_price"
                                value="{{$TrainerService->ServicePrice}}"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-email"> Service Description</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class='bx bx-comment-detail'></i></span>
                                <input
                                  type="text"
                                  id="basic-icon-default-email"
                                  class="form-control"
                                  placeholder="Gym Description"
                                  aria-label="Gym Description"
                                  aria-describedby="basic-icon-default-email2"
                                  name="Service_description"
                                  value="{{$TrainerService->ServiceDescription}}"
                                />
                              </div>
                              <div class="form-text">You can use letters, numbers & periods</div>
                            </div>
                          </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">IMAGE</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class='bx bxs-image-add'></i
                                ></span>
                                <input
                                  type="file"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="Image"
                                  aria-label="Image"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="image"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Service Time</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text">
                                  <i class='bx bx-time-five'></i>
                                </span>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="Work Hours"
                                  aria-label="Work Hours"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="Service_time"
                                  value="{{$TrainerService->ServiceTime}}"
                                />
                              </div>
                            </div>

                          </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-warning">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('Layout.AdminFooter')
  </body>
</html>
