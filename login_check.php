<?php
	$message="";
	if(count($_POST)>0){
		$conn=mysqli_connect("localhost","root","","qrattendance");
		$result=mysqli_query($conn,"select * from register where username='" . $_POST["register_number"] . "' and password='" . $_POST["password"] . "' ");
		$count=mysqli_num_rows($result);
		if($count==0){
			Print '<script>alert("Incorrect Password!");</script>'; 
			Print '<script>window.location.assign("home.html");</script>';
		}
		else{
			Print '<script>alert("Correct Password!!!!!!!!");</script>';
		}
	}
	header('location: opening.html')
?>