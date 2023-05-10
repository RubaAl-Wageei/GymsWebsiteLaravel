
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">My Profile /</span> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                  </ul>
                  <div class="card mb-4">
                    {{-- <hr class="my-0" /> --}}
                    <div class="card-body">
                      <form  action="{{route('user.update', (Auth()->user()->id))}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <h5 class="card-header">Profile Details</h5>
                        <hr class="my-0" />
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                              <img
                                src="{{asset('storage/Images/'.Auth::user()->User_image)}}"
                                alt="user-avatar"
                                class="d-block rounded"
                                height="100"
                                width="100"
                                id="uploadedAvatar"
                              />
                              <div class="button-wrapper">
                                <label for="upload" class="btn btn-warning me-2 mb-4" tabindex="0">
                                  <span class="d-none d-sm-block">Upload new photo</span>
                                  <i class="bx bx-upload d-block d-sm-none"></i>
                                  <input
                                    type="file"
                                    id="upload"
                                    class="account-file-input"
                                    hidden
                                    accept="image/png, image/jpeg"
                                    name="image"
                                    value="{{Auth()->user()->User_image}}"
                                  />
                                </label>
                                <span>{{Auth()->user()->User_image}}</span>
                                {{-- <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                  <i class="bx bx-reset d-block d-sm-none"></i>
                                  <span class="d-none d-sm-block">Reset</span>
                                </button> --}}

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                              </div>
                            </div>
                          </div>
                        <div class="row">
                          <div class="mb-3 col-md-12">
                            <label for="firstName" class="form-label">First Name</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="name"
                              value="{{Auth()->user()->name}}"
                              autofocus

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="{{Auth()->user()->email}}"
                              placeholder="ex.21@example.com"

                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">JO (+962)</span>
                              <input
                                type="text"
                                id="phoneNumber"
                                name="phone"
                                class="form-control"
                                placeholder="0 0000 0000"
                                value="{{Auth()->user()->phone}}"
                              />
                            </div>
                          </div>
                          {{-- <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{Auth()->user()->address}}"/>
                          </div> --}}
                          {{-- <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">State</label>
                            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
                          </div> --}}
                          {{-- <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Zip Code</label>
                            <input
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              placeholder="231465"
                              maxlength="6"
                            />
                          </div> --}}
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">Country</label>
                            <select id="country" name="address" class="select2 form-select">
                              <option value="">{{Auth()->user()->address}}</option>
                              <option value="Amman">Amman</option>
                              <option value="Aqaba">Aqaba</option>
                              <option value="Madaba">Madaba</option>
                              <option value="Zarqa">Zarqa</option>
                              <option value="Salt">Salt</option>
                              <option value="Ajloun">Ajloun</option>
                              <option value="Jarash">Jarash</option>
                              <option value="Irbid">Irbid</option>
                              <option value="Karak">Karak</option>
                              <option value="Tafileh">Tafileh</option>
                              <option value="Ma'an">Ma'an</option>
                              <option value="Mafraq">Mafraq</option>

                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-warning me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('Layout.AdminFooter')
  </body>
</html>
