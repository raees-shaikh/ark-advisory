 <!-- :: Loading -->
 <div class="loading">
    <div class="banner">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>
</div>
<!-- :: Header Bar -->
<header class="header-bar fixed-top">

    {{-- <!-- :: Top Bar -->
    <div class="top-bar">
        <div class="container">
            <ul class="left-top-bar">
                <li><a href="#">+ 2 0107 2390903</a></li>
                <li><a href="#">Ar-coder@Ar-coder.com</a></li>
            </ul>
            <ul class="right-top-bar">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-behance"></i></a></li>
            </ul>
        </div>
    </div> --}}

    <!-- :: Nav Bar -->
    <nav id="nav-bar" class="nav-bar">
        <div class="container-fluid">
            <div class="brand">
                <a href="{{url('/')}}" class="website-logo">
                    {{-- <img class="img-fluid one" src="{{asset('frontend/assets/images/logo/01_logo.png')}}" alt="01 Logo">
                    <img class="img-fluid two" src="{{asset('frontend/assets/images/logo/02_logo.png')}}" alt="02 Logo"> --}}
                   <div class="logo-box">
                    <h1>ARK Advisory</h1>
                   </div>
                </a>
                <a href="#open-nav-bar-menu" class="nav-bar-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div id="open-nav-bar-menu" class="collapse-nav-bar">
                <ul class="level-1">
                    <li class="">
                        <a href="{{url('/')}}" class="{{URL::current()==url('/')? 'bg-active' : ''}}">Home</a>
                    </li>

                    <li class="">
                        <a href="{{url('/accounting-assurance')}}" class="{{URL::current()==url('/accounting-assurance')? 'bg-active' : ''}}">Accounting & Assurance</a>
                    </li>
                    <li class="">
                        <a href="{{url('/advisory')}}" class="{{URL::current()==url('/advisory')? 'bg-active' : ''}}">Advisory</a>
                    </li>
                    <li class="">
                        <a href="{{url('/tax')}}" class="{{URL::current()==url('/tax')? 'bg-active' : ''}}">Tax</a>
                    </li>
                    <li class="">
                        <a href="{{url('/technology-cybersecurity')}}" class="{{URL::current()==url('/technology-cybersecurity')? 'bg-active' : ''}}">Technology & Cybersecurity</a>
                    </li>
                    <li class="has-menu">
                        <a href="javascript:void(0)" class=" {{URL::current()==url('/who-we-are') || URL::current()==url('/affiliate-offices') || URL::current()==url('/contact-us') || URL::current()==url('/equity-inclusion')?   'bg-active' : ''}}">About</a>
                        <ul class="level-2">
                            <li><a href="{{url('/who-we-are')}}"  class="{{URL::current()==url('/who-we-are')? 'active' : ''}}">Who We Are</a></li>
                            <li><a href="{{url('/equity-inclusion')}}" class="{{URL::current()==url('/equity-inclusion')? 'active' : ''}}">Diversity, Equity & Inclusion</a></li>
                            <li><a href="{{url('/affiliate-offices')}}" class="{{URL::current()==url('/affiliate-offices')? 'active' : ''}}">Affiliate Offices</a></li>
                            <li><a href="{{url('/contact-us')}}" class="{{URL::current()==url('/contact-us')? 'active' : ''}}">Contact Us</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </nav>
</header>

<!-- :: Search Box -->
<div class="search-box">
    <form>
        <input type="search" placeholder="Search Here..">
        <button type="submit"><i class="fas fa-search"></i></button>
    </form>
</div>
