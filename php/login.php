
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    
      }
    </style>
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

  	<?php 


	$dbsevername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "pending";

	$con = mysqli_connect($dbsevername, $dbUsername, $dbPassword,$dbName);
	if(!$con){
		echo "No Connection";
	}

  		if (isset($_POST['signin'])) {
  			$password = $_POST['password'];
  			$email = $_POST['email'];
  			$ru = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  			$query =mysqli_query($con,$ru);
 			if ($query -> num_rows > 0) {
			while ($row = $query -> fetch_assoc()) {
  				if ($row['email']==$email && $row['password']==$password) {
  					$_SESSION['login'] = true;
  					header('Location:admin.php');
  				}else{
  					echo "<script>alert('Wrong Login Details');</script>";
  				}
  			}
  		}
  			
  		}

  	?>
  	<div class="container">
    <form class="form-signin" method="post">
  		<img class="mb-4" src="../image/bstr.png" alt="" width="72" height="72">
  		<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  		
  		<input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
  		
  		<input type="password" name="password" class="form-control" placeholder="Password" required>
  		
  		<button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
 		
 		 <a href="signUp.php"><p>Go  to Registration page</p></a>
</form>
</div>
</body>
</html>
