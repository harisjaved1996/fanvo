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
                .custom_btn {
                        background-color: black;
                        border: none;
                }

                .custom_btn:hover {
                        background-color: rgb(26, 25, 25);
                        border: none;
                }

                div.image_flex {
                        padding: 5px;
                }

                .my_footer {
                        background-color: #FAEAEA;
                }

                .footer_title {
                        font-size: 78px;
                        color: #F24162
                }

                span.image_title_black {

                        color: #222222;
                }

                .image_title_purple {
                        color: #F24162;
                }

                a.image_title_purple:hover {
                        color: #F24162;
                        text-decoration: none;
                }

                .card_border {
                        border: 1px solid #eee;
                }

                .icon_width {
                        width: 95%;
                }

                .width_70 {
                        width: 70%;
                        margin: auto;
                }

                div.my_card_header {
                        border: 0;
                        padding: 0;
                        background-color: white;
                }

                .bgorange {
                        background-color: #faebd7a3;
                }

                .mycard {
                        padding: 5px;
                        margin: 0 0 20px 0;
                        box-shadow: 1px 1px 8px 1px #a4a4a4bd;
                        border: none;
                }

                .mycard .itemleft {
                        padding: 5px;
                }

                .mycard .itemleft .Paid {}

                .mycard .itemleft .payment {}

                .label_color {
                        color: #F24162;
                }

                .pull-left {
                        float: left;
                }

                .pull-right {
                        float: right;
                }

                .txtred {
                        color: #EC5C77;
                }

                .workshop {
                        width: 90px;
                }
        </style>
</head>

