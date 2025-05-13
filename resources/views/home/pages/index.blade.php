@extends('home.layouts.app')

@section('title', 'University')

@section('content')

        <!-- Start Clgun Banner 2 Area -->
        <div class="banner-area-2 big-bg-2">
            <div class="container">
                <div class="banner-content-2">
                    <div class="content">
                        <span data-aos="fade-zoom-in" data-aos-delay="300">The Best University of The State</span>
                        <h1 data-aos="fade-up" data-aos-delay="200">Transformative Education</h1>
                        <p data-aos="fade-up" data-aos-delay="300">There are many variations of passages of Lorem Ipsum available, but the majority have suffered altera some injected humour, or randomised words which don't look even slightly believable.</p>
                        <div class="buttons-action" data-aos="fade-up" data-aos-delay="100">
                            <a class="default-btn" href="application-form.html">Apply to USD</a>
                            <a class="default-btn btn-style-2" href="contact-us.html">Chat with Us</a>
                        </div>
                        <div class="vertical-lr" data-aos="fade-zoom-in" data-aos-delay="100">
                            <p>Transformative Education <span>12-10-2024</span></p>
                        </div>

                        <div class="scroll-down" data-aos="fade-down" data-aos-delay="100">
                           <a href="#about"><i class='bx bx-chevron-down'></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clgun Banner 2 Area -->

        <!-- Start About Us Area 2 -->
        <div id="about" class="about-us-area-2 ptb-100">
            <div class="container">
                <div class="section-title" data-aos="fade-up" data-aos-delay="100">
                    <h2>About Our University</h2>
                    <p>Only when different values, experiences and perspectives are met with free and open discourse can education be truly transformative..</p>
                </div>
                <div class="about-content-courser owl-carousel owl-theme">
                    <div class="content-items" data-dot="<button>01</button>">
                        <div class="image ct-bg-1" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                            <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                        </div>
                    </div>
                    <div class="content-items" data-dot="<button>02</button>">
                        <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                            <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                        </div>
                    </div>
                    <div class="content-items" data-dot="<button>03</button>">
                        <div class="image ct-bg-3" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                            <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                        </div>
                    </div>
                    <div class="content-items" data-dot="<button>04</button>">
                        <div class="image ct-bg-2" data-aos="fade-zoom-in" data-aos-delay="100">
                        </div>
                        <div class="content" data-aos="fade-up" data-aos-delay="200">
                            <span>Campus Information</span>
                            <h2>Where Knowledge Meets Innovation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim iam quis nostrud xerci tation ulla mco laboris nisi ut</p>
                            <a class="default-btn" href="schedule-tour.html">Schedule A Tour</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End About Us Area 2 -->

        <!-- Start Features Area 2 -->
        <div class="features-area-2">
            <div class="features-content-2 ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="sub-title">
                                <p>Our Best Features</p>
                            </div>
                            <div class="content">
                                <h2>Our students create a vibrant and inclusive community</h2>
                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon">
                                            <img src="{{asset('assets1/img/icon/features-icon-2.png')}}" alt="image">
                                        </div>
                                        <h3>Education Services</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-content">
                                        <div class="icon">
                                            <img src="{{ asset('assets1/img/icon/features-icon-1.png')}}" alt="image">
                                        </div>
                                        <h3>Efficient & Flexible</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tem incid idunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <a class="default-btn" href="admission.html">More on Admission</a>

                                <div class="arrow-icon">
                                    <img src="{{asset('assets1/img/icon/shape-1.png')}}" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="academic-content">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-md-6 pt-25">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="100">
                                            <div class="image">
                                                <img src="{{ asset('assets1/img/all-img/academic-image-1.png')}}" alt="image">
                                                <div class="number">
                                                    <h3>01</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>International Hubs</h4>
                                                <a class="btn" href="fitness-athletics.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="200">
                                            <div class="image">
                                                <img src="{{ asset('assets1/img/all-img/academic-image-2.png')}}" alt="image">
                                                <div class="number">
                                                    <h3>02</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Bachelor’s & Master’s</h4>
                                                <a class="btn" href="support-guidance.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 pt-25">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="300">
                                            <div class="image">
                                                <img src="{{ asset('assets1/img/all-img/academic-image-3.png')}}" alt="image">
                                                <div class="number">
                                                    <h3>03</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>University Life</h4>
                                                <a class="btn" href="university-life.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="academic-item" data-aos="fade-up" data-aos-delay="400">
                                            <div class="image">
                                                <img src="{{ asset('assets1/img/all-img/academic-image-4.png')}}" alt="image">
                                                <div class="number">
                                                    <h3>04</h3>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <h4>Education Services</h4>
                                                <a class="btn" href="the-campus-experience.html">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Area 2 -->

        <!-- Start Video Area  -->
        <div class="video-area">
            <div class="container">
                <div class="video-play-btn" data-aos="fade-zoom-in" data-aos-delay="100">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=B03IqRlOhG0">Play</a>
                </div>
            </div>
        </div>
        <!-- End Video Area  -->

        <!-- Start News Area 2 -->
        <div class="news-area ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Campus News</p>
                    </div>
                    <h2>Stories About People, Research, and Innovation Across The Farm</h2>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="news-content">
                            <ul>
                                <li class="news-item" data-aos="fade-up" data-aos-delay="100">
                                    <div class="image">
                                        <img src="{{ asset('assets1/img/all-img/news-image-1.png')}}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <i class='bx bxs-graduation'></i> <p>Science and technology</p>
                                        </div>
                                        <h2><a href="blog-details.html">Robot Provides Personalized Room Cleanup</a></h2>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipiscingl sed do eiusm tem incid idunt ut labore.</p>
                                        <a class="btn" href="blog-details.html">Continue Reading...</a>
                                    </div>
                                </li>
                                <li class="news-item" data-aos="fade-up" data-aos-delay="200">
                                    <div class="image">
                                        <img src="{{ asset('assets1/img/all-img/news-image-2.png')}}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="sub-title">
                                            <i class='bx bxs-graduation'></i> <p>Law and Policy</p>
                                        </div>
                                        <h2><a href="blog-details.html">Learning Network Webinars for Music Teachers</a></h2>
                                        <p>Lorem ipsum dolor sit amet conse ctetur adipiscingl sed do eiusm tem incid idunt ut labore.</p>
                                        <a class="btn" href="blog-details.html">Continue Reading...</a>
                                    </div>
                                </li>   
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-content-right" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-box">
                                <img src="{{ asset('assets1/img/all-img/news-image-3.png')}}" alt="iamge">
                                <div class="content">
                                    <h3><a href="blog-details.html">Gender inequality in higher education persists</a></h3>
                                    <p>Lorem ipsum dolor sit amet conse sed do eiusm tem incid idunt ut labore.</p>
                                    <a class="btn" href="blog-details.html">Continue Reading...</a>
                                </div>
                            </div>
                        </div>
                        <div class="news-content-item" data-aos="fade-up" data-aos-delay="100">
                            <div class="content-box">
                                <div class="image">
                                    <img src="{{asset('assets1/img/all-img/news-image-4.png')}}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="sub-title">
                                        <i class='bx bxs-graduation'></i> <p>Medicine</p>
                                    </div>
                                    <h3><a href="blog-details.html">Empowering Health, One Patient at a Time.</a></h3>
                                </div>
                            </div>
                            <div class="content-box">
                                <div class="image">
                                    <img src="{{asset('assets1/img/all-img/news-image-5.png')}}" alt="image">
                                </div>
                                <div class="content">
                                    <div class="sub-title">
                                        <i class='bx bxs-graduation'></i> <p>Student Life</p>
                                    </div>
                                    <h3><a href="blog-details.html">Every Student, Every Dream, Every Success.</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Where Dreams Take Flight. <a href="news-and-blog.html">More Campus News <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End News Area 2 -->

        <!-- Start Faculty Area 2 -->
        <div class="faculty-area-2 ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="heading" data-aos="fade-up" data-aos-delay="100">
                            <h2>Scholarship Programs</h2>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <p>It is a long established fact that a reader will be distracted by the readablecont of a page when looking at its layout. The point of using Lorem Ipsum is that it has more-or-less normal distribution of letters, as opposed to using.</p>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="button">
                            <a class="default-btn" href="financial-aid.html">Financial Aid</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Faculty Area 2 -->

        <!-- Start Quick Search Area -->
        <div class="quick-search style-2 ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="course-search-box" data-aos="fade-right">
                            <h4>Search For Courses</h4>
                            <div class="search-key">
                                <input class="form-control" placeholder="Keywords" type="search" value="" id="searchKey1">
                                <input class="form-control" placeholder="Course ID" type="search" value="" id="searchKey">
                                
                                <select class="form-select" aria-label="Default select example" id="searchKey2">
                                    <option selected>Department</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey3">
                                    <option selected>Campus</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey4">
                                    <option selected>Level</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey5">
                                    <option selected>Instructor</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey6">
                                    <option selected>Semester</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <select class="form-select" aria-label="Default select example" id="searchKey7">
                                    <option selected>Credit</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>

                                <a class="default-btn" href="#">Search Courses</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quick-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="sub-title">
                                <p>Campus News</p>
                            </div>
                            <h2>Start Your Career & Pursue Your Passion</h2>
                            <p>It is a long established fact that a reader will be distracted by the readablecont of a page when looking at its layout. The point of using Lorem Ipsum is that it ha more-or-less normal distribution of letters, as opposed to using.</p>

                            <div class="list">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="list-items">
                                            <ul>
                                                <li><i class='bx bx-right-arrow-circle'></i> Alumni & Donors</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> Athletic Calendar</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> All Canyon Events</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="list-items">
                                            <ul>
                                                <li><i class='bx bx-right-arrow-circle'></i> Partnership & Out Reach</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> Academic Programs</li>
                                                <li><i class='bx bx-right-arrow-circle'></i> Tution And Fees</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>

                            <div class="apply-banner">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <p>Apply for Admission</p>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 text-end">
                                        <a class="default-btn" href="application-form.html">Apply Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="user-exprience">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="user-info">
                                            <div class="image">
                                                <img src="{{ asset('assets1/img/all-img/admin-image.png')}}" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>John Michael</h4>
                                                <p>Founder</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="exprience">
                                            <div class="icon">
                                                <img src="{{asset('assets1/img/icon/trophy-star.png')}}" alt="image">
                                            </div>
                                            <div class="text">
                                                <h4>20</h4>
                                                <p>Years of <br> Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Quick Search Area -->

        <!-- Start Campus Area 2 -->
        <div class="campus-area-2 ptb-100">
            <div class="container-fluaid">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>The Campus Experience</p>
                    </div>
                    <h2>One University, Many Places</h2>
                </div>

                <div class="campus-slider owl-carousel owl-theme">
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('assets1/img/all-img/campus-image-1.png')}}" alt="image">
                        <div class="content">
                            <h2>West Campus</h2>
                            <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                        </div>
                    </div>
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('assets1/img/all-img/campus-image-2.png')}}" alt="image">
                        <div class="content">
                            <h2>Washington D.C</h2>
                            <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                        </div>
                    </div>
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="300">
                        <img src="{{asset('assets1/img/all-img/campus-image-3.png')}}" alt="image">
                        <div class="content">
                            <h2>West Campus</h2>
                            <a class="default-btn" href="the-campus-experience.html">Virtual Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Area -->

        <!-- Start Activities Area -->
        <div class="activities-area ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Sports and Athletics</p>
                    </div>
                    <h2>Beyond the Bleachers: Diverse Sports & Activities</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="100">
                            <div class="image">
                                <img src="{{asset('assets1/img/all-img/activities-image-1.png')}}" alt="image">
                            </div>
                            <div class="content">
                                <h2><a href="student-activities.html">Home of Champions</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum aviable but the majority have suffered alteration in some form.</p>
                                <a class="btn" href="student-activities.html">National Championships</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 pt-25">
                        <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{asset('assets1/img/all-img/activities-image-2.png')}}" alt="image">
                            </div>
                            <div class="content">
                                <h2><a href="support-guidance.html">Olympic Excellence</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum aviable but the majority have suffered alteration in some form.</p>
                                <a class="btn" href="support-guidance.html">Medals</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="activities-card style-2" data-aos="fade-up" data-aos-delay="300">
                            <div class="image">
                                <img src="{{asset('assets1/img/all-img/activities-image-3.png')}}" alt="image">
                            </div>
                            <div class="content">
                                <h2><a href="fitness-athletics.html">Multidimensional Impact</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum aviable but the majority have suffered alteration in some form.</p>
                                <a class="btn" href="fitness-athletics.html">Athlete Stories</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Inspiring Minds, Shaping Futures. <a href="fitness-athletics.html">More About Athletics <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End Activities Area -->

        <!-- Start Events Area 2 -->
        <div class="events-area-2 pt-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>News and Events</p>
                    </div>
                    <h2>Recent Important Stories Updated</h2>
                </div>

                <!-- Top Event -->
                <div class="event lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="content">
                        <div class="image">
                            <img src="{{asset('assets1/img/all-img/events-image-1.png')}}" alt="image">
                        </div>
                        <div class="text">
                            <div class="tag">Featured News</div>
                            <h2><a href="blog-details.html">Celebrating Hispanic Heritage Month: Sioma Waisburd</a></h2>
                            <span>October 06, 2024</span>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority havesu fered alteration in some form, by injected humour.</p>
                            <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Post & Event -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="recent-post">
                            <h4 data-aos="fade-zoom-in" data-aos-delay="100">Recent News</h4>
                            <div class="event" data-aos="fade-up" data-aos-delay="100">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{asset('assets1/img/all-img/events-image-2.png')}}" alt="image">
                                    </div>
                                    <div class="text">
                                        <div class="tag">News</div>
                                        <h2><a href="blog-details.html">Navigating Academia: Tips and Stories from Canyon University</a></h2>
                                        <span>October 06, 2024</span>
                                        <p>There are many variations of passages of Lorem Ipsum avala fered alteration in some form.</p>
                                        <div class="link"><a href="v"><i class='bx bx-link-external'></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="event" data-aos="fade-up" data-aos-delay="200">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{asset('assets1/img/all-img/events-image-3.png')}}" alt="image">
                                    </div>
                                    <div class="text">
                                        <div class="tag">News</div>
                                        <h2><a href="blog-details.html">Beyond Graduation: Canyon University's Blog for Alumni</a></h2>
                                        <span>October 06, 2024</span>
                                        <p>There are many variations of passages of Lorem Ipsum avala fered alteration in some form.</p>
                                        <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="upcoming-event">
                            <h4 data-aos="fade-zoom-in" data-aos-delay="100">Upcoming Events</h4>

                            <div class="event-dates" data-aos="fade-up" data-aos-delay="100">
                                <div class="date">
                                    <ul>
                                        <li class="mnt">Oct</li>
                                        <li class="det">07</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="blog-details.html">Fintech & Key Investment Conference</a></h3>
                                    <p>Seamlessly visualize quality ellectua capital without super.</p>
                                    <div class="location"><i class='bx bx-map'></i> Canyon Grand Hall</div>
                                    <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                                </div>
                            </div>
                            <div class="event-dates" data-aos="fade-up" data-aos-delay="200">
                                <div class="date">
                                    <ul>
                                        <li class="mnt">Oct</li>
                                        <li class="det">09</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="#">How to Organise Your Studies for Success</a></h3>
                                    <p>Seamlessly visualize quality ellectua capital without super.</p>
                                    <div class="location"><i class='bx bx-map'></i> Canyon Grand Hall</div>
                                    <div class="link"><a href="#"><i class='bx bx-link-external'></i></a></div>
                                </div>
                            </div>
                            <div class="event-dates" data-aos="fade-up" data-aos-delay="300">
                                <div class="date">
                                    <ul>
                                        <li class="mnt">Oct</li>
                                        <li class="det">19</li>
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3><a href="blog-details.html">Planning And Facilitating Effective Meetings</a></h3>
                                    <p>Seamlessly visualize quality ellectua capital without super.</p>
                                    <div class="location"><i class='bx bx-map'></i> Canyon Grand Hall</div>
                                    <div class="link"><a href="blog-details.html"><i class='bx bx-link-external'></i></a></div>
                                </div>
                            </div>
                            <div class="event-dates" data-aos="fade-zoom-in" data-aos-delay="100">
                                <a class="btn" href="news-and-blog.html">View More Events <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Events Area 2 -->

        <!-- Start Success Area 2 -->
        <div class="success-area success-area-2 ptb-100">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Student, Faculty and Alumni Success</p>
                    </div>
                    <h2>Celebrating the Legacy, Embracing the Future</h2>
                </div>
    
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="image">
                                <img src="{{asset('assets1/img/all-img/success-image-1.png')}}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LlCwHnp3kL4"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>Amelia Harper ’23 (BA) </h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="image">
                                <img src="{{asset('assets1/img/all-img/success-image-2.png')}}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LlCwHnp3kL4"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>Oliver Elijah ’23 (BS/BA)</h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="success-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="image">
                                <img src="{{asset('assets/img/all-img/success-image-3.png')}}" alt="image">
                            </div>
                            <div class="content">
                                <div class="play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=LlCwHnp3kL4"><i class='bx bx-play'></i></a>
                                </div>
                                <ul>
                                    <li><a href="university-life.html"><h3>Sofia Grace ’15 (BA)</h3></a></li>
                                    <li class="link"><a href="university-life.html"><i class='bx bx-link-external'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-btn text-center" data-aos="fade-zoom-in" data-aos-delay="100">
                    <p>Inspiring Minds, Shaping Futures. <a href="undergraduate.html">Learn about the USD Honors Program <i class='bx bx-right-arrow-alt'></i></a></p>
                </div>
            </div>
        </div>
        <!-- End Success Area 2 -->

        <!-- Start Subscribe Area 2 -->
        <div class="subscribe-area subscribe-area-2">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p>Subscribe to Our Newsletter</p>
                    </div>
                    <h2>Get the Latest Canyon News Delivered to You Inbox</h2>
                </div>

                <div class="subscribe-btn text-center" data-aos="fade-up" data-aos-delay="200">
                    <a class="default-btn" href="#">Subscribe Now</a>
                </div>
            </div>
        </div> 
        <!-- End Subscribe Area 2 -->

@endsection        

       
