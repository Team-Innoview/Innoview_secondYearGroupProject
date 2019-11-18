
<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SignIn</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/main.css">    
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <!-- <script src="C:\wamp64\www\project\assets1\script\index.js"></script> -->

    <script type="text/javascript" src="..\..\assets1\script\index.js"></script>
    <script type="text/javascript" src="..\..\assets1\script\login.js"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    -->
    <!-- <script src="<?php echo base_url();?>/script/login.js"></script>  -->
    <!-- <script src="../script/login.js"></script> -->
    <!-- <script src="C:\wamp64\www\project\application\views\javascript\login.js "></script> -->
    <!-- <script src="javascript/login.js"></script> -->
    <!-- <script type="text/javascript" src="..\..\assets1\script\index.js"></script>
    <script type="text/javascript" src="..\..\assets1\script\login.js"></script>
    
     -->
    
      
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/skin.css"> -->


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
    <!-- <script src="./script/index.js"></script>  -->

</head>

<body id="wrapper">

        <section id="top-header">
                <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                                <!-- <ul class="contact_links">
                                    <li><i class="fa fa-phone"></i><a href="#">+0912 242 189</a></li> -->
                                    <!-- <li><i class="fa fa-envelope"></i><a href="#">sales@aspiresoftware.in</a></li> -->
                            
                            </div> 
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <ul class="social_links">
                                    <li><i class="fa fa-phone"></i><a href="#">Call Us +0912 242 189</a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <!-- <li><a href="#"><i class="fa fa-facebook">facebook</i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter">Twitter</i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                                    <li><a href="#"><i class="fa fa-skype">Skype</i></a></li> --> 
                            
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
        </section>
        <header>
                <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark ">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <!-- <span class="icon-bar"></span> -->
                        <span class="icon-bar"></span>
                      </button>
                                <a class="navbar-brand " href="#" al>
                                        <!-- <div class="col-xs-2 icon"><img src="..\..\..\assets1\img\logo.jpeg"></src></i></div> -->
                                        <img height="120px" width="120px" src="<?php echo base_url();?>assets1\img\logo.jpeg" class="attachment-full img-responsive" alt="">
                                   
                                        <!-- <h1>Southern Educational Institute</h1><span>Galle</span></a>  -->
                                    <!-- < src="..\..\..\assets1\img\logo.jpeg">        -->
                            </div>
                            <div id="navbar" class="collapse navbar-collapse navbar-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="<?php echo base_url();?>index.php/Welcome/home">Home</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Welcome/about">About Us</a></li>
                                     <li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a></li>
						            <li><a href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a></li>
                        
                                 <li class="active"><a href="#login">Sign In</a></li>
             
                                </ul>
                            </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

    <!-- <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Lorem ipsum dolor sit amet</h2>
            </div>
        </div>
    </section> -->



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2><span>Sign In With Us</span></h2>
                        <p class="subheading">Hi, there. You can log in to your account here.
                            </p>
                    </div>
                    <div class="row">
                            <div class="fill"><img alt="" src="<?php echo base_url();?>assets1/img/pic2.jpg"  alt="Galle fort"></div>        
            
                    </div>
					<!--<div class="row">
                            <div class="fill"><img alt="" src="../../../assets1/img/banner-slide-1.jpg"  alt="Galle fort"></div>        
            
                    </div>-->
                    
                    <!-- <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-bullhorn"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Powerful Features</h4>
                            <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-support"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Customer Support</h4>
                            <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.</p>
                        </div>
                    </div> -->

                </div>
                <div class="col-md-6 col-sm-12">
                        <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                 <div class="form-bottom">
                                  <form action="login_submit.php" method="post"> 
                                  <!--  <form role="form" action="logincom.php" method="post" class="login-form" >-->
                                        <div class="input-group form-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                            <input type="text" id="user_name" name="user_name" class="form-control" placeholder="username" aria-describedby="basic-addon1" required="required">
                                        </div>
                                        <div class="input-group form-group">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                            <input type="password" id="password" name="password" class="form-control" placeholder="**********" aria-describedby="basic-addon1" required="required">
                                        </div>
                                        <!-- <div class="input-group form-group">   -->
                                                <!-- <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                 <input type="checkbox" name="type1" value="Admin"> Admin<br>
                                                 <input type="checkbox" name="type2" value="Student">Student  -->
                                                 <!-- Student<input type="radio" name="Status" value="Student" />
                                                 Teacher <input type="radio" name="Status" value="Teacher" />
                                                 Receptionist<input type="radio" name="Status" value="Receptionist" />
                                                 Admin <input type="radio" name="Status" value="Admin" />
                                                       -->
                                                
                                                <!-- <select name="cars" size="4">
                                                        <option value="volvo">Student</option>
                                                        <option value="saab">Admin</option>
                                                        <option value="fiat">Teacher</option>
                                                        <option value="audi">Receptionist</option>
                                                      </select>
                                                      
                                                 -->
                                                <!-- <input type="text" class="form-control" placeholder="Type" aria-describedby="basic-addon1">
                                            -->
                                            <!-- </div> -->
                                         <!-- <td><input type="submit" value="LOGIN" onclick="loginform();"></td>    
                                         --> 
                                         <div class="text-center" >
                                         <!-- <button type="submit" name="submit" class="btn btn- submit-button" onclick="loginform();">LOGIN<i class="fa fa-caret-right"></i></button>
                                             -->
                                            <!-- <input name="submit" type="submit" value="LOGIN"  onclick="loginform();"></input><br/>
                                             -->
                                             <!-- <input type="submit" name="submit" value="Login">  -->
                                             <input type="submit" name="submit" value="LOGIN" onclick="loginform();"></input>
                                            <br/><td>or</td><br/>
                                                <td><a href="#">Forgot password</a></td>
                                            </div>
                                        <!-- </center>  -->
                    
                                    </form>
                                </div>
        
                    <!-- <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our site</h3>
                                <p>Enter username and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="" class="login-form">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                            </form>
                        </div>
                    </div> -->

                    <!-- <div class="social-login">
                        <h3>...or login with:</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                            <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                <i class="fa fa-twitter"></i> Twitter
                            </a>
                            <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                <i class="fa fa-google-plus"></i> Google Plus
                            </a>
                        </div>
                    </div> -->

                </div>

    </section>

    <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                            <h4>Southern Institute Galle</h4>
                                <div class="user-image"><img src="<?php echo base_url();?>assets1\img\logo.jpeg" alt="user" class="img-responsive" /></div>
                       
                            <!-- <h5>Wimalasurendra Mawatha, Galle 80000, </br>  Sri Lanka</h5>
                            <a href= "https://www.google.com/maps/place/Southern+Educational+Institute/@6.043113,80.2108316,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203">
                                <img src="..\..\..\assets1\img\map.png">
                            </a>
                             <hr/> -->
                            <!-- <p>Lorem ipsum dolor sit amet sit legimus copiosae instructior ei ut vix denique fierentis ea saperet inimicu ut qui dolor oratio mnesarchum.
                            </p> -->
                            <!-- <a href="#" class="learnmore">Learn More <i class="fa fa-caret-right"></i></a> -->
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                            <h4>Useful Links</h4>
                            <!-- <hr/> -->
                            <ul class="footer-links">
                                    <li><a href="<?php echo base_url();?>index.php/Welcome/home">Home</a></li>
                                     <li><a href="<?php echo base_url();?>index.php/Welcome/about">About Us</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/Welcome/contact"> Contact Us</a></li>
                            </ul>
                               
                        </div>
                    </div>
    
                    
                </ul>
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                                <h4>Visit Us</h4>
                                <h5>Southern Institute Galle</h5>
                                <h5>Wimalasurendra Mawatha, <br/>Galle 80000, </br>  Sri Lanka</h5>
                                <a href= "https://www.google.com/maps/place/Southern+Educational+Institute/@6.043113,80.2108316,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203">
                                    <img src="<?php echo base_url();?>assets1\img\map.png">
                                </a>
                                 <!-- <hr/> -->
                            <!-- <ul class="footer-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Free Goods</a></li>
                            </ul> -->
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                        <div class="footer-block">
                            <h4>Recent Posts</h4>
                            <!-- <hr/> -->
                            <ul class="footer-links">
                                <li>
                                    <div class="user-image"><img src="<?php echo base_url();?>assets1\img\post.jpeg" alt="user" class="img-responsive" /></div>
                       
                                    <!-- <a href="#" class="post">Lorem ipsum dolor sit amet</a>
                                    <p class="post-date">May 25, 2017</p> -->
                                </li>
                                <!-- <li>
                                    <a href="#" class="post">Lorem ipsum dolor sit amet</a>
                                    <p class="post-date">May 25, 2017</p>
                                </li>
                                <li>
                                    <a href="#" class="post">Lorem ipsum dolor sit amet</a>
                                    <p class="post-date">May 25, 2017</p>
                                </li> -->
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
    
        </section>
    
        <section id="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                        Developed by <a href="#">Team Innoview</a> designed by <a href="#">UCSC</a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- <div id="panel">
            <div id="panel-admin">
                <div class="panel-admin-box">
                    <div id="tootlbar_colors">
                        <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                        <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                        <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                        <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                        <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                        <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                    </div>
                </div>
    
            </div>
            <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
        </div> -->
    </body>
    </html>
    
    
    
    <!-- <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div> -->

