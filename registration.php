

<?php include 'confiq.php';?>
<?php
 error_reporting(0);
 session_start();
 session_destroy();
 if($_SESSION['message']){
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
         alert('$message');
    </script>";
 }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/rules.css">
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&family=PT+Serif&family=Rubik+Vinyl&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form</title>
</head>
<body>
    
    <header>

    <div class="header">
         <img class="logo" src="img/logo.png">
         <img src="img/sust.png">
         
         <div class="details">
         <p>Provost Office</p>
         <h4>Bangomata Hall</h4>
         <p>Sylhet Engineering College</p>
         <p>Sylhet-3100,Bangladesh</p>
         </div>
     </div>


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
                    <li><a href="menu2.php">Menu</a></li>
                    <li><a href="notice.php">Notice</a></li>
                    <li><a href="epayment.php">ePayment</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
               
               </div>
               <div class="Register">
                <a class="register" href="registration.php">Register</a>
                <a class="register2" href="logIn.php">Log In</a>
               </div>


               <div class="menuBar">
                <img  src="img/menu.png">
                </div>
            </navbar>
            
     </header>

    <!--Registration form-->
    <div class="overflow"></div>
     <div class="regis">
     
     <div class="job">
	 <h1> Application<small> (form)</small></h1>
	 <form action="data_chck.php" method="POST">
	  <div class="forom1">
	  <div class="main1">
	  <label for="first_name">Name</label>
	  <input id="first_name" name="name"  placeholder="Enter your  name...."/>
	  </div> 

	  <div class="main1">
	  <label for="reg">Reg_no</label>
	  <input type="number"id="reg" name="Reg_no"/>
	  </div>
      <div class="main1">
	  <label for="Dept">Dept</label>
	  <input type="text"id="Dept" name="Dept"/>
	  </div>
	  <div class="main1">
	  <label for="Session">Session</label>
	  <input id="Session" name="Session"/>
	  </div>
	 
      <div class="main1">
	  <label for="phone">Phone</label>
	  <input type="number"id="phone" name="Phone" placeholder="01*******"/>
	  </div>
	  
	  
	  <div class="btn2">
	       <button type="submit" value="apply" class="btn_2"  name="apply">Apply Now</button>
	  </div>
	 </form>
	 
	</div>
</div>

       <script src="script.js"></script>
</body>
</html>

