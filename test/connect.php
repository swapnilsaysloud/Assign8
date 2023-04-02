<?php
function redirect($url)
{
    header('Location: '.$url);
    exit();
}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$Password = $_POST['password'];
$Email = $_POST['email'];
//$hashed_password = password_hash($Password, PASSWORD_DEFAULT);
mysqli_report(MYSQLI_REPORT_OFF);
$conn = new mysqli('localhost','root','','users');
if($conn->connect_error)
{
 die('Connection Failed :' .$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into users (first_name,last_name,email,password) values(?,?,?,?)");
$stmt->bind_param("ssss",$firstName,$lastName,$Email,$Password);
$stmt->execute();
redirect('login.php');
$stmt->close();
$conn->close();
}
?>