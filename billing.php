<?php 
require_once('connection.php');

  $rec = mysqli_query($con,"SELECT * FROM twowheeler ");
  $record= mysqli_fetch_array($rec);
  $Vehiclename= $record['vehiclename'];
  $Cost = $record['cost'];
  $Type = $record['type'];
  $Manufacturedate=$record['manufacturedate'];
  $Model =$record['model'];
  $Vehicleid=$record['vehicleid'];
  $filename=$record['image'];
?><html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Invoice</h1>

		<p>Invoice number</p>

		<table>
				<thead>
						<tr>
				
						  <th>Vehicle Name</th>
						  <th>Vehicle Type</th>
						  <th>Vehicle Model</th>
						  <th>Manufacture date</th>
						  <th>Vehicle Cost</th>
						  
						</tr>
					  </thead>
					  <tbody>
							<?php while($row = mysqli_fetch_array($rec)){ ?>
							  <tr>
								<td><?php echo $row['vehiclename']; ?></td>
								<td><?php echo $row['type']; ?></td>
								<td><?php echo $row['model']; ?></td>
								<td><?php echo $row['manufacturedate']; ?></td>
								<td><?php echo $row['cost']; ?></td>
								
							  </tr>
							  
						  <?php   } ?>
					  </tbody>





		</table>
	</body>
</html>