<body>
        <header>
                <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                        </ul>
                                        <ul class="nav justify-content-end">
                                                <li class="nav-item ">
                                                        <a class="nav-link fanmo_link" href="javscript:void(0)" data-toggle="modal" data-target="#login_form" role="button">
                                                                Login
                                                        </a>
                                                </li>
                                                <li class="nav-item ">
                                                        <a class="nav-link fanmo_link" href="javscript:void(0)" data-toggle="modal" data-target="#signup_form" role="button">
                                                                Signup
                                                        </a>
                                                </li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle fanmo_link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Account
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                                                <a class="dropdown-item" href="UserProfilePage.php">My
                                                                        Profile</a>
                                                                <a class="dropdown-item" href="detail_page_no_days_v1.php">No
                                                                        days</a>
                                                                <a class="dropdown-item" href="detail_page_only_week_no_days.php">Only week no
                                                                        days</a>
                                                                <a class="dropdown-item" href="multiple_banners_v1.php">multiple_banners</a>

                                                                <a class="dropdown-item" href="detail_page_timeline_v1.php">detail_page_timeline</a>


                                                                <a class="dropdown-item" href="javscript:void(0)" data-toggle="modal" data-target="#help_us">Help</a>
                                                                <a class="dropdown-item" href="javscript:void(0)" data-toggle="modal" data-target="#payment_successfull">Payment
                                                                        Successfull</a>
                                                                <a class="dropdown-item" href="javscript:void(0)" data-toggle="modal" data-target="#login_to_continue">Login to continue</a>

                                                                <a class="dropdown-item" href="#">Logout</a>
                                                        </div>
                                                </li>
                                        </ul>
                                </div>
                        </nav>
                </div>
        </header>
        <div style="height: 5vh;"></div>
        <div class="container">
                <div>
                        <a href="#"><img src="img/challenge.png" alt=""></a>
                </div>
                <br>
                <div>
                        <h4 class="card_title">4 WEEKS SUMMER SHRED CHALLENGE</h4>
                </div>
                <br>

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
                                <div class="col-md-3 col-12 px-1 my_image_div"><img class="img-fluid firstbanner" src="img/rectangel_bg.png"></div>
                                <div class="col-md-3 col-3 px-1 my_image_div"><img class="img-fluid" src="assets/ball.png"></div>
                                <div class="col-md-3 col-3  px-1 my_image_div"><img class="img-fluid" src="assets/ball.png"></div>
                                <div class="col-md-3 col-3  px-1 my_image_div"><img class="img-fluid" src="assets/ball.png"></div>
                                <div class="col-md-3 col-3  px-1 my_image_div"><img class="img-fluid" src="assets/ball.png"></div>
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
                                                        <p class="fitness_text mb-1"><b>Type: </b> <span>abs,full body,Weight
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
                                <div class="col-md-5 col-sm-12 cardsicky">
                                        <div class="p_rel text-center d-sm-block d-md-none">
                                                <a onclick="my_btn()" id="arrow_down" class="p_abs" data-toggle="collapse" href="#demo_card"><img src="img/icon/drop_down.svg" alt=""></a>
                                                <a onclick="my_btn()" id="arrow_up" class="p_abs d-none" data-toggle="collapse" href="#demo_card"><img src="img/icon/drop_up.svg" alt=""></a>
                                        </div>
                                        <div class="" >
                                        <div class="d-block d-md-none card mycard p-4">
                                               <div id="demo_card" class="collapse">
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
                                               </div>
                                                <div class="d-flex justify-content-between py-2">
                                                        <h3 class="label_color leftprice bold">RS 3000</h3>
                                                        <a href="#"><img src="img/but_now.png" alt=""></a>
                                        
                                        
                                                </div>
                                        
                                        
                                        </div>
                                        <!--  -->
                                        <div class="d-none d-md-block card mycard p-4">
                                                <div id="" class="">
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
                                                </div>
                                                <div class="d-flex justify-content-between py-2">
                                                        <h3 class="label_color leftprice bold">RS 3000</h3>
                                                        <a href="#"><img src="img/but_now.png" alt=""></a>
                                        
                                        
                                                </div>
                                        
                                        
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
                                                        <h3 class="mb-0">
                                                                <!-- purple -->
                                                                <a class="image_title_purple" data-toggle="collapse" href="#collapseOne">
                                                                        Week1 <i class="fa fa-chevron-down arrow-val"></i></a>

                                                        </h3>
                                                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                                                                eligendi.</p>

                                                </div>



                                                <div class="collapse" id="collapseOne">
                                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, pariatur.</p>
                                                        <div class="row">
                                                                <div class="col-md-6 col-sm-12 mt-2">
                                                                        <div class="card p-3">
                                                                                <div class="card-img-top">
                                                                                        <video style="width: 100%; border-radius: 10px;" controls>
                                                                                                <source src="img/video.mp4" type="video/mp4">

                                                                                        </video>
                                                                                        <div class="icon_width mx-auto d-flex justify-content-between mt-1 align-items-center">

                                                                                                <p class=""><span><img src="assets/Eye icon.png" alt=""><span>20k</span>
                                                                                                                <span>views</span></span></p>


                                                                                                <p class=""><span><img src="assets/Card-Icon-Time Circle.png" alt="">&nbsp;<span>25-30</span>
                                                                                                                <span>mins</span></span></p>


                                                                                        </div>
                                                                                        <!-- challenge -->
                                                                                        <div style="width: 95%;" class="mx-auto">
                                                                                                <a href="#" class="btn btn-primary custom_btn">Activity1</a>
                                                                                                <h4 class="card-title py-1">4 WEEKS SUMMER SHRED
                                                                                                        CHALLENGE</h4>
                                                                                                <hr style="border-top: 2px solid #1a1919b9;">
                                                                                                <p class="card-text py-0 my-0">Lorem ipsum,
                                                                                                        dolor sit amet consectetur adipisicing
                                                                                                        elit. Quis alias nulla quia minima
                                                                                                        quibusdam velit voluptate eligendi
                                                                                                        asperiores, laborum dignissimos.
                                                                                                        Lorem ipsum, dolor sit amet consectetur
                                                                                                        adipisicing elit. Quis alias nulla quia
                                                                                                        minima .
                                                                                                </p>
                                                                                        </div>

                                                                                </div>


                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-12 mt-2">
                                                                        <div class="card p-3">
                                                                                <div class="card-img-top">
                                                                                        <video style="width: 100%; border-radius: 10px;" controls>
                                                                                                <source src="img/video.mp4" type="video/mp4">

                                                                                        </video>
                                                                                        <div class="icon_width mx-auto d-flex justify-content-between mt-1 align-items-center">

                                                                                                <p class=""><span><img src="assets/Eye icon.png" alt=""><span>20k</span>
                                                                                                                <span>views</span></span></p>


                                                                                                <p class=""><span><img src="assets/Card-Icon-Time Circle.png" alt="">&nbsp;<span>25-30</span>
                                                                                                                <span>mins</span></span></p>


                                                                                        </div>
                                                                                        <!-- challenge -->
                                                                                        <div class="icon_width mx-auto">
                                                                                                <a href="#" class="btn btn-primary custom_btn">Activity1</a>
                                                                                                <h4 class="card-title py-1">4 WEEKS SUMMER SHRED
                                                                                                        CHALLENGE</h4>
                                                                                                <hr style="border-top: 2px solid #1a1919b9;">
                                                                                                <p style="margin-bottom: 10px;" class="card-text py-0">Lorem ipsum dolor
                                                                                                        sit amet, consectetur adipisicing elit.
                                                                                                        Placeat, minima.</p>

                                                                                                <button style="background-color: #F24162; float: right;" class="btn btn-primay text-white"> Start
                                                                                                        now</button>


                                                                                        </div>

                                                                                </div>


                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                        </div>
                                </div>
                                <br>
                                <hr class="card_border">
                                <br>

                                <div class="card-header my_card_header" id="headingTwo">
                                        <h3 class="mb-0">
                                                <!-- purple -->
                                                <a class="image_title_purple" data-toggle="collapse" href="#collapseTwo">
                                                        Week2 <i class="fa fa-chevron-down arrow-val"></i></a>

                                        </h3>
                                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, eligendi.</p>

                                </div>



                                <div class="collapse" id="collapseTwo" class="">
                                        <br>
                                        <p>Lorem ipsum dolor sit amet.</p>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, pariatur.</p>
                                </div>


                                <br>
                                <hr>
                                <br>

                                <div class="">
                                        <div class="card-header my_card_header" id="headingThree">
                                                <h3 class="mb-0">
                                                        <!-- purple -->
                                                        <a class="image_title_purple" data-toggle="collapse" href="#collapseThree">
                                                                Week3 <i class="fa fa-chevron-down arrow-val"></i></a>


                                                </h3>
                                                <p class="mt-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, vero.</p>

                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div>
                                                        <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style
                                                                properties for
                                                                a given HTML element such as colors, backgrounds, fonts etc.</p>
                                                </div>
                                        </div>
                                </div>
                                <br>
                                <hr>
                        </div>

                </div>
                </div>
        </section>

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

        <?php include_once "happyclients.php" ?>
        <?php include_once "footer.php" ?>