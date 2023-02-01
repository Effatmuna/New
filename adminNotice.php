<?php
  
  $host="localhost";
$user="root";
$password="";
$db="epayment";
$data=mysqli_connect($host,$user,$password,$db);

if ($data->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <title>Notice</title>
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">


    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  
    
</head>
<body>

<header class="header">
        <a href="adminhome.php" style="font-size:20px; color:white;">Admin Dashboard</a>
        <div class="logout">
        <a href="logout.php" class="register">Log Out</a>
      </div>
    </header>



 <div class="container mt-5">


   <form method="post" action="adminNotice.php">
  
    <label for="notice" class="ml-1">New Notice</label>
    <input type="hidden" name="id" class="form_control">
      <textarea name="say" type="text" class="form-control" col="100" row="100" placeholder="Submit your text"></textarea>
     <input type="submit"  name="submit" class="btn mt-3" value="Submit">
      
   </form>

</div>



<script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $say = $_POST['say'];
    $sql = "INSERT INTO board VALUES(4,'$say')";

  if(mysqli_query($data, $sql)) {
        echo "";
    } else {
        echo "Data not inserted";
    }

}



?>

