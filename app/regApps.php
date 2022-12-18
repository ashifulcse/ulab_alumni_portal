<?php
    include_once '../config.php';


    $sql = "INSERT INTO user (name, phone, email, password, blood) VALUES ('$_POST[name]', '$_POST[phone]', '$_POST[email]' , '$_POST[password]', '$_POST[blood]')";

    if (mysqli_query($db, $sql)) {
        // echo "New record has been added successfully !";
        header('Location: ../login.php'); 
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($db);
    }
    mysqli_close($db); 

?>