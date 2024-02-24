@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header service-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight pt-3"><br></h2>

                    <h2 class="font-xlight"><br></h2>
                    <h2 class="font-bold">Services Areas</h2>
                    <h3 class="font-light pb-4 pt-2">Solvedeng Inc. provide services in the fields of Engineering
                        and Information Technology. </h3>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Services</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about" class="padding ">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                <h2 class="darkcolor font-bold bottom30">
                    Our Services</h2>
                <p class=" text-justify dark bottom20 font-xmedium">
                    We are a Ph.D. credentialed Professional Electrical & Structural
                    Engineering Research and Consulting firm (MBE / DBE) that offers
                    Engineering Design, Consulting, and Expert Witnessing in the Electric
                    and Gas utility industry.
                    There is no other PhD credentialed, Electrical & Structural Engineering
                    Design/build firm that is certified with clients Internationally.
                    Following are the lists of some core competencies offered by our organization.
                <ul class="font-xmedium dark bottom10 bullet ml-4">
                    <li>Telecommunication Equipment Upgrades</li>
                    <li>Protection & Controls Consulting </li>
                    <li>Digital Relay Settings</li>
                    <li>Up to Transformer Design 745kV / 300MVA</li>
                    <li>Distribution/Substation Design </li>
                    <li>Electrical Inspections / Forensics</li>
                    <li>Protective Relay Scheme Design </li>
                    <li>Expertise in AutoCAD, Bentley Microstation</li>
                    <li>Specialists in Mathcad, PSCAD, ETAP, SKM, PSSE</li>
                    <li>35.4kV and below Distribution Projects </li>
                    <li>138KV to 345kV Transmission Projects </li>
                    <li>Photovoltaic (Solar) Interconnection Studies </li>
                    <li>Staff Augmentation </li>
                </ul>

                </p>
                <a href="#our-team" class="button btn-blue pagescroll ">Learn More</a>

            </div>
            <div class="col-lg-6  col-md-6 padding_bottom_half text-center text-md-left">

                <div class="image custom"><img alt="SEO" src="soledeng/about.jpg"></div>

            </div>
        </div>
    </div>

</section>
<section id="gallery" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn top15" data-wow-delay="300ms">
                <h2 class="heading bottom45 darkcolor font-light2"> <span class="font-weight-bold">Service
                        Areas</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-8 offset-md-2">
                    <p class="mb-n3 dark font-xmedium">Solved Engineering Inc. provides staffing for technicians
                        engineers
                        and
                        drafters within the Gas and Electric utility Industry. In addition, we also provide electrical
                        engineering services and project management.

                        It's all starts with personal choice.</p>
                </div>
                <div class="col-md-6 offset-md-3 bottom40">

                </div>
            </div>
            <div class="col-lg-12">
                <!-- <div id="mosaic-filter" class="cbp-l-filters bottom30 wow fadeIn text-center" data-wow-delay="350ms">
                    <div data-filter="*" class="cbp-filter-item">
                        <span>All</span>
                    </div>
                    <div data-filter=".digital" class="cbp-filter-item">
                        <span>Digital</span>
                    </div>
                    <div data-filter=".design" class="cbp-filter-item">
                        <span>Design</span>
                    </div>
                    <div data-filter=".brand" class="cbp-filter-item">
                        <span>Brand</span>
                    </div>
                    <div data-filter=".graphics" class="cbp-filter-item">
                        <span>Graphics</span>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">

                    <!--Item 1-->
                    <div class="cbp-item brand graphics">
                        <img src="soledeng/g1.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="soledeng/g1.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Xcel Energy
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    <div class="cbp-item digital brand graphics design">
                        <img src="soledeng/g9.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="soledeng/g9.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Potentia Solar
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 3-->
                    <div class="cbp-item design digital graphics">
                        <img src="images/project/n3.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/project/n3.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">KDM Engineering
                                </h4>
                            </div>
                        </div>
                    </div>

                    <!--Item 1-->
                    <div class="cbp-item brand graphics">
                        <img src="images/project/n4.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/project/n4.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">ECI/SDG&E
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    <div class="cbp-item digital brand graphics design">
                        <img src="images/project/n7.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/project/n7.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">Novel Energy
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 3-->
                    <div class="cbp-item design digital graphics">
                        <img src="images/project/n8.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/project/n8.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">PSempra/SDG&E
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    <div class="cbp-item digital brand graphics design">
                        <img src="images/project/n5.jpg" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="images/project/n5.jpg" class="opens" data-fancybox="gallery" title="Zoom In">
                                    <i class="fa fa-search-plus"></i></a>
                                <a href="#" class="opens" title="View Details"> <i class="fas fa-link"></i></a>
                                <h4 class="w-100">PMI Energy</h4>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
</section>
<!--Page Header ends -->
<!-- Services us -->

<!-- Services us ends -->
<!-- Contact US -->
<!-- <section id="stayconnect" class="bglight position-relative">
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
                                    <input class="form-control" type="text" placeholder="Name" required id="userName"
                                        name="userName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Company" id="companyName"
                                        name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button btn btn-default w-100"
                                    id="submit_btn">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- Contact US ends -->
<!--Site Footer Here-->
@endsection