@extends('frontend.layouts.app')
@section('title', 'Accounting & Assurance - ')
@section('content')
    <!-- :: Breadcrumb Header -->
    <section class="breadcrumb-header account" id="page">
        <div class="overlay"></div>
        <div class="container">
            <div class="breadcrumb-info">
                <h1>Accounting &  Asssurance</h1>
                <ul class="list-breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Accounting &  Asssurance</li>
                </ul>
            </div>
        </div>
    </section>
<!-- :: Services -->
<section class="services index py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="services-item row-same">
                    <div class="icon">
                         <img src="{{asset('frontend/assets/images/icons/audit.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Audit Services</h4>
                    <p>Audits are performed based on a risk-based approach. We conduct our audits under the concept of “understanding the entity.” This concept is based fundamentally on the fact that your company’s business environment is unique. By understanding the company and the industry it operates in, we gain the necessary perspective for performing an effective and efficient audit.</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item row-same">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icons/preparedness.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Audit Preparedness</h4>
                    <p>We offer a great solution for companies that have never been audited. Our consultants work with the Company to ensure policies, procedures and documentation are properly set-up in order to successfully complete an audit.</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item row-same">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icons/procedure.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Agreed Upon Procedures</h4>
                    <p>Certain stakeholders such as lenders and partners require specific testing and assurance over certain subject matters. Our team will work with the company and it’s stakeholders to understand their needs and design appropriate procedures to ensure the goal is met.</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icons/complain.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Internal Audit Services & SOX Compliance</h4>
                    <p>We can act as your internal audit service group by bringing a systematic and disciplined approach to risk management, control and governance processes. We use the COSO and COBIT frameworks to ensure controls are well designed, implemented and operating effectively.</p>

                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icons/review.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Reviews & Compilations</h4>
                    <p>Review engagement services can be a cost-effective alternative to a full financial statement audit for an organization in that they provide limited assurance regarding the organization’s financial statements in accordance with the organization’s financial reporting framework. A compilation of a financial statement is not designed to provide assurance on the underlying financial statements. However, compiled financial statements present an economical way to report an organization’s financial performance and financial position at a high level.</p>

                </div>
            </div>


            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icons/outsource.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>Outsourced Accounting</h4>
                    <p>Outsourcing Bookkeeping Service Has Become A New Norm Of Handling The Books Of Accounts. The Reason Being In House Bookkeeping Not Only Takes An Ample Amount Of Time But Also Is A Tiresome Activity. Especially For Small Or Medium Scale Business, It Takes Space, Time And Costs That May Better Put In Use For Other Business Purposes.</p>

                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="services-item">
                    <div class="icon">
                        <img src="{{asset('frontend/assets/images/icons/report.png')}}" alt="">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4>SEC Reporting</h4>
                    <p>We can set-up the financial reporting structure for Companies going public or assist with public companies that don’t have the resources to mage their SEC reporting. We prepare accounting materials and financial information to support regulatory and management reporting, as well as board meeting requirements. In addition, we can prepare or help with the preparation of SEC filings, such as quarterly, annual reports, proxy statements, and earnings releases. We also design and implement reporting processes and internal frameworks to support your regulatory requirements.</p>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
