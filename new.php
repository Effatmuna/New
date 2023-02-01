<?php

 
  $host="localhost";
$user="root";
$password="";
$db="hall_pro";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT* from user";
$result=mysqli_query($data,$sql);
?>


<?php include 'confiq.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
    <link rel="stylesheet" href="css/admin.css?v=<?=$version?>">
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
    <?php
     include 'std_bar.php';
    ?>
    <div class="content" id="tab">
    <h1>Qualified Student List</h1><br><br>
    <table border="1px">
            <tr>
                <th style="padding:20px; font-size:15px;">Name</th>
                <th style="padding:20px; font-size:15px;">Phone</th>
                <th style="padding:20px; font-size:15px;">Email</th>
                


            </tr>
            <?php
             while($info=$result->fetch_assoc())
             {
            ?>
            <tr>
                <td style="padding:20px;">
                <?php echo "{$info['username']}";?>
            </td>
                <td style="padding:20px;"><?php echo "{$info['phone']}";?></td>
                <td style="padding:20px;"><?php echo "{$info['email']}";?></td>
              
            </tr>
            <?php
             }
            ?>
        </table>
</div>
</body>
</html>