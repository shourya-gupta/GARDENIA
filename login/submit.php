  <?php
   include '../connection.php';
      $fname=$_POST['fullname'];
      $mno=$_POST['mobileno'];
      $add=$_POST['address'];
      $email=$_POST['email'];
      $pass=$_POST['password'];


      $sql="INSERT INTO signup(full_name, mob_no, address, email,pass)
      VALUES('$fname','$mno','$add', '$email','$pass')";

      if(mysqli_query($conn,$sql)){
         echo "<script> alert('REGISTERED SUCCESSFULLY!'); </script>";
         echo "<script>

         setTimeout(function()
         { 
              window.location = '../login/login.html'; 
         }, 200);
         
         </script>";
      }
      else{
         echo "Error" . mysqli_error($conn);
      }
      mysqli_close($conn);
   ?>




