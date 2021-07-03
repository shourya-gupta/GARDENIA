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
         echo "<script>

         setTimeout(function()
         { 
              window.location = '../index.html'; 
         }, 200);
         
         </script>";
      }
      else
      {
         echo "Error" . mysqli_error($conn);
      }
      mysqli_close($conn);
?>
