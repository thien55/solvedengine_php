@extends('website-layout.main')
@section('content')
<!--Main Slider-->
<section id="main-banner-area" class="position-relative section-nav-smooth">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark"
        data-alias="classic4export" data-source="gallery">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="vertical-bullets" class="rev_slider fullwidthabanner darkcolor vertical-tpb" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn"
                    data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-blue opacity-7"></div>
                    <img src="soledeng/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    {{-- <div class="tp-caption tp-resizeme " data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-40','-40','-30','-30']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                        data-start="1000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight heading-title-small text-white">We Will Proudly</h2>
                    </div> --}}
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['20','20','30','30']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                        data-start="1000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        {{-- <h1 class="text-capitalize font-weight-bold text-white">OUR MISSION</h1> --}}
                        <h1 class="text-capitalize font-weight-bold text-white">Solved Engineering Inc.</h1>

                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['95','95','90','90']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['right','right','center','center']" data-responsive_offset="on"
                        data-start="1500"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        {{-- <h3 class="text-capitalize font-xlight heading-title-small text-white">We are determined to utilize our knowledge and

                            <br />
                            potential in the best possible ways to step up a world of technology.
                        </h3> --}}
                        <h3 class="text-capitalize font-xlight heading-title-small text-white">Solved Engineering Inc.
                            provides staffing for <br> technicians, engineers, drafters within the <br> Gas and Electric
                            utility
                            Industry.
                        </h3>

                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['170','170','140','140']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']"
                        data-responsive_offset="on" data-start="2000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <button class="btn button btn-blue transition-3"><a href="{{ url('about') }}">Learn
                                More</a> </button>
                    </div>
                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn"
                    data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-blue opacity-7"></div>
                    <img src="soledeng/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    {{-- <div class="tp-caption tp-resizeme" data-x="['left','left','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-40','-40','-30','-30']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                        data-start="1000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight heading-title-small text-white">We Will Proudly</h2>
                    </div> --}}
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="['left','left','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['20','20','30','30']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                        data-start="1000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-weight-bold text-white">WHO DO WE SERVE?</h1>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="['left','left','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['95','95','90','90']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['left','left','center','center']" data-responsive_offset="on" data-start="1500"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h3 class="text-capitalize font-xlight  heading-title-small text-white">Solved Engineering Inc.
                            has technical expertise in
                            <br> Electrical Engineering as MBE/DBE certified with <br> Ph.D / M.S. credentials.
                        </h3>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" data-x="['left','left','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['170','170','140','140']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']"
                        data-responsive_offset="on" data-start="2000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <button class="btn button btn-blue transition-3"><a href="{{ url('about') }}"> Learn
                                More</a></button>
                    </div>
                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn"
                    data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="03">
                    <!-- MAIN IMAGE -->
                    <div class="overlay overlay-blue opacity-7"></div>
                    <img src="soledeng/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                        data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    {{-- <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['-40','-40','-30','-30']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                        data-start="1000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h2 class="text-capitalize font-xlight heading-title-small text-white">We Will Proudly</h2>
                    </div> --}}
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['20','20','30','30']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['center','center','center','center']" data-responsive_offset="on"
                        data-start="1000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-weight-bold text-white">WHAT WE DO?</h1>

                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['95','95','90','90']" data-width="none" data-height="none" data-type="text"
                        data-textAlign="['right','right','center','center']" data-responsive_offset="on"
                        data-start="1500"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h3 class="text-capitalize font-xlight text-white">Our quality control on engineering
                            designs, calculations, <br> and peer check reviews are completed with detail.

                        </h3>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" data-x="['right','right','center','center']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['170','170','140','140']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']"
                        data-responsive_offset="on" data-start="2000"
                        data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <button class="btn button btn-blue transition-3"><a href="{{ url('about') }}"> Learn
                                More</a></button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <ul class="social-icons social-icons-simple revicon darkcolor">
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</section>
<!--Main Slider ends -->
<!-- About start -->
<section id="about" class="padding bglight">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-5 padding_bottom_half">
                <h1 class="darkcolor font-normal bottom30">
                    Engineering Your Dreams With Us</h1>
                <p class=" text-justify dark bottom20 font-xmedium">We are a Ph.D. credentialed Professional Electrical
                    Engineering
                    Research and Consulting firm that offers Engineering Design and Calculation / Study Services in the
                    Electric Utilities Industry. </p>
                <span class="font-bold darkcolor dark  bottom30">Certified Company <br></span>
                <ul class="bullet font-xmedium dark ml-4 mb-4 mt-2">
                    <li>NMSDC
                    </li>
                    <li>California Public Utility Commission</li>
                    <li>MBE</li>
                    <li>DBE</li>
                </ul>
                <span class="font-bold darkcolor dark bottom30">Experience Employee</span>
                <p class="font-xmedium  dark mt-2">
                    Team of 20 Engineers with Various Backgrounds in Transmission & Distribution Projects.</p>
                <br>
                <br>
                </p>
                <a href="#our-team" class="button btn-blue pagescroll ">Learn More</a>

            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">

                <div class="image custom"><img alt="SEO" src="soledeng/about.jpg">
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="container">
        {{-- <div class="row">
            <div class="col-md-6 offset-md-3 text-center heading-title">
                <span class="defaultcolor">Basic Info About Company</span>
                <h2 class="darkcolor text-capitalize bottom30 heading-title-small">Your one-stop solution to all
                    engineering related problems</h2>
            </div>
            <div class="col-md-10 offset-md-1 text-center heading_space dark">
                <p > We are PEC Accredited /Certified IT and Engineering Research and Consulting firm that offers
                    Services related to Electrical Engineering, Information Technology, Security and Surveillance and
                    Solar Energy.</p>
            </div>
        </div> --}}
        <div class="row text-center about-row">

            <div class="col-md-4 col-sm-12 wow fadeInUp about-box active">
                <span class="flaticon flaticon-hook"></span>
                <h3 class=" m-0 darkcolor">Our Mission</h3>
                <span class="hr-line mt-2 mb-4"></span>
                <p class="text-justify dark">We are a Ph.D. credentialed Professional Electrical Engineering Research
                    and Consulting firm that offers Engineering Design and Calculation / Study Services in the Electric
                    Utilities Industry. </p>
            </div>
            <div class="col-md-4 col-sm-12 wow fadeInLeft about-box">
                <span class="flaticon flaticon-idea"></span>
                <h3 class=" m-0 darkcolor">Background</h3>
                <span class="hr-line mt-2 mb-4"></span>
                <p class="text-justify dark"><span class="font-bold"> Experience Employee </span><br> Team of 20
                    Engineers with Various Backgrounds in
                    Transmission &
                    Distribution Projects <br>
                    <span class="font-bold">Certified Company </span><br> NMSDC,MBE,
                    DBE <br>
                    California Public Utility Commission <br>

                </p>
            </div>
            <div class="col-md-4 col-sm-12 wow fadeInRight about-box">
                <span class="flaticon flaticon-house"></span>
                <h3 class=" m-0 darkcolor">Who We Are</h3>
                <span class="hr-line mt-2 mb-4"></span>
                <p class="text-justify dark">The expertise to provide comprehensive Electrical & Structural Engineering
                    Design Service, Research & Development, and Consulting.

                    There is no other PhD credentialed, Electrical & Structural Engineering Design/build firm that is
                    certified with clients Internationally.</p>
            </div>
        </div>
    </div> -->
