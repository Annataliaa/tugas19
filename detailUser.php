<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1>Detail User</h1>
<?php
include 'connectDB.php';
$id = $_GET["id"];
$sql_detail = "SELECT * FROM user WHERE id='$id'";
$result = $conn->query($sql_detail);
$row = mysqli_fetch_array($result);
    echo "<table class='table'>
        <thead>
            <tr class='table-primary'>
                <th scope='col'>ID</th>
                <th scope='col'>Email</th>
                <th scope='col'>Nama</th>
                <th scope='col'>Role</th>
                <th scope='col'>Avatar</th>
                <th scope='col'>Phone</th>
                <th scope='col'>Address</th>
                <th scope='col'>Password</th>
                <th scope='col'>Created_at</th>
                <th scope='col'>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope='row'>" . $row['id'] . "</th>
                <td>" . $row['email'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['role'] . "</td>
                <td>";
                if($row['avatar'] == null){
                    echo "<img src='image/icon.png' alt='' width='100px'>";
                } else {
                    echo "<img src='image/".$row['avatar'] . "' width='100px'>";
                }
                echo "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>" . $row['created_at'] . "</td>
                <td>" . $row['updated_at'] . "</td>
            </tr>";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>