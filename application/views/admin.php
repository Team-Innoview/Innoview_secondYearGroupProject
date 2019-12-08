<?php include('includes/connection.php') ?>
<?php  //include('includes/session.php') ?>
<?php include('includes/messege.php') ?>

<?php
	//Unauthorized Access Check
    // checkSession();
    if(!isset($_SESSION['user_type']) || $_SESSION['user_type'] != '1'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
       exit();
       }

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Home Page</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
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
                    
                </div> 
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="social_links">
                        <li><i class="fa fa-phone"></i><a href="#">Call Us +0912 242 189</a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                      
                    </ul>
                </div>
               
            </div>
        </div>

    </section>

    <header>
      
        <nav class="navbar navbar-expand-lg navbar-light text-white bg-dark ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				
				<span class="icon-bar"></span>
              </button>
              <a class="navbar-brand " href="#" al>
               
                <img height="120px" width="120px" src="<?php echo base_url();?>assets1/img/logo.jpeg" class="attachment-full img-responsive" alt="">
           
              
             </div>
                  
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>index.php/Welcome/home">Home</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/about">About Us</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a></li>
                        <li><a href="<?php echo base_url();?>index.php/Welcome/logout">Sign Out</a></li>
                       
                    </ul>
                </div>
               
            </div>
        </nav>
       
    </header>



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-3 col-sm-12 forms-right-icons">
    <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="index.html">
                  <div class="peers ai-c fxw-nw">
                    <!-- <div class="peer"> -->
                      <!-- <div class="logo">
                        <img src="assets1\img\admin.jpg" alt="">
                      </div> -->
                    <!-- </div> -->
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">Admin</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="index.html">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Notification</span>
              </a>
            </li>
           
            
           
          
            <div class="sidenav">
 
 <li class="dropdown-btn">Registration
   <i class="fa fa-caret-down"></i>
 </li>
 <div class="dropdown-container">
   <li><a href="<?php echo base_url();?>index.php/Welcome/sturegistrations">Student Registrations</a></li>
   <li><a href="<?php echo base_url();?>index.php/Welcome/tearegistrations">Teacher Registrations</a></li>
   <li><a href="<?php echo base_url();?>index.php/Welcome/recepregistration">Receptionist Registrations</a></li>
               
 </div>
 
</div>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
 dropdown[i].addEventListener("click", function() {
 this.classList.toggle("active");
 var dropdownContent = this.nextElementSibling;
 if (dropdownContent.style.display === "block") {
 dropdownContent.style.display = "none";
 } else {
 dropdownContent.style.display = "block";
 }
 });
}
</script>
               
               <li class="nav-item">
                    <a class='sidebar-link' href="compose.html">
                     <span class="icon-holder">
                  <i class="c-blue-500 ti-share"></i>
                </span>
                <span class="title">Courses</span>
              </a>
            </li>      
             
          </ul>
        </div>
      
    </div>
         
    </div>
        <div class="col-md-9 col-sm-12">
        <div class="card table-card">
<div class="card-header">
<h5>New Products</h5>
<div class="card-header-right">
<ul class="list-unstyled card-option">
<li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
<li><i class="feather icon-maximize full-card"></i></li>
<li><i class="feather icon-minus minimize-card"></i></li>
<li><i class="feather icon-refresh-cw reload-card"></i></li>
<li><i class="feather icon-trash close-card"></i></li>
<li><i class="feather icon-chevron-left open-card-option"></i></li>
</ul>
</div>
</div>
<div class="card-block p-b-0">
<div class="table-responsive">
<table class="table table-hover m-b-0">
<thead>
<tr>
<th>Name</th>
<th>Product Code</th>
<th>Customer</th>
<th>Status</th>
<th>Rating</th>
</tr>
</thead>
<tbody>
<tr>
<td>Sofa</td>
<td>#PHD001</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8feeedeccfe8e2eee6e3a1ece0e2">[email&#160;protected]</a></td>
<td><label class="label label-danger">Out Stock</label></td>
<td>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
</td>
</tr>
<tr>
<td>Computer</td>
<td>#PHD002</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e6858285a6818b878f8ac885898b">[email&#160;protected]</a></td>
<td><label class="label label-success">In Stock</label></td>
 <td>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
</td>
</tr>
<tr>
<td>Mobile</td>
<td>#PHD003</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0878797a486f65696164266b6765">[email&#160;protected]</a></td>
<td><label class="label label-danger">Out Stock</label></td>
<td>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
</td>
</tr>
<tr>
<td>Coat</td>
<td>#PHD004</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4220213102252f232b2e6c212d2f">[email&#160;protected]</a></td>
<td><label class="label label-success">In Stock</label></td>
<td>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
</td>
</tr>
<tr>
<td>Watch</td>
<td>#PHD005</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6102050221060c00080d4f020e0c">[email&#160;protected]</a></td>
 <td><label class="label label-success">In Stock</label></td>
<td>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
</td>
</tr>
<tr>
<td>Shoes</td>
<td>#PHD006</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9d9d8dbe9cec4c8c0c587cac6c4">[email&#160;protected]</a></td>
<td><label class="label label-danger">Out Stock</label></td>
<td>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
<a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
</td>
</tr>
</tbody>
</table>
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

<div id="styleSelector">
</div>

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
                            <h4>Gallery</h4>
                            <div class="user-image"><img src="<?php echo base_url();?>assets1\img\pic.jpg" alt="user" class="img-responsive" /></div>
                           
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                            <h4>Useful Links</h4>
                           
                            <ul class="footer-links">
                               
                                <li><a href="<?php echo base_url();?>index.php/Welcome/home">Home</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Welcome/about">About Us</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Welcome/class_schedule">Class Schedule</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Welcome/contact">Contact Us</a></li>
                                <li><a href="<?php echo base_url();?>index.php/Welcome/signout">Sign Out</a></li>
                               
                               
                              
                            </ul>
                        </div>
                    </div>
    
                    
                </ul>
                    <div class="col-md-3 col-sm-3 col-xs-12 block">
                        <div class="footer-block">
                            <h4>Contact Us</h4>
                           
                            <h4>Southern Institute Galle</h4>
                            <h5>Wimalasurendra Mawatha, Galle 80000, </br>  Sri Lanka</h5>
                            <a href= "https://www.google.com/maps/place/Southern+Educational+Institute/@6.043113,80.2108316,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xb116c9761f2d7d15!8m2!3d6.043113!4d80.2130203">
                                <img src="<?php echo base_url();?>assets1\img\map.png">
                            </a>
                             
                        </div>
                    </div>
    
                    <div class="col-md-3 col-sm-3 col-xs-12 <block></block>">
                        <div class="footer-block">
                            <h4>Recent Posts</h4>
                           
                            <ul class="footer-links">
                                <li>
                                     <div class="user-image"><img src="<?php echo base_url();?>assets1\img\post.jpeg" alt="user" class="img-responsive" /></div>
                           
                                </li>
                             
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
    
       
    </body>
    </html>
    