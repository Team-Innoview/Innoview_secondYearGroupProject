<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Student-Dashboard Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    https://templatemo.com/tm-455-visual-admin
    -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/templatemo-style.css" rel="stylesheet">
    
  
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Student</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="index.html"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-bar-chart fa-fw"></i>Charts</a></li>
            <li><a href="data-visualization.html"><i class="fa fa-database fa-fw"></i>Data Visualization</a></li>
            <li><a href="maps.html"><i class="fa fa-map-marker fa-fw"></i>Maps</a></li>
            <li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
            <li><a href="preferences.html"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
            <li><a href="login.html"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="" class="active">Admin panel</a></li>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Overview</a></li>
                <li><a href="login.html">Sign in form</a></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <!--td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">First Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Last Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">User Name <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Email <span class="caret"></span></a></td>
                    <td>Edit</td>
                    <td>Action</td>
                    <td>Delete</td>
                  </tr>
                </thead-->

                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Edit Profile</h2></div>
                <!-- <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div> -->
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden">
               <div class="templatemo-content-widget templatemo-login-widget white-bg"> 
                    <div class="form-box">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
                        <form role="form" action="<?php echo site_url('Signup/registration');?>" method="post" class="login-form">

                                <!--div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" id="user_type" name="user_type" placeholder="Student" value="Student" readonly aria-describedby="basic-addon1" required="required">
                                </div-->
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="student_Id" name="student_id" placeholder=" Enter Student ID Number" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder=" First Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder=" Last Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <!--div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i>Date of Birth</span>
                                        <input type="date" class="form-control" name="dob" placeholder="Date of Birth" label="Date of Birth" aria-describedby="basic-addon1" required="required">
                                </div-->
                                <!--div class="input-group form-group">
                                    <span class="input-group-addon" class="form-control" id="basic-addon1"><i class="fa fa-user"></i>Gender<input type="radio" name="gender" value="male" checked> Male <input type="radio" name="gender" value="female"> Female</span>
                    
                                            
                                </div-->
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1" required="required">
                                </div>
                            
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User Name" aria-describedby="basic-addon1" required="required">
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="Current Password" aria-describedby="basic-addon1" required="required">
                                </div>
                                

                                        <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                        <input type="password" class="form-control" name="password" placeholder="New Password" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        <input type="tel" class="form-control" name="contact_number" placeholder="Contact Number" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="pname" placeholder="Parent/Guardian Name" aria-describedby="basic-addon1" required="required">
                                </div>
                                <!--div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="pnic" placeholder="Parent NIC Number" aria-describedby="basic-addon1" required="required">
                                </div-->
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        <input type="tel" class="form-control" name="pnum" placeholder="Parent's Contact Number" maxlength="10" minlength="10" aria-describedby="basic-addon1" required="required">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" name="address" placeholder="Home Address" aria-describedby="basic-addon1" required="required">
                                </div>
                               
                
                <tr>
                    <td></td>
                    <td><input class="templatemo-blue-button width-100" type="submit" name="submit" value="submit">
                    <br/>
                    <input class="templatemo-blue-button width-100" type="reset" name="RESET"></td>
                </tr>
                
            </table>  

            
                              
                                
                            </form>       
                
                <!--tbody>
                  <form action="/action_page.php" method="get">
                    <label for="fname">First name:</label>   
                    <input type="text" id="fname" name="fname"><br><br>
                     <label for="lname">Last name:</label>
                      <input type="text" id="lname" name="lname"><br><br>
                      <label for="emailaddress">Email Address:</label>
                      <input type="text" id="email" name="emailaddress"><br><br>
                      <label for="contact number">Contact Number:</label>
                      <input type="text" id="contactnumber" name="contactnumber"><br><br>
                      <label for="address">Address:</label>
                      <input type="text" id="address" name="address"><br><br>
                      <label for="city/town">City/Town:</label>
                      <input type="text" id="city" name="citytown"><br><br>
                      <label for="pgname">Parent/Guardian Name:</label>
                      <input type="text" id="pgname" name="pgname"><br><br>
                      <label for="pgnumber">Parent/Guardian number:</label>
                      <input type="text" id="pgnumber" name="pgnumber"><br><br>
                      


                      <input type="submit" value="Update"-->
                     <!--/form-->
                  <!--tr>
                    <td>2.</td>
                    <td>Bill</td>
                    <td>Jones</td>
                    <td>@bJ</td>
                    <td>bj@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>Mary</td>
                    <td>James</td>
                    <td>@mJ</td>
                    <td>mj@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td>4.</td>
                    <td>Steve</td>
                    <td>Bride</td>
                    <td>@sB</td>
                    <td>sb@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>
                  <tr>
                    <td>5.</td>
                    <td>Paul</td>
                    <td>Richard</td>
                    <td>@pR</td>
                    <td>pr@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>  
                   <tr>
                    <td>6.</td>
                    <td>Will</td>
                    <td>Brad</td>
                    <td>@wb</td>
                    <td>wb@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>  
                   <tr>
                    <td>7.</td>
                    <td>Steven</td>
                    <td>Eric</td>
                    <td>@sE</td>
                    <td>se@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>  
                   <tr>
                    <td>8.</td>
                    <td>Landi</td>
                    <td>Susan</td>
                    <td>@lS</td>
                    <td>ls@company.com</td>
                    <td><a href="" class="templatemo-edit-btn">Edit</a></td>
                    <td><a href="" class="templatemo-link">Action</a></td>
                    <td><a href="" class="templatemo-link">Delete</a></td>
                  </tr>                    
                </tbody>
              </table>    
            </div>                          
          </div>          
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">
              <div class="panel panel-default margin-10">
                <div class="panel-heading"><h2 class="text-uppercase">Login Form</h2></div>
                <div class="panel-body">
                  <form action="index.html" class="templatemo-login-form">
                    <div class="form-group">
                      <label for="inputEmail">Email address</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">                      
                      <label for="inputEmail">Password</label>
                      <input type="password" class="form-control" placeholder="Enter password">                                 
                    </div>              
                    <div class="form-group">
                        <div class="checkbox squaredTwo">
                            <label>
                              <input type="checkbox"> Remember me
                            </label>
                        </div>            
                    </div>
                    <div class="form-group">
                      <button type="submit" class="templatemo-blue-button">Submit</button>
                    </div>
                  </form>
                </div>                
              </div>              
            </div>
            <!-- <div class="col-1">              
              <div class="templatemo-content-widget pink-bg">
                <i class="fa fa-times"></i>                
                <h2 class="text-uppercase margin-bottom-10">Latest Data</h2>
                <p class="margin-bottom-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mi sapien, fringilla at orci nec, viverra rhoncus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus rhoncus erat non purus commodo, sit amet varius dolor sagittis.</p>                  
              </div>            
              <div class="templatemo-content-widget blue-bg">
                <i class="fa fa-times"></i>
                <h2 class="text-uppercase margin-bottom-10">Older Data</h2>
                <p class="margin-bottom-0">Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur. Aliquam convallis pharetra odio, in convallis erat molestie sed. Fusce mi lacus, semper sit amet mattis eu, volutpat vitae enim.</p>                
              </div>            
            </div>                       
          </div>  --><!-- Second row ends -->
          <!--div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="media margin-bottom-30">
                <div class="media-left padding-right-25">
                  <a href="#">
                    <img class="media-object img-circle templatemo-img-bordered" src="images/person.jpg" alt="Sunset">
                  </a>
                </div>
                <div class="media-body">
                  <h2 class="media-heading text-uppercase blue-text">John Barnet</h2>
                  <p>Project Manager</p>
                </div>        
              </div>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td><div class="circle green-bg"></div></td>
                      <td>New Task Issued</td>
                      <td>02</td>                    
                    </tr> 
                    <tr>
                      <td><div class="circle pink-bg"></div></td>
                      <td>Task Pending</td>
                      <td>22</td>                    
                    </tr>  
                    <tr>
                      <td><div class="circle blue-bg"></div></td>
                      <td>Inbox</td>
                      <td>13</td>                    
                    </tr>  
                    <tr>
                      <!--td><div class="circle yellow-bg"></div></td>
                      <td>New Notification</td>
                      <td>18</td>                    
                    </tr>                                      
                  </tbody>
                </table>
              </div>             
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <i class="fa fa-times"></i>
              <img src="images/person.jpg" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5">Paul Smith</h2>
              <h3 class="text-uppercase margin-bottom-70">Managing Director</h3>
              <div class="templatemo-social-icons-container">
                <div class="social-icon-wrap">
                  <i class="fa fa-facebook templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-twitter templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-google-plus templatemo-social-icon"></i>  
                </div>                
              </div>
            </div>
            <div class="templatemo-content-widget white-bg col-1 templatemo-position-relative templatemo-content-img-bg">
              <img src="images/sunset-big.jpg" alt="Sunset" class="img-responsive content-bg-img">
              <i class="fa fa-heart"></i>
              <h2 class="templatemo-position-relative white-text">Sunset</h2>
              <div class="view-img-btn-wrap">
                <a href="" class="btn btn-default templatemo-view-img-btn">View</a>  
              </div>              
            </div>
          </div>
          <div class="pagination-wrap">
            <ul class="pagination">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li class="active"><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-play"></i></span>
                </a>
              </li>
            </ul>
          </div>          
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | Design: Template Mo</p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>