<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Students List</h1>


<?php 

$conn=mysqli_connect("localhost","root","mysql","crud") or die("mysql not connected");
$sql= "SELECT* FROM student";
$result=mysqli_query($conn,$sql) or die("mysql connected unsuccessful");

if(mysqli_num_rows($result)>0){

?>


    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
            </tr>
        </thead>

        <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row ['sphone'];?></td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    <?php }
    else{
        echo "<h1>data not found";
    } ?>
</body>
</html>