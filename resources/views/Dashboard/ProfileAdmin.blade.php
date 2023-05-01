
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
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-notifications.html"
                        ><i class="bx bx-bell me-1"></i> Notifications</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                      >
                    </li> --}}
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="value={{Auth()->user()->User_Image}}"
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
                            />
                          </label>
                          {{-- <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button> --}}

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form  action="{{route('user.update', (Auth()->user()->id))}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
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
                          {{-- <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                          </div> --}}
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
                          {{-- <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Organization</label>
                            <input
                              type="text"
                              class="form-control"
                              id="organization"
                              name="organization"
                              value="ThemeSelection"
                            />
                          </div> --}}
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
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{Auth()->user()->address}}"/>
                          </div>
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
                            <select id="country" class="select2 form-select">
                              <option value="">Select</option>
                              <option value="Australia">Amman</option>
                              <option value="Bangladesh">Aqaba</option>
                              <option value="Belarus">Madaba</option>
                              <option value="Brazil">Zarqa</option>
                              <option value="Canada">Salt</option>
                              <option value="China">Ajloun</option>
                              <option value="France">Jarash</option>
                              <option value="Germany">Irbid</option>
                              <option value="India">Karak</option>
                              <option value="Indonesia">Tafileh</option>
                              <option value="Israel">Ma'an</option>
                              <option value="Italy">Mafraq</option>

                            </select>
                          </div>
                          {{-- <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">Language</label>
                            <select id="language" class="select2 form-select">
                              <option value="">Select Language</option>
                              <option value="en">English</option>
                              <option value="fr">French</option>
                              <option value="de">German</option>
                              <option value="pt">Portuguese</option>
                            </select>
                          </div> --}}
                          {{-- <div class="mb-3 col-md-6">
                            <label for="timeZones" class="form-label">Timezone</label>
                            <select id="timeZones" class="select2 form-select">
                              <option value="">Select Timezone</option>
                              <option value="-12">(GMT-12:00) International Date Line West</option>
                              <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                              <option value="-10">(GMT-10:00) Hawaii</option>
                              <option value="-9">(GMT-09:00) Alaska</option>
                              <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                              <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                              <option value="-7">(GMT-07:00) Arizona</option>
                              <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                              <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                              <option value="-6">(GMT-06:00) Central America</option>
                              <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                              <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                              <option value="-6">(GMT-06:00) Saskatchewan</option>
                              <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                              <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                              <option value="-5">(GMT-05:00) Indiana (East)</option>
                              <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                              <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                            </select>
                          </div> --}}
                          {{-- <div class="mb-3 col-md-6">
                            <label for="currency" class="form-label">Currency</label>
                            <select id="currency" class="select2 form-select">
                              <option value="">Select Currency</option>
                              <option value="usd">USD</option>
                              <option value="euro">Euro</option>
                              <option value="pound">Pound</option>
                              <option value="bitcoin">Bitcoin</option>
                            </select>
                          </div> --}}
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-warning me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  {{-- <div class="card">
                    <h5 class="card-header">Delete Account</h5>
                    <div class="card-body">
                      <div class="mb-3 col-12 mb-0">
                        <div class="alert alert-warning">
                          <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                          <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                        </div>
                      </div>
                      <form id="formAccountDeactivation" onsubmit="return false">
                        <div class="form-check mb-3">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="accountActivation"
                            id="accountActivation"
                          />
                          <label class="form-check-label" for="accountActivation"
                            >I confirm my account deactivation</label
                          >
                        </div>
                        <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                      </form>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('Layout.AdminFooter')
  </body>
</html>
