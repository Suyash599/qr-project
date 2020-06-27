<?php
mysql_connect('localhost','root','');
mysql_select_db('subjects');
$query="SELECT * FROM students";
$result=mysql_query($query);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <form action="upload_attend.php" class="abcd">
    <table class="table table-dark">
        <thead>
        <tr>
        <th scope="col">Register number</th>
        <th scope="col">name</th>
        <th scope="col">Attendance</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
             <td>@mdo</td>
        </tr>
            <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>