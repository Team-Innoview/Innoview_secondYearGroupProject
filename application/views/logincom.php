<?php

include ('application\views\includes\connection.php');
include ('application\views\includes\session.php');

if(isset($_POST['submit'])){
    

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM 'users' WHERE user_name = '$user_name' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
            
            
            //Creating Session
            checkSession();  
           
            $_SESSION["user_id"] = $row['user_id'];
            $_SESSION["user_type"] = $row['user_type'];
	        $_SESSION["user_name"] = $row['user_name'];
        
            $user_type= $row['user_type'];
            //echo $usertype;

            if($user_type == '1' ){
                header("Location:application\views\admin.php");
               
            }
            elseif ($user_type == '0'){
                header("Location: custormerInterface.php");
            }
            
    }
    else{        
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:application\views\login.php?msg=' . $message);
        
       
        exit();
    }
    
}

mysqli_close($conn);
    
    
?>