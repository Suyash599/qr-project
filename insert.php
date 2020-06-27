<?php
$con=mysqli_connect("localhost", "root","","qrattendance");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $register_number =mysqli_real_escape_string($con,$_POST["register_number"]);
    $username  =mysqli_real_escape_string($con,$_POST["username"]);
    $password =mysqli_real_escape_string($con,$_POST["password"]);
    $proctor_name =mysqli_real_escape_string($con,$_POST["proctor_name"]);
    $email =mysqli_real_escape_string($con,$_POST["email"]);
    $phone =mysqli_real_escape_string($con,$_POST["phone"]);
    $bool=true;
    mysqli_connect("localhost", "root","") or die(mysqli_error($con)); 
    mysqli_select_db($con,"qrattendance") or die("Cannot connect to database"); 

    $query=mysqli_query($con,"Select * from register");
    
    while($row = mysqli_fetch_array($query)) 
    {
        $table_users = $row['register_number']; 
        if($register_number == $table_users) 
        {
            $bool = false; 
            Print '<script>alert("ALREADY REGISTERED");</script>'; 
            Print '<script>window.location.assign("register.html");</script>'; 
        }
    }
    if($bool) 
    {
        mysqli_query($con,"INSERT INTO register (register_number,username,password,proctor_name,email,phone) VALUES ('$register_number','$username','$password','$proctor_name','$email','$phone')"); 
        Print '<script>alert("Successfully Registered!");</script>';
        Print '<script>window.location.assign("location: home.html");</script>'; 
    }
}
header('location: home.html');
?>



