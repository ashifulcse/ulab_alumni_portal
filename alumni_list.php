<?php 
    include 'header.php';

    $result = mysqli_query($db,"SELECT * FROM user");

?>
<link rel="stylesheet" href="assets/css/alumni_list.css" />

<div class="row" style="width: 98%;">
    <div class="col-md-12">
        <h1 class="text-center">Alumni Member List</h1>
    </div>
</div>

<div class="row" style="width: 98%;">

    <?php
        if (mysqli_num_rows($result) > 0) {
    ?>


            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
            ?>
 
                <div class="col-md-4">  
                    <article class="card border curve">
                        <div>
                            <img src="https://us.123rf.com/450wm/apoev/apoev1903/apoev190300009/apoev190300009.jpg?ver=6" alt="image" />
                        </div>

                        <div>
                            <h3 class="mb-3">
                                <strong> <?php echo $row["name"]; ?> </strong>
                            </h3>
                            <p><?php echo $row["phone"]; ?> </p>
                            <p><?php echo $row["email"]; ?></p>
                        </div>
                    </article>
                </div>

            <?php
                $i++;
                }
            ?> 

    <?php }  
        else {
            echo "No result found";
        }
    ?>  

</div>

  
<?php include 'footer.php';?>
