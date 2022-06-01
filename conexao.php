<?php
    $con=new mysqli('localhost', 'admin', 'admin', 'ciel');

    if(!$con) {
        die(mysqli_error($con));
    }
?>