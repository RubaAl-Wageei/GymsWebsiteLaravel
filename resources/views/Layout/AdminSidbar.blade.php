

        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="/HomeDashboard" class="app-brand-link">
                <img class="Logo" src="../Images/LogoDash.png" alt="" width="200px">
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item @yield('DashboardActive')">
                <a href="/HomeDashboard" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
                </a>
              </li>

              <li class="menu-item @yield('UsersActive')">
                <a href="/user" class="menu-link">
                  {{-- <i class="menu-icon tf-icons bx bx-home-circle"></i> --}}
                  <i class='menu-icon tf-icons bx bx-user'></i>
                  <div data-i18n="Analytics">Users</div>
                </a>
              </li>

              <li class="menu-item @yield('CategoryActive')">
                <a href="/category" class="menu-link">
                  <i class='menu-icon tf-icons bx bx-category-alt'></i>
                  <div data-i18n="Analytics">Category</div>
                </a>
              </li>
              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Pages</span>
              </li>
              <li class="menu-item @yield('GymActive')">
                <a href="/Gym" class="menu-link">
                  <i class='menu-icon bx bx-dumbbell'></i>
                  <div data-i18n="Analytics">Gyms</div>
                </a>
              </li>
              <li class="menu-item @yield('TrainersActive')">
                <a href="/Trainers" class="menu-link">
                    <i class='menu-icon bx bx-group'></i>
                  <div data-i18n="Analytics">Personal Trainers</div>
                </a>
              </li>
              <li class="menu-item @yield('ContactActive')">
                <a href="/Contact" class="menu-link">
                    <i class='menu-icon bx bx-message-rounded-dots'></i>
                  <div data-i18n="Analytics">Contact</div>
                </a>
              </li>

              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Services</span>
              </li>
              <li class="menu-item @yield('GymServiceActive')">
                <a href="/GymServices" class="menu-link">
                  <i class='menu-icon bx bx-dumbbell'></i>
                  <div data-i18n="Analytics">Gyms Services</div>
                </a>
              </li>
              <li class="menu-item @yield('TrainerServiceActive')">
                <a href="/TrainerServices" class="menu-link">
                    <i class='menu-icon bx bx-group'></i>
                  <div data-i18n="Analytics">Personal Trainers Services</div>
                </a>
              </li>


              <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Reservations</span>
              </li>
              <li class="menu-item @yield('GymReservationActive')">
                <a href="GymReservation" class="menu-link">
                  <i class='menu-icon bx bx-dumbbell'></i>
                  <div data-i18n="Analytics">Gym Reservations</div>
                </a>
              </li>
              <li class="menu-item @yield('PersonalTrainerReservationActive')">
                <a href="TrainerReservation" class="menu-link">
                    <i class='menu-icon bx bx-group'></i>
                  <div data-i18n="Analytics">Personal Trainer Reservations</div>
                </a>
              </li>
              <li class="menu-item">
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Login</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                      <div data-i18n="Basic">Register</div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->
