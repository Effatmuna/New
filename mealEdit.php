<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/navbar.css">
   
    
    <link rel="stylesheet" href="css/menu.css">
    
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
   
    <title>Document</title>
</head>
<body>
    <!--Header-->
    

  
      
    <navbar class="navbaR">

        <img class="sust" src="img/sust.png">
        
           <div class="navList">
            
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="">About Us</a>
                       <img src="img/down-chevron.png" class="dropDownPic">
                    
                    <div class="dropdowN">
                       <a href="aboutUs.php"> <p>History</p></a>
                       <a href="provost.php"> <p>Provost's Details</p></a>
                    </div>
            
                
                </li>
                <li><a href="rules.php">Rules</a></li>
                <li><a href="menu.php">Menu</a></li>

                <li><a href="notice.php">Notice</a></li>
                <li><a href="epayment.php">ePayment</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
           
           </div>
           <div class="Register">
            <a class="register" href="registration.php">Register</a>
           </div>
           <div class="menuBar">
            <img  src="img/menu.png">
            </div>
        </navbar>
        
 </header>







<div class="container">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hall_menu";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$id=$_GET['id'];
$sql1= "SELECT * from meal_rate where id ={$id}";
$result1 = mysqli_query($conn,$sql1);

//$sql2= "SELECT * from meal_rate";
//$result2 = mysqli_query($conn,$sql2);
if(mysqli_num_rows($result1)>0){
  while($row = mysqli_fetch_assoc($result1)){

?> 


<form  method="post" action="updateMeal.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Per Day</label>
    <input type="hidden" name="id" class="form_control" value="<?php echo $row['id'];?>">
    <input type="text" name="perDay" class="form-control" value="<?php echo $row['perDay'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
   
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Total amount</label>
    <input type="text"  name="total" class="form-control" value="<?php echo $row['total'];?>" id="exampleInputPassword1" >
  </div>
  
 
  <input type="submit" class="btn btn-primary" value="Update">
  <a href="menu.php" class="btn btn-primary">Cancel</a>
</form>


<?php
}
}
?>


</div>

<script src="script.js"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>