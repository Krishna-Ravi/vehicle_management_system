<?php

   //session_start();
   require_once ('connection.php');

   //$Vehicleid="";
   //$Cost ="";
   //$Type ="";
   //$Vehiclename="";
   //$Manufacturedate="";
   //$Model ="";
   //$filename="";
   //$edit_state = false;
   if(isset($_POST['search']))
   {
     $Vehiclename = $_POST['vehiclename'];
     $query = "SELECT * FROM twowheeler where vehiclename='$Vehiclename'";
     $results= mysqli_query($con,$query);
   }
?>
