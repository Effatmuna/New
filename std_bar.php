
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
    <link rel="stylesheet" href="css/admin.css?v=<?=$version?>">
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
    <header class="header">
        <a href="studenthome.php">Student Dashboard</a>
        <div class="logout">
        <a href="logout.php" class="btn1">Log Out</a>
</div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="notice.php">Notice</a>
            </li>
            <li>
                <a href="new.php">Student List</a>
            </li>
           
        </ul>


    </aside>
   
        
        

    </div>