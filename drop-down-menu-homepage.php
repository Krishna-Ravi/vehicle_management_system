
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .slider {
  max-width: 1200px;
  height: 550px;
  margin: 45px auto;
  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 100%;
  height: 100%;
}
.slide1 {
  background: url(images/bg/bg1.jpg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

}
.slide2 {
  background: url(images/bg/bg2.jpg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(images/bg/13643.jpg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}

    </style>
  </head>
  <body>
    <div class="menubar">
      <ul>
        <li class="active"><a href="drop-down-menu-homepage.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="#"><i class="fa fa-motorcycle" aria-hidden="true"></i>Vehicle</a>
          <div class="submenu1">
            <ul>
              <li><a href="2wheelercust.php">2-Wheelers</a></li>
              <li><a href="4wheelercust.php">4-Wheelers</a></li>
            </ul>

          </div>
        </li>
        <li><a href="buynow.php"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Buy</a></li>
        <li><a href="testdrive.php"><i class="fa fa-motorcycle" aria-hidden="true"></i>Test ride</a></li>
        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>About Us</a></li>
        <li><a href="contactus.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
        <li><a href="homepage.php">Log out</a></li>
      </ul>
    </div>
    <br><br><br>
    <div class='slider'>
      <div class='slide1'></div>
      <div class='slide2'></div>
      <div class='slide3'></div>
    </div>
  </body>
</html>