</section>
<!-- About ends -->
<!-- Counters -->
<!-- <section id="bg-counters" class="padding bgdefault darkcolor">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters top10 bottom10">
                    <span class="count_nums font-light" data-to="2020" data-speed="2500"> </span>
                </div>
                <h3 class="font-light top20">Since We Started</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <p class="top20 bottom20 font-light title">Rezolvat Engineering Pvt. Ltd., formed in 2020, intends to serve with a team of experts having diverse professional and educational backgrounds. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                <div class="counters top10 bottom10">
                    <span class="count_nums font-light" data-to="786" data-speed="2500"> </span>
                </div>
                <h3 class="font-light top20">Happy Clients</h3>
            </div>
        </div>
    </div>
</section> -->
<!-- Counters ends-->
<!-- Testimonials -->
<section id="our-services" class="py-5 ">
    <div class="container">
        <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2"><span class="font-weight-bold">Our</span> Major Services
                <span class="divider-center"></span>
            </h2>
            <div class="col-md-10 offset-md-1">
                <p class="mb-n3 dark  font-xmedium">We are a Ph.D. credentialed Professional Electrical &
                    Structural Engineering Research and Consulting firm (MBE / DBE) that offers Engineering Design,
                    Consulting, and Expert Witnessing in the Electric and Gas utility industry.

                    There is no other PhD credentialed, Electrical & Structural Engineering Design/build firm that
                    is certified with clients Internationally.</p>
            </div>
        </div>
        <!-- <div id="services-filter" class="cbp-l-filters dark bottom40 wow fadeIn d-table mx-auto" data-wow-delay="350ms">
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
        <div class="container aboutus">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-5 padding_bottom_half">
                    <div class="image custom"><img alt="SEO" src="soledeng/about2.jpg"></div>

                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">

                    <p class="bottom20 text-justify  font-xmedium dark">

                        Following are the lists of some core competencies offered by our organization. <br>
                    <ul class="bottom35 text-justify  font-xmedium dark bullet ml-4">
                        <li>Circuit Breaker Replacement</li>
                        <li>Telecommunication Equipment Upgrades</li>
                        <li> Protection & Controls Consulting </li>
                        <li>Digital Relay Settings</li>
                        <li>Up to Transformer Design 745kV / 300MVA</li>
                        <li>Distribution/Substation Design</li>
                        <li>Electrical Inspections / Forensics</li>
                        <li> Protective Relay Scheme Design</li>
                    </ul>

                    <!-- 9. Expertise in AutoCAD, Bentley Microstation<br>
