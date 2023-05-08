<!DOCTYPE html>
<html class=no-js lang="">
<head>
<meta charset=utf-8 />
<!-- <meta http-equiv=x-ua-compatible content="ie=edge" /> -->
<title>SaaSIntro | Bootstrap 5 SaaS Landing Page</title>
<meta name=description content="" />
<meta name=viewport content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('main_landing_page')}}/assets/images/favicon.svg" />


<link rel=stylesheet href="{{ asset('main_landing_page/assets/css/A.bootstrap.min.css') }}" />
<link rel=stylesheet href="{{ asset('main_landing_page/assets/css/A.main.css') }}" />
<script data-pagespeed-no-defer>(function(){function f(a,b,d){if(a.addEventListener)a.addEventListener(b,d,!1);else if(a.attachEvent)a.attachEvent("on"+b,d);else{var c=a["on"+b];a["on"+b]=function(){d.call(this);c&&c.call(this)}}};window.pagespeed=window.pagespeed||{};var g=window.pagespeed;function k(a){this.g=[];this.f=0;this.h=!1;this.j=a;this.i=null;this.l=0;this.b=!1;this.a=0}function l(a,b){var d=b.getAttribute("data-pagespeed-lazy-position");if(d)return parseInt(d,0);var d=b.offsetTop,c=b.offsetParent;c&&(d+=l(a,c));d=Math.max(d,0);b.setAttribute("data-pagespeed-lazy-position",d);return d}
function m(a,b){var d,c,e;if(!a.b&&(0==b.offsetHeight||0==b.offsetWidth))return!1;a:if(b.currentStyle)c=b.currentStyle.position;else{if(document.defaultView&&document.defaultView.getComputedStyle&&(c=document.defaultView.getComputedStyle(b,null))){c=c.getPropertyValue("position");break a}c=b.style&&b.style.position?b.style.position:""}if("relative"==c)return!0;e=0;"number"==typeof window.pageYOffset?e=window.pageYOffset:document.body&&document.body.scrollTop?e=document.body.scrollTop:document.documentElement&&
document.documentElement.scrollTop&&(e=document.documentElement.scrollTop);d=window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight;c=e;e+=d;var h=b.getBoundingClientRect();h?(e=h.top-d,c=h.bottom):(h=l(a,b),d=h+b.offsetHeight,e=h-e,c=d-c);return e<=a.f&&0<=c+a.f}
k.prototype.m=function(a){p(a);var b=this;window.setTimeout(function(){var d=a.getAttribute("data-pagespeed-lazy-src");if(d)if((b.h||m(b,a))&&-1!=a.src.indexOf(b.j)){var c=a.parentNode,e=a.nextSibling;c&&c.removeChild(a);a.c&&(a.getAttribute=a.c);a.removeAttribute("onload");a.tagName&&"IMG"==a.tagName&&g.CriticalImages&&f(a,"load",function(){g.CriticalImages.checkImageForCriticality(this);b.b&&(b.a--,b.a||g.CriticalImages.checkCriticalImages())});a.removeAttribute("data-pagespeed-lazy-src");a.removeAttribute("data-pagespeed-lazy-replaced-functions");
c&&c.insertBefore(a,e);if(c=a.getAttribute("data-pagespeed-lazy-srcset"))a.srcset=c,a.removeAttribute("data-pagespeed-lazy-srcset");a.src=d}else b.g.push(a)},0)};k.prototype.loadIfVisibleAndMaybeBeacon=k.prototype.m;k.prototype.s=function(){this.h=!0;q(this)};k.prototype.loadAllImages=k.prototype.s;function q(a){var b=a.g,d=b.length;a.g=[];for(var c=0;c<d;++c)a.m(b[c])}function t(a,b){return a.a?null!=a.a(b):null!=a.getAttribute(b)}
k.prototype.u=function(){for(var a=document.getElementsByTagName("img"),b=0,d;d=a[b];b++)t(d,"data-pagespeed-lazy-src")&&p(d)};k.prototype.overrideAttributeFunctions=k.prototype.u;function p(a){t(a,"data-pagespeed-lazy-replaced-functions")||(a.c=a.getAttribute,a.getAttribute=function(a){"src"==a.toLowerCase()&&t(this,"data-pagespeed-lazy-src")&&(a="data-pagespeed-lazy-src");return this.c(a)},a.setAttribute("data-pagespeed-lazy-replaced-functions","1"))}
g.o=function(a,b){function d(){if(!(c.b&&a||c.i)){var b=200;200<(new Date).getTime()-c.l&&(b=0);c.i=window.setTimeout(function(){c.l=(new Date).getTime();q(c);c.i=null},b)}}var c=new k(b);g.lazyLoadImages=c;f(window,"load",function(){c.b=!0;c.h=a;c.f=200;if(g.CriticalImages){for(var b=0,d=document.getElementsByTagName("img"),r=0,n;n=d[r];r++)-1!=n.src.indexOf(c.j)&&t(n,"data-pagespeed-lazy-src")&&b++;c.a=b;c.a||g.CriticalImages.checkCriticalImages()}q(c)});b.indexOf("data")&&((new Image).src=b);f(window,
"scroll",d);f(window,"resize",d)};g.lazyLoadInit=g.o;})();

