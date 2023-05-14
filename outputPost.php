<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1>Halaman Hasil Penambahan User</h1>
<?php
if(isset($_POST['submit']) && isset($_FILES['avatar'])){
    include "connectDB.php";

    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $avatar = $_FILES['avatar']['name'];
    $avatar_tmp = $_FILES['avatar']['tmp_name'];

    $img_ex = pathinfo($avatar, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $avatarName = uniqid("IMG-", true).'.'.$img_ex_lc;

    $sql_post = "INSERT INTO user (id, email, name, `role` , avatar, phone, address, password , created_at, updated_at) VALUES ('$id', '$email', '$name', '$role', '$avatarName', '$phone', '$address', '$password', DEFAULT, DEFAULT);";

    if ($conn->query($sql_post) === TRUE) {
        echo "<h2>Data User Baru Berhasil Ditambahkan</h2><br>";
        $img_upload_path = 'image/'. $avatarName;
        move_uploaded_file($avatar_tmp, $img_upload_path);
    } else {
        echo "Error: " . $sql_post . "<br>" . $conn->error;
    }

    $sql_read = "select * from user where id = $id";
    $result = $conn->query($sql_read);
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
                    echo "<img src='image/profile_default.png' alt='' width='100px'>";
                } else {
                    echo "<img src='image/".$row['avatar'] . "' width='100px'>";
                }
                echo "</td>
                <td>" . $row['phone'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>" . $row['created_at'] . "</td>
                <td>" . $row['updated_at'] . "</td>
            </tr>
            <center>
            <button><a href='listUser.php'>Kembali</a></button>
            </center>";
            
}
else {
    echo "error";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>