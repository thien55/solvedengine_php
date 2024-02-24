@extends('website-layout.main2')
@section('content')
<!-- header -->
<!--Page Header-->
<section id="main-banner-page" class="position-relative page-header team-header section-nav-smooth parallax">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">Meet Our</h2>
                    <h2 class="font-bold">Best Leading Team</h2>
                    <h2 class="font-xlight">In Market</h2>
                    <h3 class="font-light pt-2">The honourable, Cooperative And Elegant</h3>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Our Team</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!--team members-->
<section class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center heading_space animated wow fadeIn" style="margin-right:100px;"
                data-wow-delay="300ms">
                <h2 class="heading bottom30 darkcolor font-light2 text-center">Our <span
                        class="font-weight-bold">Team</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-12 offset-md-1 text-justify ">
                    <p class="mb-0 text-justify font-xmedium">The Solved Engineering Inc. team coming from a diverse set
                        of
                        backgrounds ranges
                        from the designers to the developers under the supervision of CEO Dr. Edward William.
                        <br>

                        Solved Engineering Inc. provides staffing for technicians, engineers, drafters within the Gas
                        and Electric utility Industry and Project Management We are glad to have such a team with
                        smarter minds sets.
                        <br>

                        We are glad to have such a team with smarter minds sets.
                    </p>
                </div>
            </div>
            <div class="col-md-4 text-center ml-4">
                <div class="item">
                    <div class="team-box wow fadeInUp " style="margin-right:100px ;" data-wow-delay="150ms">
                        <div class="image">
                            <img src="soledeng/tm.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h4 class="darkcolor font-xmedium">Dr. Edward William</h4>
                            <p class="font-xmedium">CEO</p>
                            <ul class="social-icons-simple">
                                <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a>
                                </li>
                                <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a>
                                </li>
                                <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!--team members end-->

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
                                <button type="submit"
                                    class="button btn btn-default w-100 btn button btn-blue transition-3"
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