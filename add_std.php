<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");

  }
  elseif($_SESSION['usertype']=='student')
  {
    header("location:login.php");
  }
  $host="localhost";
  $user="root";
  $password="";
  $db="hall_pro";
  $data=mysqli_connect($host,$user,$password,$db);
   if(isset($_POST['add_std'])){
     $username=$_POST['name'];
     $user_phone=$_POST['phone'];
     $user_email=$_POST['email'];
     $user_pass=$_POST['pass'];
     $usertype='student';
     $check="SELECT * FROM user WHERE username='$username'";
     $check_user=mysqli_query($data,$check);
     $row_count=mysqli_num_rows($check_user);
     if($row_count==1)
     {
         echo "<script type='text/javascript'>
               alert('Username already exist.Include your registration number with nickname');
               </script>";

     }
     
else {
     $sql="INSERT INTO user(username,phone,email,usertype,password) 
     VALUES('$username','$user_phone','$user_email','$usertype','$user_pass')";
     $result=mysqli_query($data,$sql);
     if($result)
     {
        echo "<script type='text/javascript'>
              alert('data upload successul');
        </script>";
     }
     else{
        echo "data upload failed";
     
     }
    }

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
    <link rel="stylesheet" href="css/addstudent.css">
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
<?php
     include 'admin_bar.php';
    ?>
    <div class="content" id="add">
        <h1>Add student</h1>
        <div>
            <form action="#" method="POST">
              <div id="add_std">
                <div>
                    <label>Username</label>
                    <input type="text" name="name"/>
                </div>
                <div>
                    <label>Phone</label>&nbsp;&nbsp; &nbsp; &nbsp;
                    <input type="number" name="phone"/>
                </div>
                <div>
                    <label>Email</label>&nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="email" name="email"/>
                </div>
                <div>
                
                    <label>Password</label>&nbsp;
                    <input type="text" name="pass"/>
                </div>
                <div id="add_btn">
                    
                    <input type="submit"id="btn4"name="add_std" value="Add Student"/>
                </div>
</div>
            </form>
        </div>
       
      
    </div>
</body>
</html>