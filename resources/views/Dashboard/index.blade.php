
@include('Layout.master')
@section('DashboardActive', 'active')


  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('Layout.AdminSidbar')
        <!-- Menu -->


        <!-- Layout container -->
        <div class="layout-page">

          {{-- navbar --}}
        @include('Layout.AdminNav')
        {{-- end navbar --}}

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            {{-- <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">

                <div class="col-lg-6 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total All User</span>
                          <h3 class="card-title mb-2">{{$totalAllUser}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total Users</span>
                          <h3 class="card-title mb-2">{{$totalUser}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="chart success"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span class="fw-semibold d-block mb-1">Total Admins</span>
                          <h3 class="card-title mb-2">{{$totalAdmin}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Total Category</span>
                          <h3 class="card-title text-nowrap mb-1">{{$totalCategory}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Total Contact</span>
                          <h3 class="card-title text-nowrap mb-1">{{$totalContact}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Total Gym</span>
                          <h3 class="card-title text-nowrap mb-1">{{$totalGym}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/chart.png"
                                alt="Credit Card"
                                class="rounded"
                              />
                            </div>
                          </div>
                          <span>Total Gym Services</span>
                          <h3 class="card-title text-nowrap mb-1">{{$totalGymService}}</h3>
                          <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="chart success"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Personal Trainer</span>
                            <h3 class="card-title mb-2">{{$totalTrainer}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="chart success"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Total Trainer Service</span>
                            <h3 class="card-title mb-2">{{$totalTrainerService}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span>Total Gym Reservation</span>
                            <h3 class="card-title text-nowrap mb-1">{{$totalGymReservation}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span>Today Gym Reservation</span>
                            <h3 class="card-title text-nowrap mb-1">{{$todayGymReservation}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span>Month Gym Reservation</span>
                            <h3 class="card-title text-nowrap mb-1">{{$thisMonthGymReservation}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span>Total Trainer Reservation</span>
                            <h3 class="card-title text-nowrap mb-1">{{$totalTrainerReservation}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span>Today Trainer Reservation</span>
                            <h3 class="card-title text-nowrap mb-1">{{$todayTrainerReservation}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-10 col-4 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="../assets/img/icons/unicons/chart.png"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                            </div>
                            <span>Month Trainer Reservation</span>
                            <h3 class="card-title text-nowrap mb-1">{{$thisMonthTrainerReservation}}</h3>
                            <small class="text-warning fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                          </div>
                        </div>
                    </div>




                  </div>



                </div>





              </div>
            </div> --}}
            <!-- / Content -->


            <!-- Content 2 -->

            <div class="Flex">
                <div class="card text-white bg-primary mb-3 color" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-user'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total All User</h5>
                      <br>
                      <p class="card-text">{{$totalAllUser}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-secondary mb-3 color" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-user'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total User</h5>
                      <p class="card-text">{{$totalUser}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-success mb-3 color" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-user'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Admin</h5>
                      <p class="card-text">{{$totalAdmin}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-danger mb-3 color1" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-category-alt'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Category</h5>
                      <p class="card-text">{{$totalCategory}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-warning mb-3 color1" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-message-square'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Contact</h5>
                      <p class="card-text">{{$totalContact}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-info mb-3 color1" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-dumbbell' ></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Gym</h5>
                      <p class="card-text">{{$totalGym}}</p>
                    </div>
                  </div>
                  <div class="card bg-light mb-3 color2" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-dumbbell' ></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Gym Service</h5>
                      <p class="card-text">{{$totalGymService}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-dark mb-3 color2" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-group'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Personal Trainer</h5>
                      <p class="card-text">{{$totalTrainer}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-dark mb-3 color2" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-group'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Personal Trainer Service</h5>
                      <p class="card-text">{{$totalTrainerService}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-dark mb-3 color3" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-dumbbell'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Gym Reservation</h5>
                      <p class="card-text">{{$totalGymReservation}}</p>
                    </div>
                  </div>
                  {{-- <div class="card text-white bg-dark mb-3 color3" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-dumbbell'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Today Gym Reservation</h5>
                      <p class="card-text">{{$todayGymReservation}}</p>
                    </div>
                  </div> --}}
                  <div class="card text-white bg-dark mb-3 color3" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-dumbbell'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">This Month Gym Reservation</h5>
                      <p class="card-text">{{$thisMonthGymReservation}}</p>
                    </div>
                  </div>
                  <div class="card text-white bg-dark mb-3 color4" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-group'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Total Trainer Reservation</h5>
                      <p class="card-text">{{$totalTrainerReservation}}</p>
                    </div>
                  </div>
                  {{-- <div class="card text-white bg-dark mb-3 color4" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-group'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">Today Trainer Reservation </h5>
                      <p class="card-text">{{$todayTrainerReservation}}</p>
                    </div>
                  </div> --}}
                  <div class="card text-white bg-dark mb-3 color4" style="max-width: 18rem;">
                    <div class="card-header"><i class='bx bx-group'></i></div>
                    <div class="card-body">
                      <h5 class="card-title">This Month Trainer Reservation</h5>
                      <p class="card-text">{{$thisMonthTrainerReservation}}</p>
                    </div>
                  </div>
            </div>

            <!-- /Content 2 -->

            <!-- Footer -->
            @include('Layout.AdminFooter')
            <!-- Footer -->

  </body>
</html>
