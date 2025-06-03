<!-- Start Navbar Area Start -->
<div class="navbar-area style-2" id="navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('requests.index')}}">
                <img class="logo-light" src="{{asset('assets1/img/logo/telechar.png')}}" alt="logo" style="height: 70px;">
                <img class="logo-dark" src="{{asset('assets1/img/logo/telechar.png')}}" alt="logo" style="height: 70px;">
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
                       <li class="nav-item"><a href="{{ route('requests.index')}}" class="nav-link">ACCEUIL</a></li>                    
                    </li>
                    <li class="nav-item">                 
                        <li class="nav-item"><a href="{{ route('requests.about-us')}}" class="nav-link">A PROPOS</a></li>
                    </li>              
                    <li class="nav-item">
                        <a href="{{ route('requests.contact-us')}}" class="nav-link">
                            CONTACT
                        </a>
                    </li>
                </ul>
                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <div class="nav-btn">
                        @if(Auth::check())
                        <i class="fas fa-envelope"></i> {{ auth()->user()->role }}<br/>
                        <i class="fas fa-envelope"></i> {{ auth()->user()->name }}<br/>
           
                        @else 
                            <a href="{{ route('frontend.auth.login')}}" class="default-btn">SE CONNECTER</a>
                        @endif 
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
                                <div class="accordion-item">
                                    <a href="index2'" class="accordion-link active">
                                        Home Two
                                    </a>
                                </div>
                                <div class="accordion-item">
                                    <a href="index3'" class="accordion-link">
                                        Home Three
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
          
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="search-box">
                <div class="searchwrapper"> 
                    <div class="searchbox"> 
                        <div class="row align-items-center"> 
                            <div class="col-md-9"><input type="text" class="form-control" placeholder=""></div> 
                            <div class="col-lg-3"> 
                                <a class="btn" href="#">recherche</a> 
                            </div> 
                        </div> 
                    </div>
                </div>
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