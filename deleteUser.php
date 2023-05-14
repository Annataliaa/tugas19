<?php
session_start();
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']){
    include 'connectDB.php';
    $id = $_GET["id"];
    $sql_delete = "DELETE FROM user WHERE id='$id'";
    if ($conn->query($sql_delete) === TRUE) {
        echo "User dengan Id ke - " . $id ." berhasil dihapus <br>";
        echo "<button><a href='listUser.php'>Kembali</a></button>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>