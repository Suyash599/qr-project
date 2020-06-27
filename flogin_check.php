<?php
	$message="";
	if(count($_POST)>0){
		$conn=mysqli_connect("localhost","root","","qrattendance");
		$result=mysqli_query($conn,"select * from fregister where username='" . $_POST["register_number"] . "' and password='" . $_POST["password"] . "' ");
		$count=mysqli_num_rows($result);
		if($count==0){
			Print '<script>alert("Incorrect Password!");</script>'; 
			Print '<script>window.location.assign("student_login.php");</script>';
		}
		else{
			Print '<script>alert("Correct Password!!!!!!!!");</script>';
		}
	}
	header('location: fopening.html')
?>