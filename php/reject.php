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
 $rrquery = "DELETE FROM request WHERE id = '$id'";
     $query = mysqli_query($con,$rrquery);
     if ($query) {
       echo "Account has been rejected";
     }else{
      echo "Unknown error";
     }

 ?>
 <a href="admin.php">Go to previous Page....</a>