@extends('website-layout.main2')
@section('content')
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header testimonial-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 mt-4">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">We Value</h2>
                    <h2 class="font-bold">Customer Feedback</h2>
                    <h2 class="font-xlight">In Works</h2>

                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Client's </h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('index-light') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Clients</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!--Testimonial-->
<section id="testinomila_page" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2">Our <span class="font-weight-bold">Clients</span>

                    <span class="divider-center"></span>
                </h2>

            </div>
        </div>
        <div id="testimonial-grid" class="cbp mt-n3">
            <!--item 1-->
            <div class="cbp-item wow fadeIn" data-wow-delay="350ms">
                <div class="testimonial-wrapp">
                    <div class="testimonial-text">
                        <div class="image"><img alt="SEO" src="soledeng/s1.jpg"></div>
                    </div>
                </div>
            </div>
            <!--item 1-->
            <div class="cbp-item wow fadeIn" data-wow-delay="350ms">
                <div class="testimonial-wrapp">
                    <div class="testimonial-text">
                        <div class="image"><img alt="SEO" src="soledeng/s10.jpg"></div>
                    </div>
                </div>
            </div>
            <!--item 1-->
            <div class="cbp-item wow fadeIn " data-wow-delay="350ms">
                <div class="testimonial-wrapp">
                    <div class="testimonial-text">
                        <div class="image"><img alt="SEO" src="soledeng/sl6.png"></div>
                    </div>
                </div>
            </div>
            <!--item 1-->
            <div class="cbp-item wow fadeIn " data-wow-delay="350ms">
                <div class="testimonial-wrapp">
                    <div class="testimonial-text">
                        <div class="image"><img alt="SEO" src="soledeng/nv5.jpg"></div>
                    </div>
                </div>
            </div>
            <!--item 1-->
            <div class="cbp-item wow fadeIn mt-1" data-wow-delay="350ms">
                <div class="testimonial-wrapp">
                    <div class="testimonial-text">
                        <div class="image"><img alt="SEO" src="soledeng/sl7.jpg"></div>
                    </div>
                </div>
            </div>
            <!--item 1-->
            <div class="cbp-item wow fadeIn mt-1" data-wow-delay="350ms">
                <div class="testimonial-wrapp">
                    <div class="testimonial-text">
                        <div class="image"><img alt="SEO" src="soledeng/cl5.jpg"></div>
                    </div>
                </div>
            </div>


            <!--item 1-->



        </div>
    </div>
</section>
@endsection