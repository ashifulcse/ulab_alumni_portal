<?php 
    include 'header.php';
    $user_email = $_SESSION['login_user']; 

    $sql = 'SELECT * FROM `user` where email="'.$user_email.'"';
    $result = $db->query($sql)-> fetch_row();
    
    // print('<pre>');
    // print_r($result );
    // print('</pre>');
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

        <div class="card_body mt_40">
            <h2 class="text-center">My Profile</h2> 

             <div class="profile_info_box">
                <h3>Name: <?php echo isset($result[1])?$result[1]:'';?></h3>
                <p>Email: <?php echo isset($result[2])?$result[2]:'';?></p> 
                <p>Phone: <?php echo isset($result[6])?$result[6]:'';?></p>
                <p>Present Address: Dhaka</p>
                <p>Blood Group: <?php echo isset($result[4])?$result[4]:'';?> </p>
             </div>
        </div> 

    </div>
</div>


<?php include 'footer.php';?>