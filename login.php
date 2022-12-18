<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);  
      $sql = "SELECT * FROM user WHERE email = '$myusername' and password = '$mypassword'";  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
      $count = mysqli_num_rows($result);
      
      // If result matched $ myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $active = $row['active'];
        //  session_register("myusername");
         $_SESSION['login_user'] = $myusername;   
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Alumni</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="login_body_bg">
    <div class="login_layout">
        <div class="logo_div">
            <img src="https://alumni.ulab.edu.bd/sites/all/themes/sloth/logo.svg" alt="logo">
            <h3 class="my-4">Alumni Website Login</h3>

            <p style="color: red;">
                <?php if(isset($error)) {
                    echo $error;
                } ?>
            </p>
            
        </div>

        <div class="login_form_div"> 
            <form action = "" method = "post"> 
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" placeholder="Enter Email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="psw">Password</label>
                    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="login_btn">Login</button>
                </div>  

                <div class="form-group">
                    <h3> Create a new account ? <a href="registration.php"> <strong> Registration now </strong></a> </h3>
                </div>  
            </form>
        </div> 
    </div>
</body>

</html>