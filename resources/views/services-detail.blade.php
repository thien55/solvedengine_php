@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header service-detail-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Our </h2>
                    <h2 class="font-bold">Major Services</h2>
                    <h2 class="font-xlight">Areas</h2>
                    <h3 class="font-light pt-2">Rezolvat Pvt. Ltd. provides staffing for engineers and drafters within the Electric utility Industry.</h3>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Service Detail</h3>
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
                <div class="image widget heading_space_half"><img alt="SEO" src="images/solar2.jpg"></div>
                <div class="col-12 px-0">
                    <div class="w-100">
                        <div class="full-map short-map heading_space_half" id="map"></div>
                    </div>
                </div>
                <div class="widget heading_space text-center text-md-left">
                    <h4 class="text-capitalize darkcolor bottom30">Need Help?</h4>
                    <div class="contact-table d-table bottom15">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0">0318-5453378 <span class="d-block">0318-5453378</span></p>
                        </div>
                    </div>
                    <div class="contact-table d-table bottom15 text-left">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0">Islamabad , Pakistan</p>
                        </div>
                    </div>
                    <div class="contact-table d-table text-left">
                        <div class="d-table-cell cells">
                            <span class="icon-cell"><i class="far fa-clock"></i></span>
                        </div>
                        <div class="d-table-cell cells">
                            <p class="bottom0">Mon to Sat - 05:00pm to 2:00am
                                <span class="d-block">Sunday: Closed</span>
                            </p>
                        </div>
                    </div>
                    <a href="#." class="button btn btn-hover-blue top30"> Download Brochure</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="widget heading_space_half text-center text-md-left">
                    <h3 class="darkcolor font-normal bottom30">Solar Services</h3>
                    <p class="bottom30">Solar energy can be used as an alternative to the electricity. Utilization of the solar energy for various purposes could divide the burden on the electricity production. Installation of solar panels as an alternative to electricity lines may reduce the load on electricity by as much as 50% and similarly so as the cost of electricity consumption. </p>
                    <p class="bottom30">We are here to help you cut your bill in half by providing best services solar related products.</p>
                    <div class="owl-carousel" id="service-detail">
                        <div class="item">
                            <div class="image"><img alt="SEO" src="images/solar3.jpg"></div>
                        </div>
                        <div class="item">
                            <div class="image"><img alt="SEO" src="images/solar2.jpg"></div>
                        </div>
                        <div class="item">
                            <div class="image"><img alt="SEO" src="images/solar3.jpg"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link darkcolor" data-toggle="collapse" href="#collapseOne">Our Mission</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We are determined to utilize our knowledge and potential in the best possible ways to step up a world of technology. Going an extra mile to help our country in the optimum utilization of resources</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseTwo">Our Goals</a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>After establishing a stronghold in the United States for 6 years, we are now branching out to serve in the Pakistani market as well. A well-reputed firm in the foreign market and now achieving yet another milestone to provide engineering solutions to a wider market simultaneously working on local and international projects. We are a well-reputed and well achieved USA based firm that is established in 2014 and recently registered its branch in Pakistan as well. We are working on international as well as national projects.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseThree">Inspections & Occupancy </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseFour">Top Achievements </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link darkcolor" data-toggle="collapse" href="#collapseFive">WHO WE ARE </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We are a team of highly qualified personnel with diverse backgrounds and experiences in various Projects related to IT and Engineering. We are constantly and systematically monitoring client experience and creating better solutions for them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" required id="first_name1" name="first_name">
                                        <label for="first_name1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="tel" placeholder="Company" id="company-name1">
                                        <label for="company-name1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email" required id="email1" name="email">
                                        <label for="email1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control"  placeholder="Request a Free Consultation" required id="FreeConsultation1"></textarea>
                                        <label for="FreeConsultation1" class="d-none"></label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="button btn btn-alt w-100" id="submit_btn1">Free Consultation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services us ends -->
<!-- Contact US -->
<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                        <h3 class="darkcolor bottom20">Stay Connected</h3>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                        <div class="row">
                            <div class="col-md-12 col-sm-12" id="result"></div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name" required id="userName" name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Company"  id="companyName" name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button btn btn-default w-100" id="submit_btn">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->

@endsection