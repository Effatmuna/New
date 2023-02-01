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
$id=$_GET['student_id'];
$sql="SELECT *  FROM user WHERE id='$id'";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();
if(isset($_POST['update'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $query="UPDATE user SET username='$name',phone='$phone',email='$email',password='$password'  WHERE id='$id'";
    $result2=mysqli_query($data,$query);
    if($result2){
        header("location:view_std.php"); 
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
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
<?php
     include 'admin_bar.php';
    ?>
    <div class="content" id="add">
        <h1>Update student</h1>
        <div>
            <form action="#" method="POST">
              <div id="add_std">
                <div>
                    <label>Username</label>
                    <input type="text" name="name" 
                    value="<?php echo "{$info['username']}";?>"/>
                </div>
                <div>
                    <label>Phone</label>&nbsp;&nbsp; &nbsp; &nbsp;
                    <input type="number" name="phone" value="<?php echo "{$info['phone']}";?>"/>
                </div>
                <div>
                    <label>Email</label>&nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="email" name="email" value="<?php echo "{$info['email']}";?>"/>
                </div>
                <div>
                
                    <label>Password</label>&nbsp;
                    <input type="text" name="pass" value="<?php echo "{$info['password']}";?>" />
                </div>
                <div id="add_btn">
                    
                    <input type="submit"id="btn4"name="update" value="Update Student"/>
                </div>
</div>
            </form>
        </div>
       
      
    </div>
</body>
</html>