@extends('website-layout.main2')
@section('content')
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth"
    style="background-image: url('images/car.jpg');">

    <div class="overlay overlay-dark opacity-6 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight heading-title-small"><br></h2>
                    <h2 class="font-bold">Jobs at</h2>
                    <h2 class="font-xlight heading-title-small">Soledeng Engineering
                        PVT.LTD </h2>
                    <h4 class="font-light pt-2"><br></h4>
                </div>
            </div>
        </div>
        <div class="bg-blue title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Career</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item hover-light">Career</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Page Header ends -->
<!-- Our Blogs -->
<section id="our-blog" class=" mt-5 padding_bottom_half">
    <div class="container">

        <div class="row py-5">

            <div class="col-md 6 padding_top_half ">
                <h2 class="mb-2 darkcolor font-normal bottom30 "><b>Career At Solvedeng Engineering Pvt.Ltd</b></h2>
                <p class="dark">
                    Anyone interested in learning more about the organization and networking with us can attach their
                    resumes and connect with us on LinkedIn! </p>
                <p class="dark">If you are interested in learning more about the organization and networking with us,
                    just start by
                    attaching your resume and connect with us on social media!</p>
            </div>
            <div class="col-md 6 padding_top_half text-center">
                <h2 class="mb-2 darkcolor font-normal bottom30 "><b>Openings</b> <br><br> </h2>
                <p class="dark">
                    Stay tuned</p>

            </div>
        </div>

    </div>
</section>
<!--Our Blogs Ends-->
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
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label for="userName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Name" required id="userName"
                                        name="userName">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label for="companyName" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Company" id="companyName"
                                        name="companyName">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="form-group">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email" required id="email"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="form-group ">
                                    <input class="form-control bg-white   " type="file" id="companyName"
                                        name="companyName">
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button type="submit" class="button btn-default w-100 btn button btn-blue transition-3"
                                    id="submit_btn">Apply
                                    Now</button>
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