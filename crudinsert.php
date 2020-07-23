
 <?php

    session_start();
    require_once ('connection.php');

    $Vehicleid="";
    $Cost ="";
    $Type ="";
    $Vehiclename="";
    $Manufacturedate="";
    $Model ="";
    $filename="";
    $edit_state = false;



     if(isset($_POST['save']))
     {
       $Cost = (int)$_POST['cost'];
       $Type = $_POST['V-type'];
       $Vehiclename = $_POST['V-name'];
       $Manufacturedate= $_POST['manufacturedate'];
       $Manufacturedate = date("Y/m/d", strtotime($Manufacturedate));
       $Model = (int)$_POST['model'];

       // to add image to database
       $filename = addslashes($_FILES['file']['name']);
       $tmpname = addslashes(file_get_contents($_FILES['file']['tmp_name']));
       $array = array('jpg','jpeg');
       $filepath= "images/".$filename;
       move_uploaded_file($tmpname,$filepath);

       //check for all the fields to be filled
       if( empty($Cost) || empty($Type) || empty($Vehiclename)  || empty($Model))
       {
           echo 'Please fill all the fields';
       }



       else
       {

           $sql = "INSERT INTO `twowheeler`(`vehiclename`,`cost`,`type`,`model`,`manufacturedate`,`image`) VALUES('$Vehiclename','$Cost','$Type','$Model','$Manufacturedate','$tmpname')";
           $result = mysqli_query($con,$sql);

       }
       $_SESSION['msg'] = "Record is saved in database";
       header('location:crud.php');


     }

     //Update
     if (isset($_POST['update'])) {
       $Cost = (int)$_POST['cost'];
       $Type = $_POST['V-type'];
       $Vehiclename = $_POST['V-name'];
       $Manufacturedate= $_POST['manufacturedate'];
       $Manufacturedate = date("Y/m/d", strtotime($Manufacturedate));
       $Model = (int)$_POST['model'];
       $Vehicleid=$_POST['vehicleid'];

       $filename = addslashes($_FILES['file']['name']);
       $tmpname = addslashes(file_get_contents($_FILES['file']['tmp_name']));
       $array = array('jpg','jpeg');
       $filepath= "images/".$filename;
       move_uploaded_file($tmpname,$filepath);

       mysqli_query($con,"UPDATE twowheeler SET vehiclename='$Vehiclename', cost='$Cost',type='$Type',model='$Model',manufacturedate='$Manufacturedate',image='$tmpname' WHERE vehicleid=$Vehicleid");
       $_SESSION['msg'] = "Record updated";
       header('location:crud.php');
     }

     if (isset($_GET['del'])) {
       $Vehicleid=$_GET['del'];
       mysqli_query($con,"DELETE FROM twowheeler WHERE vehicleid=$Vehicleid");
       $_SESSION['msg'] = "Record deleted";
       header('location:crud.php');
     }
     $results= mysqli_query($con,"SELECT * FROM twowheeler");




 ?>
