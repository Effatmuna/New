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
  $sql="SELECT * FROM user WHERE usertype='student'";
  $result=mysqli_query($data,$sql);
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
    <style type="text/css">
        .table_th{
            padding: 20px;
            font-size:15px;
            
        }
        .table_td{
            padding:20px;
            background-color:#c0e8f0;
        }
        .btn_up{
          background-color:green;
          padding:10px;
          text-decoration: none;
          color:white;
          font-weight:bold;
          border-radius:3px;
        }
        .btn_de{
          background-color:red;
          padding:10px;
          text-decoration: none;
          color:white;
          font-weight:bold;
          border-radius:3px;
        }
    </style>
</head>
<body>
<?php
     include 'admin_bar.php';
    ?>
    <div class="content" id="tab">
        <h1>Student data</h1></br></br>
    <table border="1px">
    
        <tr>
            <th class="table_th">Username</th>
            <th class="table_th">Phone</th>
            <th class="table_th">Email</th>
            <th class="table_th">Password</th>
            <th class="table_th">Delete</th>
            <th class="table_th">Update</th>
        </tr>
        <?php
          while($info=$result->fetch_assoc())
          {
        ?>
        <tr>
            <td class="table_td">
                <?php echo "{$info['username']}";?>
            </td>
            <td class="table_td"><?php echo "{$info['phone']}";?></td>
            <td class="table_td"><?php echo "{$info['email']}";?></td>
            <td class="table_td"><?php echo "{$info['password']}";?></td>
            <td class="table_td"><?php echo "<a class='btn_de' onclick=\"javascript:return confirm('Are you sure to delete');\"href='delete.php?student_id={$info['id']}'>Delete</a>";?></td>
            <td class="table_td"><?php echo "<a class='btn_up' onclick=\"javascript:return confirm('Are you sure to update');\" href='updatee.php?student_id={$info['id']}'>Update</a>";?></td>
        </tr>
        <?php
          }
        ?>
    </table>
       
      
    </div>
</body>
</html>