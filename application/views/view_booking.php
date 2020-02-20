<?php include('application\config\config.php')?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title> Receptionist Hall Booking</title>
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
          <h1>Receptionist</h1>
        </header>
        <!-- <div class="profile-photo-container">
          <img src="<?php echo base_url();?>assets/images/Receptionist.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>       -->
        <!-- Search box -->
        <!-- <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form> -->
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
        <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/receptionist"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/edit_recep"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/payment"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="#" class="active"><i class="fa fa-home fa-fw "></i>Hall Management</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/logout"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
         
          </ul>        
       
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
              
                <li><a href="<?php echo base_url();?>index.php/Welcome/recep_hall">Add booking</a></li>
                <li><a href="" class="active">View booking</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/cancel_booking">Cancel booking</a></li>
               
                <!-- <li><a href="login.html">Sign in form</a></li> -->
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget padding">
        
          <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Booking Details</h2></div>
                <div class="table-responsive">
                
                <div class="templatemo-content-container">
         
         <div class="templatemo-flex-row flex-content-row">
           
           <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">AL001 BOOK</h2></div>
              
               <div class="table-responsive">
                 
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                        
                        <td>Day</td>
                        <td>Teacher_no</td>
                     </tr>
                     <?php
                      // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                      // while($result->result() as $row){
                        $result=$this->db->query("SELECT time ,emp_no FROM booking_details where hall_no='AL001' ");
                        foreach($result->result() as $row){
                          ?>
                      <tr>
                        
                        <td><?php echo $row->time; ?></td>
                        <td><?php echo $row->emp_no; ?></td>
                            
                      </tr>
                      <?php
                        }
                      ?>
                    
                   </thead>
                   <tbody>

                  
                    
                                     
                   </tbody>
                 </table>    
               </div>                          
             </div>
           </div>           
         </div> 
         <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">AL002 BOOK</h2></div>
              
               <div class="table-responsive">
                 
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                        
                        <td>Day</td>
                        <td>Teacher_no</td>
                     </tr>
                     
                    
                   </thead>
                   <tbody>

                   <?php
                      // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                      // while($result->result() as $row){
                        $result=$this->db->query("SELECT time ,emp_no FROM booking_details where hall_no='AL002' ");
                        foreach($result->result() as $row){
                          ?>
                      <tr>
                        
                        <td><?php echo $row->time; ?></td>
                        <td><?php echo $row->emp_no; ?></td>
                       
                            
                      </tr>
                      <?php
                        }
                      ?>
                     
                    
                                     
                   </tbody>
                 </table>    
               </div>                          
             </div>
           </div>           
           <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">N001 BOOK</h2></div>
              
               <div class="table-responsive">
                 
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                        
                        <td>Day</td>
                        <td>Teacher_no</td>
                     </tr>
                     <?php
                      // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                      // while($result->result() as $row){
                        $result=$this->db->query("SELECT time ,emp_no FROM booking_details where hall_no='N001' ");
                        foreach($result->result() as $row){
                          ?>
                      <tr>
                        
                        <td><?php echo $row->time; ?></td>
                        <td><?php echo $row->emp_no; ?></td>
                            
                      </tr>
                      <?php
                        }
                      ?>
                    
                   </thead>
                   <tbody>

                  
                    
                                     
                   </tbody>
                 </table>    
               </div>                          
             </div>
           </div>           
         <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">N002 BOOK</h2></div>
              
               <div class="table-responsive">
                 
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                        
                        <td>Day</td>
                        <td>Teacher_no</td>
                     </tr>
                     <?php
                      // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                      // while($result->result() as $row){
                        $result=$this->db->query("SELECT time ,emp_no FROM booking_details where hall_no='N002' ");
                        foreach($result->result() as $row){
                          ?>
                      <tr>
                        
                        <td><?php echo $row->time; ?></td>
                        <td><?php echo $row->emp_no; ?></td>
                            
                      </tr>
                      <?php
                        }
                      ?>
                    
                   </thead>
                   <tbody>

                  
                    
                                     
                   </tbody>
                 </table>    
               </div>                          
             </div>
           </div>           
           
           <div class="col-1">
             <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
               <i class="fa fa-times"></i>
               <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">N003 BOOK</h2></div>
              
               <div class="table-responsive">
                 
                 <table class="table table-striped table-bordered">
                   <thead>
                     <tr>
                        
                        <td>Day</td>
                        <td>Teacher_no</td>
                     </tr>
                     <?php
                      // $result=$this->db->query("SELECT hall_no, day ,emp_no FROM booking_details");
                      // while($result->result() as $row){
                        $result=$this->db->query("SELECT time ,emp_no FROM booking_details where hall_no='N003' ");
                        foreach($result->result() as $row){
                          ?>
                      <tr>
                        
                        <td><?php echo $row->time; ?></td>
                        <td><?php echo $row->emp_no; ?></td>
                            
                      </tr>
                      <?php
                        }
                      ?>
                    
                   </thead>
                   <tbody>

                  
                    
                                     
                   </tbody>
                 </table>    
               </div>                          
             </div>
           </div>           
           </div>
         
                 
                     
                 
                 

          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | Design:UCSC</p>
          </footer>         
      
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