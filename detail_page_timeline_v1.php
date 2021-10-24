<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/timeline.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/carousel.css">
        <title>Detail Page</title>
        <style>
                .timeline {
                        position: relative;
                }

                /*Line*/

                .timeline>li::before {
                        content: '';
                        position: absolute;
                        width: 3px;
                        background-color: #000;
                        top: 0;
                        bottom: 0;
                        left: -19px;
                }

                /*Circle*/

                .timeline>li::after {
                        text-align: center;
                        padding-top: 10px;
                        z-index: 10;
                        content: counter(item);
                        position: absolute;
                        width: 50px;
                        height: 64px;
                        border: 3px solid white;
                        border-radius: 50%;
                        top: 0;
                        left: -43px;
                        line-height: 45px;
                }

                /*Content*/

                .timeline>li {
                        counter-increment: item;
                        padding: 10px 10px;
                        margin-left: 0px;
                        min-height: 70px;
                        position: relative;
                        background-color: white;
                        list-style: none;
                }

                .timeline>li:nth-last-child(1)::before {
                        width: 0px;
                }
        </style>
</head>

<body>
        <?php include_once 'header.php' ?>
        <div style="height: 5vh;"></div>
        <div class="container">
                <div class="upper_part">
                        <a href="#"><img src="img/challenge.png" alt=""></a>
                        <h3 class="summer_challenge my-2 card-title pb-3">4 WEEKS SUMMER SHRED CHALLENGE</h3>
                        <div id="galleryDesktop">
                                <div class="row ">
                                        <div class="three" ><img class="img-fluid" src="img/telescope.png"></div>
                                        <div class="three" ><img class="img-fluid" src="img/telescope.png"></div>
                                        <div class="one" >
                                                <div class="row">
                                                        <div class="col-sm-12 "><img class="img-fluid myimg my_image" src="img/ball.png">
                                                        </div>
                                                        <div class="col-sm-12 "><img class="img-fluid myimg my_image" src="img/ball.png">
                                                        </div>

                                                </div>
                                        </div>
                                        <div class="three" ><img class="img-fluid" src="assets/telescope.png"></div>
                                </div>
                        </div>

                        <div id="galleryMobile">
                                <div class="row">
                                        <div class="col-md-3 col-12 px-1 my_image_div"><img class="img-fluid firstbanner" src="assets/telescope.png"></div>
                                        <div class="col-md-3 col-3 px-1 my_image_div"><img class="img-fluid" src="assets/ball.png">
                                        </div>
                                        <div class="col-md-3 col-3  px-1 my_image_div"><img class="img-fluid" src="assets/ball.png">
                                        </div>
                                        <div class="col-md-3 col-3  px-1 my_image_div"><img class="img-fluid" src="assets/ball.png">
                                        </div>
                                        <div class="col-md-3 col-3  px-1 my_image_div"><img class="img-fluid" src="assets/ball.png">
                                        </div>
                                </div>
                        </div>
                </div>
                <section class="description">
                        <di class="row">
                                <div class="col-md-7 col-sm-12">
                                        <div class="card mycard bgorange ">

                                                <div>
                                                        <div class="inner ">
                                                                <div class="itemleft">
                                                                        <div class="d-flex align-items-center my_font">
                                                                                <div class="d-flex flex-column pr-5">
                                                                                        <i class="fa fa-clock "></i>
                                                                                        <span class="payment ">Payment</span>
                                                                                        <span class="Paid "><b>Paid</b></span>
                                                                                </div>
                                                                                <div class="d-flex flex-column pl-5">
                                                                                        <i class="fa fa-calendar "></i>
                                                                                        <span class="payment ">Payment</span>
                                                                                        <span class="Paid "><b>21
                                                                                                        days</b></span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="itemleft">


                                                                </div>
                                                        </div>
                                                        <p class="fitness_text mb-1"><b>Type: </b> <span>abs,full
                                                                        body,Weight
                                                                        loss</span></p>
                                                        <p class="fitness_text"><b>Equipment: </b><span>Fitness
                                                                        mat,Resistence band</span></p>
                                                </div>
                                        </div>
                                        <div class="card mycard  p-3 px-5">
                                                <div class="d-flex justify-content-between">
                                                        <div class="pb-3">
                                                                <h5>What i am offering</h5>
                                                        </div>
                                                        <div class="d-sm-block d-md-none  text-right">
                                                                <a onclick="my_arrow2()" id="put_icon2" data-toggle="collapse" href="#show_content1"><img src="img/icon/drop_down.svg" alt=""></a>
                                                                <input type="hidden" id="image2" value="0">
                                                        </div>
                                                </div>
                                                <div class="text_width_card">
                                                        <div class="d-none d-sm-none d-md-block">
                                                                <div class="text-justify text_offerering ">
                                                                        <p>Ono booking two pooplo Rostorativo Contact is a
                                                                                mindfulness and empathy
                                                                                practice that helps us to be present in the
                                                                                moment. in Our bodies. and With the
                                                                                important people in our lives, including
                                                                                ourselves.&nbsp;<a class="text-black read_more" data-toggle="collapse" href="#demo"><span>read
                                                                                                more!</span></a>
                                                                        </p>





                                                                </div>
                                                                <div id="demo" class="collapse">
                                                                        You'll work With your 'RL partner (dont have one? See
                                                                        below) as I guide you
                                                                        through a floor-based sequence of touch and
                                                                        weight-sharing, where we slow
                                                                        down. invite stillnoss and allow the body to rest Doop
                                                                        relaxation helps with an.
                                                                        Bla bal ablaj isdhsotyeo gorytogfurep.
                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                        elit,
                                                                        sed do eiusmod tempor incididunt ut labore et dolore
                                                                        magna aliqua. Ut enim ad minim veniam,
                                                                        quis nostrud exercitation ullamco laboris nisi ut
                                                                        aliquip ex ea commodo consequat.
                                                                </div>
                                                        </div>
                                                        <div class="d-sm-block  d-md-none">
                                                                <div class="text-justify text_offerering">
                                                                        <p>Ono booking two pooplo Rostorativo Contact is a
                                                                                mindfulness and empathy
                                                                                practice that helps us to be t...</p>

                                                                        <p id="show_content1" class="collapse ">
                                                                                in Our bodies. and With the
                                                                                important people in our lives, including
                                                                                ourselves.
                                                                                You'll work With your 'RL partner (dont have
                                                                                one? See below) as I guide you
                                                                                through a floor-based sequence of touch and
                                                                                weight-sharing, where we slow
                                                                                down. invite stillnoss and allow the body to
                                                                                rest Doop relaxation helps with an.
                                                                                Bla bal ablaj isdhsotyeo gorytogfurep.
                                                                                Lorem ipsum dolor sit amet, consectetur
                                                                                adipisicing elit,
                                                                                sed do eiusmod tempor incididunt ut labore et
                                                                                dolore magna aliqua. Ut enim ad minim veniam,
                                                                                quis nostrud exercitation ullamco laboris nisi
                                                                                ut aliquip ex ea commodo consequat.

                                                                        </p>

                                                                </div>

                                                        </div>
                                                </div>
                                        </div>
                                        <!-- what to bring -->
                                        <div class="card mycard  p-3 px-5">
                                                <div class="d-flex justify-content-between">
                                                        <div class="pb-3">
                                                                <h5>What to bring</h5>
                                                        </div>

                                                        <div class="d-md-none d-sm-block  text-right">
                                                                <a onclick="my_arrow()" id="put_icon" data-toggle="collapse" href="#show_content2"><img src="img/icon/drop_down.svg" alt=""></a>
                                                                <input type="hidden" id="image1" value="0">
                                                        </div>
                                                </div>


                                                <div class="text_width_card">
                                                        <p id="show_content2" class="collapse ">
                                                                Lorem ipsum dolor sit amet.
                                                        </p>
                                                        <p>

                                                                Your meal or snacks to join mindful eating session (anything to
                                                                eat is
                                                                fine but
                                                                you may feel more comfortable if you bring something healthy
                                                                like a
                                                                bread or
                                                                salad or healthy snacks! Quantity: We oat 6-10 bites together)
                                                                <a class="text-black read_more" data-toggle="collapse" href="#what_to_bring"><span>read more!</span></a>

                                                        </p>


                                                        <div id="what_to_bring" class="collapse">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                aliqua. Ut enim ad minim veniam,
                                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                                commodo consequat.
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <!-- updated_work -->
                                <div class="col-md-5 col-sm-12">
                                        <div class="card mycard p-4">
                                                <div class="d-flex justify-content-between">
                                                        <a class="pull-left"><img src="img/workshop.png" alt=""></a>
                                                        <label class="pull-right txtred bold">12 seat left</label>
                                                </div>
                                                <br>
                                                <div class="card-body nopagerightbar">
                                                        <div class="d-flex justify-content-between">
                                                                <div class="d-flex flex-column">
                                                                        <span class="label_color py-2 bold">Date</span>
                                                                        <!-- <p ><b class="label_color" >Date</b></p> -->

                                                                        <h6 class="card-subtitle ">Sun,Feb 2021</h6>

                                                                </div>

                                                                <div class="d-flex flex-column">
                                                                        <span class="label_color py-2 bold">Time</span>

                                                                        <h6 class="card-subtitle  ">8:30 pm IST</h6>

                                                                </div>
                                                        </div>

                                                        <p class="pt-2">
                                                                Lorem ipsum dolor sit amet asdasdasd consectetur,
                                                                adipisicing elit. asdsad Assumenda, eius?
                                                        </p>

                                                </div>
                                                <br>
                                                <div class="d-flex justify-content-between py-2">
                                                        <h3 class="label_color leftprice bold">RS 3000</h3>
                                                        <a href="#"><img src="img/but_now.png" alt=""></a>


                                                </div>


                                        </div>
                                </div>
        </div>
        </section>

        <section class="tab_section p-0">
                <div class="container">
                        <div class="bs-example">
                                <div class="accordion" id="accordionExample">
                                        <hr class="card_border">
                                        <br>
                                        <div class="">
                                                <div class="card-header my_card_header" id="headingOne">
                                                        <h4 class="mb-0">
                                                                <!-- purple -->
                                                                <a class="image_title_purple my_week" data-toggle="collapse" href="#collapseOne">
                                                                        Week 1 <i class="fa fa-chevron-down arrow-val"></i></a>

                                                        </h4>
                                                </div>
                                                <div class="collapse" id="collapseOne">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Voluptatibus dolorem quia
                                                                laboriosam molestias harum nostrum, magni sequi
                                                                repellendus ducimus minima eum
                                                                quas ab voluptas, omnis doloremque libero fuga enim
                                                                nisi.</p>
                                                        <h4 class="pb-3">Day </h4>
                                                        <ol class="timeline">
                                                                <li>
                                                                        <div class="row">
                                                                                <div class="col-md-6 col-sm-12 mt-2">
                                                                                        <div class="card box_shadow p-1">
                                                                                                <div class="card-img-top">
                                                                                                        <video class="my_border" style="width: 100%; border-radius: 10px;" controls>
                                                                                                                <source src="img/video.mp4" type="video/mp4">
                                                                                                        </video>
                                                                                                        <div class="icon_width mx-auto d-flex justify-content-between mt-2 align-items-center">
                                                                                                                <div class="d-flex justify-content-start">
                                                                                                                        <p class="">
                                                                                                                                <span class="mr-1"><img src="img/eye_icon.png" alt=""></span><span>20k</span>
                                                                                                                                <span>views</span>
                                                                                                                        </p>

                                                                                                                </div>

                                                                                                                <div>
                                                                                                                        <p class="">
                                                                                                                                <span class="mr-1"><img src="img/time_circle.png" alt=""></span><span>25-30</span>
                                                                                                                                <span>mins</span>
                                                                                                                        </p>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <!-- challenge -->
                                                                                                        <div style="width: 95%;" class="mx-auto">
                                                                                                                <a href="#" class=" pt-1">
                                                                                                                        <img src="img/activity.png" alt=""></a>

                                                                                                                <h4 class="card-title py-1 my_card_title_text">
                                                                                                                        4
                                                                                                                        WEEKS
                                                                                                                        SUMMER
                                                                                                                        SHRED
                                                                                                                        CHALLENGE
                                                                                                                </h4>
                                                                                                                <hr style="border-top: 2px solid #746d6db9;">
                                                                                                                <p class="card-text py-3 my-0 my-font-family">
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                </p>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-6 col-sm-12 mt-2">
                                                                                        <div class="card box_shadow p-1">
                                                                                                <div class="card-img-top">
                                                                                                        <img src="img/liveclass.png" class="img-fluid my_border">
                                                                                                        <div class="icon_width mx-auto d-flex justify-content-between mt-2 align-items-center">
                                                                                                                <div class="d-flex justify-content-start">
                                                                                                                        <p class="">
                                                                                                                                <span class="mr-1"><img src="img/eye_icon.png" alt=""></span><span>20k</span>
                                                                                                                                <span>views</span>
                                                                                                                        </p>

                                                                                                                </div>

                                                                                                                <div>
                                                                                                                        <p class="">
                                                                                                                                <span class="mr-1"><img src="img/time_circle.png" alt=""></span><span>25-30</span>
                                                                                                                                <span>mins</span>
                                                                                                                        </p>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <!-- challenge -->
                                                                                                        <div class="icon_width mx-auto">

                                                                                                                <a class="pt-1" href="#"><img src="img/activity.png" alt=""></a>
                                                                                                                <h4 class="card-title py-1 text-uppercase my_card_title_text">
                                                                                                                        workout
                                                                                                                        live
                                                                                                                        with
                                                                                                                        me
                                                                                                                </h4>
                                                                                                                <hr style="border-top: 2px solid #746d6db9;">
                                                                                                                <p style="margin-bottom: 10px;" class="card-text py-0 my-font-family">
                                                                                                                        Lorem
                                                                                                                        ipsum
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet,
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                </p>
                                                                                                                <div class="text-right py-2">
                                                                                                                        <a class="">
                                                                                                                                <img src="img/but_now.png" alt="">
                                                                                                                        </a>
                                                                                                                </div>


                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="row">
                                                                                <div class="col-md-6 col-sm-12 mt-2">
                                                                                        <div class="card box_shadow p-1">
                                                                                                <div class="card-img-top">
                                                                                                        <video class="my_border" style="width: 100%; border-radius: 10px;" controls>
                                                                                                                <source src="img/video.mp4" type="video/mp4">
                                                                                                        </video>
                                                                                                        <div class="icon_width mx-auto d-flex justify-content-between mt-2 align-items-center">
                                                                                                                <div class="d-flex justify-content-start">
                                                                                                                        <p class="">
                                                                                                                                <span class="mr-1"><img src="img/eye_icon.png" alt=""></span><span>20k</span>
                                                                                                                                <span>views</span>
                                                                                                                        </p>

                                                                                                                </div>

                                                                                                                <div>
                                                                                                                        <p class="">
                                                                                                                                <span class="mr-1"><img src="img/time_circle.png" alt=""></span><span>25-30</span>
                                                                                                                                <span>mins</span></span>
                                                                                                                        </p>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <!-- challenge -->
                                                                                                        <div style="width: 95%;" class="mx-auto">
                                                                                                                <a class="pt-1" href="#"><img src="img/activity.png" alt=""></a>

                                                                                                                <h4 class="card-title py-1 my_card_title_text">
                                                                                                                        4
                                                                                                                        WEEKS
                                                                                                                        SUMMER
                                                                                                                        SHRED
                                                                                                                        CHALLENGE
                                                                                                                </h4>
                                                                                                                <hr style="border-top: 2px solid #746d6db9;">
                                                                                                                <p class="card-text py-2 my-0 my-font-family">
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                </p>
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                        </div>
                                                                </li>
                                                                <li>
                                                                        <div class="col-md-12">
                                                                                <p>But i must explain to you how all
                                                                                        this mistaken idea of
                                                                                        denouncing please end</p>
                                                                        </div>
                                                                        <div class="row">

                                                                                <div class="col-md-6 col-sm-12 mt-2">
                                                                                        <div class="card card_no_border box_shadow p-sm-0 p-md-1">
                                                                                                <div class="card-img-top">
                                                                                                        <img src="img/locked.png" class="img-fluid">

                                                                                                </div>
                                                                                        </div>
                                                                                </div>

                                                                        </div>

                                                                </li>

                                                        </ol>
                                                </div>
                                        </div>
                                </div>
                                <br>
                                <hr class="card_border">
                                <br>
                                <div class="">
                                        <div class="card-header my_card_header" id="headingTwo">
                                                <h4 class="mb-0">
                                                        <!-- purple -->
                                                        <a class="image_title_purple my_week" data-toggle="collapse" href="#collapseTwo">
                                                                Week2 <i class="fa fa-chevron-down arrow-val "></i></a>

                                                </h4>
                                        </div>
                                        <div class="collapse" id="collapseTwo" class="">
                                                <br>
                                                <p>Lorem ipsum dolor sit amet.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est,
                                                        pariatur.</p>
                                        </div>
                                </div>
                                <br>
                                <hr class="card_border">
                                <br>
                                <div class="">
                                        <div class="card-header my_card_header" id="headingThree">
                                                <h4 class="mb-0">
                                                        <!-- purple -->
                                                        <a class="image_title_purple my_week" data-toggle="collapse" href="#collapseThree">
                                                                Week3 <i class="fa fa-chevron-down  arrow-val "></i></a>

                                                </h4>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                        <p>CSS stands for Cascading Style Sheet. CSS allows you to
                                                                specify various style
                                                                properties for a given HTML element such as colors,
                                                                backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn
                                                                        more.</a></p>
                                                </div>
                                        </div>
                                </div>
                                <br>
                                <hr class="card_border">
                        </div>
                </div>
                </div>
        </section>
        </div>
        <!-- image slider -->
        <div class="container">
                <div class="image_section_title">
                        <h2 class="mt-5"><span class="image_title_black">Other</span>&nbsp;<span class="image_title_purple">Offering</span></h2>
                </div>
                <br>
                <!--  -->
                <div id="demo2" class="d-sm-block d-md-none carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <a class="carousel-control-prev" href="#demo2" data-slide="prev">
                                <img src="img/arrow_backward.png" alt="">
                        </a>

                        <a class="carousel-control-next" href="#demo2" data-slide="next">
                                <img src="img/arrow_forward.png" alt="">
                        </a>
                        <!--  -->

                        <!--  -->

                        <div class="card_corousel_row carousel-inner">

                                <div class="carousel-item active">
                                        <div class="row ">

                                                <div class="col mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <a class="btn btn-primary custom_btn" href="#">Challenge</a>


                                                                        <h3 class="card-title mobile_card_text my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h3>

                                                                </div>

                                                        </div>
                                                </div>



                                        </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="row">

                                                <div class="col mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h3 class="card-title mobile_card_text my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h3>

                                                                </div>

                                                        </div>
                                                </div>


                                        </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="row">

                                                <div class="col mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h3 class="card-title mobile_card_text my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h3>

                                                                </div>

                                                        </div>
                                                </div>


                                        </div>
                                </div>
                        </div>






                </div>
                <!--  -->
                <div id="demo1" class="d-none d-md-block carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                                <img src="img/arrow_backward.png" alt="">
                        </a>

                        <a class="carousel-control-next" href="#demo1" data-slide="next">
                                <img src="img/arrow_forward.png" alt="">
                        </a>
                        <!--  -->

                        <!--  -->

                        <div class="card_corousel_row carousel-inner">

                                <div class="carousel-item active">
                                        <div class="row ">

                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <a class="btn btn-primary custom_btn" href="#">Challenge</a>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>

                                        </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="row">

                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>

                                        </div>
                                </div>
                                <div class="carousel-item">
                                        <div class="row">

                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>
                                                <div class="col-4 mb-3">
                                                        <div class="card">
                                                                <img src="img/cam2.png">
                                                                <div class="card-body">
                                                                        <button class="btn btn-primary custom_btn">Challenge</button>


                                                                        <h4 class="card-title my_card_title_text">4 Weeks Summer Shred
                                                                                Challenge</h4>

                                                                </div>

                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </div>






                </div>
        </div>
        <div class="container" id="qout_slider">
                <div class="image_section_title">
                        <h2 class="mt-5"><span class="image_title_black">Happy</span>&nbsp;<span class="image_title_purple">Clients</span></h2>
                </div>
                <div class="row">
                        <div class="col-sm-6">
                                <div class="gallery">
                                        <div class="gallery-container"> <img class="gallery-item" id="1" src="slider/1.png"> <img class="gallery-item" id="2" src="slider/2.png"> <img class="gallery-item" id="3" src="slider/3.png"> <img class="gallery-item" id="4" src="slider/4.png"> <img class="gallery-item" id="5" src="slider/5.png"> <img class="gallery-item" id="6" src="slider/6.png"> </div>
                                        <div class="gallery-controls"></div>
                                </div>
                        </div>
                        <div class="col-sm-6 ">
                                <div id="qout1" class="qout">
                                        <div class="doubledots"><img src="img/happytop.png"></div>
                                        <h2> Just Love It!</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                                        <hr style="border:1px dotted">
                                        <h3><span style="text-align: left"> Rahul Singh | 12</span> </h3>
                                        <div class="doubledotsbottom"><img src="img/happybottom.png"></div>
                                </div>
                                <div id="qout2" class="qout" style="display:none">
                                        <div class="doubledots"><span>&#8220;</span></div>
                                        <h2> Its just amazing!</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                                        <hr style="border:1px dotted">
                                        <h3><span style="text-align: left"> Rahul Singh | 12</span> </h3>
                                        <div class="doubledotsbottom"><img src="img/happybottom.png"></div>
                                </div>
                                <div id="qout3" class="qout" style="display:none">
                                        <div class="doubledots"><span>&#8220;</span></div>
                                        <h2> Sardar Dawar</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                                        <hr style="border:1px dotted">
                                        <h3><span style="text-align: left"> Rahul Singh | 12</span> </h3>
                                        <div class="doubledotsbottom"><img src="img/happybottom.png"></div>
                                </div>
                                <div id="qout4" class="qout" style="display:none">
                                        <div class="doubledots"><span>&#8220;</span></div>
                                        <h2> Sohaib on fire</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                                        <hr style="border:1px dotted">
                                        <h3><span style="text-align: left"> Rahul Singh | 12</span> </h3>
                                        <div class="doubledotsbottom"><img src="img/happybottom.png"></div>
                                </div>
                                <div id="qout5" class="qout" style="display:none">
                                        <div class="doubledots"><span>&#8220;</span></div>
                                        <h2> Haris aqib</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                                        <hr style="border:1px dotted">
                                        <h3><span style="text-align: left"> Rahul Singh | 12</span> </h3>
                                        <div class="doubledotsbottom"><img src="img/happybottom.png"></div>
                                </div>
                                <div id="qout6" class="qout" style="display:none">
                                        <div class="doubledots"><span>&#8220;</span></div>
                                        <h2> Waseem Afzal</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                                        <hr style="border:1px dotted">
                                        <h3><span style="text-align: left"> Rahul Singh | 12</span> </h3>
                                        <div class="doubledotsbottom"><img src="img/happybottom.png"></div>
                                </div>
                        </div>
                </div>
        </div>

        <footer class="mt-5">
                <div class="jumbotron text-center m-0">
                        <div class="d-flex flex-column align-items-center justify-content-center">

                                <b class="fotter_label_color">Powered By</b>



                                <img src="img/fanmo.png" alt=""></h1>

                        </div>
                        <div class="mx-auto d-flex justify-content-center">
                                <a href="#" class="fotter_label_color mx-4">Help</a>
                                <a href="#" class="fotter_label_color mx-4">Term of use</a>
                                <a href="#" class="fotter_label_color mx-4">Privay Policy</a>
                        </div>



                </div>
        </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="css/carousel.js"></script>
        <script>
                function my_arrow() {
                        let val = $("#image1").val();
                        if (val == 0) {
                                $("#put_icon img").attr("src", "img/icon/drop_up.svg");
                                $("#image1").val("1");
                        } else {
                                $("#put_icon img").attr("src", "img/icon/drop_down.svg");
                                $("#image1").val("0");
                        }
                }

                function my_arrow2() {
                        let val = $("#image2").val();
                        if (val == 0) {
                                $("#put_icon2 img").attr("src", "img/icon/drop_up.svg");
                                $("#image2").val("1");
                        } else {
                                $("#put_icon2 img").attr("src", "img/icon/drop_down.svg");
                                $("#image2").val("0");
                        }
                }
        </script>
        <script>
                $(document).ready(function() {
                        // Add minus icon for collapse element which is open by default
                        // Toggle plus minus icon on show hide of collapse element
                        $(".collapse").on('show.bs.collapse', function() {
                                $(this).prev(".card-header").find(".fa").removeClass("fa fa-chevron-down").addClass("fa fa-chevron-up");
                        }).on('hide.bs.collapse', function() {
                                $(this).prev(".card-header").find(".fa").removeClass("fa fa-chevron-up").addClass("fa fa-chevron-down");
                        });
                });

                $(document).ready(function() {
                        $("#demo1").carousel();
                        if ($(window).width() < 640) {}
                });
        </script>
</body>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->