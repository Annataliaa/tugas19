<?php
session_start();
include 'connectDB.php';

$sql_user = "select * from user";
$result = $conn->query($sql_user);
$row = mysqli_fetch_array($result);

if(isset($_SESSION['isLoggedIn'])){
	$isLoggedIn = $_SESSION['isLoggedIn'] ? true : false;
}else{
	$isLoggedIn = false;
}

if($isLoggedIn){
	// echo "User already login"; 
    header("Location: index.php");
}else{
	$postedEmail= isset($_POST['email']) ? $_POST['email'] : null;
	$postedPassword= isset($_POST['password']) ? $_POST['password'] : null;
	
    $sql = "SELECT * FROM user";
    $result = $conn->query($sql);
    // Memeriksa apakah ada data yang ditemukan
    if ($result->num_rows > 0) {
        // Menampilkan data
        while ($row = $result->fetch_assoc()) {
            if($postedEmail == $row['email']){
                $passwordValid = $postedPassword ==  $row['password'];
                
                if($passwordValid){
                    $_SESSION["email"] = $row['email'];
                    $_SESSION["isLoggedIn"] = true;
                    header("Location: index.php");
                    exit();
                }
            }
        }
		echo "Email dan password tidak cocok. <br>
		<button><a href='loginUser.php'>Login Kembali</a></button>";
    }		
}
?>