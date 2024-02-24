@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header section-nav-smooth parallax gallery-detail-header"
    style="background-image: url('images/project/6.jpg');">

    <div class="overlay overlay-dark opacity-6"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight"><br></h2>
                    <h2 class="font-bold">Public Utility Commission Participation</h2>
                    <h2 class="font-xlight"><br></h2>
                    <h3 class="font-light pt-2"><br></h3>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap bottom25">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Public Utility Commission Participation Detail</h3>
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
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#.">Public Utility Commission
                                Participation</a>
                        </h3>
                        <p class="top10">Attended California Public Utility Commission Meetings – Registered Business
                            California MBE Certifications.

                            Xcel Energy and Minnesota Solar Garden Dispute – Independent Engineering Study Attached
                            Performed Interconnection/Voltage Flicker Study 37 Solar Applications. At Lake Pulaski,
                            Montrose, and other Substations.

                            Report Submitted to Minnesota Public Utility Commission. </p>

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