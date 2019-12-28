<?php

    $servername = "localhost";
    $username = "root";
    $password ="";
    $database = "cardlist";


 // create conection

    $conn = mysqli_connect($servername, $username, $password, $database);

// check connectiobn

    
    if(!$conn) {
        die("connection fail" . mysqli_connect_errot());
        
    }

?>