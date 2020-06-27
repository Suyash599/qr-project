<?php

$con=mysqli_connect("localhost", "root","","subjects");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $register_number =mysqli_real_escape_string($con,$_POST["register_number"]);
    $username  =mysqli_real_escape_string($con,$_POST["username"]);
    $attended =mysqli_real_escape_string($con,$_POST["attended"]);
    $conducted =mysqli_real_escape_string($con,$_POST["conducted"]);
    $bool=true;
    mysqli_connect("localhost", "root","") or die(mysqli_error($con)); 
    mysqli_select_db($con,"subjects") or die("Cannot connect to database"); 

    $query=mysqli_query($con,"Select * from students");
    
    while($row = mysqli_fetch_array($query)) 
    {
        $table_users = $row['register_number']; 
        if($register_number == $table_users) 
        {
            $bool = false; 
            Print '<script>alert(" ALREADY REGISTERED");</script>'; 
            Print '<script>window.location.assign("course_add.html");</script>'; 
        }
    }
    if($bool) 
    {
        mysqli_query($con,"INSERT INTO students (register_number,username,attended,conducted) VALUES ('$register_number','$username','$attended','$conducted')"); 
        Print '<script>alert("Successfully Registered!");</script>';
        Print '<script>window.location.assign("student_register.php");</script>'; 
    }
}
header('location: opening.html');
?>



