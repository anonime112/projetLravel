@extends('home.layouts.app')

@section('title', 'News-And-Blog')

@section('content')

    <!-- Start Section Banner Area -->
    <div class="section-banner bg-2">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">historique et demande</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Clgun University is more than just a place of learning; it's
                        a place where dreams take flight, where ideas flourish, and where you'll find the support and...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    <!-- End Blog Area -->
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget-search">
                            <h3 class="widget-title">
                                Search
                            </h3>
                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                        <div class="widget widget-catagories">
                            <h3 class="widget-title">
                                statistique
                            </h3>

                            <ul>
                               

                                @foreach($demandeCounts as $type)
                                    <li>
                                        <h3><a href="#">{{ $type->nom }}</a></h3>
                                        <span>({{ $type->user_count }})</span>
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                        <div class="widget widget-banner">
                            <div class="blog-banner-content">
                                <div class="title">Donation <br>Helps Us</div>
                                <div class="price">
                                    $100
                                    <span>MILLION GOAL</span>
                                </div>
                                <div class="banner-button">
                                    <a class="default-btn" href="#">Become a Donor</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <h3 class="widget-title">
                                Popular Tags
                            </h3>
                            <ul>
                                <li><a href="#">Activities</a></li>
                                <li><a href="#">Alumni</a></li>
                                <li><a href="#">Campus</a></li>
                                <li><a href="#">Digital Learning</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Experience</a></li>
                                <li><a href="#">International Learning</a></li>
                                <li><a href="#">Business Life</a></li>
                                <li><a href="#">Tuition Fee</a></li>
                                <li><a href="#">Skill</a></li>
                                <li><a href="#">Business Life</a></li>
                                <li><a href="#">Undergraduate</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="content-pra">
                 

                    </div>


                    <div class="">
                        <div class="project-top-wrapper project-top-progress d-flex justify-content-between flex-wrap ">
                            <div
                                class="project-top-left d-flex flex-wrap justify-content-lg-between justify-content-center mt-n10 ">
                                <div class="project-tap global-shadow order-lg-1 order-2 my-10 widget-area widget">
                                    <ul class="nav px-1 widget-area widget" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ap-overview-tab" data-bs-toggle="pill"
                                                href="#ap-overview" role="tab" aria-selected="true">all projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="timeline-tab" data-bs-toggle="pill" href="#timeline"
                                                role="tab" aria-selected="false">in progress</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="early-tab" data-bs-toggle="pill" href="#early"
                                                role="tab" aria-selected="false">early</a>
                                        </li>
                                    </ul>
                                </div>
                     
                            </div>
                            <div class="project-top-right d-flex flex-wrap">


                            </div>
                        </div>
                    </div>

                    <div class="">

                        <!-- Tab Menu End -->

                        <div class="projects-tab-content projects-tab-content--progress">
                            <div class="tab-content mt-25" id="ap-tabContent">
                                <div class="tab-pane fade show active" id="ap-overview" role="tabpanel"
                                    aria-labelledby="ap-overview-tab">
                                    <div class="row">
                                        <div class="col-xl-12 mb-25 col-md-12 widget-area widget">

                                            @foreach($demandes as $demande)
                                                <div
                                                    class="user-group radius-xl media-ui media-ui--early pt-30 pb-25 widget-area widget ">
                                                    <div class="border-bottom px-30">
                                                        <div class="media user-group-media d-flex justify-content-between">
                                                            <div
                                                                class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                                <a href="#">
                                                                    <h6
                                                                        class="mt-0 fw-500 user-group media-ui__title bg-transparent">
                                                                        {{ $demande->type->nom }}
                                                                    </h6>
                                                                </a>
                                                             
                                                            </div>
                                                            <div class="mt-n15">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="user-group-people mt-15 text-capitalize">
                                                            <p>{{ $demande->type->description }}</p>
                                                            <div class="user-group-project">
                                                                <div class="d-flex align-items-center user-group-progress-top">
                                                                    <div class="media-ui__start">
                                                                        <span class="color-light fs-12">Date d'émission</span>
                                                                        <p class="fs-14 fw-500 color-dark mb-0">
                                                                        {{ \Carbon\Carbon::parse($demande->created_at)->format('d/m/Y') }}   </p>
                                                                    </div>
                                                                    <div class="media-ui__end">
                                                                        <span class="color-light fs-12">État</span>
                                                                        <p class="fs-16 fw-500 color-success mb-0">
                                                                            {{ ucfirst($demande->statut ?? 'en attente') }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="user-group-progress-bar">
                                                            <div class="progress-wrap d-flex align-items-center mb-0">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                                        style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                              
                                                            </div>
                                                            <p class="color-light fs-12 mb-20">0 /
                                                               
                                                                validées</p>
                                                                
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="checkout-progress justify-content-center">
                                                    <div class="step completed" id="1">
                                                        <span class="las la-check"></span>

                                                    </div>
                                                    <div class="current"><img src="{{asset('assets1/img/checkoutin.svg')}}"
                                                            alt="img" class="svg"></div>
                                                    <div class="step current" id="2">
                                                        <span>2</span>

                                                    </div>
                                                    <div class="current"><img src="img/svg/checkout.svg" alt="img"
                                                            class="svg"></div>
                                                    <div class="step" id="3">
                                                        <span>3</span>

                                                    </div>
                                                    <div class="current"><img src="img/svg/checkout.svg" alt="img"
                                                            class="svg"></div>
                                                    <div class="step" id="4">
                                                        <span>4</span>

                                                    </div>
                                                </div>
                                                </div>
                                            @endforeach


                                        </div>



                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-md-end justify-content-center mt-1 mb-30">

                                                <nav class="dm-page ">
                                                    <ul class="dm-pagination d-flex">
                                                        <li class="dm-pagination__item">
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="la la-angle-left"></span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">1</span></a>
                                                            <a href="#" class="dm-pagination__link active"><span
                                                                    class="page-number">2</span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">3</span></a>
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="page-number">...</span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">12</span></a>
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="la la-angle-right"></span></a>
                                                            <a href="#" class="dm-pagination__option">
                                                            </a>
                                                        </li>
                                                        <li class="dm-pagination__item">
                                                            <div class="paging-option">
                                                                <select name="page-number" class="page-selection">
                                                                    <option value="20">20/page</option>
                                                                    <option value="40">40/page</option>
                                                                    <option value="60">60/page</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </nav>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                    <div class="row">
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--onHold pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-warning">on
                                                                hold</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-md-end justify-content-center mt-1 mb-30">

                                                <nav class="dm-page ">
                                                    <ul class="dm-pagination d-flex">
                                                        <li class="dm-pagination__item">
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="la la-angle-left"></span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">1</span></a>
                                                            <a href="#" class="dm-pagination__link active"><span
                                                                    class="page-number">2</span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">3</span></a>
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="page-number">...</span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">12</span></a>
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="la la-angle-right"></span></a>
                                                            <a href="#" class="dm-pagination__option">
                                                            </a>
                                                        </li>
                                                        <li class="dm-pagination__item">
                                                            <div class="paging-option">
                                                                <select name="page-number" class="page-selection">
                                                                    <option value="20">20/page</option>
                                                                    <option value="40">40/page</option>
                                                                    <option value="60">60/page</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </nav>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="early" role="tabpanel" aria-labelledby="early-tab">
                                    <div class="row">
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--early pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-primary">early</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--early pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-primary">early</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--early pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-primary">early</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-xl-4 mb-25 col-md-6">

                                            <div class="user-group radius-xl media-ui media-ui--early pt-30 pb-25">
                                                <div class="border-bottom px-30">
                                                    <div class="media user-group-media d-flex justify-content-between">
                                                        <div
                                                            class="media-body d-flex align-items-center flex-wrap text-capitalize my-sm-0 my-n2">
                                                            <a href="application-ui.html">
                                                                <h6
                                                                    class="mt-0  fw-500 user-group media-ui__title bg-transparent">
                                                                    Dashboard UI</h6>
                                                            </a>
                                                            <span
                                                                class="my-sm-0 my-2 media-badge text-uppercase color-white bg-primary">early</span>
                                                        </div>
                                                        <div class="mt-n15">
                                                            <div class="dropdown dropleft">
                                                                <button class="btn-link border-0 bg-transparent p-0"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <img src="img/svg/more-horizontal.svg"
                                                                        alt="more-horizontal" class="svg">
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">view</a>
                                                                    <a class="dropdown-item" href="#">edit</a>
                                                                    <a class="dropdown-item" href="#">leave</a>
                                                                    <a class="dropdown-item" href="#">delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-people mt-15 text-capitalize">
                                                        <p>Lorem ipsum dolor amet, consetetur sadipscing elitr sed diam
                                                            nonumy
                                                            eirmod dolor ame.</p>
                                                        <div class="user-group-project">
                                                            <div class="d-flex align-items-center user-group-progress-top">
                                                                <div class="media-ui__start">
                                                                    <span class="color-light fs-12">Start Date</span>
                                                                    <p class="fs-14 fw-500 color-dark mb-0">26 Dec 2019</p>
                                                                </div>
                                                                <div class="media-ui__end">
                                                                    <span class="color-light fs-12">end date</span>
                                                                    <p class="fs-16 fw-500 color-success mb-0">18 Mar 2020
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-group-progress-bar">

                                                        <div class="progress-wrap d-flex align-items-center mb-0">
                                                            <div class="progress">
                                                                <div class="progress-bar bg-primary" role="progressbar"
                                                                    style="width: 83%;" aria-valuenow="83" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>


                                                            <span class="progress-percentage">83%</span>


                                                        </div>

                                                        <p class="color-light fs-12 mb-20">12 / 15 tasks completed</p>
                                                    </div>
                                                </div>
                                                <div class="mt-20 px-30">
                                                    <p class="fs-13 color-light mb-10">Assigned To</p>
                                                    <ul class="d-flex flex-wrap user-group-people__parent">
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm3.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm4.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm5.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm6.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm1.png" alt="author"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><img
                                                                    class="rounded-circle wh-34 bg-opacity-secondary"
                                                                    src="img/tm2.png" alt="author"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-md-end justify-content-center mt-1 mb-30">

                                                <nav class="dm-page ">
                                                    <ul class="dm-pagination d-flex">
                                                        <li class="dm-pagination__item">
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="la la-angle-left"></span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">1</span></a>
                                                            <a href="#" class="dm-pagination__link active"><span
                                                                    class="page-number">2</span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">3</span></a>
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="page-number">...</span></a>
                                                            <a href="#" class="dm-pagination__link"><span
                                                                    class="page-number">12</span></a>
                                                            <a href="#" class="dm-pagination__link pagination-control"><span
                                                                    class="la la-angle-right"></span></a>
                                                            <a href="#" class="dm-pagination__option">
                                                            </a>
                                                        </li>
                                                        <li class="dm-pagination__item">
                                                            <div class="paging-option">
                                                                <select name="page-number" class="page-selection">
                                                                    <option value="20">20/page</option>
                                                                    <option value="40">40/page</option>
                                                                    <option value="60">60/page</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </nav>


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
    </div>
    </div>
    <!-- End Blog Area -->

@endsection