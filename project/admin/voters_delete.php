<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM members WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = '<div class="one">Student deleted successfully</div>';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select item to delete first';
	}

	header('location: index.php');
	
?>