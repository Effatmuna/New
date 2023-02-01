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

$sql1= "SELECT * from menu";
$result1 = mysqli_query($conn,$sql1);

$sql2= "SELECT * from meal_rate";
$result2 = mysqli_query($conn,$sql2);

?> 









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
                <li><a href="index.php">Home</a></li>
                <li><a href="">About Us</a>
                       <img src="img/down-chevron.png" class="dropDownPic">
                    
                    <div class="dropdowN">
                       <a href="aboutUs.php"> <p>History</p></a>
                       <a href="provost.php"> <p>Provost's Details</p></a>
                    </div>
            
                
                </li>
                <li><a href="rules.php">Rules</a></li>
                <li><a href="menu2.php" active>Menu</a></li>

                <li><a href="notice.php">Notice</a></li>
                <li><a href="epayment.php">ePayment</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
           
           </div>
           <div class="Register">
        
            <a class="register2" href="logout.php">Log Out</a>
           </div>
           <div class="menuBar">
            <img  src="img/menu.png">
            </div>
        </navbar>
        
 </header>

     
<div class="container">
    <h2 class="mt-3">Menu</h2>
     <table class="table table-striped text-center">
        <thead>
          <tr class="bg-secondary text-light">
       
            <th scope="col">Weeks</th>
            <th scope="col">Morning(8:30-10:30)</th>
            <th scope="col">Noon(1:00-2:30)</th>
            <th scope="col">Night(8:30-10:30)</th>
            <th scope="col">Edit</th>
         
          </tr>
        </thead>
        <tbody >
          <tr>
          
            <?php
             while($row = mysqli_fetch_assoc($result1))
             {
            ?>
          
            <th scope="col"><?php echo $row['weeks'];?></th>
             <td><?php echo $row['Morning'];?></td>
            <td><?php echo $row['Noon'];?></td>
            <td><?php echo $row['Night'];?></td>
            <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a></td>
             
            </tr>
             <?php
             }
             ?>
        
        </tbody>
      </table>

      <h2 class="mt-3">Meal Rate</h2>
      <table class="table table-striped text-center">
         <thead>
           <tr class="bg-secondary text-light">
            
             <th scope="col">Month</th>
             <th scope="col">Per Day</th>
             <th scope="col">Total Bill(Full month)</th>
             <th scope="col">Edit</th>
           </tr>
         </thead>
         <tbody>
         <tr>
          
          <?php
           while($row = mysqli_fetch_assoc($result2))
           {
          ?>
        
          <th scope="col"><?php echo $row['Month'];?></th>
           <td><?php echo $row['perDay'];?></td>
          <td><?php echo $row['total'];?></td>
          <td><a href="mealEdit.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Edit</a></td>
           
          </tr>
           <?php
           }
           ?>
         </tbody>
       </table>



       <h2 class="3">Rules</h2>
       <div class="rules">
        <h5>1.If someone consumes less than half of the month, then his mail will be treated as guest mail and her meal rate will be count as 65tk per meal.</h5>
        <h5>2.Third year’s students will  be handle the dinning process.</h5>
       </div>

</div>

<script src="script.js"></script> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
     </html>