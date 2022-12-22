@extends('layouts.guest.master')

@section('content')
<section class="" style="background: url('{{asset('storage/assets3/img/header-bg-5.jpg')}}')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>About Us</h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!--about section start-->
 <section class="section section-lg bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="section-heading text-center">
                    <h2>About Us</h2>
                    <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                        disseminate user-centric outsourcing revolutionary</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="feature-tabs-wrap">
                    <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center px-0 py-2" href="#feature-tab-1" data-toggle="tab">
                                <h6 class="mb-0">About Us</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center px-0 py-2 active" href="#feature-tab-3" data-toggle="tab">
                                <h6 class="mb-0">Our Features</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center px-0 py-2" href="#feature-tab-2" data-toggle="tab">
                                <h6 class="mb-0">Our Services</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content feature-tab-content">
                        <div class="tab-pane" id="feature-tab-1">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-12 col-md-5 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                                    <div class="card bg-primary position-relative z-2 shadow-lg fancy-radius p-3">
                                        <div class="dot-shape-top position-absolute">
                                            <img src="{{asset('storage/assets3/img/color-shape.svg')}}" alt="dot" class="img-fluid">
                                        </div>
                                        <img class="fancy-radius img-fluid'" src="{{asset('storage/assets3/img/about-us-2.jpg')}}" alt="modern desk">
                                        <div class="dot-shape position-absolute bottom-0">
                                            <img src="{{asset('storage/assets3/img/dot-shape.png')}}" alt="dot">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-lg-5">
                                    <div class="video-promo-content">
                                        <h2>Total Solutions for Your Business Here</h2>
                                        <p class="lead">Interactively develop timely niche markets before extensive imperatives. Professionally
                                            repurpose strategies.</p>
                                        <ul class="list-unstyled tech-feature-list">
                                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Creative</strong> Websites Design</li>
                                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Accounting</strong> Procedures Guidebook</li>
                                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Cost</strong> Accounting Fundamentals</li>
                                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>SEO</strong> Optimization Services</li>
                                        </ul>
                                        <div class="action-btns mt-4">
                                            <a href="#" class="btn btn-primary  mr-2">View Services</a>
                                            <a href="#" class="btn btn-outline-primary ">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="feature-tab-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <!-- Icon box -->
                                    <div class="icon-box text-center p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="card-icon mb-4">
                                            <img src="{{asset('storage/assets3/img/icon/icon-2.svg')}}" alt="icon" width="60" class="img-fluid">
                                        </div>
                                        <h2 class="h5">Financial Planning</h2>
                                        <p class="mb-0">You can never go wrong with our own top-notch dedicated servers loaded</p>
                                    </div>
                                    <!-- End of Icon box -->
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <!-- Icon box -->
                                    <div class="icon-box text-center p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="card-icon mb-4">
                                            <img src="{{asset('storage/assets3/img/icon/icon-1.svg')}}" alt="icon" width="60" class="img-fluid">
                                        </div>
                                        <h2 class="h5">Business Growth</h2>
                                        <p class="mb-0">We can guarantee an excellent experience and loading time for your successful</p>
                                    </div>
                                    <!-- End of Icon box -->
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <!-- Icon box -->
                                    <div class="icon-box text-center p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="card-icon mb-4">
                                            <img src="{{asset('storage/assets3/img/icon/icon-3.svg')}}" alt="icon" width="60" class="img-fluid">
                                        </div>
                                        <h2 class="h5">Saving Strategy</h2>
                                        <p class="mb-0">With full root access you will be able to take full control of your server very easy</p>
                                    </div>
                                    <!-- End of Icon box -->
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                    <!-- Icon box -->
                                    <div class="icon-box text-center p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="card-icon mb-4">
                                            <img src="{{asset('storage/assets3/img/icon/icon-4.svg')}}" alt="icon" width="60" class="img-fluid">
                                        </div>
                                        <h2 class="h5">Marketing Solutions</h2>
                                        <p class="mb-0">Our VPS hosting plan is fully packed with dedicated IPv6 Internet protocol IP</p>
                                    </div>
                                    <!-- End of Icon box -->
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 mb-md-0">
                                    <!-- Icon box -->
                                    <div class="icon-box text-center p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="card-icon mb-4">
                                            <img src="{{asset('storage/assets3/img/icon/icon-6.svg')}}" alt="icon" width="60" class="img-fluid">
                                        </div>
                                        <h2 class="h5">Total SEO Solutions</h2>
                                        <p class="mb-0">If you’re not 100% satisfied with Hostlar, we’ll refund your payment no risk</p>
                                    </div>
                                    <!-- End of Icon box -->
                                </div>
                                <div class="col-md-6 col-lg-4 mb-lg-0 mb-md-0">
                                    <!-- Icon box -->
                                    <div class="icon-box text-center p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="card-icon mb-4">
                                            <img src="{{asset('storage/assets3/img/icon/icon-8.svg')}}" alt="icon" width="60" class="img-fluid">
                                        </div>
                                        <h2 class="h5">Business Security</h2>
                                        <p class="mb-0">One of many premium features is a dedicated IP cheapest VPS hosting plan</p>
                                    </div>
                                    <!-- End of Icon box -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="feature-tab-2">
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="icon icon-lg mr-4 text-secondary">
                                            <i class="ti-announcement"></i>
                                        </div>
                                        <div class="services-content-wrap">
                                            <h3 class="h6">Marketing Services</h3>
                                            <p>Progressively empower business "outside the box" thinking with resource-leveling
                                                partnerships.</p>
                                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="icon icon-lg mr-4 text-secondary">
                                            <i class="ti-light-bulb"></i>
                                        </div>
                                        <div class="services-content-wrap">
                                            <h3 class="h6">Web App Development</h3>
                                            <p>Quickly pontificate holistic e-commerce rather than goal web-readiness enhance inexpensive.</p>
                                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="icon icon-lg mr-4 text-secondary">
                                            <i class="ti-headphone-alt"></i>
                                        </div>
                                        <div class="services-content-wrap">
                                            <h3 class="h6">24/7 Call Center Service</h3>
                                            <p>Authoritatively reinvent multimedia based niches with global portals orchestrate client-centered .</p>
                                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                        <div class="icon icon-lg mr-4 text-secondary">
                                            <i class="ti-bell"></i>
                                        </div>
                                        <div class="services-content-wrap">
                                            <h3 class="h6">Social Media Marketing</h3>
                                            <p>Assertively leverage other's standardized e-services with fully tested e-commerce synergistic. </p>
                                            <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
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
</section>
<!--about section end-->

