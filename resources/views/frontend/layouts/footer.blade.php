
        <!-- :: Footer -->
		<footer class="footer pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="logo">
                            <div class="logo-box-2">
                                   <a href="{{url('/')}}" class="text-gold"> <h2>ARK Advisory</h2></a>
                               </div>
                            {{-- <img class="img-fluid" src="{{asset('frontend/assets/images/logo/01_logo.png')}}" alt="01 Logo Footer"> --}}
                            <p>Ark Advisory is a Certified Public Accountant firm providing Accounting, Assurance, Advisory & Tax Services. Ark Advisory has established itself as a reputable and dependable firm with over 50 years of experience, working with companies and individuals globally.</p>
                            {{-- <ul>
                               <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                               <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                               <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                               <li><a href="#"><i class="fab fa-behance"></i></a></li>
                           </ul> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-title">
                    <h4>Important Links</h4>
                </div>
                <ul class="links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/who-we-are') }}">Who We Are</a></li>
                    <li><a href="{{ url('/equity-inclusion') }}">Diversity, Equity & Inclusion</a></li>
                    <li><a href="{{ url('/affiliate-offices') }}">Affiliate Offices</a></li>
                    <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-title">
                    <h4>Our Services</h4>
                </div>
                <ul class="links">
                    <li><a href="{{ url('/accounting-assurance') }}">Accounting & Assurance</a></li>
                    <li><a href="{{ url('/advisory') }}">Advisory</a></li>
                    <li><a href="{{ url('/tax') }}">Tax</a></li>
                    <li><a href="{{ url('/technology-cybersecurity') }}">Technology & Cybersecurity</a></li>


                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-title">
                    <h4>Contact Us</h4>
                </div>
                <div class="contact-us mb-2">
                    <span>Call Us Now</span>
                    <div> <img src="{{asset('frontend/assets/images/icons/telephone.png')}}" alt="" width="20px"> <a href="tel:+1 (813)-600-3510" class="mx-1">+1 (813)-600-3510</a></div>
                    <div> <img src="{{asset('frontend/assets/images/icons/telephone.png')}}" alt="" width="20px"> <a href="tel:+1 (813)-514-7187" class="mx-1">+1 (813)-514-7187</a></div>
                </div>

                <div class="contact-us mb-2">
                    <span>FAX</span>
                    <div> <img src="{{asset('frontend/assets/images/icons/fax.png')}}" alt="" width="20px"> <a href="fax:+1 (207)-888-4749" class="mx-1">+1 (207)-888-4749</a></div>
                    <div><img src="{{asset('frontend/assets/images/icons/fax.png')}}" alt="" width="20px"> <a href="fax:+1 (813)-406-6005" class="mx-1">+1 (813)-406-6005</a></div>
                </div>
                <div class="contact-us mb-2">
                    <span>Send Us Message</span>
                    <div><img src="{{asset('frontend/assets/images/icons/email.png')}}" alt="" width="20px"> <a href="mailto:info@arkadvisory.com" class="mx-1"> info@arkadvisory.com</a></div>
                </div>
                <div class="contact-us mb-2">
                    <span>Visit Our Offices</span>
                    <div class="row"><div class="col-1 "><img src="{{asset('frontend/assets/images/icon/location-40.png')}}" alt="" width="20px"></div> <div class="col-10 px-custom-r-0"> Tampa, Florida & Atlanta, Georgia, Mumbai, India, Nairobi, & Kenya</div></div>
                </div>
            </div>
        </div>
        <div class="reserved mt-3">ARK Advisory &copy; {{ date('Y') }} All Rights Reserved | Designed &
            Developed By
            <a href="https://www.acetrot.com/" target="_blank" class="acetrot">Acetrot.</a>
        </div>
    </div>
</footer>
<!-- :: Scroll Up -->
<div class="scroll-up">
    <a href="#page" class="move-section">
        <i class="fas fa-angle-up"></i>
    </a>
</div>
<!-- :: JS -->
<!-- :: jQuery -->
<script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>

<!-- :: Popper -->
<script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>

<!-- :: Bootstrap -->
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

<!-- :: Owl Carousel -->
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>

<!-- :: Waypoints -->
<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>

<!-- :: CounterUp -->
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>

<!-- :: Main -->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>

<script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#1abc9c'
            });
        @endif
    @elseif (Session::get('alert-type') == 'info')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#2196f3'
            });
        @endif
    @elseif (Session::get('alert-type') == 'error')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#e7515a'
            });
        @endif
    @else
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#3b3f5c'
            });
        @endif
    @endif
</script>
