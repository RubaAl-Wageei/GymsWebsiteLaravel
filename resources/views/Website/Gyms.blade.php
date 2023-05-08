
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR GYMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/Gyms.css">
</head>
<body>
    <div class="Head">
        <nav class="navFlex">

            <img class="Logo" src="../Images/Logo.png">

            <!-- <video autoplay loop muted plays-inline class="Homevid">
                <source src="../Videos/POWER  🔥 GYM MOTIVATION.mp4" type="video/mp4">
            </video> -->
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/GymUser" style="color:#ffca2cc4;">GYMS</a></li>
                    <li><a href="/TrainerUser">PERSONAL TRAINERS</a></li>
                    {{-- <li><a href="">PRODUCT</a></li> --}}
                    <li><a href="/About">ABOUT</a></li>
                    <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                    @if (!Auth::user())
                    <li><a href="/Register">REGISTER</a></li>
                   <li><a href="/Login">LOGIN</a></li>

                   @else
                   @if (auth()->user()->Role!='User')
                   <li><a href="/ProfileUser">PROFILE</a></li>
                   <li><a href="/Admin" target="_blank">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @else

                   <li><a href="/ProfileUser">PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @endif
                    @endif
                    {{-- <li><a href="/Login">LOGIN</a></li> --}}
                </ul>
                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>

                <div>
                    {{-- <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                    </svg> </a> --}}
                    {{-- <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg> </a> --}}
                    {{-- <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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

        </nav>

        <div class="Subject">
            <h2>OUR GYMS</h2>
            <p>Through our website, we offer the best gyms in Aqaba in terms of services and location</p>
            <button>
                <a href="#OurGyms" >EXPLORE WITH US</a>
            </button>
        </div>
    </div>

        <section id="OurGyms">
            <div class="title">
                <h2>
                    Our Gyms
                </h2>
            </div>

            <div class="cards">

                @foreach ($Gyms as $gym)

                <div class="card">
                    <img id="img" src="{{URL::asset('storage/Images/'.$gym->Image)}}" alt="GYM Image" style="width:100%">
                    <h2>{{$gym->Name}}</h2>
                    <p class="tittle">{{$gym->Description}}</p>
                    <p><button> <a href="{{route('UserGymBook.show',$gym->id)}}" >BOOK NOW</a> </button></p>
                </div>

                @endforeach

                {{-- <div class="card">
                    <img src="../Images/HittGym.png" alt="HITT GYM" style="width:100%">
                    <h2>HIT GYM</h2>
                    <p class="tittle">information Hit Gym</p>
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img id="img" src="../Images/HydrogenGym.png" alt="HYDROGEN GYM" style="width:100%">
                    <h2>HYDROGEN GYM</h2>
                    <p class="tittle">information Hydrogen Gym</p>
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img id="img" src="../Images/LifetimeGym.png" alt="LIFETIME GYM" style="width:100%">
                    <h2>LIFETIME GYM</h2>
                    <p class="tittle">information LifeTime Gym</p>
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img src="../Images/PowerHutGym.png" alt="POWERHUT GYM" style="width:100%">
                    <h2>POWERHUT GYM</h2>
                    <p class="tittle">information PowerHut Gym</p>
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
                    <img src="../Images/GoldenGym.png" alt="GOLDEN GYM" style="width:100%">
                    <h2>GOLDEN GYM</h2>
                    <p class="tittle">information Golden Gym</p>
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div> --}}

            </div>
        </section>


        @include('Layout.footer')
