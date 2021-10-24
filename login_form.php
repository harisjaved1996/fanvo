<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>Login Page</title>
    <style>

           .form-wrapper-outer{
            padding: 40px;
            border-radius: 8px;
            margin: auto;
            width: 460px;
            margin-top: 7%;
        }

        .form-wrapper-outer .form-logo{
            margin: 0px auto 15px;
            width: 100px;
        }
		
        .form-wrapper-outer .form-logo img{
            width: 100%;
        }
		
        .form-greeting{
            text-align: center;
            font-size: 25px;
            margin-bottom: 15px;
        }
		
        .form-button{
            text-align: right;
        }

        .field-wrapper{
            position: relative;
            margin-bottom: 15px;
        }
		
        .field-wrapper input{
            border: 1px solid #b1083b;;
            padding: 15px;
            border-radius: 4px;
            width: 100%;
        }

        .field-wrapper .field-placeholder{
            font-size: 16px;
            position: absolute;
            /* background: #fff; */
            bottom: 17px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #80868b;
            left: 8px;
            padding: 0 8px;
            -webkit-transition: transform 150ms cubic-bezier(0.4,0,0.2,1),opacity 150ms cubic-bezier(0.4,0,0.2,1);
            transition: transform 150ms cubic-bezier(0.4,0,0.2,1),opacity 150ms cubic-bezier(0.4,0,0.2,1);
            z-index: 1;

            text-align: left;
            width: 100%;
        }        
        
        .field-wrapper .field-placeholder span{
            background: #ffffff;
            padding: 0px 8px;
        }

        .field-wrapper input:not([disabled]):focus~.field-placeholder
        {
            color:#1A73E8;
        }
		
        .field-wrapper input:not([disabled]):focus~.field-placeholder,
        .field-wrapper.hasValue input:not([disabled])~.field-placeholder
        {
            -webkit-transform: scale(.75) translateY(-39px) translateX(-60px);
            transform: scale(.75) translateY(-39px) translateX(-60px);
            
        }	
        .label_color{
                color:#fc165b;
        }  
        div.input_div{
          position: relative;
          
        }
        small.input_div_label{
                position: absolute;
                margin-top: -10px;
                margin-left: 13px;
                background: white;
                 color:#fc165b;
                 
        }
        .form-control{
                border-color: #fc165b;
                padding: 0.8rem .75rem;
        }
        .form-control:focus{
                border-color: #fc165b;
                box-shadow: 0 0 0 0;
        }
        .submit_btn{
                background-color:#fc165b ;
                color: white;
        }
        button.my_btn{
                outline: none;
                background-color: white;
                border: 1px solid #fc165b;
                display: block;
                width: 50%;
                margin:auto;
               
                
        }
        
        button.mail_us_btn{
                background-color: #fc165b;
                border: none;
        }
        button.mail_us_btn:hover{
                background-color: #e40f4f;
                border: none;
        }
        p.paragraph_label{
                list-style: 7px;
        }
		 body{
		font-family: 'Poppins', sans-serif;
		  }
		  h1,h2,h3,h4,h5,h6{
			font-family: 'Bebas Neue', cursive;
		  }
        
    </style>
	
  </head>
  <body>
        <div class="container">
               
        
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login_form">
                        Login Modal
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login_to_continue">
                        login_to_continue
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payment_successfull">
                        payment_successfull
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#help_us">
                        help
                </button>
                <!-- help modal -->
                <div class="modal fade" id="help_us">
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                
                                        <!-- Modal Header -->
                                        <div style="border: none;" class="modal-header">
                
                                                <button type="button" class="close label_color" data-dismiss="modal"><img
                                                                src="img/cross_icon.svg" alt="">
                                                </button>
                                        </div>        
                                        <div class="modal-body">
                
                                        
                                                <h4 class="text-center label_color">Hi there!</h4>
                                                <p class="paragraph_label text-center">We're here to help. Please feel free to tell us about your issue via</p>
                                                <p  class="paragraph_label text-center">mail on info@fanmo.live</p>
                                                <br>
                                                <div class="text-center">
                                                        <button class="btn btn-primary mail_us_btn"><b>Mail Us</b></button>
                                                                                        
                                                </div>
                                        </div>        
                                        <div style="height: 20vh;">
                
                                        </div>
                
                                </div>
                
                
                
                
                        </div>
                </div>
                </div>
                <!-- payment successfull -->
                <div class="modal fade" id="payment_successfull">
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                
                                        <!-- Modal Header -->
                                        <div style="border: none;" class="modal-header">
                
                                                <button type="button" class="close label_color" data-dismiss="modal"><img src="img/cross_icon.svg" alt=""></button>
										</div>		
                                        <div class="modal-body">
                                     
                                               <div class=" text-center">
                                                       <img src="img/payment_successfull.svg" alt="">
                                               </div>
												   <h4 class="text-center label_color ">Payment Successful</h4>
												   <p class="text-center paragraph_label ">Congratulations! Thankyou for buying this challenge.</p>
												   <p  class="text-center paragraph_label ">Please check your email id for payment confirmation and your</p>
												   <p  class="text-center paragraph_label ">billing information</p>
                                               <div style="height: 20vh;">

                                               </div>

                                      </div>
                                       
                                     
                
                
                                </div>
                        </div>
                </div>
                <!-- login to continue -->
                <div class="modal fade" id="login_to_continue">
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                
                                        <!-- Modal Header -->
                                        <div style="border: none;" class="modal-header">
                
                                                <button type="button" class="close label_color" data-dismiss="modal"><img
                                                                src="img/cross_icon.svg" alt="">
                                                </button>
                                                
                                        </div>
                                        <br><br>
                                        <div class="modal-body">
                                                <h4 class="text-center label_color ">Please login to continue</h4>
                                                <br>
                                                <div class="text-center">
                                                        <button  type="button" class="btn my_btn label_color" ><b>Login</b></button>
                                                </div>

                                        </div>
                
                                       
                                        
                
                                <div style="height: 20vh;">
                                
                                </div>
                
                                </div>
                
                
                
                
                        </div>
                </div>
                </div>
                <!--  -->

              
        
                <!-- login form -->
                <div class="modal fade" id="login_form">
                        <div class="modal-dialog modal-dialog-centered">
                                <div  class="modal-content">
        
                                        <!-- Modal Header -->
                                        <div style="border: none;" class="modal-header">
                                                
                                                <button type="button" class="close label_color" data-dismiss="modal">&times;</button>
                                        </div>
                                          
                                        <!-- Modal body -->
                                        <div  style="width: 80%; margin: auto;" class="modal-body">
										<h4 class=" label_color py-3"> Create Account</h4>

                                                <form >
												 
                                                        <div  class="input_div form-group">
                                                                <small class="input_div_label">Name</small>
                                                                <input type="text" class="form-control" id="inputEmail" >
                                                        </div>
                                                        <br>
                                                        <div class="input_div form-group">
                                                                <small class="input_div_label">Email</small>
                                                                <input type="email" class="form-control" id="inputEmail">
                                                        </div>
                                                        <br>
                                                      
                                                        
                                                        <div class="input_div form-group">
                                                                <small class="input_div_label">Password</small>
                                                                <input type="password" class="form-control" id="inputEmail">
                                                        </div>
                                                        <br>
                                                        <div class="input_div form-group">
                                                                <small class="input_div_label">Message</small>

                                                                <textarea name="" id="" class="form-control"  rows="5"></textarea>
                                                        </div>
                                                        <br>
                                                       
                                                        <div class="text-center">
                                                                <button type="submit" class="btn submit_btn">Sign in</button>
                                                        </div>
                                                </form>
                                                <!-- <div class="field-wrapper">
                                                        <input type="text" name="name" id="">
                                                        <div class="field-placeholder"><span class="label_color" >Name</span></div>
                                                </div>
                                                <div class="field-wrapper">
                                                        <input type="email" name="email" id="email">
                                                        <div class="field-placeholder"><span class="label_color">Email</span></div>
                                                </div>
                                                <div class="field-wrapper">
                                                        <input type="email" name="email" id="email">
                                                        <div class="field-placeholder"><span class="label_color">Contact Number</span></div>
                                                </div>
                                               
                                                <div class="form-button">
                                                        <button type="button" class="btn  label_color btn-color">Login</button>
                                                </div> -->
                                                
                                                
                                                        
                                                       
                                               
                                        </div>
        
                                        
                                </div>
                        </div>
                </div>
        
        </div>
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <script>
              

                                $(".field-wrapper .field-placeholder").on("click", function () {
                                      
                                        $(this).closest(".field-wrapper").find("input").focus();
                                });
                                $(".field-wrapper input").on("keyup", function () {
                                        var value = $.trim($(this).val());
                                        if (value) {
                                                $(this).closest(".field-wrapper").addClass("hasValue");
                                        } else {
                                                $(this).closest(".field-wrapper").removeClass("hasValue");
                                        }
                                });

                 
                
        </script>
  </body>

</html>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    
    
  
 