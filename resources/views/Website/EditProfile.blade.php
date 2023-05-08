

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- llink for css bootstrab  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


  <!-- llink for js bootstrab  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/f9c0f3458b.js" crossorigin="anonymous"></script>


{{-- font awesom --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--start user profile page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
     <!--end  user profile page -->


     <link rel="stylesheet" href="{{ URL::asset('CSS/Profile.css') }}">
  <title>user-profile</title>
</head>

<body>

    <div class="Head">
        <nav class="navFlex">

            <img class="Logo" src="../Images/Logo.png">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/GymUser">GYMS</a></li>
                <li><a href="/TrainerUser">PERSONAL TRAINERS</a></li>
                {{-- <li><a href="">PRODUCT</a></li> --}}
                <li><a href="/About">ABOUT</a></li>
                <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                @if (!Auth::user())
                    <li><a href="/Register">REGISTER</a></li>
                   <li><a href="/Login">LOGIN</a></li>

                   @else
                   @if (auth()->user()->Role!='User')
                   <li><a href="/ProfileUser" style="color:#ffca2cc4;" >PROFILE</a></li>
                   <li><a href="/Admin" target="_blank">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @else

                   <li><a href="/ProfileUser"style="color:#ffca2cc4;" >PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @endif
                    @endif
                <!-- <li><a href="">REGISTER</a></li> -->
                {{-- <li><a href="/Login" >LOGIN</a></li> --}}
            </ul>
                {{-- search icon in nav bar --}}
                 <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                   {{--  start icon for navbar --}}
                <div class="icons">
                    {{-- <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a>

                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="6" cy="19" r="2"></circle>
                        <circle cx="17" cy="19" r="2"></circle>
                        <path d="M17 17h-11v-14h-2"></path>
                        <path d="M6 5l14 1l-1 7h-13"></path>
                    </svg> </a> --}}
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                    </svg> </a>
                </div>
                   {{--  end icon for navbar --}}

        </nav>
    {{-- just to read information  --}}
    <div class="page-content page-container" id="page-content">
  {{-- ///////////// start form update data //////////////  --}}
      <form action="{{route('UserProfile.update', (Auth()->user()->id))}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="padding">
            <div class="row container d-flex justify-content-center">


                    <div class="col-xl-6 col-md-12">
                                                    <div class="card user-card-full">
                                                        <div class="row m-l-0 m-r-0">
                                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                <div class="card-block text-center text-white">
                                                                    <div class="m-b-25">
                                                                        {{-- <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> --}}
                                                                        <img src="../assets/img/avatars/UserDefaultImage.png" class="img-radius" alt="User-Profile-Image" width="60px">
                                                                        {{-- @if (auth()->check() && auth()->user()->User_image == NULL)
                                                                        <img src="../assets/img/avatars/UserDefaultImage.png" class="img-radius" alt="User-Profile-Image" width="60px" >
                                                                        @else
                                                                        <img src="{{ asset('storage/Images/' . Auth::user()->User_image)}}" class="img-radius image_profile" alt="User Image">
                                                                        @endif --}}
                                                                    </div>
                                                                    <h6 class="f-w-600">Name</h6>
                                                                    <input class="text-muted f-w-400 inputEdit" name="name" value="{{Auth()->user()->name}}" />
                                                                    <br>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-8">
                                                                <div class="card-block">
                                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>

                                                                         <span class="text_editProfile"> Email <span style="color:white ">......</span>  </span><input name="email" value="{{Auth()->user()->email}}" />
                                                                         <br>
                                                                         <br>
                                                                         <span class="text_editProfile"> password </span><input name="password" value="{{Auth()->user()->password}}" />
                                                                      <br>
                                                                      <br>

                                                                          <span class="text_editProfile"> Phone <span style="color:white ">.....</span></span><input name="phone" value="{{Auth()->user()->phone}}" />
                                                                          <br>
                                                                          <br/>
                                                                          <span class="text_editProfile"> Address <span style="color:white ">..</span></span><input name="address" value="{{Auth()->user()->address}}" />
                                                                          <br>
                                                                          <br>
                                                                          <span class="text_editProfile"> Image <span style="color:white ">..</span></span><input type="file" name="image" value="{{Auth()->user()->User_image}}" />
                                                                          <br>
                                                                          <div >
                                                                            <br/>
                                                                          <button type="submit" class="btn button_save">Save</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                    </div>
            </div>
        </div>
      </form>
    </div>

    </div>

<!-- Footer -->
@include('Layout.footer')
  <!-- Footer -->
