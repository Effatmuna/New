<?php
$id=$_POST['id'];
$perDay=$_POST['perDay'];
$total=$_POST['total'];


$servername = "localhost";
$username = "root";
$password = "";
$database = "hall_menu";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql="UPDATE meal_rate SET perDay={$perDay},total={$total} WHERE id={$id}";
$result=mysqli_query($conn,$sql) or die("query fail");
header("Location: http://localhost/H/menu.php");


?>