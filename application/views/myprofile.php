
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>My profile Home</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/templatemo-style.css" rel="stylesheet">
    
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">

        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1> Receptionist</h1>
        </header>
            
       
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>

        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="<?php echo base_url();?>index.php/Welcome/receptionist"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
            <li><a href="#" class="active"><i class="fa fa-bar-chart fa-fw"></i>Edit Profile</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_noti"><i class="fa fa-database fa-fw"></i>Notification</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_pay"><i class="fa fa-map-marker fa-fw"></i>Payment</a></li>
            <li><a href="<?php echo base_url();?>index.php/Welcome/recep_hall"><i class="fa fa-users fa-fw"></i>Hall Management</a></li>
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
                <li><a href="" class="active">My Profile</a></li>
                <li><a href="<?php echo base_url();?>index.php/Welcome/edit_recep">Edit Profile</a></li>
                
              </ul>  
            </nav>

          </div>
        </div>

        <div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <i class="fa fa-times"></i>
               
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">My Profile</h2></div>
                <!-- <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div> -->
          <div class="templatemo-flex-row flex-content-row templatemo-overflow-hidden"> 
                <div class="templatemo-content-widget templatemo-login-widget white-bg">
                
                    <div class="form-box">
                        <div class="form-top">
                        </div>
                        <div class="form-bottom">
                        <form>
                                
                           
                                <div class="input-group form-group">
                                     Employee no
                                      <span class="form-control" name="emp_no" > 
                                    <?php
                                          echo $_SESSION['user_id'] ;
                                     ?>
                                     </span>        
                                </div>
                                
                                <div class="input-group form-group">
                                     Name
                                      <span class="form-control" name="name" > 
                                      <?php
                                         $result=$this->db->query("SELECT name FROM receptionist Where emp_n='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->name."</option>";
                                          }  
                                     ?>
                                     </span> 
                                 </div>
                                
                                <div class="input-group form-group">
                                     Address
                                      <span class="form-control" name="address" > 
                                    <?php
                                         $result=$this->db->query("SELECT address FROM receptionist Where emp_no='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->address."</option>";
                                          }
                                      ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                     Contact Number
                                      <span class="form-control" name="contact_no" > 
                                    <?php
                                         $result=$this->db->query("SELECT contact_no FROM receptionist Where emp_no='{$_SESSION['user_id']}' ");
                                         foreach($result->result() as $row){
                                            echo "<option>".$row->contact_no."</option>";
                                          }  
                                     ?>
                                     </span> 
                                       
                                </div>

                                <div class="input-group form-group">
                                     User Name
                                      <span class="form-control" name="user_name" > 
                                      <?php
                                        echo $_SESSION['user_name'] ;
                                     ?>
                                     </span> 
                                       
                                </div>
   
                
            </table>  

            
                              
                                
                            </form>       
                  
	             </div>
                    

            </div>


    </section>

     
              </div>
            </div>
          </div>
          <footer class="text-right">
            <p>Copyright &copy; Team Innoview
            | UCSC</p>
          </footer>         
        </div>
      </div>
    </div>
   
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
    
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>