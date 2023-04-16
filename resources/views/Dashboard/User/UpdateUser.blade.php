
@include('Layout.master')

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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

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
                      <form action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                            @csrf
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-user"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="John Doe"
                                aria-label="John Doe"
                                aria-describedby="basic-icon-default-fullname2"
                                name="name"
                                value="{{$user->name}}"
                              />
                            </div>
                          </div>
                        </div>
                        {{-- <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Company</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                              ></span>
                              <input
                                type="text"
                                id="basic-icon-default-company"
                                class="form-control"
                                placeholder="ACME Inc."
                                aria-label="ACME Inc."
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div> --}}
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                              <input
                                type="email"
                                id="basic-icon-default-email"
                                class="form-control"
                                placeholder="john.doe"
                                aria-label="john.doe"
                                aria-describedby="basic-icon-default-email2"
                                name="email"
                                value="{{$user->email}}"
                              />
                              <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                            </div>
                            <div class="form-text">You can use letters, numbers & periods</div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
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
                                name="phone"
                                value="{{$user->phone}}"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">ADDRESS</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class='bx bx-location-plus'></i
                                ></span>
                                <input
                                  type="text"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="Amman, Marj El-Hammam"
                                  aria-label="Amman, Marj El-Hammam"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="address"
                                  value="{{$user->address}}"
                                />
                              </div>
                            </div>
                          </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">PASSWORD</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class='bx bx-location-plus'></i
                                ></span>
                                <input
                                  type="password"
                                  class="form-control"
                                  id="basic-icon-default-fullname"
                                  placeholder="Password"
                                  aria-label="Password"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="password"
                                  value="{{$user->password}}"
                                />
                              </div>
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
                                  placeholder="Password"
                                  aria-label="Password"
                                  aria-describedby="basic-icon-default-fullname2"
                                  name="image"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">ROLE</label>
                            <div class="col-sm-10">
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class='bx bx-user'></i
                                ></span>
                                <select class="form-select" id="exampleFormControlSelect1" name="role" aria-label="Default select example">
                                    <option selected>{{$user->Role}}</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                  </select>
                              </div>
                            </div>

                          </div>

                        {{-- <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="bx bx-comment"></i
                              ></span>
                              <textarea
                                id="basic-icon-default-message"
                                class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"
                                aria-label="Hi, Do you have a moment to talk Joe?"
                                aria-describedby="basic-icon-default-message2"
                              ></textarea>
                            </div>
                          </div>
                        </div> --}}
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
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
