<?php
    include 'conn.php';

    if (!$con){
        die("connection to this database failed due to". 
        mysqli_connect_error());
    }
    echo "Success connecting to the db";