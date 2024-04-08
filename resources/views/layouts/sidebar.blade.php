<div class="col-lg-3 col-md-4">
                     <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">
                        <img src="./assets/placeholder/user.jpg" width="50" alt="avatar" class="avatar avatar-lg rounded-circle">
                        <div class="ms-3">
                           <h5 class="mb-0">{{Auth::user()->first_name." ".Auth::user()->last_name}}</h5>
                           <small>Personal account</small>
                        </div>
                     </div>

                     <!-- Navbar -->
                     <div class="mb-4 text-center text-md-start">
                        <a href="{{route('home')}}" class="text-reset">
                           <span>
                              <span>View site</span>
                           </span>
                           <span class="ms-2">
                              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"></path>
                                 <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"></path>
                              </svg>
                           </span>
                        </a>
                     </div>
                     <div class="d-md-none text-center d-grid">
                        <button class="btn btn-light mb-3 d-flex align-items-center justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountMenu" aria-expanded="false" aria-controls="collapseAccountMenu">
                           Account Menu
                           <i class="bi bi-chevron-down ms-2"></i>
                        </button>
                     </div>
                     <div class="collapse d-md-block" id="collapseAccountMenu">
                        <ul class="nav flex-column nav-account">
                           <li class="nav-item">
                              <a class="nav-link {{ request()->route()->getName() == 'dashboard' ? 'active' : '' }}" href="{{route("dashboard")}}">
                                 <i class="align-bottom bx bx-home"></i>
                                 <span class="ms-2">Dashboard</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link {{ request()->route()->getName() == 'profile' ? 'active' : '' }}" href="{{route('profile')}}">
                                 <i class="align-bottom bx bx-user"></i>
                                 <span class="ms-2">Profile</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link {{ request()->route()->getName() == 'security' ? 'active' : '' }}" aria-current="page" href="{{route('security')}}">
                                 <i class="align-bottom bx bx-lock-alt"></i>
                                 <span class="ms-2">Security</span>
                              </a>
                           </li>
                           
                           
                           
                           {{-- More Features  --}}
                           
                           <li class="nav-item">
                              <a class="nav-link" href="">
                                 <i class="align-bottom bx bx-credit-card-front"></i>
                                 <span class="ms-2">Billing</span>
                              </a>
                           </li>
                           
                           <li class="nav-item">
                              <a class="nav-link" href="">
                                 <i class="align-bottom bx bx-bell"></i>
                                 <span class="ms-2">Notifications</span>
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="">
                                 <i class="align-bottom bx bx-box"></i>
                                 <span class="ms-2">Integration</span>
                              </a>
                           </li>
                           
                           
                           <li class="nav-item">
                              <a class="nav-link" href="#"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 <i class="align-bottom bx bx-log-out"></i>
                                 <span class="ms-2">Sign Out</span>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>