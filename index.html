<?php 
 include 'connection.php'; 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		.container{
			margin-top: 50px;
		}
		.col-sm-3{
			padding-top: 5px;
		}
		.like{
			margin-left: -20px;
		}
		.dislike{
			margin-left: -200px;
		}
		.fa-thumbs-up,.fa-thumbs-down{
			font-size: 20px;
		}
		.message{
			margin-left: -390px;
		}
		#delete_btn{
			transform: translate(1000px,-30px);
		}
		.logout_btn{
			transform: translate(620px,50px);
		}
	</style>
</head>
<body>

<div class="container">	
	<h1 class="text-center">DATABASE</h1><hr>
	<?php 
        $con = mysqli_connect('localhost','root','','whatsup');
        $select_query="SELECT * FROM user";
        $fire=mysqli_query($con,$select_query);
       while($row=mysqli_fetch_assoc($fire)){
      ?>
    <div class="row">
     <div class="col-sm-3">
     	<span class="btn btn-success uname"><?php echo $row['uname']; ?></span>
     </div>
     <div class="col-sm-3">
     	<span class="btn btn-primary like" onclick="like(<?php echo $row['id']; ?>)"><span class="fa fa-thumbs-up">(<span id="like_id_<?php echo $row['id']; ?>"><?php echo $row['likes']; ?></span>)</span></span>
     </div>
      <div class="col-sm-3">
     	<span class="btn btn-primary dislike" onclick="dislike(<?php echo $row['id']; ?>)"><span class="fa fa-thumbs-down">(<span id="dislike_id_<?php echo $row['id']; ?>"><?php echo $row['dislike']; ?></span>)</span></span>
     </div>
     <div class="col-sm-3 message">
     	<span class="btn btn-warning"><?php echo $row['message']; ?></span>
     </div>
    </div>
    <span class="btn btn-danger" id="delete_btn" onclick="delete_btn(<?php echo $row['id']; ?>)">Delete</span>
    <?php } ?>
</div>
<span class="btn btn-danger logout_btn" onclick="logout_btn()">LOG OUT</span>
</body>
<script>
	function like(id){
		var id_num=id;
		var cur_count=$('#like_id_'+ id).html();
		cur_count++;
		$('#like_id_'+id).html(cur_count);
		$.ajax({
             url:'update_like_count.php',
             type:'post',
             data:{data:true,id_num,cur_count},
             success:function(data){
               // code...	
             }

		});
	}
	function dislike(id){
		var id_num=id;
		var cur_count=$('#dislike_id_'+id).html();
		cur_count++;
		$('#dislike_id_'+id).html(cur_count);
		$.ajax({
             url:'update_dislike_count.php',
             type:'post',
             data:{data:true,id_num,cur_count},
             success:function(data){
               // code...	
             }

		});
	}
	function delete_btn(id){
		    var id=id;
            $.ajax({
               url:'delete.php',
               type:'post',
               data:{data:true, id},
               success:function(data){
               	 // code...... 
               	 location.assign('index.php');
               }
            });
	}
	function logout_btn(){
      location.assign('user_login.php');
	}
</script>
</html>
