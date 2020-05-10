<?php 
 include 'connection.php';    
 if(isset($_POST['complete'])){
     $username =$_POST['username'];
     $password =$_POST['password'];
     $phone_number =$_POST['phone_number']; 
 	 if($username=="" && $password="" && $phone_number=""){
 	     echo "<script>alert('Atleast fill up Username, Password and Phone Number')</script>";
       }else{
       	  $insert_query="INSERT INTO user(uname,password,phone_number) VALUES('$username','$password','$phone_number')";
 	      $fire=mysqli_query($con,$insert_query);
 	      if($fire){
          echo "<script>alert('Successfully Created')</script>";
          // echo "<script>location.assign('http://localhost/likeweb/index.php')</script>";
          echo "<script>location.assign('index.php');</script>";
 	      }
       }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create New account</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		form input{
			padding-left: 10px;
		}
	</style>
</head>
<body>
<div class="container text-center">
	<br><br><br><br>
	<h1>FORM FILL UP</h1><hr>
	<form method="post">
		<input type="text" name="first_name" placeholder="Enter first name......"><br><br>
		<input type="text" name="last_name" placeholder="Enter last name......"><br><br>
		<input type="phone" name="phone_number" placeholder="Enter Phone Number......"><br><br>
		<input type="text" name="username" placeholder="Enter username...."><br><br>
		<input type="password" name="password" placeholder="Enter password......"><br><br>
		<!-- <input type="password" name="password" placeholder="Renter password......"><br><br> -->
		<input type="submit" name="complete" value="Complete" ><br><br>
	</form>
</div>
</body>
</html>