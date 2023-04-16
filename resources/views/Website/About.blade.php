

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6487c144b2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ URL::asset('CSS/About.css') }}">
      <!-- -----------------------------START SECTION FOR LANDING PAGE --------------------------- -->
      <div class="landingPage">


        <div class="Head">
            <nav class="navFlex">

                <img class="Logo" src="../Images/logo.gif">
                    <ul>
                        <li><a href="/" >HOME</a></li>
                    <li><a href="/Gyms">GYMS</a></li>
                    <li><a href="/PersonalTrainers">PERSONAL TRAINERS</a></li>
                    <li><a href="">PRODUCT</a></li>
                    <li><a href="/About" style="color:#ffca2cc4;">ABOUT</a></li>
                    <li><a href="{{route('Contact.create')}}">CONTACT</a></li>
                    <!-- <li><a href="">REGISTER</a></li> -->
                    <li><a href="/Login">LOGIN</a></li>
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
                        <a href=""> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                       {{--  end icon for navbar --}}

            </nav>
            {{-- <div class="title">.</div>
                <div >
                    <h3>ABOUT US</h3>
                </div>
            </div> --}}

      </div>
        <!-- ----------------------------END SECTION FOR LANDING PAGE---------------------------------------- -->

    <section id="about">

        <!--  Heading  -->
        <div class="about-heading">
              <h1>About Us</h1>
              <hr />
              <p>We are a company that offers unique activities for all age groups</p>
          </div>

        <!--  Section 1  -->
        <div class="about-section">
          <div class="about-item who"></div>
          <div class="about-item">
            <h2>Who We Are</h2>
                  <p>Cotton Candy provides an easy and fast platform for booking salon appointments and ordering hairdressers and makeup artists for home online. It also allows its users to search for available appointments in salons and book upcoming appointments easily.</p>
                  <p> We pride ourselves on the quality of service provided and the people's trust in us!</p>
          </div>
        </div>
        <!--  Section 2  -->
        <div class="about-section">
          <div class="about-item process"></div>
          <div class="about-item">

            <h2>Our Process</h2>
            <p>At our site, we believe the process is as important as the outcome. That's why we take great care to ensure that every step of your experience with us is smooth and fast, as we help visitors discover new salons and enjoy a unique beauty experience! Visitors can also compare prices, select the required services with a few clicks and provides the possibility of paying online or paying in a salon.
              First, we will show you the services in an easy and clear manner, and then we will define the requirements to start providing the service so that you are fully aware of the price and the hairdresser according to the service and the degree of submission. Salon evaluation in order to obtain a high degree of confidence and reassurance.</p>
            <p> After completing the reservation, Cotton Candy will send an immediate confirmation via email. Saloncom also provides friendly customer service dedicated to helping in any way they can.</p>
          </div>
        </div>
        <!--  Section 3  -->
        <div class="about-section">
          <div class="about-item contact"></div>
          <div class="about-item">
            <h2>Come Say Hello!</h2>
                <p> At every step, we are committed to providing you with excellent customer service, and keeping you up to date with the latest beauty trends."</p>
                <a href="/contact"><button class="about-btn">Contact Us</button></a>
          </div>
        </div>
    </section>

{{--  start section for footer --}}




@include('Layout.footer')
