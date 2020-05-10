<?php 
  include 'connection.php';
  $con = mysqli_connect('localhost','root','','whatsup');
  $id_num=$_POST['id_num'];
  $cur_count=$_POST['cur_count'];
  echo $cur_count;
  $sql="UPDATE user SET likes=$cur_count WHERE id=$id_num";
  $res=mysqli_query($con,$sql);
  if($res){
  	echo "<script>alert('updated')</script>";
  }
?>