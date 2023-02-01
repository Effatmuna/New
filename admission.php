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
$sql="SELECT* from admission";
$result=mysqli_query($data,$sql);
?>


<?php include 'confiq.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission</title>
    <link rel="stylesheet" href="css/admin.css?v=<?=$version?>">
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
    <?php
     include 'admin_bar.php';
    ?>
    <div class="content" id="tab">
    <h1>Applied Student List</h1><br><br>
    <table border="1px">
            <tr>
                <th style="padding:20px; font-size:15px;">Name</th>
                <th style="padding:20px; font-size:15px;">Reg_no</th>
                <th style="padding:20px; font-size:15px;">Dept</th>
                <th style="padding:20px; font-size:15px;">Session</th>
                <th style="padding:20px; font-size:15px;">Phone </th>
                


            </tr>
            <?php
             while($info=$result->fetch_assoc())
             {
            ?>
            <tr>
                <td style="padding:20px;">
                <?php echo "{$info['std_name']}";?>
            </td>
                <td style="padding:20px;"><?php echo "{$info['Reg_no']}";?></td>
                <td style="padding:20px;"><?php echo "{$info['Dept']}";?></td>
                <td style="padding:20px;" ><?php echo "{$info['Session']}";?></td>
                <td style="padding:20px;"><?php echo "{$info['Phone']}";?></td>
            </tr>
            <?php
             }
            ?>
        </table>
</div>
</body>
</html>