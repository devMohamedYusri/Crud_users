<?php
    $connection=mysqli_connect("localhost","root","","temp");
    if(!$connection){
        die("connection failed !".mysqli_connect_errno());
    }
?>