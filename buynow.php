<?php

  require_once('connection.php');


 
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style8.css">
    <style media="screen">
    .container1
    {
      color: white;
      width:500px;
      margin: 30px;
      padding: 10px;
      background-color: #0b4c54;
      position: absolute;
      top: 2%;
      left: 30%;
      text-align: center;
    }
    </style>
  </head>
  <body>
    <form class="container1" action="buynowprocess.php" method="post">
      <h1>Required Customer Details  </h1>
      <h1>For Vehicle Registration</h1>
      <input type="text" name="fname" placeholder="First Name" class="details" required>
      <input type="text" name="lname" placeholder="Last Name" class="details"required>
      <input type="number" name="age" placeholder="Age" class="details"required>
      <input type="email" name="email" placeholder="Email address" class="details"required>
      <input type="tel" name="phone" placeholder="Phone number" class="details"required>
      <input type="text" name="town" placeholder="Town/City" class="details"required>
      <input type="text" name="state" placeholder="State" class="details"required>
      <input type="number" name="zipcode" placeholder="Postcode/Zipcode" class="details"required>
      <select class="details" name="country">
        <option value="1">Select your country</option>
        <option value="India">India</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Australia">Australia</option>
        <option value="UK">UK</option>
        <option value="UAE">UAE</option>
        <option value="US">US</option>
        <option value="South Africa">South Africa</option>
      Enter Vehicle Name:
      <input type="text" name="vname" placeholder="Enter Vehicle Name" class="details"required ><br><br>
      <input type="submit" name="submit" value="Buy Now" class="details">
      </select>
    </form>






  </body>
</html>
