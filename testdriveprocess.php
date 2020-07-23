<?php
  require_once('connection.php');

 ?>

<?php
  if(isset($_POST['button'])){
    $vname = $_POST['vname'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $query = "insert into testride(vehicle_name,date,time) values ('$vname','$date','$time')";
    $res = mysqli_query($con,$query);

    if($res)
    {
                    echo "<script>alert('Your Test drive has been booked'); location.href='drop-down-menu-homepage.php';</script>";
    }
    else {
      echo 'Check your query';
    }
  }

  ?>
