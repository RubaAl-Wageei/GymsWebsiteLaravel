
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ URL::asset('CSS/Home.css') }}">
</head>
<body>
    <div class="Head">
        <nav class="navFlex">
            <img class="Logo" src="../Images/LOGOO.png">
            <div class="toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul>
                <li><a href="/" style="color:#ffca2cc4;">HOME</a></li>
                <li><a href="/GymUser">GYMS</a></li>
                <li><a href="/TrainerUser">PERSONAL TRAINERS</a></li>
                <li><a href="/About">ABOUT</a></li>
                <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
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
    </div>


    <section>
        <div class="title">
            <h2>
                Our Categories
            </h2>
        </div>

        <div class="cards">
            <div class="card">
                <img id="img" src="../Images/GYM.jpg" alt="GYM Image" style="width:100%">
                <h2>GYM</h2>
                <p class="tittle">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p><button> <a href="/GymUse" >SHOW GYMS</a> </button></p>
            </div>
            <div class="card">
                <img id="img" src="../Images/PersonalTrainer.jpg" alt="GYM Image" style="width:100%">
                <h2>PERSONAL TRAINER</h2>
                <p class="tittle">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p><button> <a href="/TrainerUser" >SHOW TRAINERS</a> </button></p>
            </div>
            {{-- <div class="card" style="width: 18rem;">
                <img src="../Images/GYM.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GYM</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/GymUser" class="btn btn-warning">SHOW GYMS</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../Images/PersonalTrainer.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PERSONAL TRAINER</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/TrainerUser" class="btn btn-warning">SHOW TRAINERS</a>
                </div>
            </div> --}}
        </div>
    </section>

    <hr>


    <section>
        <video width="320" height="240" controls class="Homevid">
            <source src="../Videos/COLD - Gym Motivation ❄️.mp4" type="video/mp4">
            {{-- <source src="movie.ogg" type="video/ogg"> --}}
          Your browser does not support the video tag.
          </video>
    </section>


    {{-- <h1>{{Auth()->user()->name}}</h1>
    <h1>{{Auth()->user()->email}}</h1>
    <h1>{{Auth()->user()->phone}}</h1> --}}




@include('Layout.footer')
