<?php
include 'connectDB.php';
$id = $_GET["id"];
$sql_delete = "DELETE FROM user WHERE id='$id'";
if ($conn->query($sql_delete) === TRUE) {
    echo "User dengan Id ke - " . $id ." berhasil dihapus"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
