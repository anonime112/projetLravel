@extends('home.layouts.app')

@section('title', 'University')

@section('content')

        <!-- Start Clgun Banner 2 Area -->
        <div class="banner-area-2 big-bg-2" style="height: 800px; margin-top: -50px; background-image: url('{{asset('assets1/img/all-img/P.jpg')}}');">
            <div class="container">
                <div class="banner-content-2">
                    <div class="content">
            
                        <h1 data-aos="fade-up" data-aos-delay="200" style="font-size: 80px;">Gérez vos demandes administratives en toute simplicité, de la MIAGE à l’UFR.</h1>
                        
                        <div class="buttons-action" data-aos="fade-up" data-aos-delay="100" style="margin-top: 50px;">
                            <a class="default-btn" href="application-form.html">SE CONNECTER</a>
                            <a class="default-btn btn-style-2" href="contact-us.html">CONTACT </a>
                        </div>
                        <div class="vertical-lr" data-aos="fade-zoom-in" data-aos-delay="100">
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Clgun Banner 2 Area -->

        <!-- Start Campus Area 2 -->
        <div class="campus-area-2 ptb-100">
            <div class="container-fluaid">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="sub-title">
                        <p> une filière, plusieurs étudiants, une solution centralisée</p>
                    </div>
                    <h2>MIAGE </h2>
                </div>

                <div class="campus-slider owl-carousel owl-theme">
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{asset('assets1/img/all-img/L3.jpg')}}" alt="image">
                        <div class="content">
                            <h2>LA LICENCE</h2>
                            
                        </div>
                    </div>
                    
                    <div class="campus-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('assets1/img/all-img/M1.jpg')}}" alt="image">
                        <div class="content">
                            <h2>LE MASTER</h2>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- End Campus Area -->

        <!-- Start Subscribe Area 2 -->
        <div class="subscribe-area subscribe-area-2" style="
         background-image: url('{{asset('assets1/img/all-img/P.jpg')}}');">
            <div class="container">
                <div class="section-title section-title-2" data-aos="fade-up" data-aos-delay="100">
                    <h2>rejoins-nous dès maitenant</h2>
                </div>

                <div class="subscribe-btn text-center" data-aos="fade-up" data-aos-delay="200">
                    <a class="default-btn" href="#">SE CONNECTER</a>
                </div>
            </div>
        </div> 
        <!-- End Subscribe Area 2 -->

@endsection        

       
