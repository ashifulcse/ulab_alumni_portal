<?php 
    include 'header.php';

    $result = mysqli_query($db,"SELECT * FROM notice");
?>


      
       

    <div class="row">
        <div class="col-md-12">
            <div class="alumni_list_table">
                <h2 class="text-center">Notice Board</h2>

                <?php
                    if (mysqli_num_rows($result) > 0) {
                ?>

                <table class="text-left">
                    <tr>
                        <th>S.L</th>
                        <th>Title</th> 
                        <th>Description</th> 
                        <th>Date</th> 
                    </tr>

                    <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td style="width: 60%;"><?php echo $row["description"]; ?></td> 
                            <td><?php echo $row["create_at"]; ?></td>  
                        </tr>
                    <?php
                        $i++;
                        }
                    ?> 
                </table>


                <?php }  
                    else {
                        echo "No result found";
                    }
                ?> 

            </div>
        </div>
 
    </div>
 
   
 
    <style>
        .alumni_list_table {
            margin-top: 1.5rem;
        }
        
        table {
            width: 100%;
            text-align: center;
        }

        table tr {
            line-height: 2;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
<?php include 'footer.php';?>