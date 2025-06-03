<!-- Start Navbar Area Start -->
<div class="navbar-area style-2" id="navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('requests.index')}}">
                <img class="logo-light" src="{{asset('assets1/img/logo/white-logo.png')}}" alt="logo">
                <img class="logo-dark" src="{{asset('assets1/img/logo/logo.png')}}" alt="logo">
            </a>
            <div class="other-option d-lg-none">
                <div class="option-item">
                    <button type="button" class="search-btn" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
                        <i class='bx bx-search'></i>
                    </button>
                </div>
            </div>
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button" aria-controls="navbarOffcanvas">
                <i class='bx bx-menu'></i>
            </a>
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav ms-auto">


                @if(Auth::check())
                        @if (Auth::user()->role=="admin")
                        <li class="nav-item d-flex align-items-center justify-content-between">
             
             <label>
                 <input class="toggle-checkbox" type="checkbox" id="toggleSwitch">
                 <div class="toggle-slot">
                     <div class="sun-icon-wrapper">
                         <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false"></div>
                     </div>
                     <div class="toggle-button"></div>
                     <div class="moon-icon-wrapper">
                         <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false"></div>
                     </div>
                 </div>
             </label>

         </li>
                        @endif
                        @endif 



                    <li class="nav-item">
                        <a  href="{{ route('requests.index')}}" class="dropdown-toggle nav-link active">
                            Home
                        </a>
                     
                    </li>
                    <li class="nav-item">
                  
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('requests.about-us')}}" class="nav-link">About Us</a></li>
                            <li class="nav-item"><a href="{{ route('requests.news-and-blog')}}" class="nav-link">News and Blog</a></li>
                            <li class="nav-item"><a href="{{ route('requests.blog-details')}}" class="nav-link">Blog Details</a></li>
                            <li class="nav-item"><a href="{{ route('requests.alumni')}}" class="nav-link">Alumni</a></li>
                            <li class="nav-item"><a  href="{{ route('requests.contact-us')}} class="nav-link">Contact</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                            Academics
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('requests.academics')}}" class="nav-link">Academics</a></li>
                            <li class="nav-item"><a href="{{ route('requests.undergraduate')}}" class="nav-link">Undergraduate</a></li>
                            <li class="nav-item"><a href="{{ route('requests.graduate')}}" class="nav-link">Graduate</a></li>
                            <li class="nav-item"><a href="{{ route('requests.online-education')}}" class="nav-link">Online Education</a></li>
                            <li class="nav-item"><a href="{{ route('requests.faculty')}}" class="nav-link">Faculty</a></li>
                            
                            <li class="nav-item"><a href="{{ route('requests.university-life')}}" class="nav-link">University Life</a></li>
                            <li class="nav-item"><a href="{{ route('requests.the-campus-experience')}}" class="nav-link">The Campus Experience</a></li>
                            <li class="nav-item"><a href="{{ route('requests.fitness-athletics')}}" class="nav-link">Fitness & Athletics</a></li>
                            <li class="nav-item"><a href="{{ route('requests.support-guidance')}}" class="nav-link">Support & Guidance</a></li>
                            <li class="nav-item"><a href="{{ route('requests.student-activities')}}" class="nav-link">Student Activities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                            Admissions
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('requests.admission')}}" class="nav-link">Admissions</a></li>
                            <li class="nav-item"><a href="{{ route('requests.how-to-apply')}}" class="nav-link">How to Apply</a></li>
                            <li class="nav-item"><a href="{{ route('requests.tuition-fees')}}" class="nav-link">Tuition & Fees</a></li>
                            <li class="nav-item"><a href="{{ route('requests.financial-aid')}}" class="nav-link">Financial Aid</a></li>
                            <li class="nav-item"><a href="{{ route('requests.date-deadlines')}}" class="nav-link">Date & Deadlines</a></li>
                            <li class="nav-item"><a href="{{ route('requests.schedule-tour')}}" class="nav-link">Schedule a Tour</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                            Courses
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('requests.courses')}}" class="nav-link">Courses Sidebar</a></li>
                            <li class="nav-item"><a href="{{ route('requests.courses-details')}}" class="nav-link">Course Details</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                            University Life
                        </a>
                        <ul class="dropdown-menu">
                        </ul>
                    </li> -->
                    <li class="nav-item">
                    
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                        demande
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('requests.demande')}}" class="nav-link">demande</a></li>
                            <li class="nav-item"><a href="{{ route('requests.demande-details')}}" class="nav-link"> Details</a></li>
                            <li class="nav-item"><a href="{{ route('requests.suivi_demande')}}" class="nav-link">suivi demande</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                    
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                    @if(Auth::check())
                        <i class="fas fa-envelope"></i> {{ auth()->user()->role }}<br/>
                        <i class="fas fa-envelope"></i> {{ auth()->user()->name }}<br/>
                    </a>
                    <ul class="dropdown-menu">
                      
                        <li class="nav-item"><a href="{{ route('frontend.auth.logout') }}" class="nav-link">deconnect</a></li>

                    </ul>
                    @else 
                            <a href="{{ route('frontend.auth.login')}}" class="default-btn">CONNECT</a>
                        @endif 
                    
                </li>
                </ul>
                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <div class="nav-btn">
                 
           
                    
                        </div>
                    </div>
                    <div class="option-item">
                        <div class="nav-search">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" class="search-button"><i class='bx bx-search'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
   </div>
   <!-- End Navbar Area Start -->

    <!-- Start Responsive Navbar Area -->
    <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
        <div class="offcanvas-header">
            <a href="index'" class="logo d-inline-block">
                <img class="logo-light" src="{{asset('assets/img/logo/logo.png')}}" alt="logo">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
                <div class="accordion-item">
                    <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Home
                    </button>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion7">
                                <div class="accordion-item">
                                    <a href="{{ route('requests.index')}}" class="accordion-link">
                                        Home One
                                    </a>
                                </div>
                          
                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Pages
                    </button>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion8">
                                <div class="accordion-item">
                                    <a href="{{ route('requests.about-us')}}" class="accordion-link">
                                        About Us
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.news-and-blog')}}" class="accordion-link">
                                        News and Blog
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.blog-details')}}" class="accordion-link">
                                        Blog Details
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.alumni')}}" class="accordion-link">
                                        Alumni
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Academics
                    </button>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion30">
                                <div class="accordion-item">
                                    <a href="{{ route('requests.academics')}}" class="accordion-link">
                                        Academics
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.undergraduate')}}" class="accordion-link">
                                        Undergraduate
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.graduate')}}" class="accordion-link">
                                        Graduate
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.online-education')}}" class="accordion-link">
                                        Online Education
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.faculty')}}" class="accordion-link">
                                        Faculty
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Admissions
                    </button>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion31">
                                <div class="accordion-item">
                                    <a href="{{ route('requests.admission')}}" class="accordion-link">
                                        Admissions
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.how-to-apply')}}" class="accordion-link">
                                        How to Apply
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.tuition-fees')}}" class="accordion-link">
                                        Tuition &amp; Fees
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.financial-aid')}}" class="accordion-link">
                                        Financial Aid
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.date-deadlines')}}" class="accordion-link">
                                        Date &amp; Deadlines
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.schedule-tour')}}" class="accordion-link">
                                        Schedule a Tour
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Courses
                    </button>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion32">
                                <div class="accordion-item">
                                    <a href="{{ route('requests.courses')}}" class="accordion-link">
                                        Courses Sidebar
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.courses-details')}}" class="accordion-link">
                                        Course Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        University Life
                    </button>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="navbarAccordion40">
                                <div class="accordion-item">
                                    <a href="{{ route('requests.university-life')}}" class="accordion-link">
                                        University Life
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.the-campus-experience')}}" class="accordion-link">
                                        The Campus Experience
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.fitness-athletics')}}" class="accordion-link">
                                        Fitness &amp; Athletics
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.support-guidance')}}" class="accordion-link">
                                        Support &amp; Guidance
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="{{ route('requests.student-activities')}}" class="accordion-link">
                                        Student Activities
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <a class="accordion-link without-icon" href="{{ route('requests.contact-us')}}">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="offcanvas-contact-info">
                <h4>Contact Info</h4>
                <ul class="contact-info list-style">
                    <li>
                        <i class="bx bxs-envelope"></i>
                        <a href="contact@Clgunme.edu">contact@Clgunme.edu</a>
                    </li>
                    <li>
                        <i class="bx bxs-time"></i>
                        <p>Mon - Fri: 9:00 - 18:00</p>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a></li>
                </ul>
            </div>

            @if(Auth::check())
                @if (Auth::user()->name=='admin')
                <li class="nav-item d-flex align-items-center justify-content-between">
             
             <label>
                 <input class="toggle-checkbox" type="checkbox" id="toggleSwitch">
                 <div class="toggle-slot">
                     <div class="sun-icon-wrapper">
                         <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false"></div>
                     </div>
                     <div class="toggle-button"></div>
                     <div class="moon-icon-wrapper">
                         <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false"></div>
                     </div>
                 </div>
             </label>

         </li>
                        @endif
                        @endif
            <div class="offcanvas-other-options">
                <div class="option-item">
                    <a href="{{ route('frontend.auth.login')}}" class="default-btn"> connect</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Responsive Navbar Area -->

    <!-- Start Clgun Searchbar Area -->
    <div class="clgun offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header">
            <a href="{{ route('requests.index')}}" class="logo">
                <img src="{{asset('assets/img/logo/logo.png')}}" alt="image">
            </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="search-box">
                <div class="searchwrapper"> 
                    <div class="searchbox"> 
                        <div class="row align-items-center"> 
                            <div class="col-md-9"><input type="text" class="form-control" placeholder="Fiend Your Course Here!"></div> 
                            <div class="col-lg-3"> 
                                <a class="btn" href="#">Search</a> 
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>

            <div class="offcanvas-contact-info">
                <h4>Contact Info</h4>
                <ul class="contact-info list-style">
                    <li>
                        <i class="bx bxs-time"></i>
                        <p>Mon - Fri: 9:00 - 18:00</p>
                    </li>
                    <li><i class="bx bxs-phone-call"></i> General Inquiries - <a href="tel:+8495160885">(849) 516-0885</a></li>
                    <li>
                        <i class="bx bxs-envelope"></i>
                        <a href="contact@Clgunme.edu">contact@Clgunme.edu</a>
                    </li>
                    <li>
                        <i class="bx bxs-map"></i>
                        <p>404 Camino Del Rio S, Suite 102San Diego, CA 92108</p>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="https://www.twitter.com" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="https://www.dribbble.com" target="_blank"><i class='bx bxl-dribbble'></i></a></li>
                    <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- End Clgun Searchbar Area -->


    
    <script>
    document.getElementById('toggleSwitch').addEventListener('change', function() {
        if (this.checked) {
            // Si le toggle est activé, redirige vers la page administrateur
            window.location.href = "{{ route('admin.dashboard') }}";
        } else {
            // Si le toggle est désactivé, redirige vers la page utilisateur
           
        }
    });
</script>