<?php
   include '../connection.php';
      $descrip=$_POST['descrip'];
      $date=$_POST['date'];
      $time=$_POST['time'];

      $sql="INSERT INTO general1(descrip, date1, time1) VALUES ('$descrip','$date', '$time')";

      if(mysqli_query($conn,$sql))
      {
      	echo "<script>

         setTimeout(function()
         { 
              window.location = '../gardener/available-gardeners.html'; 
         }, 200);
         
         </script>";
      }
      else
      {
      	echo "Error" . mysqli_error($conn);
      }
      mysqli_close($conn);
?>
