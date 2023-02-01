<?php
$id=$_POST['id'];
$morning=$_POST['morning'];
$noon=$_POST['noon'];
$night=$_POST['night'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "hall_menu";

$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql="UPDATE menu SET Morning='{$morning}',Noon='{$noon}',Night='{$night}' WHERE id={$id}";
$result=mysqli_query($conn,$sql) or die("query fail");
header("Location: http://localhost/H/menu.php");


?>