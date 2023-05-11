<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "tugas19";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}
?>