@extends('frontend.layouts.app')
@section('title', 'Technology & Cybersecurity - ')
@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header tech" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Technology & Cybersecurity</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Technology & Cybersecurity</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="">

        <div class="container">
            <div class="row mt-lg-5">
                <div class="col-lg-6 pt-lg-0 pt-5">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/img/3.jpg') }}" alt="01 About">
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="sec-title mb-3">

                            <h3>CRM and ERP Consulting</h3>
                        </div>
                        <p>Have you ever struggled with creating good reports or are you using multiple applications even
                            after spending thousands implemented a great ERP systems. Many times we find that the systems
                            were not implemented correctly leading to increased spending just to extract and create custom
                            reports. If you need a project manager or just some advice on new system implementation, from
                            how to set up chart-of accounts, departments, segments to control implementation and segregation
                            of duties then reach out to us.</p>
                    </div>
                </div>

            </div>

            <div class="row my-lg-5 my-3 ">

                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="sec-title mb-3">

                            <h3 class="mt-0">IT Risk Management and Cybersecurity consulting</h3>
                        </div>
                        <p>We use the COBIT framework and several Cybersecurity frameworks to ensure your compliance with
                            industry standards.</p>


                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
