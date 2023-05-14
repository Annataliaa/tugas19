<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1>Tugas Pertemuan 20</h1>
        <br>
        <br>
        <br>
        <br>
        <h2>Menu Utama</h2>
        <h3>Annatalia</h3>
        <h3><p>Full Stack Web Development 2</p></h3>
        <h3><p>4561436</p></h3>
        <style>
        .btn-primary {
            color: white;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary a {
            color: white;
            text-decoration: none;
        }
        </style>
        <button type="submit" class="btn btn-primary" name="list" value="list"><a href="listUser.php">List User</a></button>
        <button type="submit" class="btn btn-primary" name="create" value="create"><a href="createUser.php">Create User</a></button>
        <button type="submit" class="btn btn-primary" name="login" value="login"><a href="loginUser.php">Login</a></button>
        <button type="submit" class="btn btn-primary" name="logout" value="logout"><a href="logout.php">Log Out</a></button>
    <center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>