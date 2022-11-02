@extends('layouts.app', ['header_mode' => 'bg-transparent'])

@section('main')
    <!-- Hero Section Start -->
    <div class="hero-section-09">
        <div class="hero-section-09__shape shape-x-1">
            <img src="/img/home-9/section-shape-1.svg" alt="shape" class="w-100">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-10 offset-xl-1 order-lg-2" data-aos="fade-left" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="hero-section-09__image-group mb-mobile-lg">
                        <img src="/img/plan/anh1.png" style="max-width: 700px;" alt="hero-image" class="w-100">
                        <div class="hero-section-09__image-group--shape-1 shape-x-2">
                            <img src="/img/home-9/hero-shape-1.svg" alt="shape" class="w-100">
                        </div>
                        <div class="hero-section-09__image-group--shape-2 shape-x-2">
                            <img src="/img/home-9/hero-shape-2.svg" alt="shape" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8 col-11 order-lg-1" data-aos="fade-up" data-aos-delay="1300"
                    data-aos-duration="1000">
                    <div class="hero-section-09__content hero-content">
                        <h1 class="heading-dark title">A powerful solution made for your business</h1>
                        <p class="text-dark text">The amazing platform you will ever need to help run your business:
                            integrated apps, kept simple, and loved by millions of happy users.</p>
                        <a href="{{ route('getSignin') }}" class="mt-3 btn hero-btn btn-primary btn-primary-hvr">Get
                            Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-section-09__bg-shpae">
            <img src="/img/home-9/hero-bg.png" alt="bg">
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Brand Section End -->
    <!-- About Section Start -->
    <div class="about-section-06">
        <div class="about-section-06__shape" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-9/section-shape-2.svg" alt="shape" class="w-100">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-xs-10 col-sm-11" data-aos="fade-right" data-aos-delay="500"
                    data-aos-duration="1000">
                    <div class="block-title about-section-06__content mb-mobile-lg">
                        <h2 class="title">Planbig is a platform that gives you many solutions quickly</h2>
                        <p class="text-dark">Break down complex projects with comprehensive software that enables your teams
                            to collaborate, plan, analyze and manage everyday tasks.</p>
                        <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignin') }}">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1 col-lg-6">
                    <div class="row justify-content-center widgets-row about-section-06__card-group">
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="200"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-1.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>To-do list
                                    </h3>
                                    <p class='widget-text'>Create to-do lists in the form of a checklist in your tasks with
                                        just a few clicks so nothing falls through cracks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="400"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-2.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Issue tracking</h3>
                                    <p class='widget-text'>Track issue progress, set issue severity, assign issue status and
                                        link it to tasks or projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="600"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-3.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Meeting management</h3>
                                    <p class='widget-text'>You can set meeting agenda, record discussion points, set
                                        follow-up actions, and create recurring meetings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-sm-6 col-xs-6 col-11" data-aos="fade-up" data-aos-delay="800"
                            data-aos-duration="1000">
                            <div class="widget widget-card">
                                <div class="widget-icon">
                                    <img src=/img/home-7/c-icon-4.svg alt="icon">
                                </div>
                                <div class="widget-text">
                                    <h3 class='widget-title'>Risk management</h3>
                                    <p class='widget-text'>Manage, monitor and evaluate the risk impact with the help of
                                        risk matrix, mitigation plans & risk updates.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
    <!-- Content Section Start -->
    <div class="content-section-19">
        <div class="content-section-19__dots" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-9/dots.svg" class="w-100" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-xs-11">
                    <div class="content-section-19__image-group" data-aos="fade-right" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/plan/anh2.png" alt="content-img" class="mw-100">
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-2 col-xl-6 col-lg-6 col-md-8 col-sm-10 col-xs-11" data-aos="fade-up"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="block-title content-section-19__content">
                        <h2 class="title">It doesn't stop at project management</h2>
                        <p class="text-dark">We’re constantly refining the Planbig application, by adding new features to
                            help your business grow.</p>
                        <ul class="content-section-19__content--list">
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Boost your sales

                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Integrate your
                                services
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check">Streamline your
                                operations
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Build stunning
                                task planner
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Manage your
                                finances
                            </li>
                            <li>
                                <img src="/img/home-9/check.svg" class="make-it-inline" alt="check"> Amplify your
                                marketing
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->

    <!-- Fact Section End -->
    <!-- Content Section Start -->
    <div class="content-section-20">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-6 col-md-8 col-sm-10 col-xs-11 order-lg-2">
                    <div class="content-section-20__image-group" data-aos="fade-left" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/plan/anh3.png" alt="content-img" class="mw-100">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-xs-11 order-lg-1" data-aos="fade-up"
                    data-aos-delay="500" data-aos-duration="1000">
                    <div class="block-title content-section-20__content">
                        <h2 class="title">Planbig makes your business stronger</h2>
                        <p class="text-dark">Planbig is perfectly integrated with each other, allowing you to fully
                            automate your business processes and reap the savings and benefits.</p>
                        <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignin') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->
    <!-- Content Section Start -->
    <div class="content-section-21">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 col-xs-11 col-sm-11">
                    <div class="content-section-21__image-group mb-mobile-lg" data-aos="fade-right" data-aos-delay="500"
                        data-aos-duration="1000">
                        <img src="/img/plan/anh4.png" alt="content-image" class="mw-100">
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-9 col-xs-11 col-sm-11">
                    <div class="content-section-21__content block-title">
                        <h2 class="title">A powerful project management solution made for growing teams</h2>
                    </div>
                    <div class="content-section-21__tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">
                                    Progress Management
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Productive Management</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="tab-pane__content">
                                    <p class="text-dark text">Create user-friendly and visually precise charts by adding
                                        your tasks, and scheduling due dates. Set task dependencies with the drag and drop
                                        feature, and speed up your decision-making 10 folds.</p>
                                    <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignin') }}">Get
                                        Started</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="tab-pane__content">
                                    <p class="text-dark text">schedules meetings with all your team members and then allows
                                        minutes of the meeting to be evaluated and reviewed before publishing. No more
                                        ambiguity in decisions and actions.</p>
                                    <a class="btn btn-primary btn-primary-hvr" href="{{ route('getSignin') }}">Get
                                        Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Section End -->

    <!-- Testimonial Section Start -->
    <div class="testimonial-section-08">
        <div class="testimonial-section-08__dots" data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000">
            <img src="/img/home-9/dots.svg" class="w-100" alt="shape">
        </div>
        <div class="container">
            <div class="section-title testimonial-section-08__title text-center">
                <h2 class="title">What our happy clients say</h2>
            </div>
            <div class="row testimonial-section-08__slider three-row-mobile-slider mobile-slider">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="javascript:void(0)" class="crad card-testimonial-06">
                        <div class="card-testimonial-06__img">
                            <img src="/img/testimonial-3.png" alt="testimonial">
                        </div>
                        <div class="card-testimonial-06__content">
                            <div class="client-info">
                                <div class="client-info--deatail">
                                    <h6>Bruno Bello</h6>
                                    <small class="text-dark">General Manager</small>
                                </div>
                                <div class="client-info--rataing">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="heading-dark">" I am very satisfied about using Planbig, because I can work very well
                                with my team, and very importantly, I can manage all the situations that we have in our
                                company, and we can easily solve them!"
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="javascript:void(0)" class="crad card-testimonial-06">
                        <div class="card-testimonial-06__img">
                            <img src="/img/home-1/team-2.png" alt="testimonial">
                        </div>
                        <div class="card-testimonial-06__content">
                            <div class="client-info">
                                <div class="client-info--deatail">
                                    <h6>Tommy Shaw</h6>
                                    <small class="text-dark">Head of Talent Acquisition</small>
                                </div>
                                <div class="client-info--rataing">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="heading-dark">“Planbig is designed as a collaboration tool for businesses that is a full project management solution."
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <a href="javascript:void(0)" class="crad card-testimonial-06">
                        <div class="card-testimonial-06__img">
                            <img src="/img/home-1/team-4.png" alt="testimonial">
                        </div>
                        <div class="card-testimonial-06__content">
                            <div class="client-info">
                                <div class="client-info--deatail">
                                    <h6>Michelle Nickolaisen</h6>
                                    <small class="text-dark">Content Marketer</small>
                                </div>
                                <div class="client-info--rataing">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="heading-dark">"The best thing about Planbig is it is all-in-one. You can take care of tasks, communications, reporting, time tracking, meeting management, and a lot more from one app."
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <div class="cta-section-09" style="background: #2B59FF;">
        <div class="cta-section-09__bg-shape">
          <img src="/img/home-9/cta-bg.png" alt="background">
        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
              <div class="block-title text-center cta-section-09__content">
                <h2 class="title heading-light">Seamless integrations with our software</h2>
                <p class="heading-light">Stop switching between Roadmaps, Tasks, Docs, Chats, & other tools.
                    Planbig is one app to unite teams, goals, and actions in one place. Download Planbig now!
                </p>
              </div>
              <div class="cta-section-09__button-group">
                <a href="#">
                  <img src="/img/home-9/appstore.png" alt="appstore">
                </a>
                <a href="#">
                  <img src="/img/home-9/playstore.png" alt="playstore">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Cta Section End -->
@endsection
