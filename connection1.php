<?php
    $con = mysqli_connect('localhost','root','','contactus');

    if(!$con)
    {
        echo 'Please Check Your Database Connection';
    }
