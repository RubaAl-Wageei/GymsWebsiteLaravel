
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR GYMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/PersonalTrainer.css">
</head>
<body>
    <div class="Head">
        <nav class="navFlex">

            <img class="Logo" src="../Images/LOGOO.png">

            <!-- <video autoplay loop muted plays-inline class="Homevid">
                <source src="../Videos/POWER  🔥 GYM MOTIVATION.mp4" type="video/mp4">
            </video> -->
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/GymUser">GYMS</a></li>
                    <li><a href="/TrainerUser" style="color:#ffca2cc4;">PERSONAL TRAINERS</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/About">ABOUT</a></li>
                    <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                    @if (!Auth::user())
                    <li><a href="/Register">REGISTER</a></li>
                   <li><a href="/Login">LOGIN</a></li>

                   @else
                   @if (auth()->user()->Role!='User')
                   <li><a href="/ProfileUser">PROFILE</a></li>
                   <li><a href="/HomeDashboard" target="_blank">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @else

                   <li><a href="/ProfileUser">PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @endif
                    @endif
                    {{-- <li><a href="/Login">LOGIN</a></li> --}}
                </ul>
                {{-- <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div> --}}
                <form action="{{ route('search.searchTrainer') }}" method="post" >
                    @csrf
                    <div class="SearchBar">
                        <input class="searchInp" name="search" type="text" placeholder="Search...">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </form>

                {{-- <div class="icons">
                    <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="12" r="9"></circle>
                        <line x1="3.6" y1="9" x2="20.4" y2="9"></line>
                        <line x1="3.6" y1="15" x2="20.4" y2="15"></line>
                        <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                        <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                    </svg> </a>
                 </div> --}}

        </nav>

        <div class="Subject">
            <h2>OUR Personal Trainers</h2>
            <p>Through our website, we offer the best Personal Trainers in Aqaba </p>
            <button>
                <a href="#OurPersonaTrainers" >EXPLORE WITH US</a>
            </button>
        </div>
    </div>

        <section id="OurPersonaTrainers">
            <div class="title">
                <h2>
                    Our PERSONAL TRAINERS
                </h2>
            </div>

            <div class="cards">

                @foreach ($Trainers as $trainer)

                <div class="card">
                    <img id="img" src="{{URL::asset('storage/Images/'.$trainer->Image)}}" alt="Coach Peter" style="width:100%">
                    <h2>{{$trainer->Name}}</h2>
                    <!-- <p class="tittle">information High Fit Gym</p> -->
                    <p><button> <a href="{{route('UserTrainerBook.show',$trainer->id)}}" >BOOK NOW</a> </button></p>
                </div>

                @endforeach

                {{-- <div class="card">
                    <img src="../Images/CoachJilan.jpg" alt="Coach Jilan" style="width:100%">
                    <h2>COACH JILAN</h2>
                    <!-- <p class="tittle">information Hit Gym</p> -->
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img id="img" src="../Images/CoachNourseen.jpg" alt="Coach Nourseen" style="width:100%">
                    <h2>COACH NOURSEEN</h2>
                    <!-- <p class="tittle">information Hydrogen Gym</p> -->
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img id="img" src="../Images/CoachMicheal.jpg" alt="Coach Micheal" style="width:100%">
                    <h2>COACH MICHEAL</h2>
                    <!-- <p class="tittle">information LifeTime Gym</p> -->
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img src="../Images/CoachLilian.jpg" alt="Coach Lilian" style="width:100%">
                    <h2>COACH LILIAN</h2>
                    <!-- <p class="tittle">information PowerHut Gym</p> -->
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img src="../Images/CoachAyman.jpg" alt="Coach Ayman" style="width:100%">
                    <h2>COACH AYMAN</h2>
                    <!-- <p class="tittle">information Golden Gym</p> -->
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div> --}}

            </div>
        </section>

        @include('Layout.footer')
