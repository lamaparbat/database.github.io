<?php 
 include 'connection.php';
$con = mysqli_connect('localhost','root','','whatsup');
$id=$_POST['id'];	
 $query= "DELETE FROM user WHERE id=$id";
 $fire=mysqli_query($con,$query);
?>