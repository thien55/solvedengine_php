@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax"
    style="background-image: url('soledeng/contact.jpg');">

    <div class="overlay overlay-dark opacity-5"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding">
                    <h2 class="font-xlight"><br></h2>
                    <h2 class="font-bold"><br></h2>
                    <h2 class="font-bold"> Contact Us</h2>
                    <h4 class="font-light py-2">
                        Solving Problems in the Electric and Gas Utility Industry. Would like to link up with you.
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Contact Us</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Contact US -->
<section id="stayconnect1" class="bglight position-relative padding_top padding_bottom_half noshadow">
    <div class="container whitebox">
        <div class="widget py-5">
            <div class="row">
                <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span
                            class="font-weight-bold">Contact</span> Us
                        <span class="divider-center"></span>
                    </h2>
                    <div class="col-md-8 offset-md-2 bottom35">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolores explicabo laudantium, omnis provident quam reiciendis voluptatum?</p> -->
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 order-sm-2">
                    <div class="contact-meta px-2 text-center text-md-left">
                        <div class="heading-title heading_small">
                            <span class="defaultcolor mb-3">Solvedeng Engineering</span>
                            <h3 class="darkcolor font-normal mb-4">San Diego Office</h3>
                        </div>
                        <p class="bottom10 dark font-xmedium">1223 Cleveland Ave. Suite 200,
                            San Diego, CA, US, 92103</p>
                        <p class="bottom10 dark font-xmedium">
                            1-800-975-9723</p>
                        <p class="bottom10 dark font-xmedium"><a href="mailto:
info@solvedeng.com">
                                info@solvedeng.com</a></p>
                        <p class="bottom10 dark font-xmedium">Mon-Fri: 9am-6pm</p>
                        <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp no-border darkcolor"
                            data-wow-delay="300ms">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a>
                            </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a>
                            </li>
                            <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="whatsapp"><i class="fab fa-whatsapp"></i> </a> </li>
                            <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" id="contact-form-data">
                            <div class="row px-2">
                                <div class="col-md-12 col-sm-12" id="result"></div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name1" class="d-none"></label>
                                        <input class="form-control" id="name1" type="text" placeholder="Name:" required
                                            name="userName">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email1" class="d-none"></label>
                                        <input class="form-control" type="email" id="email1" placeholder="Email:"
                                            name="userEmail">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="message1" class="d-none"></label>
                                        <textarea class="form-control" id="message1" placeholder="Message:" required
                                            name="userMessage"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <button type="button" id="submit_btn1"
                                        class="btn button btn-blue w-100 contact_btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="fas fa-mobile-alt"></i></span>
                        <p class="bottom0 dark font-xmedium"><a href="tel:+14046000396">1-800-975-9723</a></p>
                        <!-- <p class="d-block"><a href="tel:+43720778972">+43720778972</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="fas fa-map-marker-alt"></i></span>
                        <p class="bottom0 dark font-xmedium">San Diego Office </p>


                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="far fa-envelope"></i></span>
                        <p class="bottom0 dark font-xmedium"><a href="mailto:admin@website.com">info@solvedeng.com</a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="widget text-center top60 w-100 p-0">
                    <div class="contact-box">
                        <span class="icon-contact bluecolor"><i class="far fa-clock"></i></span>
                        <p class="bottom15 font-xmedium">09:00am - 06:00pm <span class="d-block"></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact US ends -->
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
                            <!--                            <div class="col-md-12 col-sm-12" id="result"></div>-->
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
                                <button type="submit" class="button btn-default w-100 btn button btn-blue transition-3 "
                                    id="submit_btn">subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection