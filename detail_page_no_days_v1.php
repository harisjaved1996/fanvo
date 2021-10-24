<!doctype html>
<html lang="en">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
                integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
                crossorigin="anonymous">
        <link rel="stylesheet" href="css/carousel.css">
        <title>Detail Page</title>

        <style>
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
        <header class="sticky-top bg-white">
                <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light ">


                                <a class="navbar-brand"><img src="img/logo.png"></a>

                                <button id="ChangeToggle" type="button" class="navbar-toggler " data-toggle="collapse" data-target="#nav">

                                        <span id="navbar-hamburger" class="navbar-toggler-icon"></span>

                                        <span id="navbar-close" class="d-none"><img src="img/icon/cancel.svg" alt=""></span>

                                </button>
                </div>

                <div class="my_nav_container">
                        <div class="collapse navbar-collapse " id="nav">

                                <div class=" upper_image d-md-none d-sm-block">

                                        <div>
                                                <img class="bg12_width" src="img/bg.jpg" alt="">
                                        </div>


                                        <div style=" width: 50%;" class="mx-auto pt-5">
                                                <a class="btn btn-block btn-outline-danger" href="">Login With Google</a>

                                        </div>

                                </div>
                                <div class="upper_image_nav">

                                </div>



                                </nav>
                        </div>
                        <div class="d-none container">

                                <br><br>
                                <nav class="d-none navbar navbar-expand-lg  navbar-light ">
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

                                                                        <a class="dropdown-item" href="UserProfilePage.html">My
                                                                                Profile</a>
                                                                        <a class="dropdown-item" href="detail_page_no_days_v1.html">No
                                                                                days</a>
                                                                        <a class="dropdown-item" href="detail_page_only_week_no_days.html">Only week no
                                                                                days</a>
                                                                        <a class="dropdown-item" href="multiple_banners_v1.html">multiple_banners</a>

                                                                        <a class="dropdown-item" href="detail_page_timeline_v1.html">detail_page_timeline</a>


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

                </div>
        </header>
        <div style="height: 5vh;"></div>
        <div class="container">
                <div class="upper_part">
                        <a href="#"><img src="img/challenge.png" alt=""></a>
                        <h3 class="summer_challenge my-2">4 WEEKS SUMMER SHRED CHALLENGE</h3>
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
                                        <div class="col-md-3 col-12 px-1 my_image_div"><img class="img-fluid firstbanner"
                                                        src="assets/telescope.png"></div>
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
                                                                                        <span
                                                                                                class="payment ">Payment</span>
                                                                                        <span
                                                                                                class="Paid f_weight">Paid</span>
                                                                                </div>
                                                                                <div class="d-flex flex-column pl-5">
                                                                                        <i class="fa fa-calendar "></i>
                                                                                        <span
                                                                                                class="payment ">Payment</span>
                                                                                        <span class="Paid f_weight">21
                                                                                                        days</span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="itemleft">


                                                                </div>
                                                        </div>
                                                        <p class="fitness_text mb-1"><span class="my_text_val">Type:</span> <span>abs,full body,Weight
                                                                        loss</span></p>
                                                        <p class="fitness_text"><span class="my_text_val">Equipment: </span><span>Fitness
                                                                        mat,Resistence band</span></p>
                                                </div>
                                        </div>
                                        <div class="card mycard  py-4 px-4 pb-5">
                                                <div class="d-flex justify-content-between">
                                                        <div >
                                                                <h5>What i am offering</h5>
                                                        </div>
                                                        <div class="d-md-none d-sm-block  text-right">
                                                                <a onclick="my_arrow2()" id="put_icon2"
                                                                        data-toggle="collapse"
                                                                        href="#show_content1"><img
                                                                                src="img/icon/drop_down.svg" alt=""></a>
                                                                <input type="hidden" id="image2" value="0">
                                                        </div>
                                                </div>
                                                <div class="d-none d-sm-none d-md-block">
                                                        <div class="text-justify text_offerering">
                                                                <p>Ono booking two pooplo Rostorativo Contact is a
                                                                        mindfulness and empathy
                                                                        practice that helps us to be present in the
                                                                        moment. in Our bodies. and With the
                                                                        important people in our lives, including
                                                                        ourselves.&nbsp;<a class="text-black read_more"
                                                                                data-toggle="collapse"
                                                                                href="#demo"><span>read more!</span></a>
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
                                                        <div  class="text-justify text_offerering">
                                                                <p>Ono booking two pooplo Rostorativo Contact is a
                                                                        mindfulness and empathy
                                                                        practice that helps us to be t...</p>

                                                                <p   id="show_content1" class="collapse ">
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
                                        <!-- what to bring -->
                                        <div class="card mycard  p-3 px-5">
                                                <div class="d-flex justify-content-between">
                                                        <div class="">
                                                                <h5>What to bring</h5>
                                                        </div>
                                                        
                                                        <div class="d-md-none d-sm-block  text-right">
                                                                <a onclick="my_arrow()" id="put_icon"
                                                                        data-toggle="collapse"
                                                                        href="#show_content2"><img
                                                                                src="img/icon/drop_down.svg" alt=""></a>
                                                                <input type="hidden" id="image1" value="0">
                                                        </div>
                                                </div>


                                                        <p id="show_content2" class="collapse ">
                                                                Lorem ipsum dolor sit amet.
                                                        </p>
                                                <p>
                                                        
                                                Your meal or snacks to join mindful eating session (anything to eat is
                                                fine but
                                                you may feel more comfortable if you bring something healthy like a
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

        </div>
                

        

        <?php include"happyclients.php" ?>

        </div>
        <?php include"footer.php" ?>