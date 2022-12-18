<div class="navbar_div">
    <div class="logo_li">
        <a href="index.php"> 
            <img src="https://alumni.ulab.edu.bd/sites/all/themes/sloth/logo.svg" alt="logo">
        </a>
    </div> 
    <ul> 
        <li><a href="index.php">Home</a></li>
        <li><a href="blood.php">Blood</a></li>
        <li><a href="my_profile.php">Profile</a></li> 
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="notice.php">Notice</a></li>
        <li><a href="alumni_list.php">Alumni List</a></li>
        <li><a href="news.php">News & Events</a></li>  

        <!-- <li><a href="login.php">Sign In</a></li>  -->

        <?php 
            if(isset($_SESSION['login_user'])){ 
                echo " <li> <a href='logout.php'>Logout</a> </li> ";
            } else {
                echo " <li> <a href='login.php'>Sign In</a> </li> ";
            }
        ?>
  
    </ul>
</div>