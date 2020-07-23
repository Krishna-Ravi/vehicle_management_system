<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style4.css">
</head>
<body>

<form action="process2.php" method="post" style="max-width:500px;margin:auto">
  <h1>CONTACT-US</h1>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-comment icon"></i>
    <textarea class="msg-field"  placeholder="Write something.." name="subject"></textarea>
 </div>

  <input type="submit" name="submit_btn" value="Submit" class="btn">
</form>
<br>
<a href="drop-down-menu-homepage.php" id="link">Return to home.--></a>

</body>
</html>
