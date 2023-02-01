<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "epayment";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql= "SELECT * from hallfee";
$result = mysqli_query($conn,$sql);



?> 







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/fees.css">
    <link rel="stylesheet" href="css/rules.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact Us</title>
</head>
<body>
<header class="header">
        <a href="adminhome.php" class="student">Admin Dashboard</a>
        <div class="logout">
        <a href="logout.php" class="register">Log Out</a>
      </div>
    </header>
<div class="container mt-5">
<table class="table table-striped text-center">
  <thead>
    <tr class="bg-secondary text-white">
      
      <th scope="col">Registration No.</th>
      <th scope="col">Department</th>
      <th scope="col">Semester</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
             while($row = mysqli_fetch_assoc($result))
             {
            ?>
          
            <th scope="col"><?php echo $row['registrationno'];?></th>
             <td><?php echo $row['dept'];?></td>
            <td><?php echo $row['semester'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php echo $row['email'];?></td>
          
            </tr>
             <?php
             }
             ?>
    </tr>
  
  </tbody>
</table>

</div>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>