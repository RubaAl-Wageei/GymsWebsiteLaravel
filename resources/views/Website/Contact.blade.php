
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Contact.css">
</head>
<body>
    <div class="Head">
        <nav class="navFlex">
            <img class="Logo" src="../Images/LOGOO.png">
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/GymUser" >GYMS</a></li>
                    <li><a href="/TrainerUser">PERSONAL TRAINERS</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/About">ABOUT</a></li>
                    <li><a href="{{route('Contact.create')}}" style="color:#ffca2cc4;" >CONTACT</a></li>
                    @if (!Auth::user())
                    <li><a href="/Register">REGISTER</a></li>
                   <li><a href="/Login">LOGIN</a></li>

                   @else
                   @if (auth()->user()->Role!='User')
                   <li><a href="{{ route('UserProfile.show', auth()->user()->id)}}">PROFILE</a></li>
                   <li><a href="/HomeDashboard" target="_blank">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @else

                   <li><a href="{{ route('UserProfile.show', auth()->user()->id)}}">PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @endif
                    @endif
                </ul>
                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>

        </nav>

        <div class="Subject">
            {{-- <h2>Contact US</h2> --}}
            <h2>Get Touch With Us</h2>
            <p>Through our website, we offer the best gyms in Aqaba in terms of services and location</p>
        </div>
    </div>



    <section>
        <div class="contact3 py-5">
            <div class="row no-gutters">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card-shadow">
                                {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/2.jpg" class="img-fluid"> --}}
                                <img src="{{ URL::asset('Images/Pic-contact.jpg') }}" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-box ml-3">
                                <h1 class="font-weight-light mt-2">Quick Contact</h1>
                                <form class="mt-4" action="{{route('Contact.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input class="form-control" type="text" placeholder="Please Enter Your Name" name="name">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input class="form-control" type="email" placeholder="Please Enter Your Email Address" name="email">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <input class="form-control" type="text" placeholder="Please Enter Your Phone Number" name="phone">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-2">
                                                <textarea class="form-control" rows="3" placeholder="Please Enter Your Massage" name="message"></textarea>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2"><span> SUBMIT</span><button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card mt-4 border-0 mb-4">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card-body d-flex align-items-center c-detail pl-0">
                                            <div class="mr-3 align-self-center">
                                                {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png"> --}}
                                                <img src="{{ URL::asset('Images/LocationIcon.png') }}">
                                            </div>
                                            <div class="">
                                                <h6 class="font-weight-medium">Address</h6>
                                                <p class=""> The Hashemite Kingdom
                                                    <br> Of Jordan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card-body d-flex align-items-center c-detail">
                                            <div class="mr-3 align-self-center">
                                                {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png"> --}}
                                                <img src="{{ URL::asset('Images/PhoneIcon.png') }}">
                                            </div>
                                            <div class="">
                                                <h6 class="font-weight-medium">Phone</h6>
                                                <p class="">+962 7 9879 1721
                                                    <br> +962 7 7807 9521</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="card-body d-flex align-items-center c-detail">
                                            <div class="mr-3 align-self-center">
                                                {{-- <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png"> --}}
                                                <img src="{{ URL::asset('Images/EmailIcon.png') }}">
                                            </div>
                                            <div class="">
                                                <h6 class="font-weight-medium">Email</h6>
                                                <p class="">
                                                    GogoGym@gmail.com
                                                    {{-- <br> GymMaza@gmail.com --}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


      @include('Layout.footer');
