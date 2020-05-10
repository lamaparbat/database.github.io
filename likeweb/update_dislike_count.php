<?php 
  include 'connection.php';
  $con = mysqli_connect('localhost','root','','whatsup');
  $id=$_POST['id_num'];
  $cur_count=$_POST['cur_count'];
  $sql="UPDATE user SET dislike=$cur_count WHERE id=$id";
  $res=mysqli_query($con,$sql);
  if($res){
    echo "UPDATED";
  }
?>