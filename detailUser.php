<?php
include 'connectDB.php';
$id = $_GET["id"];
$sql_detail = "SELECT * FROM user WHERE id='$id'";
echo "Detail User : <br>";
$result = $conn->query($sql_detail);
    $row = mysqli_fetch_array($result);
    echo "id = " . $row['id'] . "<br>
    email = " . $row['email'] . "<br>
    name = " . $row['name'] . "<br>
    role = " . $row['role'] . "<br>";
    if($row['avatar'] == null){
        echo "<img src='image/icon.jpg' alt='' width='100px'> <br>";
    } else {
        echo "<img src='image/icon.png".$row['avatar'] . "' width='100px'> <br>";
    }
    echo "phone = " . $row['phone'] . "<br>
    address = " . $row['address'] . "<br>
    password = " . $row['password'] . "<br>
    created_at = " . $row['created_at'] . "<br>
    updated_at = " . $row['updated_at'];
?>