pagespeed.lazyLoadInit(true, "/pagespeed_static/1.JiBnMqyl6S.gif");
</script></head>
<body>

<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class=preloader>
<div class=loader>
<div class=spinner>
<div class=spinner-container>
<div class=spinner-rotator>
<div class=spinner-left>
<div class=spinner-circle></div>
</div>
<div class=spinner-right>
<div class=spinner-circle></div>
</div>
</div>
</div>
</div>
</div>
</div>


<header class=header>
<div class=navbar-area>
<div class=container>
<div class="row align-items-center">
<div class=col-lg-12>
<nav class="navbar navbar-expand-lg">
<a class=navbar-brand href=index.html>
<img src="{{ asset('main_landing_page')}}/assets/images/logo/logo.svg" alt=Logo />
</a>
<button class=navbar-toggler type=button data-bs-toggle=collapse data-bs-target="#navbarSupportedContent" aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
<span class=toggler-icon></span>
<span class=toggler-icon></span>
<span class=toggler-icon></span>
</button>
<div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
<div class=ms-auto>
<ul id=nav class="navbar-nav ms-auto">
<li class=nav-item>
<a class="page-scroll active" href="#home">Home</a>
</li>
<li class=nav-item>
<a class=page-scroll href="#about">About</a>
</li>
<li class=nav-item>
<a class=page-scroll href="#features">Features</a>
</li>
<li class=nav-item>
<a class=page-scroll href="#pricing">Pricing</a>
</li>
<li class=nav-item>
<a class=page-scroll href="#team">Team</a>
</li>
<li class=nav-item>
    <a  href="{{ route('login') }}">Login</a>
    </li>
    <li class=nav-item>

        <a href="{{ route('register') }}">Register</a>
        </li>
</ul>
</div>
</div>


</nav>

</div>
</div>

</div>

</div>

</header>


<section id=home class=hero-section>
<div class=container>
<div class="row align-items-center">
<div class="col-xl-6 col-lg-6 col-md-10">
<div class=hero-content>
<h1>Validate Your <br class="d-none d-md-block"> SaaS Product Idea</h1>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
<a href="#0" class="main-btn btn-hover">Get Started</a>
</div>
</div>
<div class="col-xxl-6 col-xl-6 col-lg-6">
<div class="hero-image text-center text-lg-end">
<img src="{{ asset('main_landing_page')}}/assets/images/hero/hero-image.svg" alt="">
</div>
</div>
</div>
</div>
</section>


<section id=about class=about-section>
<div class=container>
<div class=row>
<div class="col-lg-6 order-last order-lg-first">
<div class=about-image>
<img data-pagespeed-lazy-src="{{ asset('main_landing_page')}}/assets/images/about/about-image.svg" alt="" src="{{ asset('main_landing_page')}}/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</div>
</div>
<div class=col-lg-6>
<div class=about-content-wrapper>
<div class=section-title>
<h2 class=mb-20>Perfect Solution Thriving Online Business</h2>
<p class=mb-30>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.Lorem ipsum dolor sit amet.</p>
<a href="#0" class="main-btn btn-hover border-btn">Discover More</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section id=features class=feature-section>
<div class=container>
<div class=row>
<div class="col-lg-5 col-md-10">
<div class="section-title mb-60">
<h2 class=mb-20>Modern design with Essential Features</h2>
<p>Lorem ipsum dolor amet, consetetur sadipscing elitr, sed diam nonumy eirmod te invidunt,
Lorem ipsum dolor sit amet.</p>
</div>
</div>
<div class=col-lg-7>
<div class=row>
<div class="col-lg-6 col-md-6">
<div class=single-feature>
<div class=feature-icon>
<i class="lni lni-display"></i>
</div>
<div class=feature-content>
<h4>SaaS Focused</h4>
<p>Lorem ipsum dolor amet, consetetur sadipscing elitr, diam nonu eirmod tem invidunt.</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class=single-feature>
<div class=feature-icon>
<i class="lni lni-compass"></i>
</div>
<div class=feature-content>
<h4>Awesome Design</h4>
<p>Lorem ipsum dolor amet, consetetur sadipscing elitr, diam nonu eirmod tem invidunt.</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class=single-feature>
<div class=feature-icon>
<i class="lni lni-grid-alt"></i>
</div>
<div class=feature-content>
<h4>Ready to Use</h4>
<p>Lorem ipsum dolor amet, consetetur sadipscing elitr, diam nonu eirmod tem invidunt.</p>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class=single-feature>
<div class=feature-icon>
<i class="lni lni-layers"></i>
</div>
<div class=feature-content>
<h4>Essential Sections</h4>
<p>Lorem ipsum dolor amet, consetetur sadipscing elitr, diam nonu eirmod tem invidunt.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section id=cta class="cta-section pt-130">
<div class=container>
<div class="row align-items-center">
<div class="col-lg-6 col-md-10">
<div class=cta-content-wrapper>
<div class=section-title>
<h2 class=mb-20>Quick & Easy to <br class="d-none d-lg-block"> Use Bootstrap Template</h2>
<p class=mb-30>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergre.</p>
<a href="#0" class="main-btn btn-hover border-btn">Try it Free</a>
</div>
</div>
</div>
<div class=col-lg-6>
<div class="cta-image text-lg-end">
<img data-pagespeed-lazy-src="{{ asset('main_landing_page')}}/assets/images/cta/cta-image.svg" alt="" src="{{ asset('main_landing_page')}}/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</div>
</div>
</div>
</div>
</section>


