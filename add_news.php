<?php 
    include 'header.php';
 
?>
 



<link rel="stylesheet" href="assets/css/profile.css" />
<link rel="stylesheet" href="assets/css/login.css">

<div class="row" style="height:100%;">
 
    <div class="col-md-4">
        <div class="left_navber">
            <ul>
                <li><a href="/ulab_alumni_portal/my_profile.php">Profile</a></li>
                <li><a href="add_news.php">Add News & Events</a></li>
                <li><a class="active" href="add_jobs.php">Add Jobs</a></li>
                <li><a href="notice_add.php">Add Notice</a></li> 
            </ul>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card_body mt_40">
            <h2 class="text-center">Add News & Events </h2> 

            <div class="form_div">
                <form action="app/newsAdd.php" method="post" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input class="form-control" type="text" placeholder="Enter Title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="banner">Banner</label>
                        <input class="form-control" type="file" name="uploadfile" value="" />
                    </div>
 


                    <div class="form-group">
                        <label for="decs">Description</label>
                        <textarea id="decs" name="decs" rows="6" style="width: 93%"> </textarea>
                    </div>
 

                    <div class="form-group">
                        <input class="login_btn" type="submit" value="Save" /> 
                    </div>  
                </form>
            </div>
        </div> 
    </div>
</div>


<?php include 'footer.php';?>