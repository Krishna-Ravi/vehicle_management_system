
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style9.css">
  </head>
  <body>
    <div id="img" style="background-image: url("test drive.png");">
    <form class="container3" action="testdriveprocess.php" method="post">
      Enter Vehicle Name:
      <input type="text" name="vname" placeholder="Enter Vehicle Name" required><br><br>
      Select the date:
      <input type="date" name="date" placeholder="" required><br><br>
      Preferred time slot:
      <input type="time" name="time" placeholder="" required><br><br>
      <button type="submit" name="button" id="btn">Test Drive</button>
    </form>

  </body>
</html>
