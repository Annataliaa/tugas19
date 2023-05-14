<?php
session_start();
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
	?>
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid bg-primary">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="createUser.php">Created User</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="loginUser.php">Login User</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-success text-light">
                    <a class="nav-link text-light" href="logout.php">Logout</a>
                </button>
            </form>
            </div>
        </div>
</nav>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">ID</th>
                <th scope="col">Aksi</th>
                <th scope="col">Avatar</th>
                <th scope="col">Nama</th>
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
        echo "<img src='image/profile_default.png' alt='' width='100px'>";
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
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>

<?php
} else {
    header("location:loginRequired.php");
}
?>