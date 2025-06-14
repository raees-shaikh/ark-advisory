@extends('frontend.layouts.app')
@section('title', 'Diversity, Equity & Inclusion - ')
@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header equity" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Diversity, Equity & Inclusion</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>About</li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Diversity, Equity & Inclusion</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="">

        <div class="container">
            <div class="row mt-5 mb-5">

                <div class="col-lg-6">
                    <div class="img-box">
                        <div class="about-img">
                            <img class="img-fluid" src="{{asset('frontend/assets/images/img/equity.webp')}}" alt="01 About">
                        </div>

                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="text-box">
                        <div class="sec-title mb-3">

                            <h3>Business Management & Consulting</h3>
                        </div>
                        <p>We recruit and support workers of various backgrounds and encompass policies and initiatives designed to help all employees feel welcome and contribute freely to the company.

                            We believe in Business Karma (Generosity, Fairness, Positivity & Mindfullness) and have created an organization that helps promote education and providing opportunities to those who are less fortunate from around the world.</p>

                            <p>Our employees and Company support various causes around the world such as Clean Water Projects, Disaster Relief, Environmental, Economic Development, Education, Hunger, Social Justice, Women & Girls Programs, Wildlife Conservation and several other programs that our employee are passionate about.</p>

                    </div>
                </div>
            </div>


        </div>
    </section>

@endsection
