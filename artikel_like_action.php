<?php
	include ("config.php");
	if(isset($_GET['aksi']) && $_GET['aksi'] == 'suka' && isset($_GET['artikel_id'])) {

		 $artikel_like_ip = $_SERVER['REMOTE_ADDR'];
		 $id = $_GET['artikel_id'];

		 $query_input_blog_input = mysqli_query($dbconnect, "INSERT INTO artikel_like VALUES('', '$artikel_like_ip', '$id')");

		 if($query_input_blog_input) {
		   header("Location:artikel_detail.php?id=".$id);
		 }

		else {
		   header('Location: ?error=error');
		}
	}
?>