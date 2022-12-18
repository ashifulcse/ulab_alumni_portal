<?php 
    include 'header.php';

    $result = mysqli_query($db,"SELECT * FROM jobs");
?>
<link rel="stylesheet" href="assets/css/news.css">

<div class="row" style="width: 98%">
                <div class="col-md-12 mb-5">
                    <h1 class="text-center"> Jobs List </h1> 

                    <?php
                        if (mysqli_num_rows($result) > 0) {
                    ?>

                        <main>

                            <?php
                                $i=0;
                                while($row = mysqli_fetch_array($result)) {
                            ?>

                                <div class='news_card'> 
                                    <div class='module'>
                                        <div class='thumbnail'>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg">
                                        
                                        </div>
                                        <div class='content'>
                                            <div class="category"><?php echo $row["category"]; ?></div>
                                            <h1 class='title'><?php echo $row["job_title"]; ?></h1> 
                                            <div class="description"><?php echo $row["decs"]; ?></div>
                                            <div class="meta">
                                                <span class="timestamp">
                                                    <i class='fa fa-clock-o'></i> <?php echo $row["create_at"]; ?> mins ago
                                                </span>
                                                <br>
                                                <span class="comments"> 
                                                    <a target="_blank" href="https://forms.gle/i76WaiA7WpEkMHQd9"> Apply Now</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                            <?php
                                $i++;
                                }
                            ?> 
                        </main> 

                    <?php }  
                        else {
                            echo "No result found";
                        }
                    ?> 
                </div>
            </div>



<?php include 'footer.php';?>