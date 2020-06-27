<?php
$con=mysqli_connect("localhost", "root","","qrattendance");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $register_number =mysqli_real_escape_string($con,$_POST["register_number"]);
    $qrcode  =mysqli_real_escape_string($con,$_POST["qrcode"]);
    $bool=true;
    mysqli_connect("localhost", "root","") or die(mysqli_error($con)); 
    mysqli_select_db($con,"qrattendance") or die("Cannot connect to database"); 

    $query=mysqli_query($con,"Select * from attend");
    
    while($row = mysqli_fetch_array($query)) 
    {
        $table_users = $row['register_number']; 
        if($register_number == $table_users) 
        {
            $bool = false; 
            Print '<script>alert(" ALREADY ADDED");</script>'; 
            Print '<script>window.location.assign("register.html");</script>'; 
        }
    }
    
    if($bool) 
    {
        mysqli_query($con,"INSERT INTO attend (register_number,qrcode) VALUES ('$register_number','$qrcode')"); 
        Print '<script>alert("Successfully Registered!");</script>';
        Print '<script>window.location.assign("location: opening.html");</script>'; 
    }
}
header('location: opening.html');
?>



