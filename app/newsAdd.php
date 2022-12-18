<?php
    include_once '../config.php';

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../images/" . $filename;



    $sql = "INSERT INTO news (title, uploadfile, decs) VALUES ('$_POST[title]', '$filename', '$_POST[decs]')";

    if (mysqli_query($db, $sql)) {
        // echo "New record has been added successfully !";
        header('Location: ../news.php'); 
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
    }

    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }


    mysqli_close($db); 

?>