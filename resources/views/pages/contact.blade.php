@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('styles')
    <link rel="stylesheet" href="css/color-scheme-1.css">
@endsection

@section('main')
    <div class="site-wrapper overflow-hidden">
        <!-- navbar- -->
        <!-- Breadcrumb Section Start -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-section__bg-shape">
                <img src="img/breadcrumb-shape.png" alt="breadcrumb-shape">
            </div>
            <div class="breadcrumb-section__shape-1 floating-Y-animation-reverse">
                <svg width="125" height="249" viewBox="0 0 125 249" fill="none" xmlns="http://www.w3.org/2000/svg"
                    src="./image/breadcrumb/shape-1.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
                    <path opacity="0.1"
                        d="M125 0.00165362C92.0182 -0.168411 60.3199 12.7853 36.8781 36.0132C13.4364 59.2411 0.171526 90.8404 0.00165179 123.86C-0.168223 156.879 12.7708 188.613 35.9723 212.082C59.1738 235.55 90.7372 248.83 123.719 249L125 0.00165362Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="breadcrumb-section__shape-2 circle-animation">
                <svg width="53" height="52" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg"
                    src="./image/breadcrumb/shape-2.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
                    <ellipse opacity="0.1" cx="26.5" cy="26" rx="26.5" ry="26" fill="white">
                    </ellipse>
                </svg>
            </div>
            <div class="breadcrumb-section__shape-3  floating-Y-animation-02">
                <svg width="55" height="109" viewBox="0 0 55 109" fill="none" xmlns="http://www.w3.org/2000/svg"
                    src="./image/breadcrumb/shape-3.svg" class="make-it-inline w-100" alt="breadcrumb-shape">
                    <path opacity="0.1"
                        d="M0.751495 109C15.2384 108.901 29.0924 103.063 39.2657 92.7724C49.439 82.4815 55.0984 68.5799 54.9987 54.1258C54.899 39.6716 49.0486 25.849 38.7343 15.6987C28.4201 5.54839 14.4869 -0.0981367 0 0.00129118L0.751495 109Z"
                        fill="white"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-11 col-xs-11">
                        <div class="breadcrumb-section__content hero-content text-center">
                            <h1 class="heading-light title mb-20 text-dark">Contact Us</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center text-dark">
                                    <li class="breadcrumb-item text-dark">Home</li>
                                    <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End -->
        <!-- Content Section Start -->
        <div class="contactform-section-02">
            <div class="container">
                <div class="row justify-content-center contactform-section-02__map-form">
                    <div class="col-xl-6 col-lg-6 col-md-10 mb-mobile-lg">
                        <!-- Contact Card Start -->
                        <div class="contact-card">
                            <h4>Contact Details</h4>
                            <br />
                            <div class="contact-card__iocn">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-card__body d-flex flex-column py-2 px-3" style="text-align: left">
                                <div class="py-2">
                                    <h5>Office Address</h5>
                                    <p class="py-2" style="text-align: left">Aschauer Strasse 32a, 81549 Munich, Germany</p>
                                </div>
                                <div class="py-2">
                                    <h5>Contact Info</h5>
                                    <p class="py-2" style="text-align: left"> contact@planbig.net </p>
                                </div>
                            </div>
                        </div>
                        <!-- Contact Card End -->
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="contactform-section-01__from">
                            <form class="contact-form-02">
                                <div class="contact-form-02--inpute-group">
                                    <input class="form-control" type="text" placeholder="Enter your name*">
                                </div>
                                <div class="contact-form-02--inpute-group">
                                    <input class="form-control" type="text" placeholder="Enter your email address*">
                                </div>
                                <textarea placeholder="Write your message" cols="30" rows="10"></textarea>
                                <input class="btn btn-secondary btn-secondary-hvr" type="button" value="Send Message">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
