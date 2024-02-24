@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header service-detail-header section-nav-smooth parallax"
    style="background-image: url('images/electrical-detail/1.jpg');">


    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight"><br> </h2>

                    <h2 class="font-xlight"><br></h2>
                    <h2 class="font-bold">Electrical Services</h2>
                    <h3 class="font-light pt-2"><br></h3>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Electrical</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Service Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Services us -->
<section id="our-services" class="padding_top padding_bottom_half bglight">
    <div class="container">
        <div class="row whitebox top15">
            <div class="col-lg-4 col-md-5">
                <div class="image widget heading_space_half"><img alt="SEO" src="images/electrical-detail/3.jpg"></div>

                {{-- <div class="col-12 px-0">
                    <div class="w-100">
                        <div class="full-map short-map heading_space_half" id="map"></div>
                    </div>
                </div> --}}
                <div class="widget heading_space text-center text-md-left">
                    <h4 class="text-capitalize darkcolor bottom30">Need Help?</h4>
                    <div class="contact-table d-table bottom15">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0 dark">+92 318 5453378</p>
                        </div>
                    </div>
                    <div class="contact-table d-table bottom15 text-left">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0 dark">Islamabad, Pakistan</p>
                        </div>
                    </div>
                    <div class="contact-table d-table text-left">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="far fa-clock"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0 dark">Mon to Fri - 09:00am to 6:00pm
                                <span class="d-block dark">Sat & Sun: Closed</span>
                            </p>
                        </div>
                    </div>
                    {{-- <a href="#." class="button btn btn-hover-blue top30"> Download Brochure</a> --}}
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="widget heading_space_half text-center text-md-left">
                    <h3 class="darkcolor font-normal bottom30">Electrical Engineering Services</h3>
                    <p class="bottom30 dark">Circuit analysis is the heart of Electrical engineering, while electrical
                        engineering is the core of every invention. With the advancement in technology, we need more
                        engineering solutions to cope with the pace of development in the sector. </p>

                    <p class="bottom30 dark">Solvedeng Engineering Inc is providing the best electrical engineering
                        solutions.</p>

                    {{-- <div class="owl-carousel" id="service-detail">
                        <div class="item">
                            <div class="image"><img alt="SEO" src="images/solar4.jpg"></div>
                        </div>
                        <div class="item">
                            <div class="image"><img alt="SEO" src="images/solar5.jpg"></div>
                        </div>
                        <div class="item">
                            <div class="image"><img alt="SEO" src="images/solar3.jpg"></div>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div id="accordion">
                            <form class="getin_form wow fadeInUp" data-wow-delay="400ms">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Name" required
                                                id="first_name1" name="first_name">
                                            <label for="first_name1" class="d-none"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="Company"
                                                id="company-name1">
                                            <label for="company-name1" class="d-none"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email" required
                                                id="email1" name="email">
                                            <label for="email1" class="d-none"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Request a Free Consultation"
                                                required id="FreeConsultation1"></textarea>
                                            <label for="FreeConsultation1" class="d-none"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit"
                                            class="button btn btn-alt w-100 btn button btn-blue transition-3 "
                                            id="submit_btn1">Free Consultation</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                        <div class="image widget heading_space_half"><img alt="SEO"
                                src="images/electrical-detail/2.jpg"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services us ends -->



@endsection