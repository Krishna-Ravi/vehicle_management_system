<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="2wc.css">
  </head>
  <body>
    <h1>4 Wheeler Details</h1>
    <form class="form" action="#" method="post" enctype="multipart/form-data">
      <input class="textbox" type="text" name="vehiclename" placeholder="Enter the vehicle name">
      <input class="btn" type="submit" name="search" value="Search">

    </form>

      <table>
        <thead>
          <tr>

            <th>Vehicle Name</th>
            <th>Vehicle Type</th>
            <th>Vehicle Cost</th>
            <th>Vehicle Model</th>
            <th>Manufacture date</th>
            <th>Image</th>

          </tr>
        </thead>

          <?php
          require_once ('connection.php');

          if(isset($_POST['search']))
          {
              $Vehiclename = $_POST['vehiclename'];
              $query = "SELECT * FROM fourwheeler where vehiclename='$Vehiclename' ";
              $results= mysqli_query($con,$query);

              while($row = mysqli_fetch_array($results))
              { 
                ?>
               <tr>
                 <td><?php echo $row['vehiclename']; ?></td>
                 <td><?php echo $row['type']; ?></td>
                 <td><?php echo $row['cost']; ?></td>
                 <td><?php echo $row['model']; ?></td>
                 <td><?php echo $row['manufacturedate']; ?></td>
                 <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>'; ?></td>
               </tr>
               <?php
            }
          }
         ?>
      </table>
      <p>To buy this vehicle please click on the buy now button </p>
      <a href="buynow.php"><button class="btn" type="submit" name="button">Buy now</button></a>

  </body>
</html>
