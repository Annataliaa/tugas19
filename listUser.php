<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    

    <table class="table">
        <thead>
            <tr class="table-secondary">
                <th scope="col">ID</th>
                <th scope="col">Aksi</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
<?php
include "connectDB.php";
$sql_list = "select u.id, u.avatar, u.name, u.email, u.phone, u.`role` from user u;";

$result = $conn->query($sql_list);

while($row = mysqli_fetch_array($result)){
    echo "<tr>
    <th scope='row'>" . $row['id'] . "</th>
    <td>
        <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
            <button type='button' class='btn btn-secondary'><a href=detailUser.php?id=" . $row['id'] . ">Detail</a></button>
            <button type='button' class='btn btn-warning'><a href=updateUser.php?id=" . $row['id'] . ">Update</a></button>
            <button type='button' class='btn btn-danger'><a href=deleteUser.php?id=" . $row['id'] . ">Delete</a></button>
        </div>
    </td>
    <td>";

    if($row['avatar'] == null){
        echo "<img src='image/icon.png' alt='' width='100px'>";
    } else {
        echo "<img src='image/".$row['avatar'] . "' width='100px'>";
    }
    echo "</td>
    <td>" . $row['name'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['phone'] . "</td>
    <td>" . $row['role'] . "</td>
    </tr>";
}
echo "</tbody>
</table>";
echo "<br> <a href='createUser.php'><button type='button' class='btn btn-success'>Tambah User</button></a>"
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>