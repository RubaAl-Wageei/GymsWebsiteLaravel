



@include('Layout.master')
@section('PersonalTrainerReservationActive', 'active')


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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Gym Reservation</h4>
              {{-- <a href="{{route('UserSalonBook.index')}}"><button type="button" class="btn btn-outline-primary mb-5">New Reservation</button></a> --}}


              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Gym Reservations Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>

                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Cooment</th>
                        <th>Reservation Date</th>
                        <th>TrainerName</th>
                        <th>TrainerServiceId</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      {{-- {{dd($reservations)}} --}}
                        @foreach ($reservations as $value)


                      <tr>
                        <td>{{$value['first_name']}} </td>
                          <td>{{$value->last_name}}</td>
                        {{-- <td>
                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                              <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Lilian Fuller"
                              >

                                <img src="{{URL::asset("storage/images/$salonService->ServiceImage")}}" alt="Avatar" class="rounded-circle" />
                              </li>
                            </ul>
                          </td> --}}
                          <td>{{$value->email}} </td>
                          <td>{{$value->phoneNumber}} </td>
                          <td>{{$value->comment}} </td>
                          <td>{{$value->res_date}} </td>
                          <td>{{$value->TrainerName}} </td>
                          <td>{{$value->TrainerServiceId}} </td>

                          @if ($value->status=="Pending")
                                <td><label class="badge badge-warning" style="background-color:rgb(213, 213, 27)">Pending</label></td>

                                @elseif($value->status=="Accepted")

                                <td><label class="badge badge-success" style="background-color:green" >Accepted</label></td>

                                @else

                                <td><label class="badge badge-danger" style="background-color:rgb(216, 7, 7)">Rejected</label></td>
                                @endif



                        <td>
                            <div  >
                            {{-- ///////////////////// --}}
                                <form  action="{{route('TrainerReservation.update', $value->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Accepted">
                                    <button type="submit" style="border: none ; background-color:white"><i class='bx bxl-ok-ru' style="color:green"></i></button>
                                </form>

                                <form  action="{{route('TrainerReservation.update', $value->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Rejected">
                                    <button type="submit" style="border: none ; background-color:white"><i class='bx bx-no-entry' style="color:red"></i></button>
                                </form>
                            </div>
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
