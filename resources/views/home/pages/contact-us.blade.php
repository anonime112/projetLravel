@extends('home.layouts.app')

@section('title', 'Contact')

@section('content')
        <!-- Start Section Banner Area -->
        <div class="section-banner bg-4" style="
                         background-image: url('{{asset('assets1/img/all-img/P.jpg')}}');">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Contact nous</h2>
                        <p data-aos="fade-up" data-aos-delay="200">
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->
        
        <!-- Start Contact  Area-->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-content">
                            

                            <div class="contact-form">
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">nom</label>
                                                <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">  Prenom</label>
                                                <input type="text" name="name" class="form-control" id="name2" required data-error="Please enter your name" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                            
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">numero</label>
                                                <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <label for="name">Commentaires</label>
                                                <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder=""></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">Envoyez</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info">

                         <!-- Start Map Area -->
                        <div id="map" class="map-pd">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
                        </div>
                        <!-- End Map Area -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Contact Area-->

@endsection