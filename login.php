<?PHP
session_start();
$error;
if(isset($_SESSION['error']))
{ $error=$_SESSION['error'];}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="loginbutton.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <script src="html5shiv.js"></script>
    <script src="respond.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>EXPLORE RAJASTHAN</title>

    <style>
        body {
            background-image: url("imgs/back.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;

            font-family: 'Montserrat', sans-serif;
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TRIP MASTER</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="/">logo</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->



    </div>
    <!-- /.container -->
</nav>

<div class="container">

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>RAJASTHAN EXPLORER</h1>
            <p class="lead"></p>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="imgs/1.jpg" alt="Chania">
                </div>

                <div class="item">
                    <img src="imgs/2.jpg" alt="Chania">
                </div>



                <div class="item">
                    <img src="imgs/3.jpg" alt="Flower">
                </div>
                <div class="item">
                    <img src="imgs/4.jpg" alt="Chania">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

<!-- Page Content -->
<!--<span><cent<h4 style="Color:red"><b><?PHP echo $error; unset($_SESSION['error']); ?></b></h4></center></span>-->
<!--<div class="container">-->
        <div class="col-md-6">
            <div id="loginbox" style="margin-top:50px;" class="">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Voyager Log In</div>
                            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                        </div>

                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form action="main.php" method="post" id="loginform" class="form-horizontal" role="form">
               
                            <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span><?PHP echo $error; ?></span>
                            </div>
                            
                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="std-id" type="text" class="form-control" name="id" value="" placeholder="Phoneno" required>
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                                </div>






                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Login</button>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account!
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                Sign Up Here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            <button class="loginBtn loginBtn--facebook">
                Login with Facebook
            </button>

            <button class="loginBtn loginBtn--google">
                Login with Google
            </button>
                <div id="signupbox" style="display:none; margin-top:50px" class="">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Voyager Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>
                        <div class="panel-body" >
                            <form action="voyagerreg.php" method="post" id="signupform" class="form-horizontal" role="form">

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span><?PHP echo $error; ?></span>
                                </div>





                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Phone Number</label>
                                    <div class="col-md-9">
                                        <input type="phone" class="form-control" name="phone" placeholder="phone number" pattern="[0-9]{10}" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Gender</label>
                                    <div class="col-md-9">
                                        <div class="radio">
                                            <label><input type="radio"  name="gender" value="male">male </label>
                                        </div>

                                        <div class="radio">
                                            <label><input type="radio"  name="gender" value="female">Female </label>
                                        </div>    
                                        <div class="radio">
                                            <label><input type="radio"  name="gender" value="other">Other </label>
                                        </div>                                  
                                   </div>

                                                                       
                                </div>


                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                    </div>
                                </div>
                           </form>
                        </div>
                    </div>




                </div>
            </div>
    </div>


    <footer>
        <div class="footerHeader" ></div>

        <div class="container">
            <nav class="navbar navbar-inverse navbar-bottom" role="navigation">
                <div class="col-md-4" >
                    <h3>About us</h3>
                    <h6>HAWKSHAW</h6>
                </div>

                <div class="col-md-4">
                    <h3>Our Location </h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d433868.0837064906!2d35.66744174160663!3d31.836036762053016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fb85d7981af%3A0x631c30c0f8dc65e8!2sAmman!5e0!3m2!1sen!2sjo!4v1499168051085" sytle="" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4" >
                    <h3>Contact Us</h3>
                    <ul>
                        <li>Phone : 123 - 456 - 789</li>
                        <li>E-mail : info@comapyn.com</li>
                        <li>Fax : 123 - 456 - 789</li>
                    </ul>

                    <ul class="sm">
                        <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
                        <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
                        <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </footer>





    <!-- jQuery Version 1.11.1 -->

<!-- Bootstrap Core JavaScript -->

</body>

</html>