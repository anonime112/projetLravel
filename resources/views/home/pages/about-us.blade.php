@extends('home.layouts.app')

@section('title', 'About-Us')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-1" style="
         background-image: url('{{asset('assets1/img/all-img/vidal.jpg')}}');">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">A PROPOS</h2>
                        <p data-aos="fade-up" data-aos-delay="200">MIAGE (Méthodes Informatiques Appliquées à la Gestion des Entreprises) forme des professionnels capables de concevoir, développer et piloter des systèmes d'information adaptés aux besoins des entreprises.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->       
        <!-- Start Campus Tour Area -->
        <div class="campus-tour">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            
                            <h2>DEUXIEME PROMOTION DE LA DOUBLE DIPLOMATION DE LA LICENCE</h2>

                            <p>Deuxième promotion de la double diplomation en Licence
                                La filière MIAGE d’Abidjan lance avec fierté sa deuxième promotion de la double diplomation en partenariat avec l’Université de Rennes 1 (France).
                                Ce programme permet aux étudiants d’obtenir deux diplômes reconnus – ivoirien et français – à l’issue de leur formation.
                                Cette collaboration renforce l’ouverture internationale de la MIAGE, valorise les compétences des étudiants et confirme son engagement pour une formation de qualité, tournée vers les enjeux du numérique et de la gestion.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image cp-bg-1" data-aos="fade-zoom-in" data-aos-delay="100" style="
                         background-image: url('{{asset('assets1/img/all-img/rennes.jpg')}}');">
                        </div>
                    </div>
                </div>
                <div class="row g-0 align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="image cp-bg-2" data-aos="fade-zoom-in" data-aos-delay="100" style="
                         background-image: url('{{asset('assets1/img/all-img/MOOV.jpg')}}');">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content" data-aos="fade-up" data-aos-delay="100">
                            
                            <h2>MIAGE VAINCEUR DE L'HACKATHON DE MOOV </h2>

                            <p>La filière MIAGE d’Abidjan s’illustre une fois de plus en remportant brillamment le Hackathon organisé par Moov Africa. Cette victoire témoigne de l’ingéniosité, de la rigueur et de l’esprit d’innovation de ses étudiants. Face à une compétition relevée, l’équipe MIAGE a su proposer une solution technologique pertinente, répondant efficacement aux problématiques posées.
                            Cette performance confirme la position de la MIAGE comme un vivier de talents prêts à impacter le monde numérique et entrepreneurial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Campus Tour Area -->

        
@endsection
        