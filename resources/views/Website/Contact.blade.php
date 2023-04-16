
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

            <img class="Logo" src="../Images/logo.gif">

            <!-- <video autoplay loop muted plays-inline class="Homevid">
                <source src="../Videos/POWER  🔥 GYM MOTIVATION.mp4" type="video/mp4">
            </video> -->
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/Gyms" >GYMS</a></li>
                    <li><a href="/PersonalTrainers">PERSONAL TRAINERS</a></li>
                    <li><a href="">PRODUCT</a></li>
                    <li><a href="/About">ABOUT</a></li>
                    <li><a href="/Contact" style="color:#ffca2cc4;" >CONTACT</a></li>
                    <li><a href="/Login">LOGIN</a></li>
                </ul>
                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>

                <div class="icons">
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a>
                    {{-- <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg> </a> --}}
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg> </a>
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                    </svg> </a>
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
                                                    <br> GymMaza@gmail.com
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
