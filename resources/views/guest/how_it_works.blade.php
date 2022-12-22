@extends('layouts.guest.master')

@section('content')
<section class="" style="background: url('{{asset('storage/assets3/img/header-bg-5.jpg')}}')no-repeat center center / cover">
    <div class="section-lg bg-gradient-primary text-white section-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-center">
                        <h1>How It Works</h1>
                        <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                            <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                <li class="breadcrumb-item"><a href="{{URL::to('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">How It Works</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--work process section start-->
<section class="section section-lg  ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-heading text-center mb-5">
                    <h2>How Does it Work?</h2>
                    {{-- <h3 class="h5">Create Design</h3> --}}
                    <p>We are under promise to help one another to get economic freedom.</p>
                    <img  src="{{asset('storage/img/how-it-works.png')}}" alt="how-it-works">
                    <p class="lead text-justify mt-2">Ours is an online business platform based on direct product selling system creating an energetic team. Our main aim is to provide the unemployment youths with a job opportunity so that they can earn a handsome income to be free from the curse of unemployment. Besides, the people who are engaged in any job but want to add some extra income can easily join us as a part-time worker and earn enough to add their income to run their living cost smoothly.</p>
                </div>
            </div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-4 mb-lg-0 ">
                <div class="feature-widget text-center p-4">
                    <div class="p-3 p-md-4 rounded bg-primary text-white icon icon-shape icon-lg mb-4">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="widget-text">
                        <h3 class="h5">Generate Ideas</h3>
                        <p class="mb-0 text-justify">Think positive, work positive and introduce yourself to the whole world contributing much to the welfare of the downtrodden people to achieve the blessing of the Almighty.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 mb-md-4 mb-lg-0">
                <div class="feature-widget text-center p-4">
                    <div class="p-3 p-md-4 rounded bg-secondary text-white icon icon-shape icon-lg mb-4">
                        <i class="fab fa-confluence"></i>
                    </div>
                    <div class="widget-text">
                        <h3 class="h5">Create Design</h3>
                        <p class="mb-0 text-justify">The people of all walks of life such as students, unemployed educated youth, housewife as well as other service holder can select our business platform to get their economic freedom to lead their life happily. So, let’s start our own business and contribute much to the development of our country.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--work process section end-->

@endsection