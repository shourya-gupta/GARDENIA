<?php
   include '../connection.php';
      $name=$_POST['name1'];
      $email=$_POST['email1'];
      $msg=$_POST['msg1'];
      
      $sql="INSERT INTO feedback
      VALUES('$name','$email', '$msg')";

      if(mysqli_query($conn,$sql))
      {
         echo "<script>alert('Thank you for contacting us will get in touch to you soon');</script>";
         header("Refresh:0; url=../index.html",  true, 303);
      }
      else
      {
         echo "Error" . mysqli_error($conn);
      }
      mysqli_close($conn);
?>