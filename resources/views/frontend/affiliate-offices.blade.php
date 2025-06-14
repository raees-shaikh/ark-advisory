@extends('frontend.layouts.app')
@section('title', 'Affiliate Offices - ')
@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header office" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Affiliate Offices</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>About</li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Affiliate Offices</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">

            <div class="sec-title mb-4 text-center mt-3">

                <h3>  Our Affiliate Offices</h3>
            </div>
            <div class="row mb-5 justify-content-center">


                <div class="col-lg-3 col-md-4 col-sm-6 office-card px-0 mx-3 mx-sm-2 ">
                   <a href="https://vadivalla.com/" target="_blank">
                    <img src="{{asset('frontend/assets/images/office/vadivalla.png')}}" alt="" class="w-100">
                   </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 office-card px-0 mx-sm-2 mx-3">
                    <a href="https://www.5eadvisory.com/" target="_blank">
                        <img src="{{asset('frontend/assets/images/office/ef.png')}}" alt="" class="w-100"></a>

                </div>

            </div>
        </div>
    </section>

@endsection
