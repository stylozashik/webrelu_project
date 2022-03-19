@extends('layouts.master')
@section('content')
 <main>
        <!-- slider area start -->
        <div class="slider-area  fix">
            <div class="slider-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="slider-list swiper-slide d-flex align-items-center pt-70">
                        <div class="slider-shape"></div>
                        <div class="slider-shape-line"></div>
                        <div class="slider-shape-line2"></div>
                        <div class="slider-bg img-zoom" data-background="frontend/img/slider/slider3.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 position-relative">
                                    <div class="slider-circle-shape"></div>
                                    <div class="slider-text z-index text-center">
                                        <span class="slider-sub-title" data-animation="fadeInUp" data-delay="0.3s">welcome to WebRelu IT Ltd.</span>
                                        <h2 class="slider-title" data-animation="fadeInUp" data-delay="0.5s">A Complete Software<br> Solutioin.</h2>
                                        <div class="slide-btn mt-30" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="about.html" class="tp-btn">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-list swiper-slide d-flex align-items-center pt-70">
                        <div class="slider-shape"></div>
                        <div class="slider-shape-line"></div>
                        <div class="slider-shape-line2"></div>
                        <div class="slider-bg img-zoom" data-background="frontend/img/slider/slider4.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 position-relative">
                                    <div class="slider-circle-shape"></div>
                                    <div class="slider-text z-index text-center">
                                        <span class="slider-sub-title" data-animation="fadeInUp" data-delay="0.3s">welcome to WebRelu IT Ltd.</span>
                                        <h2 class="slider-title" data-animation="fadeInUp" data-delay="0.5s">With Critified <br> Software Engineer.</h2>
                                        <div class="slide-btn mt-30" data-animation="fadeInUp" data-delay="0.7s">
                                            <a href="#" class="tp-btn">Discover More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev sp-arrow"> <i class="far fa-angle-left"></i></div>
                <div class="swiper-button-next sp-arrow"> <i class="far fa-angle-right"></i></div>
            </div>
        </div>
        <!-- slider area end -->

        <!-- services area start -->
        <div class="main-services black-bg pt-120 pb-90" data-background="frontend/img/pattern/pt1.png">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-12">
                        <div class="sec-wrapper text-center">
                            <h5>Features Services</h5>
                            <h2 class="section-title text-white">Explore Our Services.</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-web-optimization"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">web Application</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-develop"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">Web Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-graphic-design"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">UX/UI Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-online-business"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">Seo Marketing</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-app-development"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">App Development</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-copywriter"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">Content Writing</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-solution"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">Modern Design</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-30">
                        <div class="mservices fix">
                            <div class="ms-line-shape">
                                <div class="ms-line"></div>
                                <div class="ms-line2"></div>
                            </div>
                            <div class="mservices__icon">
                                <i class="flaticon-resource"></i>
                            </div>
                            <div class="mservices__text">
                                <h3 class="ms-title"><a href="services-details.html">Resource use</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- services area end -->

        <!-- about start -->
        <div class="about-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="ab-wrapper pos-rel">
                            <div class="ab-since">
                                <h4>Since <br> 2016</h4>
                            </div>
                            <div class="row gx-2 mb-30">
                                <div class="col-6">
                                    <div class="ab-img img-filter">
                                        <img src="frontend/img/about/mahfuj1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="ab-img img-filter">
                                        <img src="frontend/img/about/joy1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="ab-img img-filter">
                                        <img src="frontend/img/about/ashikur1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="ab-img img-filter">
                                        <img src="frontend/img/about/chandan1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="ab-box pl-50 mb-30">
                            <div class="sec-wrapper">
                                <h5>About Us</h5>
                                <h2 class="section-title">We offer modern software solutions for growing your business</h2>
                            </div>
                            <div class="ab-item-box mt-40 mb-30">
                                <div class="ab-items fix mb-20">
                                    <div class="ab-icon f-left">
                                        <i class="flaticon-honesty"></i>
                                    </div>
                                    <div class="ab-item-text fix">
                                        <h3 class="ab-item-title">Pleasant Consulting</h3>
                                        <p>We try our best to meet the needs of the clients.</p>
                                    </div>
                                </div>
                                <div class="ab-items fix mb-20">
                                    <div class="ab-icon f-left">
                                        <i class="flaticon-trustworthy"></i>
                                    </div>
                                    <div class="ab-item-text fix">
                                        <h3 class="ab-item-title">Trusted Services</h3>
                                        <p>Our experienced development team works efficiently in the search for the most suitable solutions to guarantee the customer, the latest technology and tool for their needs.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ab-btn">
                                <a href="#" class="tp-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end -->

        <!-- counter -->
        <section class="counter-wraper pos-rel black-bg pt-120 pb-90" data-overlay="dark" data-opacity="7">
            <div class="fact-bg slider-bg" data-background="frontend/img/slider/slider3.jpg"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="single-couter counter-box text-center mb-30 z-index">
                            <div class="fact-icon">
                                <i class="flaticon-group"></i>
                            </div>
                            <h2><span class="counter">10</span></h2>
                            <h4>Expert Members</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-couter counter-box text-center mb-30 z-index">
                            <div class="fact-icon">
                                <i class="flaticon-happiness"></i>
                            </div>
                            <h2><span class="counter">786</span></h2>
                            <h4>Satisfied Clients</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-couter counter-box text-center mb-30 z-index">
                            <div class="fact-icon">
                                <i class="flaticon-label"></i>
                            </div>
                            <h2><span class="counter">100</span></h2>
                            <h4>Problem Solve</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="single-couter counter-box text-center mb-30 z-index">
                            <div class="fact-icon">
                                <i class="flaticon-badge"></i>
                            </div>
                            <h2><span class="counter">7</span></h2>
                            <h4>Award Winner</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter -->

        <!-- team  -->
        <div class="team-area pt-120 pb-90">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-12">
                        <div class="sec-wrapper text-center">
                            <h5>Our Team</h5>
                            <h2 class="section-title">Expert Members.</h2>
                        </div>
                    </div>
                </div>
                <div class="rows">
                    <div class="team-active swiper-container pb-30">
                        <div class="swiper-wrapper">
                            @foreach($members as $member)
                            <div class="team-item swiper-slide">
                                <div class="tpteam text-center mb-30">
                                    <div class="tpteam__img">
                                        <img src="{{ asset($member->image) }}" alt="">
                                        <div class="tpteam__social">
                                            <a href="{{ $member->facebook }}" target="_blank" ><i class="fab fa-facebook-f"></i></a>
                                            <a href="{{ $member->twitter }}" target="_blank" ><i class="fab fa-twitter"></i></a>
                                            <a href="{{ $member->linkedin }}" target="_blank" ><i class="fab fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpteam__text">
                                        <h3 class="tpteam-title"><a href="#">{{ $member->name }}</a></h3>
                                        <h5>{{ $member->designation }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination team-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team  -->

        <!-- faq  -->
        <div class="faq-area black-bg pt-120 pb-90" data-background="frontend/img/pattern/dot.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="sec-wrapper mb-30">
                            <h5>Frequently Asked Questions</h5>
                            <h2 class="section-title text-white">How Can We Help?</h2>
                            <p>We are an advanced Software Development Team that creates and transforms products to endeavor growth.</p>
                            <div class="ab-btn mt-30">
                                <a href="about.html" class="tp-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              How can we help your business?
                            </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We offer modern software solutions for growing your business.
                                            </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              What are the advantages of WebRelu?
                            </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We will implement your thoughts in a way to reach the world.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Let’s find an office near you?
                            </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
                               WebRelu WordPress theme for business?
                             </button>
                                </h2>
                                <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq  -->

      <!-- START PORTFOLIO DESIGN AREA -->
      <section class="portfolio-area pt-120">
        <div class="container">
         <div class="row mb-40">
                    <div class="col-12">
                        <div class="sec-wrapper text-center">
                            <h5>Features Project</h5>
                            <h2 class="section-title">Explore Our Project.</h2>
                        </div>
                    </div>
            </div>
            <div class="row align-items-center mb-50">
                <!-- START PORTFOLIO FILTER AREA -->
                <div class="col-xl-12">
                    <div class="text-center">
                        <div class="portfolio-filter">
                            <button class="active" data-filter="*">Show all</button>
                            <button data-filter=".cat1">WordPress</button>
                            <button data-filter=".cat2">Woocommerce</button>
                            <button data-filter=".cat3">Shopify</button>
                            <button data-filter=".cat4">Php Laravel</button>
                        </div>
                    </div>
                </div>
                <!-- END PORTFOLIO FILTER AREA -->
            </div>
            <div id="portfolio-grid" class="row row-portfolio">
                <!-- For first catagory -->
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1">
                    <div class="tportfolio mb-30">
                        <div class="tportfolio__img">
                           <a href="#">
                              <div class="scrol_img" style="background: url('frontend/img/portfolio/my_portfolio.png')">

                              </div>
                           </a>
                            <div class="tportfolio__text tportfolio__text-2">
                                <h3 class="tportfolio-title"><a href="#">DIU Data Science Lab</a></h3>
                                <h4>CMS Project, Laravel</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of first catagory -->
                <!-- Second Catagory -->
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat2">
                    <div class="tportfolio mb-30">
                     <div class="tportfolio__img">
                        <a href="#">
                           <div class="scrol_img" style="background: url('frontend/img/portfolio/my_portfolio.png')">

                           </div>
                        </a>
                         <div class="tportfolio__text tportfolio__text-2">
                             <h3 class="tportfolio-title"><a href="#">DIU Data Science Lab</a></h3>
                             <h4>CMS Project, Laravel</h4>
                         </div>
                     </div>
                    </div>
                </div>
                <!-- End of second catagory-->

                <!-- Third catagory-->
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat3">
                    <div class="tportfolio mb-30">
                     <div class="tportfolio__img">
                        <a href="#">
                           <div class="scrol_img" style="background: url('frontend/img/portfolio/my_portfolio.png')">

                           </div>
                        </a>
                         <div class="tportfolio__text tportfolio__text-2">
                             <h3 class="tportfolio-title"><a href="#">DIU Data Science Lab</a></h3>
                             <h4>CMS Project, Laravel</h4>
                         </div>
                     </div>
                    </div>
                </div>
                <!-- 3rd end -->

                <!-- 4th Start-->
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat4">
                    <div class="tportfolio mb-30">
                     <div class="tportfolio__img">
                        <a href="#">
                           <div class="scrol_img" style="background: url('frontend/img/portfolio/my_portfolio.png')">

                           </div>
                        </a>
                         <div class="tportfolio__text tportfolio__text-2">
                             <h3 class="tportfolio-title"><a href="#">DIU Data Science Lab</a></h3>
                             <h4>CMS Project, Laravel</h4>
                         </div>
                     </div>
                    </div>
                </div>
                <!-- 4th end-->
            </div>
        </div>
      </section>
      <!-- / END PORTFOLIO DESIGN AREA -->

        <!-- counter -->
        <section class="cta-area cta-overlay pos-rel black-bg pt-120 pb-120" data-overlay="dark" data-opacity="7">
            <div class="fact-bg slider-bg" data-background="frontend/img/slider/slider2.jpg"></div>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="single-couter counter-box mb-30 z-index d-none">
                            <div class="fact-icon">
                                <i class="flaticon-airplane"></i>
                            </div>
                        </div>
                        <div class="sec-wrapper z-index">
                            <h5>Get to Know WebRelu</h5>
                            <h2 class="section-title text-white">Do you have any question? Feel free to contact us.</h2>
                            <div class="ab-btn mt-30">
                                <a href="about.html" class="tp-btn">
                              Learn More
                              <div class="tp-bg">
                                 <div></div>
                                 <div></div>
                                 <div></div>
                               </div>
                           </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter -->

        <!-- blog area start -->
        {{-- <div class="latest-news-area pt-120 pb-90">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-12">
                        <div class="sec-wrapper">
                            <h5>Features News</h5>
                            <h2 class="section-title">Latest news & articles.</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                            <div class="latest-blog-img pos-rel">
                                <img src="frontend/img/blog/sm1.jpg" alt="">
                                <div class="top-date">
                                    <a href="#">15 March 21</a>
                                </div>
                            </div>
                            <div class="latest-blog-content">
                                <div class="latest-post-meta mb-15">
                                    <span><a href="#"><i class="far fa-user"></i> Diboli </a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="latest-blog-title">
                                    <a href="blog-details.html">Time is money but its not full demand.</a>
                                </h3>
                                <div class="blog-arrow">
                                    <a href="blog-details.html"><i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                            <div class="latest-blog-img pos-rel">
                                <img src="frontend/img/blog/sm2.jpg" alt="">
                                <div class="top-date">
                                    <a href="#">22 March 21</a>
                                </div>
                            </div>
                            <div class="latest-blog-content">
                                <div class="latest-post-meta mb-15">
                                    <span><a href="#"><i class="far fa-user"></i> Diboli </a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="latest-blog-title">
                                    <a href="blog-details.html">We Are Trying To Do Best Work.</a>
                                </h3>
                                <div class="blog-arrow">
                                    <a href="blog-details.html"><i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="latest-blog mb-30">
                            <div class="latest-blog-img pos-rel">
                                <img src="frontend/img/blog/sm3.jpg" alt="">
                                <div class="top-date">
                                    <a href="#">28 March 21</a>
                                </div>
                            </div>
                            <div class="latest-blog-content">
                                <div class="latest-post-meta mb-15">
                                    <span><a href="#"><i class="far fa-user"></i> Diboli </a></span>
                                    <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                                </div>
                                <h3 class="latest-blog-title">
                                    <a href="blog-details.html">Nature is The best place for fresh mind.</a>
                                </h3>
                                <div class="blog-arrow">
                                    <a href="blog-details.html"><i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- blog area end -->
    </main>
    @endsection

   


