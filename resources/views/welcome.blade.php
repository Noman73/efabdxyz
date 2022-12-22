@extends('layouts.guest.master')
@section('content')
    <div class="main">

        <!--hero section start-->
        <section class="section pt-9 pb-9 section-header text-white gradient-overly-right-color" style="background: url({{asset('storage/assets3/img/hero-bg10.jpg')}})no-repeat center center / cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-slider-content">
                            <span class="text-uppercase">Business Solutions</span>
                            <h1 class="display-2">Your Most Trusted Business Partner</h1>
                            <p class="lead">Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions. </p>
                            <a href="{{URL::to('/registration')}}" class="btn btn-secondary mt-4">Get Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="section section-sm pb-0 mt-n8 z-5 position-relative">
            <div class="container">
                <div class="row">
                    @php
                    $packages=App\Models\Package::all();
                    @endphp
                    @foreach($packages as $package)
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0 mt-3">
                        <div class="single-promo-block promo-hover-bg-1 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary"><i class="fab fa-confluence"></i><span class="float-right h3">৳. {{$package->ammount}}</span></div>
                            <div class="promo-block-content">
                                <h5>{{$package->title}}</h5>
                                <p class="mb-0">{{$package->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--about section start-->
        <section class="section section-lg  ">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="card bg-primary position-relative  shadow-lg fancy-radius p-3">
                            <div class="dot-shape-top position-absolute">
                                <img src="{{asset('storage/assets3/img/color-shape.svg')}}" alt="dot" class="img-fluid">
                            </div>
                            <img class="fancy-radius img-fluid" src="{{asset('storage/assets3/img/about-us-2.jpg')}}" alt="modern desk">
                            <div class="dot-shape position-absolute bottom-0">
                                <img src="{{asset('storage/assets3/img/dot-shape.png')}}" alt="dot">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="video-promo-content">
                            <h2>Total Profit for Your Business Here</h2>
                            {{-- <p class="lead">Interactively develop timely niche markets before extensive imperatives. Professionally
                                repurpose strategies.</p> --}}
                            <ul class="list-unstyled tech-feature-list">
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 100</strong> Matching Commission</li>
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 100</strong> Direct Commission</li>
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 20/m</strong> for each sale to  <strong>Sales Ambassador </strong> </li>
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 12/m</strong> for each sale to <strong>Marketing Director </strong> </li>
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 8/m</strong> for each sale to  <strong>Diamond Member</strong> </li>
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 6/m</strong> for each sale to  <strong>Crown Member </strong> </li>
                                <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>৳. 4/m</strong> for each sale to  <strong>Share Holders </strong> </li>
                            </ul>
                            <a href="{{URL::to('/registration')}}" class="btn btn-primary  mt-3">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->
        <!--team section start-->
        {{-- <section class="section section-lg">
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
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                        <div class="profile-card">
                            <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                                <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                    <img src="{{asset('storage/assets3/img/team/team-6.jpg')}}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                                </div>
                                <div class="card-body text-center px-5 pb-5 pt-0">
                                    <h3 class="h5 mb-2">John Q. Public</h3>
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
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
                        <div class="profile-card">
                            <div class="card bg-soft  shadow-sm animate-hover border-variant-soft">
                                <div class="profile-image-small  bg-white  shadow-inset shadow border border-light rounded-circle p-1 mt-5 mb-4">
                                    <img src="{{asset('storage/assets3/img/team/team-1.jpg')}}" class="card-img-top rounded-circle" alt="Christopher Avatar">
                                </div>
                                <div class="card-body text-center px-5 pb-5 pt-0">
                                    <h3 class="h5 mb-2">Madurai Mani Iyer</h3>
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
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-lg-0 mb-4">
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
                    </div>
                </div>
            </div>
        </section> --}}
        <!--team section end-->
        <!--cta section start-->
        <section class="section section-sm py-5 ">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-md-7">
                        <div class="subscribe-content">
                            <h3>Consulting for Your Business</h3>
                            <p class="mb-lg-0 mb-md-0">Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="action-btn text-lg-right text-sm-left">
                            <a href="{{URL::to('/about')}}" class="btn btn-primary">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta section end-->
        {{-- <section class="py-0 text-white" style="background: url('assets/img/slider-img-5.jpg')no-repeat center center fixed">
            <div class="section section-sm bg-gradient-primary">
                <div class="container">
                    <div class="justify-content-center">
                        <div class="">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-user"></i></div>
                                @php
                                $data=App\Models\User::count();
                                @endphp
                                <span class="counter d-block display-3 my-2" data-count="{{$data}}">0</span>
                                <h3 class="h6">Total Customer</h3>
                            </div>
                        </div> --}}
                        {{-- <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-eye"></i></div>
                                <span class="counter d-block display-3 my-2" data-count="{{$data}}">0</span>
                                <h3 class="h6">Total Sale</h3>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-trophy"></i></div>
                                <span class="counter d-block display-3 my-2" data-count="{{$data}}">0</span>
                                <h3 class="h6">Sales Associate</h3>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-medal"></i></div>
                                <span class="counter d-block display-3 my-2" data-count="0">0</span>
                                <h3 class="h6">Marketing Director</h3>
                            </div>
                        </div> --}}
                    {{-- </div>
                </div>
            </div>
        </section> --}}
    </div>
@endsection