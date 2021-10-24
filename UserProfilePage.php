<!-- updated work -->
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
    body {
      font-family: 'Poppins', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Bebas Neue', cursive;
    }

    .profile_nav:hover {
      color: #ec5c77 !important;
    }

    .card-title {
      margin-top: 0;

    }
  </style>

  <title>User Profile Page</title>


</head>

<body>
  <?php include_once "header.php" ?>
  <!-- header end-->
  <section id="contentwrapeProfile">
    <div class="container">
      <div class="inner_wrap_profile profilwrap p-0">
        <nav class="navbar bg-faded">

          <div class="mx-auto">
            <div class="avatar-circle">
              <img src="img/profilepic.png" class="rounded-circle float-right">
              <input type="file" id="imgupload" style="display:none">
              <a href="javascript:void(0)" onclick="$('#imgupload').trigger('click'); return false;" class="btnAvatar"><i class="fa fa-camera"></i></a>
            </div>
            <h3 class="txtname profile_nmae">Phalgu Tanaya</h3>
            <p class="txt_fanmo txtemail profile_email">sirio284@gmail.com</p>

          </div>
        </nav>
      </div>
    </div>
  </section>
  <div class="container">
    <section id="filter_products" class="card_details  myprofiletabs">
      <div class="col-xs-12 ">
        <h2 class="text-capitalize your_purchases"><span class="your">Your</span> <span class="txt_fanmo purchases">Purchases</span></h2>
        <br>
        <nav class="navbar bg-faded">
          <div class="nav nav-tabs nav-fill mx-auto" id="nav-tab" role="tablist">
            <a class="profile_nav nav-item nav-link active nav_item_tab" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Ongoing </a>
            <a class="profile_nav nav-item nav-link nav_item_tab" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Completed</a>

          </div>
        </nav>
        <br>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <h5 class="fanmo_purchased"><span>Purchased from</span><span class="txt_fanmo px-2">Chloe Ting</span></h5>
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row">
              <div class="col-md-6 mt-3">
                <div>
                  <div class="card my_box_shadow">

                    <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="">

                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black px-3" style="border:none;">CHALLENGE</a></h4>
                        </div>
                        <div class="">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text some example
                          text. John Doe is an architect and
                          engineer</small></p>
                      <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some example text some
                          example text. John Doe is an architect and
                          engineer</small></p>


                      <div class="row">

                        <div class="col text-right">
                          <a href="#"><img src="img/see_details.png" alt=""></a>
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
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="">

                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black px-3" style="border:none;">CHALLENGE</a></h4>
                        </div>
                        <div class="">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text some example
                          text. John Doe is an architect and
                          engineer</small></p>
                      <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some example text some
                          example text. John Doe is an architect and
                          engineer</small></p>


                      <div class="row">

                        <div class="col text-right">
                          <a href="#"><img src="img/see_details.png" alt=""></a>
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
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="">

                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black px-3" style="border:none;">CHALLENGE</a></h4>
                        </div>
                        <div class="">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text some example
                          text. John Doe is an architect and
                          engineer</small></p>
                      <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some example text some
                          example text. John Doe is an architect and
                          engineer</small></p>


                      <div class="row">

                        <div class="col text-right">
                          <a href="#"><img src="img/see_details.png" alt=""></a>
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
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="">

                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black px-3" style="border:none;">CHALLENGE</a></h4>
                        </div>
                        <div class="">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text some example
                          text. John Doe is an architect and
                          engineer</small></p>
                      <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some example text some
                          example text. John Doe is an architect and
                          engineer</small></p>


                      <div class="row">

                        <div class="col text-right">
                          <a href="#"><img src="img/see_details.png" alt=""></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="row">
              <div class="col-md-6 mt-3">
                <div>
                  <div class="card my_box_shadow">

                    <img class="card-img-top" src="img/gym.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="">

                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black px-3" style="border:none;">CHALLENGE</a></h4>
                        </div>
                        <div class="">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text some example
                          text. John Doe is an architect and
                          engineer</small></p>
                      <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some example text some
                          example text. John Doe is an architect and
                          engineer</small></p>


                      <div class="row">

                        <div class="col text-right">
                          <button class="btn btn-primary fanmo_button">See Details</button>
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
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="">

                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black px-3" style="border:none;">CHALLENGE</a></h4>
                        </div>
                        <div class="">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text type-text"><b class="type">Type :</b> <small class="text-val">Some example text some example
                          text. John Doe is an architect and
                          engineer</small></p>
                      <p class="card-text type-text"><b class="equipments">Equipments :</b><small class="text-val">Some example text some
                          example text. John Doe is an architect and
                          engineer</small></p>


                      <div class="row">

                        <div class="col text-right">
                          <button class="btn btn-primary fanmo_button">See Details</button>
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
                      <div class="row">
                        <div class="col-6">
                          <h4 class="card-title"><a href="#" class="btn fanmo_button_black">CHALLENGE</a></h4>
                        </div>
                        <div class="col-6">
                          <p class="purchasedate">PURCHASED ON: 21 FEB ,2021</p>
                        </div>
                      </div>
                      <h4 class="card-title text-dark">CORE BUILDING WITH CARDIO</h4>

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
                      <p class="card-text"><b>Type :</b> Some example text some example text. John Doe is an architect and
                        engineer</p>
                      <p class="card-text"><b>Equipments :</b> Some example text some example text. John Doe is an architect and
                        engineer</p>

                      <div class="row">
                        <div class="col-md-6 text-left">
                          <h3 class="txt_fanmo">RS:3000</h3>
                        </div>
                        <div class="col-md-6 text-right">
                          <button class="btn btn-primary fanmo_button">See Details</button>
                        </div>
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
  </div>



  <?php include_once "footer.php" ?>
  <script>
    /******TAB CLICK***********/
    $(function() {

      $('#changetabbutton').click(function(e) {

        e.preventDefault();
        var next_tab = $('#nav-tab .active').next('a');
        if (next_tab.length > 0) {
          next_tab.trigger('click');
        } else {
          $('#nav-tab  a:eq(0) a').trigger('click');
        }
      });
    });
  </script>