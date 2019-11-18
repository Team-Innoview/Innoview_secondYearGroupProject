<?php

include('includes/connection.php');
include('includes/session.php');

if(isset($_POST['submit'])){
	
    //Assign data from login form to variables
	$user_name = $_POST['user_name'];
	$password = sha1($_POST['password']);
    
    //Select User from database
    $userQuery = "SELECT * FROM users WHERE user_name ='$user_name' and password='$password'";
    $userResult= mysqli_query($connection, $userQuery);
    //print_r($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult) == 1) {
            $userRow = mysqli_fetch_array($userResult);
            //print_r($userRow);
            
            //Creating Session
            checkSession();  
            $_SESSION["user_name"] = $userRow['user_name'];
            $_SESSION["user_id"] = $userRow['user_id'];
            $_SESSION["user_type"] = $userRow['user_type'];
        
            $user_type= $userRow['user_type'];
            //echo $usertype;

            if($user_type == '1' ){
                header( "Location:admin.php" );
            }
            elseif ($user_type == 'c'){
                header( "Location:customer-dashboard.php" );
            }
            elseif ($user_type='v'){
                header( "Location:vendor-dashboard.php" );
            }
    }
    else{        
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($connection);
    
    
?>