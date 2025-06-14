@extends('frontend.layouts.app')
@section('title', 'Who We Are - ')
@section('content')


    <section class="breadcrumb-header who" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Who We Are</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>About</li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Who We Are</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="about index pt-5 mb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2 pb-5">
                    <div class="text-box mb-0">
                        <div class="sec-title">
                            <h3>Well Organized.
                                Trusted By Thousands.</h3>
                        </div>
                        <p>Ark Advisory is a Certified Public Accountant firm providing Accounting, Assurance, Advisory &
                            Tax Services. Ark Advisory has established itself as a reputable and dependable firm with over
                            50 years of experience, working with companies and individuals globally.</p>

                        <ul class="core-about-us">
                            <li><i class="fas fa-check"></i>
                                <h4>Ontime Everytime At Service</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>Available At Your Location</h4>
                            </li>
                            <li><i class="fas fa-check"></i>
                                <h4>One To One Interaction</h4>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/about/01_about.jpg') }}"
                                alt="01 About">
                        </div>
                        <div class="atterney-grow">
                            <i class="flaticon-lawyer"></i>
                            <div class="atterney-grow-box">
                                <h5>Ark Advisory</h5>
                                <span>Conventional Accounting</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- :: Team -->
		{{-- <section class="team home-2 mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center">

                            <h3>Article</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for ($i=0; $i<=2;$i++)
                    <div class="col-md-6 col-lg-4">
                        <div class="team-item">
                            <div class="item-img">
                                <img class="img-fluid" src="frontend/assets/images/team/01_team.jpg" alt="01 Team">
                                <ul class="hover w-75 mx-auto">
                                    <div class="buttons mt-4 text-center mx-auto">
                                        <a href="{{url('/')}}" class="btn-1 mx-auto">View Article</a>
                                    </div>
                               </ul>
                            </div>
                            <div class="item-box">
                                <h5>Swaly Jitendra Trikamdas</h5>
                                <span>Founder</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </section> --}}
@endsection
