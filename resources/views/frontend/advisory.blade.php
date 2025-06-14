@extends('frontend.layouts.app')
@section('title', 'Advisory - ')
@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header advisery" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Advisory</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Advisory</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="">

        <div class="container">
            <div class="row mt-lg-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="text-box">
                        <div class="sec-title mb-3">

                            <h3>Business Management & Consulting</h3>
                        </div>
                        <p>Our consultants take an in-depth dive to understand issues at hand and deliver actionable solutions to real business challenges. Our business and management consultants provide enterprises and organizations with strategic leadership and transformational insights, obtained through years of experience. Together, we work with you to deliver thoughtful, practical guidance and recommendations. Some of the solutions we offer include, narrative preparation, walkthroughs, SWOT analysis, and root cause analysis (RCA) techniques.</p>


                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 pt-lg-0 pt-5">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/img/1.jpg')}}" alt="01 About">
                        </div>

                    </div>
                </div>
            </div>

            <div class="row my-lg-5 my-3 ">

                <div class="col-lg-6 ">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/img/2.jpg')}}" alt="01 About">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="text-box">
                        <div class="sec-title mb-3">

                            <h3>Transaction Advisory (Mergers & Acquisitions) & Valuation Services</h3>
                        </div>
                        <p>We offer due diligence services in a very tailored approach. We understand that every transaction is different and thus we work with both buyers and sellers to ensure we understand their objectives and then create procedures accordingly. We also offer valuation services through our affiliate partners.</p>


                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
