<?php
    include_once '../config.php';


    $sql = "INSERT INTO notice (title, description) VALUES ('$_POST[title]', '$_POST[description]')";

    if (mysqli_query($db, $sql)) {
        // echo "New record has been added successfully !";
        header('Location: ../notice.php'); 
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
    }
    mysqli_close($db); 

?>