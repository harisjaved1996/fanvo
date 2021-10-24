<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/carousel.css">

  <style>
    .card-body h1,
    .card-body h2,
    .card-body h3,
    .card-body h4,
    .card-body h5,
    .card-body h6 {
      font-family: 'Bebas Neue', cursive;
    }

    #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {

      border-bottom: 3px solid #ec5c77 !important;

    }

    .active1 {
      border-bottom: 3px solid red;
    }
  </style>
  <title>creator profile</title>


</head>

<body>
  <!-- updated_work -->
  <?php include_once 'header.php' ?>
  <section id="contentwrape">
    <div class="container">
      <div class="inner_wrap">
        <div class="row">

          <div class="col-md-6 col-sm-12 mt-1">
            <div class="video_section">
              <a href="javascript:void(0)" id="play_button"><img src="img/play.svg"></a>
              <video controls id="video" poster="img/chloe.jpg">
                <source src="img/video.mp4" type="video/mp4">
              </video>
            </div>

          </div>
          <!--col end-->
          <div class="col-md-6 col-sm-12 mt-1">
            <div class="profile_section col">
              <div class="row">
                <div class="col-6">
                  <h3>Hi! I am</h3>
                  <h2>Chloe Ting</h2>
                  <h4>Fitness Trainer</h4>
                </div>
                <div class="desk-hidden">
                  <div class="socialiconsmobile pull-right ">
                    <a href="#"><img src="img/icon/Social-Fb.svg"></a>
                    <a href="#"><img src="img/icon/Social-Insta.svg"></a>
                    <a href="#"><img src="img/icon/Social-Youtube.svg"></a>
                  </div>
                </div>
              </div>
              <p><img src="img/Icon-Location@2x.png" alt=""><span class="city_delhi">New Delhi, India</span></p>
              <p>Fitness trainer, Mr. India 2017 finalist, health blogger.#suniljadhav
                Mailbox: sunil.jadhav@hmail.com // Link to my new video:<br>
                https://www.youtube.com/watch?v=uzO1ZS9qycA&ab_channel</p>
            </div>

          </div>
          <!--col end-->
          <div class=" col-md-6 col-12">
            <div class="skills">
              <a class="btn btn-primary-light"><small>xyz certified</small> </a>
              <a class="btn btn-primary-light"><small>Lifestyle</small> </a>
              <a class="btn btn-primary-light"><small>Fitness</small> </a>
            </div>
          </div>
          <div class="col-md-6 col-12 ">
            <div class="socialprofile">
              <a class="btn btnSubscribe pull-left "><small>Subscribe</small></a>
              <div class="socialicons pull-right xs-hidden">
                <a href="#"><img src="img/icon/Social-Fb.svg"></a>
                <a href="#"><img src="img/icon/Social-Insta.svg"></a>
                <a href="#"><img src="img/icon/Social-Youtube.svg"></a>
              </div>
            </div>
          </div>

          <!--row end-->

        </div>
      </div>
    </div>
  </section>

  <div class="container">

    <section class="cards mycard_icons pt-md-4 pt-sm-0 ">

      <div class="row my_cards_data align-items-center">

        <div class="col-md-6 col-sm-12 mt-3 ">
          <div class=" my_card my_card1_color">
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body">
                <h4 class="card-title my_card_title my_card1_title_color">PERSONALIZED PLANS</h4>
                <p class="card-text card_sub_title">Some example text some example text. John Doe is an architect and
                  engineer</p>
              </div>
              <div class="pr-2">
                <img class="d-none d-sm-none d-md-inline" src="img/profile/icons/plans.png" alt="" style="">
                <img class="d-inline d-sm-inline d-md-none" src="img/profile/icons/plans_mobile.png" alt="" style="">


              </div>

            </div>
          </div>

        </div>
        <!-- -->
        <div class="col-md-6 col-sm-12 mt-3">
          <div class=" my_card my_card2_color">
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body">
                <h4 class="card-title my_card_title my_card2_title_color">LIVE SESSIONS</h4>
                <p class="card-text card_sub_title">Some example text some example text. John Doe is an architect and
                  engineer
                </p>
              </div>
              <div class="pr-2">
                <img class="d-none d-sm-none d-md-inline" src="img/profile/icons/Live session.png" alt="" style="">
                <img class="d-inline d-sm-inline d-md-none" src="img/profile/icons/live_session_mobile.png" alt="" style="">

              </div>
            </div>
          </div>

        </div>


      </div>

      <!-- seond  row-->
      <div class="row my_cards_data align-items-center">

        <div class="col-md-6 col-sm-12 mt-3 ">
          <div class=" my_card my_card3_color">
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body">
                <h4 class="card-title my_card_title my_card3_title_color">1 On 1 WORKSHOP</h4>
                <p class="card-text card_sub_title">Some example text some example text. John Doe is an architect and
                  engineer</p>
              </div>
              <div class="pr-2">

                <img class="d-none d-sm-none d-md-inline" src="img/profile/icons/1 on1 workshop.png" alt="" style="">
                <img class="d-inline d-sm-inline d-md-none" src="img/profile/icons/workshop_mobile.png" alt="" style="">

              </div>
            </div>
          </div>

        </div>
        <!-- -->
        <div class="col-md-6 col-sm-12 mt-3">
          <div class=" my_card my_card4_color">
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body">
                <h4 class="card-title my_card_title my_card4_title_color">Challenge</h4>
                <p class="card-text card_sub_title">Some example text some example text. John Doe is an architect and
                  engineer
                </p>
              </div>
              <div class="pr-2">
                <img class="d-none d-sm-none d-md-inline" src="img/profile/icons/My_Challenge.png" alt="" style="">
                <img class="d-inline d-sm-inline d-md-none" src="img/profile/icons/challenge_mobile.png" alt="" style="">

              </div>
            </div>
          </div>

        </div>


      </div>





    </section>

    <!--waseem code start-->
    <section id="filter_products" class="card_details">
      <div class="col-xs-12">
        <nav>
          <div class="customer-logos slider nav nav-tabs nav-fill homepageSlider" id="nav-tab" role="tablist">
            <div class="slide-in-right slide">
              <a class="nav-item nav-link active cslink" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
            </div>
            <div class="slide-in-right slide">
              <a class="nav-item nav-link cslink" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Personalized plans</a>
            </div>
            <div class="slide-in-right slide">
              <a class="nav-item nav-link cslink" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">live session</a>
            </div>
            <div class="slide-in-right slide">
              <a class="nav-item nav-link cslink" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">101 workshop</a>
            </div>
            <div class="slide-in-right slide">
              <a class="nav-item nav-link cslink" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Challenge</a>
            </div>

          </div>

      </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="row my_cards_data">
            <div class="col-md-6 mt-3">
              <div>
                <div class="card my_box_shadow">

                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <div class="">
                      <a href="#"><img src="img/challenge.png" alt=""></a>
                    </div>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li class="my_custom_card_title">Payment</li>
                        <li class="my_custom_card_sub_title txtpaid">Paid</li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li class="my_custom_card_sub_title">Schedule</li>
                        <li class="my_custom_card_sub_title txtpaid">21 days</li>
                      </ul>
                    </div>
                    <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text
                        some example
                        text. John Doe is an architect and
                        engineer</small></p>
                    <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some
                        example text some
                        example text. John Doe is an architect and
                        engineer</small></p>


                    <div class="d-flex justify-content-between text-align-center">

                      <div>
                        <h2 class="txt_fanmo">RS:3000</h2>
                      </div>
                      <div>
                        <a href="#" class="#"><img src="img/know_more.png" alt=""></a>

                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div>
                <div class="card my_box_shadow">

                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <div class="card-body">

                    <div class="">

                      <a href="#"><img src="img/challenge.png" alt=""></a>
                    </div>

                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li class="my_custom_card_title">Payment</li>
                        <li class="my_custom_card_sub_title txtpaid">Paid</li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li class="my_custom_card_sub_title">Schedule</li>
                        <li class="my_custom_card_sub_title txtpaid">21 days</li>
                      </ul>
                    </div>
                    <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text
                        some example
                        text. John Doe is an architect and
                        engineer</small></p>
                    <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some
                        example text some
                        example text. John Doe is an architect and
                        engineer</small></p>


                    <div class="d-flex justify-content-between text-align-center">

                      <div>
                        <h2 class="txt_fanmo">RS:3000</h2>
                      </div>
                      <div>
                        <a href="#" class="#"><img src="img/know_more.png" alt=""></a>
                      </div>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="row ">
            <div class="col-md-6 mt-3">
              <div>
                <div class="card ">
                  <span class="labelwhite">30 seat left</span>
                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <a href="#"><img src="img/challenge.png" alt=""></a>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li>Payment</li>
                        <li><b>Paid</b></li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li>Schedule</li>
                        <li><b>21 days</b></li>
                      </ul>
                    </div>










                    <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect
                      and
                      engineer</p>
                    <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an
                      architect and
                      engineer</p>

                    <div class="d-flex justify-content-between">

                      <h3 class="txt_fanmo">RS:3000</h3>


                      <a href="#" class="#"><img src="img/know_more.png" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div>
                <div class="card gym_card">
                  <span class="labelwhite">12 seat left</span>
                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <a href="#"><img src="img/challenge.png" alt=""></a>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li>Payment</li>
                        <li><b>Paid</b></li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li>Schedule</li>
                        <li><b>21 days</b></li>
                      </ul>
                    </div>










                    <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect
                      and
                      engineer
                    </p>
                    <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an
                      architect and
                      engineer</p>

                    <div class="d-flex justify-content-between">

                      <h3 class="txt_fanmo">RS:3000</h3>


                      <a href="#" class="#"><img src="img/know_more.png" alt=""></a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
          <div class="row">
            <div class="col-md-6 mt-3">
              <div>
                <div class="card">
                  <span class="labelwhite">31 seat left</span>
                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <div class="card-body">
                    <a href="#"><img src="img/challenge.png" alt=""></a>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li>Payment</li>
                        <li><b>Paid</b></li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li>Schedule</li>
                        <li><b>21 days</b></li>
                      </ul>
                    </div>










                    <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect
                      and
                      engineer</p>
                    <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an
                      architect and
                      engineer</p>

                    <div class="d-flex justify-content-between">

                      <h3 class="txt_fanmo">RS:3000</h3>


                      <a href="#" class="#"><img src="img/know_more.png" alt=""></a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div>
                <div class="card">
                  <span class="labelwhite">12 seat left</span>
                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <span class="labelwhite">12 seat left</span>
                  <div class="card-body">
                    <a href="#"><img src="img/challenge.png" alt=""></a>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li>Payment</li>
                        <li><b>Paid</b></li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li>Schedule</li>
                        <li><b>21 days</b></li>
                      </ul>
                    </div>










                    <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect
                      and
                      engineer
                    </p>
                    <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an
                      architect and
                      engineer</p>

                    <div class="d-flex justify-content-between">

                      <h3 class="txt_fanmo">RS:3000</h3>


                      <a href="#" class="#"><img src="img/know_more.png" alt=""></a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
          <div class="row">
            <div class="col-md-6 mt-3">
              <div>
                <div class="card">
                  <span class="labelwhite">12 seat left</span>
                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <span class="labelwhite">12 seat left</span>
                  <div class="card-body">
                    <a href="#"><img src="img/challenge.png" alt=""></a>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li>Payment</li>
                        <li><b>Paid</b></li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li>Schedule</li>
                        <li><b>21 days</b></li>
                      </ul>
                    </div>










                    <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect
                      and
                      engineer</p>
                    <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an
                      architect and
                      engineer</p>

                    <div class="d-flex justify-content-between">

                      <h3 class="txt_fanmo">RS:3000</h3>


                      <a href="#" class="#"><img src="img/know_more.png" alt=""></a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mt-3">
              <div>
                <div class="card">
                  <span class="labelwhite">12 seat left</span>
                  <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                  <span class="labelwhite">12 seat left</span>
                  <div class="card-body">
                    <a href="#"><img src="img/challenge.png" alt=""></a>
                    <h3 class="mobile_text text-dark mt-2">CORE BUILDING WITH CARDIO</h3>

                    <div class="d-flex ">
                      <ul class="csul">
                        <li><i class="fas fa-clock"></i></li>
                        <li>Payment</li>
                        <li><b>Paid</b></li>
                      </ul>


                      <ul class="csul">
                        <li><i class="fas fa-calendar"></i></li>
                        <li>Schedule</li>
                        <li><b>21 days</b></li>
                      </ul>
                    </div>










                    <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect
                      and
                      engineer
                    </p>
                    <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an
                      architect and
                      engineer</p>

                    <div class="d-flex justify-content-between">

                      <h3 class="txt_fanmo">RS:3000</h3>


                      <a href="#" class="#"><img src="img/know_more.png" alt=""></a>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  </section>

  <?php include_once "happyclients.php" ?>



  </div>
  <?php include "footer.php" ?>