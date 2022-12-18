<?php 
    include 'header.php';

    $result = mysqli_query($db,"SELECT * FROM news");

?>
<link rel="stylesheet" href="assets/css/news.css">

<div class="row" style="width: 98%">
                <div class="col-md-12 mb-5">
                    <h1 class="text-left"> News & Events </h1> 
                    <main>

                        <?php
                            $i=0;
                            while($row = mysqli_fetch_array($result)) {
                        ?>

                            <div class='news_card'> 
                                <div class='module'>
                                    <div class='thumbnail'>
                                        <img src="images/<?php echo $row['uploadfile']; ?>"> 
                                    </div>
                                    <div class='content'> 
                                        <h1 class='title'><?php echo $row["title"]; ?></h1> 
                                        <div class="description"><?php echo $row["decs"]; ?></div>
                                        <div class="meta">
                                            <span class="timestamp"> Date: 
                                            <i class='fa fa-clock-o'></i> <?php echo $row["create_at"]; ?>
                                            </span>
                                            <br> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $i++;
                            }
                        ?> 
                    </main> 
                </div>
            </div>



<?php include 'footer.php';?>