10. Specialists in Mathcad, PSCAD, ETAP, SKM, PSSE<br>
11. 35.4kV and below Distribution Projects<br>
12. 138KV to 345kV Transmission Projects<br>
13. Photovoltaic (Solar) Interconnection Studies<br>
14. Staff Augmentation<br> -->

                    </p>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <a class="btn button btn-blue transition-3 mt-4" href="{{ url('services') }}">All Services</a>
                </div>
            </div>
</section>
<section id="our-services" class="padding bglight">
    <div class="container">
        <div class="col-md-12 text-center heading_space wow fadeIn" data-wow-delay="300ms">
            <h2 class="heading bottom30 darkcolor font-light2"><span class="font-weight-bold">Our</span> Projects
                <span class="divider-center"></span>
            </h2>

            <div class="col-md-8 offset-md-2">
                <!-- <p class="mb-n3 dark">Solved Engineering Inc. provides staffing for technicians engineers and drafters
                    within the Gas and Electric utility Industry. In addition, we also provide electrical engineering
                    services and project management.</p> -->
            </div>
        </div>
        <div id="services-filter" class="cbp-l-filters dark bottom40 wow fadeIn d-table mx-auto" data-wow-delay="350ms">
            <!-- <div data-filter="*" class="cbp-filter-item">
                <span>All</span>
            </div>
            <div data-filter=".solar" class="cbp-filter-item">
                <span>Solar</span>
            </div>
            <div data-filter=".electrical" class="cbp-filter-item">
                <span>Electrical</span>
            </div>
            <div data-filter=".security" class="cbp-filter-item">
                <span>Security</span>
            </div>

            <div data-filter=".telecom" class="cbp-filter-item">
                <span>Telecom</span>
            </div> -->
        </div>
        <div id="services-measonry" class="cbp">
            <div class="cbp-item serviceDicHeigt solar  ">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/g8.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('sangas') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content brand text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('sangas') }}">Asset Management</a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">Lead development, maintenance,
                            implementation, and
                            tracking of IPS-Energy US Asset management policies, strategies, objectives, and plans.
                        </p>
                        <a href="{{ url('sangas') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item serviceDicHeigt electrical ">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/g7.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('kdm') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('kdm') }}"> Utility Commission
                                Participation
                            </a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">Attended California Public Utility Commission
                            Meetings –
                            Registered Business California MBE Certifications.
                        </p>
                        <a href="{{ url('kdm') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item serviceDicHeigt security ">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/g3.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('intelligrid') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('intelligrid') }}">Minor Transmission </a>
                        </h3>
                        <p class="bottom15 text-justify dark font-xmedium">Creekview Remote End Work: Designed the
                            installation of
                            OPGW, a new line relay panel, and a new communication cabinet. Coordinated with the client
                            about scope changes.
                        </p>
                        <a href="{{ url('intelligrid') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>

            </div>

        </div>
        <div>
            <div class="text-center">
                <a class="btn button btn-blue transition-3 mt-4" href="{{ url('project') }}">All Projects</a>
            </div>
        </div>
    </div>
