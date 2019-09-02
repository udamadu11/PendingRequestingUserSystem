<?php 


  $dbsevername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "pending";

  $con = mysqli_connect($dbsevername, $dbUsername, $dbPassword,$dbName);
  if(!$con){
    echo "No Connection";
  }

      $id = $_GET['id'];
      $query = "SELECT * FROM request WHERE id = '$id'";
      $reqc= mysqli_query($con,$query);
      while($row = mysqli_fetch_assoc($reqc)){
        $username =  $row['username'];
        $email =  $row['email'];
        $password =  $row['password'];
        $message = "$username would like to request an account";
        $ru = "INSERT INTO  users (username,email,type,password) VALUES('$username','$email','user','$password')";
        $query =mysqli_query($con,$ru);
  }

        
        

     $rrquery = "DELETE FROM request WHERE id = '$id'";
     $query = mysqli_query($con,$rrquery);
     if ($query) {
       echo "Account has been Accepted";
     }else{
      echo "Unknown error";
     }
   
    ?>
     <br><br>
    <a href="admin.php">Go to previous Page....</a>