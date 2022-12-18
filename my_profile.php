<?php 
    include 'header.php';
 
?>
 



<link rel="stylesheet" href="assets/css/profile.css" />

<div class="row" style="height:100%;">
 
    <div class="col-md-4">
        <div class="left_navber">
            <ul>
                <li><a class="active" href="/ulab_alumni_portal/my_profile.php">Profile</a></li>
                <li><a href="add_news.php">Add News & Events</a></li>
                <li><a href="add_jobs.php">Add Jobs</a></li>
                <li><a href="notice_add.php">Add Notice</a></li> 
            </ul>
        </div>
    </div>

    <div class="col-md-8">
        <h2>dlkjlka</h2> 

        


        <div class="card_body mt_40">
            <h2 class="text-center">My Profile</h2> 

             <div class="profile_info_box">
                <h3>Name: Sazzadull Islam Shykat</h3>
                <p>
                    <?php 
                        echo $user_check;  
                        $user_check = $_SESSION['login_user'];  
                    ?>
                </p>
                <p>Phone: 01616-498901</p>
                <p>Present Address: Dhaka</p>
                <p>Profession: JOB </p>
             </div>
        </div> 

    </div>
</div>


<?php include 'footer.php';?>