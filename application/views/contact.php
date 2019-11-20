<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/skin.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="..\..\assets1\script\index.js"></script>
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
                                    <li class="active"><a href="#contact">Contact Us</a></li>
                        <!-- <li><a href="contact.html">Contact Us</a></li> -->
                                    <li><a href="<?php echo base_url();?>index.php/Welcome/login">Sign In</a></li>
					</ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>
    <section id="top_banner">
         <!-- <div class="banner"> -->
                <!-- <div class="inner text-center">
                        <div class="fill"><img alt="" src="../../../assets1/img/pic.jpg" width="1350" height="100" alt="Galle fort"></div>        
                </div> -->
        <!-- </div> -->
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                           <h4>Contact INFo</h4>
                          <h5>Welcome to our Website.We are glad to have you around.</h5>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Home<span class="sep"> / </span><span class="current">Contact Us</span></div>
                    </div>
                 </div>
            </div>
        </div>

        </div>
    </section>
    <section id="contact-page">
        <div class="container">
            <div class="section-heading text-center">
                <h2> <span>Drop yourMessage</span></h2>
                <p class="subheading">Your email address will not be published.Required fields are marked.</p>
            </div>
            <div class="row contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required pattern ="[A-Za-z]{1,32}" placeholder="Kamal">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required pattern="[^]+@[^]+[.][a-z]{2,63}$" autocomplete="email" placeholder="admin@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" class="form-control" pattern="^\d{10}$" required placeholder="xxxxxxxxxx" >
                            <!-- <input type="number" name="phone" class="form-control"  required pattern="^\d{10}$"  placeholder="xxx xxx xxxx" >
                        </div> -->
                       </div>
                        <!-- <div class="form-group">
                            <label>Southern Institute ID</label>
                            <input type="text" name="ID" class="form-control" required="required" >
                        </div> -->
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn- submit-button">Submit Message <i class="fa fa-caret-right"></i></button>
                            <!-- <input type="submit" name="submit" value="submit" onclick="registrationform();"></input> -->
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="overlay">
            <div class="gmap-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="gmap">
                                    <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" > -->
                                    <a href= "https://www.google.com/maps/place/Southern+Educational+Institute/@6.043113,80.2108316,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203">
                                        <img src="<?php echo base_url();?>assets1\img\map2.png" width="500" heiht="200"></img>
                                    </a>
                               /
                                <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/Southern+Educational+Institute/@6.0430383,80.2116041,17z/data=!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203;output=embed"></iframe>
                          -->
                                    <!-- <a href="https://www.google.com/maps/place/Southern+Educational+Institute/@6.043113,80.2108316,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203" ></a> 
                             -->
                             </div>
                        </div>
                        <div class="col-sm-7 map-content">
                            <ul class="row">
                                <li class="col-sm-6">
                                    <address>
									<h5>Visit Us</h5>
									<p>Southern Educational Institute <br>
                                    Wimalasurendra Mawatha,<br>
									Galle 80000,<br>
									Sri Lanka. </p>
                                        <p>Phone:+0912 242 189<br>
                                    <br/>      
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                                    <a href="#"><i class="fa fa-skype"></i></a>
									<!-- Email Address:sales@aspiresoftware.in</p> -->
								</address>

                                </li>
                                <!-- <li class="col-sm-6">
                                    <address>
									<h5>Zone#2 Office</h5>
									<p>Aspire Software Solutions <br>
									202, Parishram Complex,<br>
									Mithakhali Six Roads,<br>
									Navrangpura, Ahmedabad,<br>
									Gujarat, India. </p>
									<p>Phone:+91 848 594 5080 <br>
									Email Address:sales@aspiresoftware.in</p>
								</address>

                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                                <li><a href="<?php echo base_url();?>index.php/Welcome/login">Sign In</a></li>
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
    
    
   