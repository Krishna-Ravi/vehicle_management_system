<?php include('crudinsertcar.php');
//fetch the Record
if (isset($_GET['edit'])) {
  $Vehicleid= $_GET['edit'];

  $rec = mysqli_query($con,"SELECT * FROM fourwheeler WHERE vehicleid=$Vehicleid");
  $record= mysqli_fetch_array($rec);
  $Vehiclename= $record['vehiclename'];
  $Cost = $record['cost'];
  $Type = $record['type'];
  $Manufacturedate=$record['manufacturedate'];
  $Model =$record['model'];
  $Vehicleid=$record['vehicleid'];
  $filename=$record['image'];


  $edit_state= true;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="crud.css">
  </head>
  <body>
    <h1>Welcome to admin page</h1>
    <?php if(isset($_SESSION['msg'])): ?>
      <div class="msg">
        <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        ?>
      </div>
    <?php endif ?>
    <table>
      <thead>
        <tr>

          <th>Vehicle Name</th>
          <th>Vehicle Type</th>
          <th>Vehicle Cost</th>
          <th>Vehicle Model</th>
          <th>Manufacture date</th>
          <th>Image</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_array($results)){ ?>
          <tr>
            <td><?php echo $row['vehiclename']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['cost']; ?></td>
            <td><?php echo $row['model']; ?></td>
            <td><?php echo $row['manufacturedate']; ?></td>
            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>'; ?></td>
            

            <td> <a class="edit_btn" href="crud.php?edit=<?php echo $row['vehicleid']; ?>">Edit</a> </td>
            <td> <a class="del_btn" href="crudinsertcar.php?del=<?php echo $row['vehicleid']; ?>;">Delete</a> </td>


          </tr>
          
      <?php   } ?>

      </tbody>
    </table>

    <form action="crudinsertcar.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="vehicleid" value="<?php echo $Vehicleid; ?>">
      <div class="input-group">
        <label>Vehicle Name</label>
        <input type="text" name="V-name" placeholder="Vehicle name" value="<?php echo $Vehiclename; ?>" required>
      </div>
      <div class="input-group">
        <label>Vehicle Type</label>
        <input type="text" name="V-type" placeholder="Vehicle type" value="<?php echo $Type; ?>" required>
      </div>
      <div class="input-group">
        <label>Vehicle Model</label>
        <input type="number" name="model" placeholder="Model" value="<?php echo $Model ; ?>" required>
      </div>
      <div class="input-group">
        <label>Vehicle Cost</label>
        <input type="number" name="cost" placeholder="Cost" value="<?php echo $Cost ; ?>" required>
      </div>
      <div class="input-group">
        <label>manufacturedate</label>
        <input type="date"  name="manufacturedate" placeholder="manufacturedate" value="<?php echo $Manufacturedate ; ?>" required>
      </div>
      <div class="input-group">
        <label>Select Image:</label>
        <input type="file" name="file" ><br/>
      </div>
      <div class="input-group">
        <?php if ($edit_state == false): ?>
            <button type="submit"  name="save" class="btn" >Upload</button>
        <?php else: ?>
            <button type="submit"  name="update" class="btn" >Update</button>
        <?php endif; ?>

      </div>

    </form>

    <button class="home" type="button" name="button">  <a  href="homepage.php">Click here to return to homepage</a> </button>

  </body>
</html>
