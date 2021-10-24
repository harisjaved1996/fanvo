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

                        <div class="collapse navbar-collapse justify-content-between " id="nav">

                                <div class=" d-md-none d-sm-block">

                                        <img class="bg12_width" src="img/bg.jpg" alt="">
                                                       
                                                       
                                                       <div class=" text-center ">
                                        <div class=" style_div">
                                        <a href="#" class="">My Profile</a>
                                        <a href="#" class="">Help</a>
                                        <a href="#" class="">Logout</a>
                                </div>






                        </div>
                        <div class="upper_image_nav">

                        </div>

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
                                                                <a class="dropdown-item" href="detail_page_only_week_no_days.html">Only
                                                                        week no
                                                                        days</a>
                                                                <a class="dropdown-item" href="multiple_banners_v1.html">multiple_banners</a>

                                                                <a class="dropdown-item" href="detail_page_timeline_v1.html">detail_page_timeline</a>


                                                                <a class="dropdown-item" href="javscript:void(0)" data-toggle="modal" data-target="#help_us">Help</a>
                                                                <a class="dropdown-item" href="javscript:void(0)" data-toggle="modal" data-target="#payment_successfull">Payment
                                                                        Successfull</a>
                                                                <a class="dropdown-item" href="javscript:void(0)" data-toggle="modal" data-target="#login_to_continue">Login to
                                                                        continue</a>

                                                                <a class="dropdown-item" href="#">Logout</a>
                                                        </div>
                                                </li>
                                        </ul>
                                </div>
                        </nav>
                </div>
        </header>
        <div style="height: 5vh;"></div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="css/carousel.js"></script>

        <script>
                function my_arrow() {
                        let val = $("#image1").val();

                        if (val == 0) {
                                $("#put_icon img").attr("src", "img/icon/Drop up.svg");
                                $("#image1").val("1");

                        } else {
                                $("#put_icon img").attr("src", "img/icon/Drop down.svg");
                                $("#image1").val("0");

                        }

                }

                function my_arrow2() {
                        let val = $("#image2").val();

                        if (val == 0) {
                                $("#put_icon2 img").attr("src", "img/icon/Drop up.svg");
                                $("#image2").val("1");

                        } else {
                                $("#put_icon2 img").attr("src", "img/icon/Drop down.svg");
                                $("#image2").val("0");

                        }

                }
                $('#ChangeToggle').click(function() {

                        $('#navbar-hamburger').toggleClass('d-none');
                        $('#navbar-close').toggleClass('d-none');
                });
        </script>
</body>

</html>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->