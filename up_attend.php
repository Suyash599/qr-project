<?php
    $message="";
    if(count($_POST)>0){
        $conn=mysqli_connect("localhost","root","","subjects");
        $result=mysqli_query($conn,"UPDATE students SET attended=attended+1 where register_number='" . $_POST["register_number"] . "'");
        $count=mysqli_num_rows($result);
        if($count==0){
            Print '<script>alert("Incorrect Registration number!");</script>'; 
            Print '<script>window.location.assign("upload_attend.php");</script>';
        }
        else{
            Print '<script>alert("UPDATED!!!!!!!!");</script>';
        }
    }

    $sql="SELECT register_number,username,attended,conducted from students";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row["register_number"]."</td><td>".$row["username"]."</td><td>".$row["attended"]."</td><td>".$row["conducted"]."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo"NO content found";
        }
    
    header('location: upload_attend.php');
?>