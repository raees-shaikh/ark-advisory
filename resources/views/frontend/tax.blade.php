@extends('frontend.layouts.app')
@section('title', 'Tax - ')
@section('content')

    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header tax" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Tax</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Tax</li>
                </ul>
            </div>
        </div>
    </section>

<!-- :: Portfolio -->
<section class="portfolio index custom-h py-5">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">

                       <div class="tax-title align-items-center d-flex">
                        <i class="fas fa-check"></i>
                        <h4 class=" d-inline">Business Tax</h4>
                       </div>
                    <div class="item-box px-0 pt-2">


                        <p>As part of our Business Tax Services, we put together a custom corporate tax planning strategies and address any related tax issues prior to year-end. We’ll also review the most recent tax law changes and interpretations in order to maximize tax savings opportunities and reduce tax liability. With an effective business tax preparation plan, companies have greater assurance of realizing substantial cost savings, limiting interest and penalties and reducing the likelihood of IRS audits.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <div class="tax-title align-items-center d-flex">
                        <i class="fas fa-check"></i>
                        <h4 class=" d-inline">Individual Tax</h4>
                       </div>
                    <div class="item-box px-0 pt-2">


                        <p>our individual tax services help reduce tax liability and maximize after-tax cash flow. Our personal tax preparation services include tax return compliance, tax planning, and assistance with investment strategies.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <div class="tax-title align-items-center d-flex">
                        <i class="fas fa-check"></i>
                        <h4 class=" d-inline">International Tax</h4>
                       </div>
                    <div class="item-box px-0 pt-2">

                        <p>Businesses that operate internationally face unique challenges of having the stay compliant with multiple countries’ tax rules and regulations. Our international tax advisors work with organizations to maintain tax transparency, remediate cross-border tax disputes, minimize the risk of double-taxation and achieve maximum savings through international tax incentives.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item">
                    <div class="tax-title align-items-center d-flex">
                        <i class="fas fa-check"></i>
                        <h4 class=" d-inline">State & Local Tax</h4>
                       </div>
                    <div class="item-box px-0 pt-2">


                        <p>The complexity and persistent changes in state and local tax (SALT) laws and regulations can make it difficult for businesses to navigate. Our consultants can help with compliance of laws and regulations and manage risk.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
