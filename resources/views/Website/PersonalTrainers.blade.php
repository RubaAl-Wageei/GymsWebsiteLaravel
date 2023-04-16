
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

            <img class="Logo" src="../Images/logo.gif">

            <!-- <video autoplay loop muted plays-inline class="Homevid">
                <source src="../Videos/POWER  🔥 GYM MOTIVATION.mp4" type="video/mp4">
            </video> -->
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/Gyms">GYMS</a></li>
                    <li><a href="/PersonalTrainers" style="color:#ffca2cc4;">PERSONAL TRAINERS</a></li>
                    <li><a href="">PRODUCT</a></li>
                    <li><a href="/About">ABOUT</a></li>
                    <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                    <li><a href="/Login">LOGIN</a></li>
                </ul>
                <div class="SearchBar">
                    <input class="searchInp" type="text" placeholder="Search...">
                    <a href="#">
                        <i class="fas fa-search"></i>
                    </a>
                </div>

                <div>
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

                <div class="card">
                    <img id="img" src="../Images/CoachPeter.jpg" alt="Coach Peter" style="width:100%">
                    <h2>COACH PETER</h2>
                    <!-- <p class="tittle">information High Fit Gym</p> -->
                    <p><button> <a href="" >BOOK NOW</a> </button></p>
                </div>

                <div class="card">
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
                </div>

            </div>
        </section>

        @include('Layout.footer')
