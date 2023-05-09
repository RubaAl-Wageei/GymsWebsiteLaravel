
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('CSS/Login.css') }}">
</head>
<body>

    <div class="Head">
        {{-- <nav class="navFlex">
            <img class="Logo" src="../Images/Logo.png">
                <ul>
                    <li><a  href="/">HOME</a></li>
                    <li><a href="/GymUser">GYMS</a></li>
                    <li><a href="/TrainerUser">PERSONAL TRAINERS</a></li>
                    <li><a href="/About">ABOUT</a></li>
                    <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                    @if (!Auth::user())
                    <li><a href="/Register">REGISTER</a></li>
                   <li><a href="/Login" style="color:#ffca2cc4;" >LOGIN</a></li>
                   @else
                   @if (auth()->user()->Role!='User')
                   <li><a href="/ProfileUser">PROFILE</a></li>
                   <li><a href="/Admin">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>
                   @else
                   <li><a href="/ProfileUser">PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>
                   @endif
                    @endif
                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
                <div class="icons">
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                    </svg> </a>
                </div>
        </nav> --}}


        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <form action="{{route('go.login')}}" method="POST" enctype="multipart/form-data" id="signup-form" class="signup-form">
                        @csrf
                        <img class="Logo" src="../Images/LogoDash.png" alt="">
                        <h2 class="form-title">Login An Account</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" class="@error('email') is-invalid @enderror" />
                            @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @error('password')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        @if(session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        {{-- <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div> --}}
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       You Don't Have already an account ? <a href="/Register" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>
    </div>

    {{-- @include('Layout.footer') --}}
