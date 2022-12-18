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
            <h2 class="text-center">Add New Jobs</h2> 

            <div class="form_div">
                <form action="app/jobsAdd.php" method="post"> 
                    <div class="form-group">
                        <label for="name">Jobs Title</label>
                        <input class="form-control" type="text" placeholder="Enter Jobs Title" name="job_title" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Jobs Category</label>
                        <input class="form-control" type="text" placeholder="Enter category" name="category" required>
                    </div>

                    <div class="form-group">
                        <label for="decs">Description</label>
                        <textarea id="decs" name="decs" rows="6" style="width: 93%"> </textarea>

                        <!-- <input class="form-control" type="text" placeholder="Enter description" name="description" required> -->
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