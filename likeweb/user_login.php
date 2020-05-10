<?php 
  include 'connection.php';
  // $con = mysqli_connect('localhost','root','','whatsup');
  if(isset($_POST['login'])){
  	 $uname=$_POST['uname'];
  // $password=$_POST['password'];
  $select_query = "SELECT * from user";
  $fire=mysqli_query($con,$select_query);
  while($row=mysqli_fetch_assoc($fire)){
       if($uname==$row['uname']){
       	echo "<script>location.assign('http://localhost/likeweb/index.php')</script>";
       }
  }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Panel</title>
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		body{
			background-color:#f1f1f1;
		}
		.container{
			transform:translate( 0px,100px);
		}
	</style>
</head>
<body>
<div class="container text-center">
	<form method="post">
    <br><h1>USER LOGIN PANEL</h1><br><hr>
	User_Name<input type="text" name="uname" placeholder="Username"><br><br>
	Password <input type="text" name="password" placeholder="Password"><br><br>
	<input type="submit" name="login" value="Login">
	</form><br>
	<input type="submit" name="create" value="create" onclick="create()">
</div>
</body>
<script>
	function create(){
         location.assign('http://localhost/likeweb/create.php');
	}
</script>
</html>