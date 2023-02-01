<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");

  }
  elseif($_SESSION['usertype']=='admin')
  {
    header("location:login.php");
  }
?>
<?php include 'confiq.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="css/logInp.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/rules.css">
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>





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
               <div class="logout">
               <a href="logout.php" class="register">logOut</a>
               </div>
               <div class="menuBar">
                <img  src="img/menu.png">
                </div>
            </navbar>
            



    <aside>
        <ul>
            <li>
                <a href="feeNotice.php">FeesNotice</a>
            </li>
            <li>
                <a href="">Seats</a>
            </li>
           
        </ul>


    </aside>
    <div class="content">
        <h1>Sidebar Accordation</h1>
        <p> These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammeled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>

    </div>