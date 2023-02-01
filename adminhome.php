<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");

  }
  elseif($_SESSION['usertype']=='student')
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
<?php
     include 'admin_bar.php';
    ?>
    <div class="content">
        <h1>Admin Dashboard</h1>

        <p style="font-size:20px; margin-top:10px">This is a page where hall provost can see applied student list,confirm student for the hall seat,can view confirm student list. </p>
        <p style="font-size:20px;">Provost can check,update and delete student profile.Its also allow to show epayment and notice</p>
       
      
    </div>
</body>
</html>