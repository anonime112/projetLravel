@extends('home.layouts.app')

@section('title', 'Courses-detail')

@section('content')

    <!-- Start Section Banner Area -->
    <div class="section-banner bg-7">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">Courses Details</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Clgun University is more than just a place of learning; it's
                        a place where dreams take flight, where ideas flourish, and where you'll find the support and...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    <!-- Start Courses Details Area -->
    <div class="courses-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-details">
                        <div class="header-title">
                            <span>{{ $types->nom }}</span>
                            <h2>{{ $types->nom }}</h2>
                            <ul>
                                <li>
                                    <img class="avater" src="{{ asset('assets1/img/all-img/teacher-img.png') }}"
                                        alt="image">
                                    <p>Responsable :
                                        @if($approbations->isNotEmpty() && optional($approbations->first()->approbation)->user)
                                            <p>Responsable :
                                                <a href="#">{{ $approbations->first()->approbation->user->name }}</a>
                                            </p>
                                        @else
                                        <p>Responsable : <span class="text-muted">Non défini</span></p>
                                    @endif
                                    </p>
                                </li>
                                <li>
                                    <p>{{ $types->created_at->format('F d, Y') }}</p>
                                </li>
                            </ul>
                        </div>

                        <div class="content">
                            <div class="content-pra">
                                <div class="title">
                                    <h3>À propos de la demande</h3>
                                </div>
                                <p>{{ $types->description }}</p>
                            </div>

                            <div class="content-pra">
                                <div class="title">
                                    <h3>Règles à respecter</h3>
                                </div>
                                <ul class="lists">
                                    @foreach(json_decode($types->regles) as $regle)
                                        <li>
                                            <div class="icon"><i class='bx bx-check'></i></div>
                                            <p>{{ $regle }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="content-pra">
                                <div class="title">
                                    <h3>Documents requis</h3>
                                </div>
                                <ul class="lists">
                                    @foreach($documents as $doc)
                                        <li>
                                            <div class="icon"><i class='bx bx-file'></i></div>
                                            <p><strong>{{ $doc->documentRequis->nom }}</strong> -
                                                {{ $doc->documentRequis->description }}
                                                <br><small>Type : {{ $doc->documentRequis->types }}</small>
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="content-pra">
                                <div class="title">
                                    <h3>Approbations nécessaires</h3>
                                </div>
                                <ul class="lists">
                                    @foreach($approbations as $ap)
                                        <li>
                                            <div class="icon"><i class='bx bx-user-check'></i></div>
                                            <p>
                                                <strong>{{ $ap->approbation->titre }}</strong><br>
                                                {{ $ap->approbation->description }}<br>
                                                Approuvé par :
                                                {{ optional($ap->approbation->roleUser->role)->titre ?? 'Non assigné' }}<br>
                                                Statut : <strong>{{ $ap->approbation->statut }}</strong>
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('requests.demande.store', $types->id) }}" method="POST">
                        @csrf
                        <div class="banner-button">
                        <button type="submit" class="default-btn">Passer la demande</button>

                        </div>
                        
                    </form>
           
                </div>
                <!-- <div class="col-lg-8">
                                        <div class="courses-details">
                                            <div class="header-title">
                                                <span>Business</span>
                                                <h2>Environmental Science and Sustainability</h2>
                                                <ul>
                                                    <li><img class="avater" src="{{asset('assets1/img/all-img/teacher-img.png')}}" alt="image"> <p>With <a href="#">Anthony Steven</a></p></li>
                                                    <li><p>October 4,2024</p></li>
                                                </ul>
                                                <div class="enrolls-count">
                                                    <img src="{{asset('assets1/img/icon/reading-2.png')}}" class="ikon" alt="icon"> <p>5 already enrolled</p>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="content-pra">
                                                    <div class="title">
                                                        <h3>About This Course</h3>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et doloremgna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>

                                                    <div class="tag">
                                                       <span>Tag:</span>
                                                       <ul>
                                                        <li><a href="#">Branding,</a></li>
                                                        <li><a href="#">Design,</a></li>
                                                        <li><a href="#">Graphic</a></li>
                                                       </ul>
                                                    </div>
                                                </div>
                                                <div class="content-pra">
                                                    <div class="title">
                                                        <h3>Learning Objectives</h3>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et doloremgna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>
                                                    <ul class="lists">
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>To promote an entrepreneurial spirit and to consider the option of setting up a company as an employment opportunity</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Development of entrepreneurial skills and use of tools that equip people to work in an entrepreneurial project</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Essential knowledge for those interested in managing their own business</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content-pra">
                                                    <div class="title">
                                                        <h3>Material Includes</h3>
                                                    </div>
                                                    <ul class="lists">
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Videos</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Booklets</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content-pra">
                                                    <div class="title">
                                                        <h3>Requirements</h3>
                                                    </div>
                                                    <ul class="lists">
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Passion for entrepreneurship</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Basic business concepts</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content-pra">
                                                    <div class="title">
                                                        <h3>Target Audience</h3>
                                                    </div>
                                                    <ul class="lists">
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Young Entrepreneurs</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Business Persons</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>College Students</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Professionals</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <i class='bx bx-check'></i>
                                                            </div>
                                                            <p>Startups</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="instructor-card">
                                                <div class="title">
                                                    <h3>Your Instructors</h3>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-5 col-sm-6 col-md-5">
                                                        <div class="image">
                                                            <img src="{{asset('assets1/img/all-img/instructor.png')}}" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-sm-6 col-md-7">
                                                        <div class="content">
                                                            <h3>Anthony Steven</h3>
                                                            <div class="review">
                                                                <div class="left">
                                                                    <ul>
                                                                        <li><i class='bx bxs-star' ></i></li>
                                                                        <li><i class='bx bxs-star' ></i></li>
                                                                        <li><i class='bx bxs-star' ></i></li>
                                                                        <li><i class='bx bxs-star' ></i></li>
                                                                        <li><i class='bx bxs-star' ></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="rights">
                                                                    <p>Review 0/5</p>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <div class="image-circle">
                                                                        <img src="{{asset('assets1/img/icon/icon-1.png')}}" alt="image"> 
                                                                    </div>
                                                                    <span>432</span>
                                                                </li>
                                                                <li>
                                                                    <div class="image-circle">
                                                                        <img src="{{asset('assets1/img/icon/icon-2.png')}}" alt="image"> 
                                                                    </div>
                                                                    <span>1.2k</span>
                                                                </li>
                                                                <li>
                                                                    <div class="image-circle">
                                                                        <img src="{{asset('assets1/img/icon/icon-3.png')}}" alt="image"> 
                                                                    </div>
                                                                    <span>5.0</span>
                                                                </li>
                                                            </ul>
                                                            <a href="#">See more</a>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> -->
                <div class="col-lg-4">
                    <div class="course-widget-area">
                        <div class="image">
                            <img src="{{asset('assets1/img/all-img/courses-image-6.png')}}" alt="image">
                            <div class="play-btn">
                                <a href="https://youtu.be/SbuRnwgG8rs?si=Oew2tM_U0WQPjJte" class="popup-youtube"><i
                                        class='bx bx-play'></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="pricing">
                                <h4>Gratuit</h4>
                            </div>
                            <ul>
                                <li>
                                    <span>Nombre de documents requis</span>
                                    <p>{{ count($documents) }}</p>
                                </li>
                                <li>
                                    <span>Nombre d’approbations</span>
                                    <p>{{ count($approbations) }}</p>
                                </li>
                                <li>
                                    <span>Nombre de règles</span>
                                    <p>{{ is_array($types->regles) ? count($type->regles) : 0 }}</p>
                                </li>
                                <li>
                                    <span>Date de création</span>
                                    <p>{{ $types->created_at->format('d/m/Y') }}</p>
                                </li>
                            </ul>
                            <a class="enroll-btn" href="#">Faire une demande</a>
                            <a class="wish-btn" href="#">Ajouter aux favoris</a>
                        </div>

                        <!-- <div class="content">
                                    <div class="pricing">
                                        <h4>$0</h4>
                                    </div>
                                    <ul>
                                        <li>
                                            <span>Level</span>
                                            <p>Graduate</p>
                                        </li>
                                        <li>
                                            <span>Duration</span>
                                            <p>21.3 hours</p>
                                        </li>
                                        <li>
                                            <span>Subject</span>
                                            <p>Business</p>
                                        </li>
                                        <li>
                                            <span>Language</span>
                                            <p>English</p>
                                        </li>
                                    </ul>
                                    <a class="enroll-btn" href="#">Enroll Now</a>
                                    <a class="wish-btn" href="#">Add to wishlist</a>
                                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Courses Details Area -->
@endsection