


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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Contact</h4>
              {{-- <a href="{{route('Contact.create')}}"><button type="button" class="btn btn-outline-primary mb-5">New Message</button></a> --}}


              <!-- Hoverable Table rows -->
              <div class="card">
                <h5 class="card-header">Messages Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($Messages as $Message)


                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Message->Name}}</strong></td>

                        <td>{{$Message->Email}}</td>

                        <td>{{$Message->Phone}}</td>

                        <td>{{$Message->Message}}</td>

                        <td>

                            {{-- <div>
                                <button type="button" class="btn btn-outline-primary mb-3">
                                    <a  href="{{route('Contact.edit', $Message->id)}}"
                                    > Edit</a>
                                </button>


                            </div> --}}

                            <form action="{{Route('Contact.destroy',$Message->id)}}" method="POST" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-primary">Delete</button>
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