<section id=pricing class=pricing-section>
<div class=container>
<div class="row justify-content-center">
<div class="col-lg-6 col-md-10">
<div class="section-title text-center">
<h2>Choose a Plan</h2>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna.</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-4 col-md-8 col-sm-10">
<div class=single-pricing>
<div class=pricing-header>
<h5 class=package-name>Basic Account</h5>
<h2 class=package-price> $40 <span>Monthly</span></h2>
</div>
<div class=pricing-body>
<ul>
<li>
<span class="bolet active"></span>
<p>Unlimited Access</p>
</li>
<li>
<span class="bolet active"></span>
<p>20+ Users</p>
</li>
<li>
<span class="bolet active"></span>
<p>Unlimited Storage</p>
</li>
<li>
<span class=bolet></span>
<p>24/7 Support</p>
</li>
<li>
<span class=bolet></span>
<p>Free Future Updates</p>
</li>
</ul>
</div>
<div class=pricing-footer>
<a href="#0" class="main-btn btn-hover">Purchase Now</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-8 col-sm-10">
<div class="single-pricing standard">
<span class=populer>Popular</span>
<div class=pricing-header>
<h5 class=package-name>Standard Account</h5>
<h2 class=package-price> $60 <span>Monthly</span></h2>
</div>
<div class=pricing-body>
<ul>
<li>
<span class="bolet active"></span>
<p>Unlimited Access</p>
</li>
<li>
<span class="bolet active"></span>
<p>20+ Users</p>
</li>
<li>
<span class="bolet active"></span>
<p>Unlimited Storage</p>
</li>
<li>
<span class="bolet active"></span>
<p>24/7 Support</p>
</li>
<li>
<span class=bolet></span>
<p>Free Future Updates</p>
</li>
</ul>
</div>
<div class=pricing-footer>
<a href="#0" class="main-btn btn-hover">Purchase Now</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-8 col-sm-10">
<div class=single-pricing>
<div class=pricing-header>
<h5 class=package-name>Premium Account</h5>
<h2 class=package-price> $80 <span>Monthly</span></h2>
</div>
<div class=pricing-body>
<ul>
<li>
<span class="bolet active"></span>
<p>Unlimited Access</p>
</li>
<li>
<span class="bolet active"></span>
<p>20+ Users</p>
</li>
<li>
<span class="bolet active"></span>
<p>Unlimited Storage</p>
</li>
<li>
<span class="bolet active"></span>
<p>24/7 Support</p>
</li>
<li>
<span class="bolet active"></span>
<p>Free Future Updates</p>
</li>
</ul>
</div>
<div class=pricing-footer>
<a href="#0" class="main-btn btn-hover">Purchase Now</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section id=team class="team-section pt-100">
<div class=container>
<div class="row justify-content-center">
<div class="col-lg-6 col-md-10">
<div class="section-title mb-60 text-center">
<h2 class=mb-15>Meet Our <br class=d-block> Creative Team Members</h2>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt ut labore et dolore magna.</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-4 col-md-7 col-sm-10">
<div class=single-team>
<div class=team-image>
<img data-pagespeed-lazy-src="{{ asset('main_landing_page')}}/assets/images/team/team-1.png" alt="" src="{{ asset('main_landing_page')}}/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</div>
<div class=team-info>
<h4>Jonathon Smith</h4>
<p>Creative Product Designer</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-7 col-sm-10">
<div class=single-team>
<div class=team-image>
<img data-pagespeed-lazy-src="{{ asset('main_landing_page')}}/assets/images/team/team-2.png" alt="" src="{{ asset('main_landing_page')}}/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</div>
<div class=team-info>
<h4>Fajar Siddiq</h4>
<p>Head of Design</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-7 col-sm-10">
<div class=single-team>
<div class=team-image>
<img data-pagespeed-lazy-src="{{ asset('main_landing_page')}}/assets/images/team/team-3.png" alt="" src="{{ asset('main_landing_page')}}/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</div>
<div class=team-info>
<h4>Jamil Kareem</h4>
<p>Head Of UX</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="testimonial-section mt-100">
<div class=container>
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-9">
<div class=testimonial-active-wrapper>
<div class="section-title text-center">
<h2 class=mb-20>What our customers says</h2>
</div>
<div class=testimonial-active>
<div class=single-testimonial>
<div class=quote>
<i class="lni lni-quotation"></i>
</div>
<div class=content>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
</div>
<div class=info>
<h6>Jhanker Mahbub</h6>
<p>Founder, Programming Hero</p>
</div>
</div>
<div class=single-testimonial>
<div class=quote>
<i class="lni lni-quotation"></i>
</div>
<div class=content>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
</div>
<div class=info>
<h6>Jisan Adeeb</h6>
<p>Founder, Tech News</p>
</div>
</div>
<div class=single-testimonial>
<div class=quote>
<i class="lni lni-quotation"></i>
</div>
<div class=content>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
</div>
<div class=info>
<h6>Abir Azim</h6>
<p>Co-Founder, Stack Leaner</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class=testimonial-images>
<img data-pagespeed-lazy-src="assets/images/testimonial/testimonial-1.png" alt="" class="testimonial-image image-1" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
<img data-pagespeed-lazy-src="assets/images/testimonial/testimonial-2.png" alt="" class="testimonial-image image-2" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
<img data-pagespeed-lazy-src="assets/images/testimonial/testimonial-3.png" alt="" class="testimonial-image image-3" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
<img data-pagespeed-lazy-src="assets/images/testimonial/testimonial-4.png" alt="" class="testimonial-image image-4" src="/pagespeed_static/1.JiBnMqyl6S.gif" onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);" onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
</div>
</section>


