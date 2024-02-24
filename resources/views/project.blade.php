@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth"
    style="background-image: url('soledeng/projectslider.jpg');">

    <div class="overlay overlay-dark opacity-6"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight"><br></h2>
                    <h2 class="font-bold"><br></h2>
                    <h2 class="font-bold">Solvedeng Portfolio</h2>
                    {{-- <h3 class="font-light pt-2 pb-4">Team of Energetic Engineers with Various Backgrounds in Transmission & Distribution Projects. There is no other PhD credentialed, Electrical & Structural Engineering Design/build firm that is certified with clients Internationally.</h3> --}}
                </div>
            </div>
        </div>
        <div class="bgdark title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Our Projects</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Projects</li>
                    </ul>
                </div>
            </div>
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
            <div data-filter="*" class="cbp-filter-item">
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
            </div>
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
            <div class="cbp-item serviceDicHeigt electrical">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/g5.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('Transmission') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('Transmission') }}">Transmission</a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">Arco Plant Underground Transmission Line –
                            230 kV HPOF
                            Cable Assessment: Advised on state of underground HPOF.
                        </p>
                        <a href="{{ url('Transmission') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item serviceDicHeigt telecom">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/g9.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('Substatio') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('Substatio') }}">Substation – Minor</a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">Fiesta City Substation – 115-12.5 kV New
                            Transformer Bay &
                            Feeder Addition Minnesota Valley Substation.
                        </p>
                        <a href="{{ url('Substatio') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item serviceDicHeigt telecom">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="images/tele.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('NV5') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('NV5') }}">NV5_SoCalGas_SDGE</a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">Provided Drafting support using CAD software
                            and 3D
                            software to support multiple subcontract projects.
                        </p>
                        <a href="{{ url('NV5') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item serviceDicHeigt telecom">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/slide1.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('FIRM') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('FIRM') }}">FIRM Project
                                Description</a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">Support for San Diego Gas & Electric (SDG&E)
                            on their Fire
                            Risk Mitigation project (FiRM) for overhead distribution lines.
                        </p>
                        <a href="{{ url('FIRM') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="cbp-item serviceDicHeigt telecom">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="soledeng/slide2.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('CADD') }}" class="overlay_center border_radius"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('CADD') }}">PLS-CADD modeling for
                                Structural and clearance analysis</a></h3>
                        <p class="bottom15 text-justify dark font-xmedium">C157 12kV Distribution.
                        </p>
                        <a href="{{ url('CADD') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- <div class="cbp-item serviceDicHeigt brand de sign graphics">
                <div class="services-main">
                    <div class="image bottom10">
                        <div class="image"><img alt="SEO" src="images/service-6.jpg"></div>
                        <div class="overlay">
                            <a href="{{ url('services-detail') }}" class="overlay_center border_radius"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="services-content text-center text-md-left">
                        <h3 class="bottom10 darkcolor"><a href="{{ url('services-detail') }}">Financial Planning</a></h3>
                        <p class="bottom15">Phasellus lorem enim, luctus ut velit eget, convallis egestas eros.
                            Sed ornare ligula Progressively generate synergistic eget.
                        </p>
                        <a href="{{ url('services-detail') }}" class="button-readmore">Learn More</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>


@endsection