<!--about section end-->
        <!--team section start-->
        <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Team</h2>
                            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements
                                develop end-to-end customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-md-6 ">
                        <div class="profile-card">
                            <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                                <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                    <img src="{{asset('storage/assets3/img/team/team-1.jpg')}}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                                </div>
                                <div class="card-body text-center px-5 pb-5 pt-0">
                                    <h3 class="h5 mb-2">Marufa Khatun</h3>
                                    <span class="h6 font-weight-normal text-gray mb-3">Chairman</span>
                                    {{-- <ul class="list-unstyled d-flex my-3 justify-content-center">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                                <span class="fab fa-youtube"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <div class="profile-card">
                            <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                                <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                    <img src="{{asset('storage/assets3/img/team/team-6.jpg')}}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                                </div>
                                <div class="card-body text-center px-5 pb-5 pt-0">
                                    <h3 class="h5 mb-2">MD. Kabir Hossain</h3>
                                    <span class="h6 font-weight-normal text-gray mb-1">Founder & MD</span>
                                    {{-- <ul class="list-unstyled d-flex my-3 justify-content-center">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                                <span class="fab fa-youtube"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul> 
                                    <p class="card-text mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                        <div class="profile-card">
                            <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                                <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                    <img src="{{asset('storage/assets3/img/team/team-4.jpg')}}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                                </div>
                                <div class="card-body text-center px-5 pb-5 pt-0">
                                    <h3 class="h5 mb-2">Maria J. Go</h3>
                                    <span class="h6 font-weight-normal text-gray mb-3">Developer</span>
                                    <ul class="list-unstyled d-flex my-3 justify-content-center">
                                        <li>
                                            <a href="#" target="_blank" aria-label="facebook social link" class="icon icon-xs icon-facebook mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                                <span class="fab fa-facebook-f"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="twitter social link" class="icon icon-xs icon-twitter mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                                <span class="fab fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="slack social link" class="icon icon-xs icon-slack mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                                <span class="fab fa-youtube"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" aria-label="dribbble social link" class="icon icon-xs icon-dribbble mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                                <span class="fab fa-dribbble"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
@endsection