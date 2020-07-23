<?php
  require_once('connection.php');

  $que = "SELECT * FROM `contact`";
  $res=mysqli_query($con,$que);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body {
        font-size: 19px;
        background-color: #d5f5f9;
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
    <h1>Contacted Users</h1>
    <table>
      <tr>
        <th>Username</th>
        <th>Email</th>
        <th colspan="3">Message</th>

        <tbody>
          <?php while($row = mysqli_fetch_array($res)){ ?>
            <tr>
              <td><?php echo $row['Uname']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <td><?php echo $row['Subject']; ?></td>

            </tr>
        <?php   } ?>
        </tbody>

      </tr>
    </table>
  </body>
</html>
