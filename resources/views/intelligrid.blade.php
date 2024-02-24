@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header section-nav-smooth parallax gallery-detail-header"
    style="background-image: url('images/project/4.jpg');">

    <div class="overlay overlay-dark opacity-6"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight"><br></h2>
                    <h2 class="font-bold">Minor Transmission Projects Project</h2>
                    <h2 class="font-xlight"><br></h2>
                    <h3 class="font-light pt-2"><br></h3>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap bottom25">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Minor Transmission Projects Detail</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item">Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Gallery Details -->
<section id="gallery-detail" class=" padding_bottom_half">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="news_item shadow-equal">

                    <div class="news_desc text-center text-md-left">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#.">Minor Transmission Projects </a>
                        </h3>
                        <p class="top10">Creekview Remote End Work: Designed the installation of OPGW, a new line relay
                            panel, and a new communications cabinet. Coordinated with the client about scope changes and
                            the progress of the project. Performed a DC battery calculation on the existing battery
                            system and determined that it was sufficient to accommodate the additional loads from the
                            project.
                            <br>
                            Replace Line 80332 Relays: Designed the installation of a new line relay panel,
                            communications panel, bus-tie breaker panel, and converting an existing panel into an remote
                            terminal unit (RTU) panel. Coordinated with the client about panel wiring, project progress,
                            and remote substation challenges. <br>

                            Mullet River to Sheboygan Energy Center Optical Ground Wire (OPGW) Installation: Designedthe
                            installation of OPGW at two remote substations as a part of the Mullet River to Sheboygan
                            Energy Center project. Coordinated with the client to re-route the path of the OPGW
                            effectively between the three substations.
                            <br>
                            Fitzgerald Remote Ends Optical Ground Wire (OPGW) Installation: Designed the installation
                            ofOPGW at two remote substations as a part of the Fitzgerald SS project. Oversaw the
                            drafting team to ensure that the new CAD standard from the client was used correctly.
                            <br>
                            Substation Security Enhancement Project: Upgraded three substations to meet the new NERC
                            CIP-014 Physical Security standard. Designed on a tight schedule and this included
                            communications design, SCADA design, and frequent communication with the client.
                            <br>
                            Sunset Point: Performed a DC battery calculation to ensure that the battery load could
                            handle the additional load. The calculation determined that the current battery system was
                            sufficient with the additional load.
                            <br>
                            Wolcott Substation – 230 kV - 2 Shunt Reactor Bay Addition & Ring Bus Breaker Replacement
                            <br>
                            Lead Substation Engineer
                            <br>
                            Hawks Nest Lake Substation – Green Field 345 kV Wind Farm Interconnect
                            <br>
                            Lead Substation Engineer <br>
                            Jordan Substation – 69 kV 3 Breaker Addition & 69 -12.5 kV Transformer replacement
                            <br>
                            Lead Substation Engineer
                            <br>
                            Hidalgo Substation – Green Field 345 kV Wind Farm Collector Substation
                            <br>
                            Substation Engineer
                            <br>
                            Reynolds Substation – Green Field 765 kV MVP Substation
                            <br>
                            Owner’s Engineer - Specification & Bid Analysis Work
                            Peace Garden Substation – Green Field 230 kV Wind Farm Interconnect
                        </p>
                        <p class="heading_space">Our team collaborated with the client, and made recommendations to
                            ensure equipment selection and system design has been optimized for the client’s needs.

                        </p>
                        <div class="post-comment">
                            <h4 class="text-capitalize darkcolor">Add Comment</h4>
                            <p class="bottom20 top10"><small class="fas fa-asterisk"></small> Your Email address will
                                not be published</p>
                            <h5 class="pb-1">Your Rating : <span id="ratingText" class="darkcolor">Please Select</span>
                            </h5>
                            <ul class="comment top10 bottom30">
                                <li><a href="javascript:void(0)" class="darkcolor" id="rattingIcon">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </a>
                                </li>
                            </ul>
                            <form class="getin_form" id="post-a-comment">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group bottom35">
                                            <label for="first_name1" class="d-none"></label>
                                            <input class="form-control" type="text" placeholder="First Name:" required
                                                id="first_name1">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group bottom35">
                                            <label for="email1" class="d-none"></label>
                                            <input class="form-control" type="email" placeholder="Email:" required
                                                id="email1">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group bottom35">
                                            <label for="message" class="d-none"></label>
                                            <textarea class="form-control" placeholder="Message"
                                                id="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit"
                                            class="button btn btn-alt btn button btn-blue transition-3 ">submit
                                            request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection