<?php


  require_once ('connection.php');

    if(isset($_POST['submit_btn']))
    {
      $Username = mysqli_real_escape_string($con,$_POST['usrnm']);
      $Email = mysqli_real_escape_string($con,$_POST['email']);
      $Subject = mysqli_real_escape_string($con,$_POST['subject']);


      if(empty($Username) || empty($Email) )
      {
          echo 'Please fill all the fields';
      }
      else
      {

          $sql = "insert into contact (Uname,Email,Subject) values('$Username','$Email','$Subject')";
          $result = mysqli_query($con,$sql);

          if ($result)
          {
              echo 'Your message has reached us.Thanks for contacting us.  :)';
          }
          else
          {
              echo 'Check your query';
          }

      }
    }
?>
