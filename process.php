<?php


   require_once ('connection.php');

    if(isset($_POST['btn_save']))
    {
        $Username = mysqli_real_escape_string($con,$_POST['Fname']);
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);
        $CPassword = mysqli_real_escape_string($con,$_POST['Cpass']);

        if(empty($Username) || empty($Email) || empty($Password) || empty($CPassword))
        {
            echo 'Please fill all the fields';
        }

        if($CPassword != $Password) 
        {
            echo 'Password not matching....!Try again!';
        }
        else
        {
            $Pass = $Password;
            $sql = "insert into users (UName,Email,Password) values('$Username','$Email','$Pass')";
            $result = mysqli_query($con,$sql);

            if ($result)
            {
                echo 'Your record has been saved in the database';
            }
            else
            {
                echo 'Check your query';
            }

        }
    }
