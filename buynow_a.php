<?php
require_once('connection.php');

$res= mysqli_query($con,"SELECT * FROM buy");

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body {
        font-size: 19px;
    }
    table{
        width: 50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: center;
    }
    tr {
        border-bottom: 2px solid #cbcbcb;
    }
    th, td{
        border: 2px solid grey;
        height: 30px;
        padding: 2px;
    }
    tr:hover {
        background: #F5F5F5;
    }
    </style>
  </head>
  <body>
    <div class="">
      <table>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Town/City</th>
          <th>State</th>
          <th>Zipcode</th>
          <th>Country</th>
          <th>Vehicle Name</th>

        </tr>
        <tbody>
          <?php while($row = mysqli_fetch_array($res)){ ?>
            <tr>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['town']; ?></td>
              <td><?php echo $row['state']; ?></td>
              <td><?php echo $row['zipcode']; ?></td>
              <td><?php echo $row['country']; ?></td>
              <td><?php echo $row['vname']; ?></td>
            </tr>
        <?php   } ?>

        </tbody>


      </table>

    </div>

  </body>
</html>
