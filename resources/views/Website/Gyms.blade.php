
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

            <img class="Logo" src="../Images/LOGOO.png">

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
                   <li><a href="{{ route('UserProfile.show', auth()->user()->id)}}">PROFILE</a></li>
                   <li><a href="/HomeDashboard" target="_blank">DASHBOARD</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @else

                   <li><a href="{{ route('UserProfile.show', auth()->user()->id)}}">PROFILE</a></li>
                   <li><a href="{{route('logout')}}">LOGOUT</a></li>

                   @endif
                    @endif
                </ul>
                <form action="{{ route('search.searchGym') }}" method="post" >
                    @csrf
                    <div class="SearchBar">
                        <input class="searchInp" name="search" type="text" placeholder="Search...">
                        <a href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </form>


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

            </div>
        </section>


        @include('Layout.footer')
