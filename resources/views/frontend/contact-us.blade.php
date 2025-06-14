@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header contact" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Contact Us</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>About</li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- :: Performance And Quote -->
    <section class=" my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/assets/images/img/4.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6">
                    <div class="quote index pt-0">
                        <div class="sec-title ">
                            <h2>Contact Us</h2>
                            <h3>Needs Help? Let’s Get in Touch</h3>
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
                                <input type="email" name="email" placeholder="Enter Your Email Address" minlength="5"
                                    maxlength="40" required value="{{ old('email') }}">
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
                                <input type="text" name="company_name" placeholder="Enter Company Name" minlength="3"
                                    maxlength="120" required value="{{ old('company_name') }}">
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
                                {{-- <a href="#" class="btn-1">Submit</a> --}}
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
