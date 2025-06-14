@extends('frontend.layouts.app')
@section('title', '')
@section('content')
    <!-- :: Header -->
    <section class="header" id="page">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 table-query">
                        <div class="banner text-center">
                            {{-- <img class="img-fluid logo-handline" src="{{asset('frontend/assets/images/logo/03_logo.png')}}" alt="Logo Header"> --}}
                            <div class="top-handline">Accounting Solutions With Trust And Accuracy</div>
                            <h1 class="handline">Accounting Done Right Fast</h1>
                            <div>
                                <a href="{{ url('/who-we-are') }}" class=" btn-1">Let's Start</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{--
<!-- :: Features -->
<section class="features">
    <div class="features-box owl-carousel owl-theme">
        <div class="item-features">
            <i class="flaticon-jury"></i>
            <div class="text-item">
                <span>Meet With</span>
                <h4>Our Experts</h4>
            </div>
        </div>
        <div class="item-features">
            <i class="flaticon-dollar"></i>
            <div class="text-item">
                <span>Pay Invoice</span>
                <h4>Online/Bank</h4>
            </div>
        </div>
        <div class="item-features">
            <i class="flaticon-right-quote"></i>
            <div class="text-item">
                <span>Get Free Case</span>
                <h4>Quote Evulation</h4>
            </div>
        </div>
        <div class="item-features">
            <i class="flaticon-calendar"></i>
            <div class="text-item">
                <span>Book An</span>
                <h4>Appointment</h4>
            </div>
        </div>
        <div class="item-features">
            <i class="flaticon-discount"></i>
            <div class="text-item">
                <span>Pricing &amp; Plans</span>
                <h4>Our Pricing</h4>
            </div>
        </div>
    </div>
