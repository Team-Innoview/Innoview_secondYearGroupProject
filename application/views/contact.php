<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title> Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/templatemo-host-cloud.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--

Host Cloud Template

https://templatemo.com/tm-541-host-cloud

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg bg-custome">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Southern <em>Institute</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a>
              </li>
            </ul>
            <div class="functional-buttons">
            <ul>
              <li><a href="<?php echo base_url();?>index.php/Welcome/login">Log in</a></li>
            </ul>
          </div>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Heading Starts Here -->
    <div class="page-heading-responsive">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="overlay">
              <h1>Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Heading Ends Here -->


    <!-- Contact Us Starts Here -->
    <div class="contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="contact-form">
              <form>
                <div class="row">
                  <form role="form" action="<?php echo site_url('Welcome/contact_submit');?>" method="post" class="login-form">
                  <div class="col-md-12 col-sm-12">
                    <!-- <fieldset> -->
                      <input name="name" type="text" id="name" method="post" placeholder="Your name" required="required">
                    <!-- </fieldset> -->
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <!-- <fieldset> -->
                      <input name="email" type="text" id="email" method="post" placeholder="Your email" required="required">
                    <!-- </fieldset> -->
                  </div>
                  <div class="col-md-12 col-sm-12">
                    <!-- <fieldset> -->
                      <input name="subject" type="text" id="subject" method="post" placeholder="Subject" required="required">
                    <!-- </fieldset> -->
                  </div>
                  <div class="col-lg-12">
                    <!-- <fieldset> -->
                      <textarea name="message" rows="6" id="message" method="post" placeholder="Your message" required="required"></textarea>
                    <!-- </fieldset> -->
                  </div>
                  <!-- <div class="col-lg-12"> -->
                    <!-- <fieldset> -->
                      <input class="templatemo-blue-button width-100" id="form-submit" type="submit" name="submit" value="Send Message" >
                      <!-- onclick="send_message();" -->
                      <!-- <a href="<?php echo base_url();?>index.php/Welcome/contact_submit"><i class="fa fa-eject fa-fw" name="submit" id="form-submit" class="main-button" ></i>Send Message</a> -->
                      <!-- <a href button name="submit" type="submit" value="submit"  >Send Message</button> -->
                    <!-- </fieldset> -->
                  <!-- </div> -->
                </div>
              </form>

              
          </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="section-heading">
                <span>Contact Us</span>
                <h2>Let's keep in touch</h2>
                <!-- <p>Quisque sagittis blandit sapien et elementum. Fusce pretium viverra consequat. Aliquam at feugiat mi. Pellentesque hendrerit, felis ac sodales commodo.</p>
               -->
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <ul>
                    
                                        <!-- <p>Phone:+0912 242 189<br> -->
                    <li><i class="fa fa-phone"></i> 091-224-2189</li>
                    <!-- <li><i class="fa fa-support"></i> support@company.com</li> -->
                  </ul>
                </div>
                <div class="col-md-6 col-sm-12">
                  <ul>
                    	<li>Visit Us</li>
									    <li>Southern Educational Institute <br>
                          Wimalasurendra Mawatha,<br>
								      	Galle 80000,<br>
									Sri Lanka. </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Us Ends Here -->


    <!-- Map Starts Here -->
    <div id="map">
    
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.6467010327124!2d80.21083161392538!3d6.043118330239778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bf7e3d8bb9%3A0xb116c9761f2d7d15!2sSouthern%20Educational%20Institute!5e0!3m2!1sen!2slk!4v1575992547531!5m2!1sen!2slk"  width="100%" height="520px" frameborder="0" style="border:0" allowfullscreen></iframe> -->

      <!-- <iframe src="https://goo.gl/maps/HHz5bThVfYtHh2eW8" width="100%" height="520px" frameborder="0" style="border:0" allowfullscreen></iframe>
     -->
    </div>
    <!-- Map Ends Here -->


    <!-- Testimonials Starts Here -->
    <!-- <div class="testimonials-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <span>Testimonials</span>
              <h2>What they say about us</h2>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <div class="owl-testimonials owl-carousel">
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Ut elementum a elit sed tristique. Pellentesque sed semper erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean quam erat, rutrum ut malesuada."</p>
                <h4>William Smith</h4>
                <span>New Co-Founder</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Quisque lacinia sed velit et maximus. Quisque dictum, lacus a malesuada finibus, arcu magna luctus risus, eu accumsan risus elit vitae lacus."</p>
                <h4>Vinny Smart</h4>
                <span>Digital Marketer</span>
              </div>
              <div class="testimonial-item">
                <div class="icon">
                  <i class="fa fa-quote-right"></i>
                </div>
                <p>"Vestibulum mauris ipsum, tempor tincidunt justo sit amet, bibendum tincidunt dui. Aenean molestie, odio quis viverra ultricies, leo tellus lacinia neque, sit amet maximus tortor nunc aliquet felis."</p>
                <h4>Trevor Liam</h4>
                <span>Technology Chef</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Testimonials Ends Here -->


   <!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="<?php echo base_url();?>index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/about"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule"><i class="fa fa-angle-double-right"></i>Class Schedule</a></li>
						<li><a href="<?php echo base_url();?>index.php/Welcome/contact"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Reach Us</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Wimalasurendra Mawatha<br>Galle<br>80000<br>Sri Lanka</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>CONTACT</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Phone: (+94)91 2242 189</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>E-mail: southern@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
		</div>
	</section>
	<!-- ./Footer -->
  
      <!-- Bootstrap core JavaScript -->
      <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
      <!-- Additional Scripts -->
      <script src="<?php echo base_url();?>assets/js/custom.js"></script>
      <script src="<?php echo base_url();?>assets/js/owl.js"></script>
      <script src="<?php echo base_url();?>assets/js/accordions.js"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
  
    </body>
  </html>