
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PROFILE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('CSS/Profile.css') }}">

    <!--start user profile page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
     <!--end  user profile page -->
</head>

<body>

    <div class="Head">
        <nav class="navFlex">
            <img class="Logo" src="../Images/LOGOO.png">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/GymUser">GYMS</a></li>
                <li><a href="/TrainerUser">PERSONAL TRAINERS</a></li>
                <li><a href="/About">ABOUT</a></li>
                <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                @if (!Auth::user())
                    <li><a href="/Register">REGISTER</a></li>
                   <li><a href="/Login">LOGIN</a></li>
                   @else
                   @if (auth()->user()->Role!='User')
                   <li><a href="{{ route('UserProfile.show', auth()->user()->id)}}" style="color:#ffca2cc4;" >PROFILE</a></li>
                   <li><a href="/HomeDashboard" target="_blank">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>
                   @else
                   <li><a href="{{ route('UserProfile.show', auth()->user()->id)}}" style="color:#ffca2cc4;" >PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>
                   @endif
                   @endif
            </ul>
                {{-- search icon in nav bar --}}
                 <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
        </nav>
    </div>


    <section>
        {{-- just to read information  --}}
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-xl-6 col-md-12">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="{{ asset('storage/Images/' . Auth::user()->User_image)}}" class="img-radius" alt="User-Profile-Image" width="60px">
                                        </div>
                                        <h6 class="f-w-600">{{Auth()->user()->name}}</h6>
                                        <a style="font-size:30px;color:aliceblue" href="/EditProfile"> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400">{{Auth()->user()->email}}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Password</p>
                                                <h6 class="text-muted f-w-400">{{Auth()->user()->password}}</h6>
                                            </div>
                                        </div>
                                        <br/>
                                        <br/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Phone</p>
                                                <h6 class="text-muted f-w-400">{{Auth()->user()->phone}}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Address</p>
                                                <h6 class="text-muted f-w-400">{{Auth()->user()->address}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <form>
                                    <h6 class="heading-small text-muted mb-4">Booking Information</h6>

                                    <hr class="my-4">
                                    <!-- Address -->
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group focused">
                                                    @foreach ($reservations as $res)
                                                    <div id="input-address" class="form-control form-control-alternative">
                                                        <div class="test">
                                                            <p> your resrvation At <strong>{{$res->GymName}}</strong> is </p>
                                                            @if ($res->status == 'Pending')
                                                            <button class="Waiting">Pending</button>
                                                            @elseif ($res->status == 'Rejected')
                                                            <button class="NotAprove"> Rejected</button>
                                                            @elseif ($res->status == 'Accepted')
                                                            <button class="Aprove">Accepted</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    @foreach ($TrainerReservation as $res2)
                                                    {{-- {{dd($res2)}}; --}}
                                                    <div id="input-address" class="form-control form-control-alternative">
                                                        <div class="test">
                                                            <p> your resrvation At <strong>{{$res2->TrainerName}}</strong> is </p>
                                                            @if ($res2->status == 'Pending')
                                                            <button class="Waiting">Pending</button>
                                                            @elseif ($res2->status == 'Rejected')
                                                            <button class="NotAprove"> Rejected</button>
                                                            @elseif ($res2->status == 'Accepted')
                                                            <button class="Aprove">Accepted</button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>









































<!-- Footer -->
@include('Layout.footer')
  <!-- Footer -->

