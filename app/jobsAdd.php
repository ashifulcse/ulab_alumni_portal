<?php
    include_once '../config.php';


    $sql = "INSERT INTO jobs (job_title, category, decs) VALUES ('$_POST[job_title]', '$_POST[category]', '$_POST[decs]')";

    if (mysqli_query($db, $sql)) {
        // echo "New record has been added successfully !";
        header('Location: ../jobs.php'); 
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
    }
    mysqli_close($db); 

?>