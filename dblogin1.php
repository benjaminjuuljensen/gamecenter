<?php
    // Open database
     $conn = new mysqli("benjaminjuuljensen.dk.mysql:3306", 'benjaminjuuljensen_dkgamecenter', 'benji3400', 'benjaminjuuljensen_dkgamecenter');


    if($conn->connect_error)
    {
        echo "Failed to connect to MySQL : " . $conn->connect_error . " (" . $conn->connect_errno . ")";
        exit(); 
    }

    // Set character set to utf8 
    // utf-8 (8-bit Unicode Transformation Format) is a variable-width character encoding
    //echo "Initial character set is: " . $conn->character_set_name() . "<br/>";
    $conn->set_charset("utf8");
    //echo "Current character set is: " . $conn->character_set_name();
?>
