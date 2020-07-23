<?php


  require_once ('connection.php');

    if(isset($_POST['Submit1']))
    {
      $Vehicleid = (int)$_POST['V-id'];
      $Cost = (int)$_POST['cost'];
      $Type = mysqli_real_escape_string($con,$_POST['V-type']);
      $Vehiclename = mysqli_real_escape_string($con,$_POST['V-name']);
    //  $Manufacturedate = (int)$_POST['manufacture-date'];
      $Model = (int)$_POST['model'];
      //$Image =addslashes(file_get_contents($_FILES["file"]["tmp_name"]));

      $fileupload = $_FILES['file']['name'];
      $fileuploadTMP = $_FILES['file']['tmp_name'];
      //This is the folder where images will be saved.
      $folder = "images/";
      move_uploaded_file($fileuploadTMP, $folder.$fileupload);

      //Insert image details into `updis` table
  //    $sql = "INSERT INTO twowheeler(image) VALUES ('$fileupload')";
      //$qry = mysqli_query($con, $sql);

      //  if ($qry) {
      //    echo "<br />uploaded";
      //  }

      //Select all data from `updis` table
      $select = " SELECT * FROM twowheeler " ;
      $query = mysqli_query($con, $select) ;
      while($row = mysqli_fetch_array($query)) {
      $image = $row['vehiclename'];
      //Display image from the database
      echo '<img src="images/'.$image.'" height="150" width="150" >';
      }
      //close connection
      if(empty($Vehicleid) || empty($Cost) || empty($Type) || empty($Vehiclename)  || empty($Model))
      {
          echo 'Please fill all the fields';
      }



      else
      {

          $sql = "insert into twowheeler (vehicleid,vehiclename,cost,type,model,image) values('$Vehicleid','$Vehiclename','$Cost','$Type','$Model','$fileupload')";
          $result = mysqli_query($con,$sql);

          if ($result)
          {
              echo 'working';
          }
          else
          {
              echo 'Check your query';
          }

      }
    }
?>
