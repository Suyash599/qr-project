<!DOCTYPE html>
<link rel="stylesheet" href="register.css"></link>
  
<body>
    <form class="box" action="up_attend.php" method="POST" >
        <a href="https://webqr.com/">Scanner here</a>
        <input type="text" name="register_number" id="email" placeholder="register_number" >
        <a href="fopening.html">back.....................</a>
        <input type="submit" id="submit" value="Proceed ">
    </form>
    <table align="centre" border="1px" style="width: 300px;">
        <tr>
            <th>Registration no.</th>
            <th>Name</th>
            <th>attended</th>
            <th>conducted</th>
        </tr>
        <?php
        $conn=mysqli_connect("localhost","root","","subjects");
        if($conn->connect_error){
            die("Connection error".$conn->connect_error);
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
        $conn->close();
        ?>
            
    </table>    
</body>
</html>

