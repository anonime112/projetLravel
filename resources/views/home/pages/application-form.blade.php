@extends('home.layouts.app')

@section('title', 'Application-form')

@section('content')

        <!-- Start Section Banner Area -->
        <div class="section-banner bg-15">
            <div class="container">
                <div class="banner-spacing">
                    <div class="section-info">
                        <h2 data-aos="fade-up" data-aos-delay="100">Application Form</h2>
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
                                    <li><a class="active" href="how-to-apply.html">How to Apply</a></li>
                                    <li><a href="graduate.html">Tuition & Fees</a></li>
                                    <li><a href="online-education.html">Financial Aid</a></li>
                                    <li><a href="date-deadlines.html">Date & Deadlines</a></li>
                                    <li><a href="schedule-tour.html">Schedule a Tour</a></li>
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
                                    <form id="contactForm">
                                        <h3>Applicant Details</h3>
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
                                                    <label for="name">Date of Birth</label>
                                                    <input type="text" name="date_birth" class="form-control" id="date_birth" required="" data-error="Please enter your date of birth" placeholder="">
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
        
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Student Type</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Select</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h3>Education Records & Achievements</h3>
    
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="schoolr">School</label>
                                                    <input type="text" name="school" class="form-control" id="schoolr" required="" data-error="Please enter your phone school" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="completion">Year of completion</label>
                                                    <input type="text" name="completion" class="form-control" id="completion" required="" data-error="Please enter your Year of completion" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="qualification">Highest qualification</label>
                                                    <input type="text" name="qualification" class="form-control" id="qualification1" required="" data-error="Please enter your highest qualification" placeholder="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Current status</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Select</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h3>Education Details</h3>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Select area of study</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Select</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Degree level</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected="">Select</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h3>Documentation</h3>

                                            <div class="col-lg-6 col-md-6">
                                                <label for="birthDocumentation" class="form-label">Upload passport or birth documentation</label>
                                                <input class="form-control" type="file" id="birthDocumentation" multiple>
                                            </div>

                                            <h3>Declaration</h3>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="qualification">Application full name</label>
                                                    <input type="text" name="qualification" class="form-control" id="qualification" required="" data-error="Please enter your highest qualification" placeholder="">
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
                                                <button type="submit" class="default-btn">Submit Application</button>
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