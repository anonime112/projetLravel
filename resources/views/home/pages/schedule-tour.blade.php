@extends('home.layouts.app')

@section('title', 'Schedule a Tour')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-19">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Schedule a Tour</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Clgun University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section Banner Area -->

        <!-- Start Academics Section Area -->
        <div class="academics-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="academics-left">
                            <div class="ac-category">
                                <ul>
                                    <li><a href="admission.html">Overview</a></li>
                                    <li><a href="how-to-apply.html">How to Apply</a></li>
                                    <li><a href="tuition-fees.html">Tuition & Fees</a></li>
                                    <li><a href="financial-aid.html">Financial Aid</a></li>
                                    <li><a href="date-deadlines.html">Date & Deadlines</a></li>
                                    <li><a class="active" href="schedule-tour.html">Schedule a Tour</a></li>
                                </ul>
                            </div>
                            <div class="ac-contact">
                                <span>Quick Links</span>
                                <a href="contact-us.html">Contact Us</a>
                                <a class="darkbtn" href="#">Transfer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="ac-overview">
                            <div class="pera-dec">
                                <div class="applicant-from">
                                    <form id="scheduletourfrom">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">First Name</label>
                                                    <input type="text" name="name" class="form-control" id="name" required="" data-error="Please enter your name" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Last Name</label>
                                                    <input type="text" name="name" class="form-control" id="name2" required="" data-error="Please enter your name" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                                
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Email Address</label>
                                                    <input type="email" name="email" class="form-control" id="email" required="" data-error="Please enter your email" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Zip Code</label>
                                                    <input type="text" name="zip_code" class="form-control" id="zip_code" required="" data-error="Please enter your zip code" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Phone Number</label>
                                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required="" data-error="Please enter your phone number" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="name">When would you like to visit?</label>
                                                    <input type="text" name="place" class="form-control" id="place" required="" data-error="Please enter your place" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
        
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="message">Additional Information</label>
                                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required="" data-error="Please enter your message" placeholder=""></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <p class="form-cookies-consent">
                                                <input type="checkbox" value="yes" name="wp-cookies-consent" id="wp-cookies-consent">
                                                <label for="wp-cookies-consent">By submitting this form, you agree to the Clgun University privacy notice.</label>
                                            </p>
        
                                            <div class="col-lg-12 col-md-12">
                                                <button type="submit" class="default-btn">Submit Now</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Academics Section Area -->

@endsection