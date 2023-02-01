<?php include 'confiq.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
   
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
 
    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
    <header class="header">
        <a href="adminhome.php" style="font-size:20px;">Admin Dashboard</a>
        <div class="logout">
        <a href="logout.php" class="register">Log Out</a>
      </div>
    </header>
    <aside>
        <ul>
            <li>
                <a href="admission.php">Addmission</a>
            </li>
            <li>
                <a href="add_std.php">Add student</a>
            </li>
            <li>
                <a href="view_std.php">View Student</a>
            </li>
            <li>
                <a href="fees.php">Student Fees</a>
            </li>
            <li>
                <a href="adminNotice.php">Add Notice</a>
            </li>
          
           
            <li>
                <a href="notice.php">View Notice</a>
            </li>

        </ul>


    </aside>

</body>
</html>