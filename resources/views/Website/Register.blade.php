

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Register.css">
</head>
<body>

    <div class="Head">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" id="signup-form" class="signup-form">
                        @csrf
                        <img class="Logo" src="../Images/LogoDash.png" alt="">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name" class="@error('name') is-invalid @enderror" value="{{ old('name')}}"/>
                            @error('name')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" class="@error('email') is-invalid @enderror" value="{{ old('email')}}"/>
                            @error('email')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="phone" id="password" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" value="{{ old('phone')}}"/>
                            @error('phone')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" class="@error('password') is-invalid @enderror" value="{{ old('password')}}"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            @error('password')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="/Login" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>


    </div>








    {{-- @include('Layout.footer') --}}
