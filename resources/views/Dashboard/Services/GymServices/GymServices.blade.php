


@include('Layout.master')
@section('GymServiceActive', 'active')


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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Gym Services</h4>
              <a href="{{route('GymServices.create')}}"><button type="button" class="btn btn-outline-warning mb-5">New Service</button></a>


              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Gyms Services Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Gym Id</th>
                        <th>Service Image</th>
                        <th>Service Name</th>
                        <th>Service Description</th>
                        <th>Service Price</th>
                        <th>Service Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($GymServices as $GymService)


                      <tr>
                        <td>{{$GymService->GymId}}</td>
                        <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Lilian Fuller"
                              >
                                <img src="{{URL::asset("storage/Images/$GymService->ServiceImage")}}" alt="Avatar" class="rounded-circle" />
                              </li>
                            </ul>
                          </td>

                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$GymService->ServiceName}}</strong></td>



                        <td>{{$GymService->ServiceDescription}}</td>

                        <td><span class="badge bg-label-info me-1">{{$GymService->ServicePrice}} JD</span></td>

                        <td><span class="badge bg-label-primary me-1">{{$GymService->ServiceTime}}</span></td>
                        <td>
                            <div>
                                <button type="button" class="btn btn-outline-warning mb-3">
                                    <a  href="{{route('GymServices.edit', $GymService->id)}}"
                                    > Edit</a>
                                </button>
                            </div>
                            <form action="{{Route('GymServices.destroy',$GymService->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                              </form>
                          </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->


              <hr class="my-5" />





            </div>
            <!-- / Content -->

            <!-- Footer -->
            @include('Layout.AdminFooter')
  </body>
</html>
