@extends('home.layouts.app')

@section('title', 'News-And-Blog')

@section('content')

    <!-- Start Section Banner Area -->
    <div class="section-banner bg-2">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">demande</h2>
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
                                Categories
                            </h3>

                            <ul>
                                <li>
                                    <h3><a href="#">Admission</a></h3> <span>(6)</span>
                                </li>
                                <li>
                                    <h3><a href="#">Alumni</a></h3> <span>(11)</span>
                                </li>
                                <li>
                                    <h3><a href="#">Career</a></h3> <span>(9)</span>
                                </li>
                                <li>
                                    <h3><a href="#">Research</a></h3> <span>(12)</span>
                                </li>
                                <li>
                                    <h3><a href="#">Spotlight</a></h3> <span>(2)</span>
                                </li>
                                <li>
                                    <h3><a href="#">Student life</a></h3> <span>(5)</span>
                                </li>
                                <li>
                                    <h3><a href="#">Student story</a></h3> <span>(21)</span>
                                </li>
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
                    <div class="row">
                        @foreach($types as $type)
                            <div class="col-lg-6 col-sm-6 col-md-6">
                                <div class="blog-single-card">
                                    <div class="image">
                                        <img src="{{ asset('assets1/img/all-img/courses-image-6.png') }}" alt="image">
                                    </div>

                                    <div class="content">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="#">Service scolarité</a></li>
                                                <li>{{ $type->created_at->format('M d, Y') }}</li>
                                            </ul>
                                        </div>
                                        <h3><a href="#">{{ $type->nom }}</a></h3>
                                        <a class="butn" href="{{ route('requests.demande-type.show', $type->id) }}">
    Voir plus <i class="bx bx-right-arrow-alt"></i>
</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                  

                    </div>
                    <div class="blog-pagi">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class='bx bx-arrow-back'></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class='bx bx-arrow-back bx-rotate-180'></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

@endsection