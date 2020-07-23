<?php
    require_once ('connection.php');
    


    if (isset($_POST['btn_save1']))
    {
        $UName= $_POST['Username'];
        $Pass= $_POST['Password'];
        $Adminname = 'admin';

        if (empty($UName) || empty($Pass))
        {
            echo 'Please fill all the details';
        }
        else
        {
            $query = "select * from users where UName='$UName'";
            $result = mysqli_query($con,$query);



            if ($row =mysqli_fetch_assoc($result))
            {
                $db_password = $row['Password'];

                if($Pass == $db_password)
                {
                    header("location:drop-down-menu-homepage.php");
                }

                else
                {
                    echo "<script>alert('Incorrect Password'); location.href='login.php';</script>";
                }

                if($UName == $Adminname)
                {
                  if($Pass==$db_password)
                  {
                    header("location:admin.php");
                  }

                }
            }
            else
            {
                echo 'Please check your query';
            }
        }
    }
