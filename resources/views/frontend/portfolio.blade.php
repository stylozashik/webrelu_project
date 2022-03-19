@extends('layouts.master')
@section('content')
<main>
    <!-- page title area start -->
    <section class="page__title p-relative d-flex align-items-center" data-overlay="dark" data-opacity="7">
       <div class="page__title-bg" data-background="frontend/img/page-title/page-title-1.jpg"></div>
       <div class="container">
             <div class="row">
                <div class="col-xl-12">
                   <div class="page__title-content mt-100 text-center">
                         <h2>Our Portfolio</h2>
                         <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                               <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               <li class="breadcrumb-item active" aria-current="page">portfolio</li>
                            </ol>
                         </nav>
                   </div>
                </div>
             </div>
       </div>
    </section>
    <!-- page title area end -->

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
                            @foreach($categories as $key=>$category)
                                <a href="category/{{ $category->id }}"><button data-filter="#category_{{$category->id}}">{{$category->name}}</button></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- END PORTFOLIO FILTER AREA -->
            </div>
            <div id="portfolio-grid" class="row row-portfolio">
                <!-- For first catagory -->
                @foreach($c_projects as $c_project)
                    <div class="col-lg-4 col-md-6 col-sm-6 grid-item cat1">
                        <div class="tportfolio mb-30">
                            <div class="tportfolio__img">
                            <a href="#">
                                <div class="scrol_img" style="background: url('frontend/img/portfolio/my_portfolio.png')">

                                </div>
                            </a>
                                <div class="tportfolio__text tportfolio__text-2">
                                    <h3 class="tportfolio-title"><a href="#">{{$c_project->title}}</a></h3>
                                    <h4>{{$c_project->short_description}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End of first catagory -->
            </div>
        </div>
       </section>
      <!-- / END PORTFOLIO DESIGN AREA -->

 </main>
@endsection