<?php


  require_once ('connection.php');

    if(isset($_POST['Submit1']))
    {
      $Vehicleid = (int)$_POST['V-id'];
      $Cost = (int)$_POST['cost'];
      $Type = mysqli_real_escape_string($con,$_POST['V-type']);
      $Vehiclename = mysqli_real_escape_string($con,$_POST['V-name']);
      $Manufacturedate= $_POST['manufacture-date'];
      $Manufacturedate = date("Y/m/d", strtotime($Manufacturedate));
      $Model = (int)$_POST['model'];

      // to add image to database
      $filename = addslashes($_FILES['file']['name']);
      $tmpname = addslashes(file_get_contents($_FILES['file']['tmp_name']));
      $filetype = addslashes($_FILES['file']['type']);
      $filesize = addslashes($_FILES['file']['size']);
      $array = array('jpg','jpeg');
      $ext = pathinfo($filename, PATHINFO_EXTENSION);



      //display
      $res = mysqli_query($con,"select * from twowheeler");

      //check for all the fields to be filled
      if(empty($Vehicleid) || empty($Cost) || empty($Type) || empty($Vehiclename)  || empty($Model))
      {
          echo 'Please fill all the fields';
      }



      else
      {

          $sql = "insert into twowheeler values ('$Vehicleid','$Vehiclename','$Cost','$Type','$Model','$Manufacturedate','$filename')";
          $result = mysqli_query($con,$sql);

          if ($result)
          {
              echo 'Record is saved in database';

          }
          else
          {
              echo 'Check your query';
          }

      }
    }


?>

<!DOCTYPE html>
<html>
<head>
<title>PHP File Upload example</title>
<link rel="stylesheet" href="style6.css">
</head>
<body>

<form action="#" enctype="multipart/form-data" method="post">

  <h1>Vehicle Details</h1>
  <input type="number" name="V-id" placeholder="Vehicle-Id" class="details"  required>
  <input type="text" name="V-name" placeholder="Vehicle name" class="details" required>
  <input type="text" name="V-type" placeholder="Vehicle type" class="details" required>
  <input type="number" name="cost" placeholder="Cost" class="details" required>
  <input type="date"  name="manufacture-date" placeholder="Manufacture-date" class="details" required>
  <input type="number" name="model" placeholder="Model" class="details" required>
         Select Image:
  <input type="file" name="file" class="image"><br/>
  <input type="submit" value="Upload" name="Submit1" class="upload" > <br/>
  

  </form>
</body>
</html>
