<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $dbname = "aprubru_03";

    $connect = mysqli_connect($hostname, $user, $password, $dbname)
        or die("Error");
    // echo "Connect DB";
    mysqli_set_charset($connect, "utf8");
?>