</section> --}}
    <!-- :: About Us -->
    <section class="about pt-5" id="about">
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row pb-xl-0 pb-lg-2">
                <div class="col-lg-6 order-lg-1 order-2 pt-lg-0 pt-5">
                    <div class="text-box">
                        <div class="sec-title">
                            <h2>About Us</h2>
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
                        <div class="buttons mt-4">
                            <a href="{{ url('/who-we-are') }}" class="btn-1">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 ">
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

    <!-- :: Services -->
    <section class="services py-5">
        <div class="container">
            <div class="row services">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h2>What We Do</h2>
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
            <div class="row service-index">
                <div class="col-md-6 col-lg-4">
                    <div class="services-item ">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/accounting.png') }}" alt="">
                            {{-- <i class="flaticon-young-man-and-old-woman"></i> --}}
                            {{-- <i class="fas fa-check"></i> --}}
                        </div>
                        <h4>Accounting & Assurance</h4>
                        <p>Corporation Internal And Statutory Audit Partnership, LLP, LLC Internal And Statutory Audit Bank
                            Audit, Charitable Trust And Schools Internal Audit</p>
                        <a href="{{ url('/accounting-assurance') }}" class="text-capitalize"> Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/advisory.png') }}" alt="">
                            {{-- <i class="fas fa-check"></i> --}}
                        </div>
                        <h4>Advisory</h4>
                        <p>Risk Advisory Financial Consultancy, CMA Reports Private Equity Fund Consultancy Legal &
                            Arbitration Consultancy</p>
                        <a href="{{ url('/advisory') }}" class="text-capitalize">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/tax.png') }}" alt="">
                            {{-- <i class="fas fa-check"></i> --}}
                        </div>
                        <h4>Tax</h4>
                        <p>Returns – Individual, LLP, LLC, Corporation, Partnership, Audit – Partnership, Corporation, LLP,
                            Tax Advisory</p>
                        <a href="{{ url('/tax') }}" class="text-capitalize">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="services-item">
                        <div class="icon">
                            <img src="{{ asset('frontend/assets/images/icons/technology.png') }}" alt="">
                            {{-- <i class="fas fa-check"></i> --}}
                        </div>
                        <h4>Technology & Cybersecurity</h4>
                        <p>We use the COBIT framework and several Cybersecurity frameworks to ensure your compliance with
                            industry standards.</p>
                        <a href="{{ url('/technology-cybersecurity') }}" class="text-capitalize">Read More</a>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-cap"></i>
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Insurance</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a href="#">More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Financial Law</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text typesetting.</p>
                    <a href="#">More</a>
                </div>
            </div> --}}
            </div>
        </div>
    </section>

    {{-- <!-- :: Portfolio -->
    <section class="portfolio py-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h2>Our Standard</h2>
                        <h3>Our Authoritative Standards</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item custom-height">

                        <div class="">
                            <img src="{{ asset('frontend/assets/images/icons/standard.png') }}" alt="">
                            <h6 class="my-2 d-inline font-bold mx-2">Accounting Standards</h6>
                        </div>
                        <div class="item-box px-0 pt-3">

                            <p>Did you know that Accounting Standards are standardized throughout the United States under
                                U.S. GAAP and around the world under International Accounting Standards? Thus whether you
                                are with a big firm or a small firm, we all abide by the same rules and regulations and the
                                same quality standards.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item custom-height">
                        <div class="">
                            <img src="{{ asset('frontend/assets/images/icons/growth.png') }}" alt="">
                            <h6 class="my-2 d-inline font-bold mx-2">Growth Of Your Company</h6>
                        </div>
                        <div class="item-box px-0 pt-3">

                            <p>Are you looking for a firm that understands your needs and truly support the growth or
                                development of your company? We know that many small and medium sized businesses don’t get
                                the attention they deserve, they have small or fixed budgets and we understand that. That’s
                                why we have created solutions where we charge fixed fees, do not extra bill and offer
                                reasonable rates for our services</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item custom-height">

                        <div class="">
                            <img src="{{ asset('frontend/assets/images/icons/quality.png') }}" alt="">
                            <h6 class="my-2 d-inline font-bold mx-2">Growth Of Your Company</h6>
                        </div>
                        <div class="item-box px-0 pt-3">

                            <p>No compromise on quality – all our business professionals are highly qualified with
                                designations that include: CPA, CA, CISA, CGMA, MBA, MSA and are well experienced with most
                                of them coming from Big 4 or Top 30 firms worldwide. You are assured of quality work and top
                                service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- :: Portfolio --> --}}

     <!-- :: Services -->
		{{-- <section class="services home-2 py-md-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center mb-4 mb-md-5">
                            <h2>Our Standard</h2>
                            <h3>Our Authoritative Standards</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="services-item h-auto">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/standard.png') }}" alt="">
                                <i class="fas fa-check"></i>
                            </div>
                            <h4>Accounting Standards</h4>
                            <p>Did you know that Accounting Standards are standardized throughout the United States under
                                U.S. GAAP and around the world under International Accounting Standards? Thus whether you
                                are with a big firm or a small firm, we all abide by the same rules and regulations and the
                                same quality standards.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-item h-auto">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/growth.png') }}" alt="">
                                <i class="fas fa-check"></i>
                            </div>
                            <h4>Growth Of Your Company</h4>
                            <p>Are you looking for a firm that understands your needs and truly support the growth or
                                development of your company? We know that many small and medium sized businesses don’t get
                                the attention they deserve, they have small or fixed budgets and we understand that. That’s
                                why we have created solutions where we charge fixed fees, do not extra bill and offer
                                reasonable rates for our services.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="services-item mb-0 h-auto">
                            <div class="icon">
                                <img src="{{ asset('frontend/assets/images/icons/quality.png') }}" alt="">
                                <i class="fas fa-check"></i>
                            </div>
                            <h4>No Compromise On Quality</h4>
                            <p>No compromise on quality – all our business professionals are highly qualified with designations that include: CPA, CA, CISA, CGMA, MBA, MSA and are well experienced with most of them coming from Big 4 or Top 30 firms worldwide. You are assured of quality work and top service.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
        <section class="services home-2 py-md-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="sec-title text-center mb-4">
                            <h2>Our Standard</h2>
                            <h3>Our Authoritative Standards</h3>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class='newsCard news-Slide-up'>
                            <img src="{{asset('frontend/assets/images/img/accounting.webp')}}" class="w-100" />
                            <div class='newsCaption'>
                              <h2 class='newsCaption-title'>Accounting Standards</h2>
                              <p class='newsCaption-content'>
                                Did you know that Accounting Standards are standardized throughout the United States under
                                U.S. GAAP and around the world under International Accounting Standards? Thus whether you
                                are with a big firm or a small firm, we all abide by the same rules and regulations and the
                                same quality standards.
                              </p>

                            </div>
                          </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class='newsCard news-Slide-up'>
                            <img src="{{asset('frontend/assets/images/img/growth.jpg')}}" class="w-100" />
                            <div class='newsCaption'>
                              <h2 class='newsCaption-title'>Growth Of Your Company</h2>
                              <p class='newsCaption-content'>
                                Are you looking for a firm that understands your needs and truly support the growth or
                                development of your company? We know that many small and medium sized businesses don’t get
                                the attention they deserve, they have small or fixed budgets and we understand that. That’s
                                why we have created solutions where we charge fixed fees, do not extra bill and offer
                                reasonable rates for our services.
                              </p>

                            </div>
                          </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class='newsCard news-Slide-up'>
                            <img src="{{asset('frontend/assets/images/img/quality.jpg')}}" class="w-100" />
                            <div class='newsCaption'>
                              <h2 class='newsCaption-title'>No Compromise On Quality</h2>
                              <p class='newsCaption-content'>
                                No compromise on quality – all our business professionals are highly qualified with designations that include: CPA, CA, CISA, CGMA, MBA, MSA and are well experienced with most of them coming from Big 4 or Top 30 firms worldwide. You are assured of quality work and top service.
                              </p>

                            </div>
                          </div>
                    </div>

                </div>
            </div>
        </section>



    <section class="portfolio py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="sec-title text-center">
                        <h2>Industries</h2>
                        <h3>We Are Experienced In The Following Industries</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @php

                    $industries = [
                        [
                            'title' => 'Construction Accounts And Advisors',
                            'img' => 'frontend/assets/images/icon/construction.png',
                        ],
                        [
                            'title' => 'Education',
                            'img' => 'frontend/assets/images/icon/education.png',
                        ],
                        [
                            'title' => 'Financial Services',
                            'img' => 'frontend/assets/images/icon/financial.png',
                        ],
                        [
                            'title' => 'Government',
                            'img' => 'frontend/assets/images/icon/government.png',
                        ],

                        [
                            'title' => 'Healthcare',
                            'img' => 'frontend/assets/images/icon/heathcare.png',
                        ],
                        [
                            'title' => 'Manufacturing',
                            'img' => 'frontend/assets/images/icon/manufacture.png',
                        ],
                        [
                            'title' => 'Biotech',
                            'img' => 'frontend/assets/images/icon/biotech.png',
                        ],
                        [
                            'title' => 'Non-Profits',
                            'img' => 'frontend/assets/images/icon/profit.png',
                        ],
                        [
                            'title' => 'Retail & Consumer Sector',
                            'img' => 'frontend/assets/images/icon/retail.png',
                        ],
                        [
                            'title' => 'Technology',
                            'img' => 'frontend/assets/images/icon/technology.png',
                        ],
                        [
                            'title' => 'Logistics',
                            'img' => 'frontend/assets/images/icon/logistics.png',
                        ],
                        [
                            'title' => 'Media & Entertainment',
                            'img' => 'frontend/assets/images/icon/media.png',
                        ],
                        [
                            'title' => 'Life Sciences',
                            'img' => 'frontend/assets/images/icon/science.png',
                        ],
                    ];
                @endphp
                {{-- @foreach ($industries as $industry)
                     <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item p-2">
                            <div class="py-2">
                                <img src="{{ $industry['img'] }}" alt="" class="pb-1">
                                <h6 class=" d-inline font-indus mx-2 ">{{ $industry['title'] }}</h6>
                            </div>
                            <div class="item-box">
                            </div>
                        </div>
                    </div>
                @endforeach --}}





    <ul class="industry">
        @foreach ($industries as $industry)
        <li style="--accent-color:#60c5a6" class="indus-li">
            <div class="icon"> <img src="{{ $industry['img'] }}" alt="" class="pb-1 indus-icon" ></div>
            <div class="title">{{ $industry['title'] }}</div>

        </li>
        @endforeach

    </ul>
    {{-- <div class="credits">
        <a target="_blank" href="https://www.freepik.com/premium-vector/modern-3d-infographic-template-with-5-steps-success_5957879.htm">inspired by</a>
    </div> --}}

</div>
</div>
</section>

    <!-- :: Performance And Quote -->
    <section class="performance-and-quote py-5">
        <div class="overlay-3"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/img/4.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6">
                    <div class="quote">
                        <div class="sec-title">
                            <h2>Make An Appointment</h2>
                            <h3>Get Every Updates</h3>
                        </div>
                        <form action="{{ route('frontend.contact.submit') }}" method="post">
                            @csrf
                            <input type="hidden" name="page_name" value="Contact">
                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                            <div class="quote-item mb-4">
                                <label>Your Full Name</label>
                                <input type="text" name="name" placeholder="Enter Your Full Name" minlength="3"
                                    maxlength="30" required value="{{ old('name') }}">
                                <i class="fas fa-user-alt"></i>
                            </div>
                            @if ($errors->has('name'))
                                <div class="text-danger mb-3" role="alert">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <div class="quote-item mb-4">
                                <label>Your Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email Address"
                                    minlength="5" maxlength="40" required value="{{ old('email') }}">
                                <i class="far fa-envelope"></i>
                            </div>
                            @if ($errors->has('email'))
                                <div class="text-danger mb-3" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <div class="quote-item mb-4">
                                <label>Your Phone</label>
                                <input type="text" name="phone" placeholder="Enter Your Number" minlength="10"
                                    maxlength="10" required value="{{ old('phone') }}">
                                <i class="fas fa-phone"></i>
                            </div>
                            @if ($errors->has('phone'))
                                <div class="text-danger mb-3" role="alert">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif

                            <div class="quote-item mb-4">
                                <label>Company Name </label>
                                <input type="text" name="company_name" placeholder="Enter Company Name"
                                    minlength="3" maxlength="120" required value="{{ old('company_name') }}">
                                <i class="fas fa-building"></i>
                            </div>
                            @if ($errors->has('company_name'))
                                <div class="text-danger mb-3" role="alert">
                                    {{ $errors->first('company_name') }}
                                </div>
                            @endif
                            <div class="quote-item mb-4">
                                <label>Your Message</label>
                                <textarea name="message" placeholder="Enter Your Message" minlength="5" maxlength="250" required>{{ old('message') }}</textarea>
                                <i class="far fa-edit"></i>
                            </div>
                            @if ($errors->has('message'))
                                <div class="text-danger mb-3" role="alert">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                            <div class="quote-item text-lg-left text-center">
                                <button type="submit" class="btn-1">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script
        src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
        async defer></script>
    <script>
        var onloadCallback = function() {
            // alert('hell')
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    var recaptchaElements = [
                        document.getElementById('recaptchaResponse'),
                    ];

                    // Loop through each element and set the token if the element exists
                    recaptchaElements.forEach(function(element) {
                        if (element) {
                            element.value = token; // Set the token value
                        }
                    });
                })
            })
        }
    </script>
@endsection
