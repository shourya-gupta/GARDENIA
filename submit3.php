<?php
   include '../connection.php';
      $name=$_POST['name'];
      $email=$_POST['email'];
      $msg=$_POST['message'];


      $sql="INSERT INTO feedback 
      VALUES('$name','$email', '$msg')";

      if(mysqli_query($conn,$sql))
      {
      	header('location: ../index.html');
      }
      else
      {
      	echo "Error" . mysqli_error($conn);
      }
      mysqli_close($conn);
?>