<footer class="footer pt-120">
<div class=container>
<div class=row>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
<div class=footer-widget>
<div class=logo>
<a href=index.html> <img src="assets/images/logo/logo.svg" alt=logo> </a>
</div>
<p class=desc>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed dinonumy eirmod tempor invidunt.</p>
<ul class=social-links>
<li><a href="#0"><i class="lni lni-facebook"></i></a></li>
<li><a href="#0"><i class="lni lni-linkedin"></i></a></li>
<li><a href="#0"><i class="lni lni-instagram"></i></a></li>
<li><a href="#0"><i class="lni lni-twitter"></i></a></li>
</ul>
</div>
</div>
<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 offset-xl-1">
<div class=footer-widget>
<h3>About Us</h3>
<ul class=links>
<li><a href="#0">Home</a></li>
<li><a href="#0">About</a></li>
<li><a href="#0">Features</a></li>
<li><a href="#0">Pricing</a></li>
<li><a href="#0">Contact</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
<div class=footer-widget>
<h3>Services</h3>
<ul class=links>
<li><a href="#0">SaaS Focused</a></li>
<li><a href="#0">Awesome Design</a></li>
<li><a href="#0">Ready to Use</a></li>
<li><a href="#0">Essential Selection</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class=footer-widget>
<h3>Subscribe Newsletter</h3>
<form action="#">
<input type=email placeholder=Email>
<button class="main-btn btn-hover">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</footer>


<a href="#" class="scroll-top btn-hover">
<i class="lni lni-chevron-up"></i>
</a>

<script type="text/javascript" data-pagespeed-no-defer>pagespeed.lazyLoadImages.overrideAttributeFunctions();</script><script src="{{ asset('main_landing_page')}}/assets/js/bootstrap.min.js"></script><script>eval(mod_pagespeed_Ca9mE2tSWc);</script>
<script>eval(mod_pagespeed_P6eUNEWV7F);</script>
<script src="{{ asset('main_landing_page')}}/assets/js/wow.min.js"></script><script>eval(mod_pagespeed_LMpAUQ1$uY);</script>
<script>eval(mod_pagespeed_sQM_NSJ8F9);</script>
<script>eval(mod_pagespeed_flVHtVrk$z);</script>

</body>
</html>
