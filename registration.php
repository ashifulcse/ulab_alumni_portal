<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | University Alumni</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="login_body_bg">
    <div class="login_layout">
        <div class="reg_logo_div">
            <img src="https://alumni.ulab.edu.bd/sites/all/themes/sloth/logo.svg" alt="logo">
            <h3 class="my-1">Alumni Registration Form</h3>
        </div>

        <div class="login_form_div"> 
            <form> 
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input class="form-control" type="text" placeholder="Enter Full Name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="number" placeholder="Enter phone number" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" placeholder="Enter Email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="psw">Password</label>
                    <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
                </div>

                <div class="form-group">
                    <a class="login_btn" href="dashboard.html">Registration</a>
                    <!-- <button type="submit" class="login_btn">Registration</button> -->
                </div>  
            </form>
        </div> 
    </div>
</body>

</html>