</section>

<!--testimonials end-->
<!--Pricing Start-->

<!--Pricing ends-->
<!-- Our Team-->
<!-- <section id="our-team" class="padding-top mt-4 teams-border bg-light">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title wow fadeInUp text-center" data-wow-delay="200ms">
                    <span class="defaultcolor">Heroes Behind The Company</span>
                    <h2 class="darkcolor font-normal bottom30">Meet Our Experts</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="ourteam-slider" class="owl-carousel">
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="150ms">
                            <div class="team-content">
                                <h4 class="darkcolor">Shoaib Hussain</h4>
                                <p class="dark">Technical Sales</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="https://www.linkedin.com/in/shoaibhussain133"><i
                                                class="fab fa-linkedin"></i>
                                        </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="200ms">

                            <div class="team-content ">
                                <h4 class="darkcolor">Arooba Ghaffar </h4>
                                <p class="dark">Document Drafter</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="https://www.linkedin.com/in/aroobakhan23"><i
                                                class="fab  fa-linkedin"></i>
                                        </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="250ms">

                            <div class="team-content">
                                <h4 class="darkcolor">Maryam Khalid </h4>
                                <p class="dark">Data Analyst</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook"
                                            href="https://www.linkedin.com/in/maryam-khalid-3a698a128"><i
                                                class="fab fa-linkedin"></i>
                                        </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="300ms">

                            <div class="team-content">
                                <h4 class="darkcolor">Hareem Khan </h4>
                                <p class="dark">HR Recruiter <br><br></p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="https://www.linkedin.com/in/hareemkhan232"><i
                                                class="fab fa-linkedin"></i>
                                        </a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="150ms">

                            <div class="team-content">
                                <h4 class="darkcolor">Bilal Tahir </h4>
                                <p class="dark">IT Analyst <br><br></p>
                                <ul class="social-icons-simple mb-2">
                                    <li><a class="facebook" href="https://www.linkedin.com/in/bilal-tahir-5bb55a1a5/"><i
                                                class="fab fa-linkedin"></i>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="150ms">

                            <div class="team-content">
                                <h4 class="darkcolor">Shakir Abbas </h4>
                                <p class="dark">Developer<br></p>
                                <ul class="social-icons-simple mb-2">
                                    <li><a class="facebook" href="https://www.linkedin.com/in/shakir-abbas-81a374120"><i
                                                class="fab fa-linkedin"></i>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="250ms">

                            <div class="team-content">
                                <h4 class="darkcolor">Rashid Mehmood </h4>
                                <p class="dark">Research Analyst <br><br></p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook"
                                            href="https://www.linkedin.com/in/rashid-mehmood-07b05866/"><i
                                                class="fab fa-linkedin"></i>
                                        </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="200ms">
                            <div class="image">
                                <img src="images/team-2.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Jessica Tellon</h4>
                                <p>Constructer</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-box wow fadeInUp" data-wow-delay="250ms">
                            <div class="image">
                                <img src="images/team-3.jpg" alt="">
                            </div>
                            <div class="team-content">
                                <h4 class="darkcolor">Doryano Jung</h4>
                                <p>Agency Owner</p>
                                <ul class="social-icons-simple">
                                    <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
</div>
</div>
</div>
</div>
</section>

<!-- Our Team ends-->
<!-- Partners-->
<section id="our-partners" class="padding ">
    <div class="container">
        <div class="row">
            <h2 class="d-none">Partners Carousel</h2>
            <div class="col-md-12 col-sm-12">
                <div id="partners-slider" class="owl-carousel">
                    <div class="item">
                        <div class="logo-item"> <img alt="" src="soledeng/s1.jpg"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="soledeng/s10.jpg"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="soledeng/cl5.jpg"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="soledeng/sl7.jpg"></div>
                    </div>
                    <div class="item">
                        <div class="logo-item"><img alt="" src="soledeng/sl6.png"></div>
                    </div>

                    <div class="item">
                        <div class="logo-item"><img alt="" src="soledeng/nv5.jpg"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners ends-->
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
                                <button type="submit" class="button btn-default w-100 btn button btn-blue transition-3"
                                    id="submit_btn">subscribe</button>
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