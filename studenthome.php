
<?php include 'confiq.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>

    <link rel="stylesheet" href="css/logInp.css?v=<?=$version?>">
    
    

    <link rel="stylesheet" href="./asset/fontawesome/css/all.css"/>
</head>
<body>
   

<?php
     include 'std_bar.php';
    ?>

    <aside>
        <ul>
            <li>
                <a href="feeNotice.php">FeesNotice</a>
            </li>
            <li>
                <a href="new.php">Seats</a>
            </li>
            <li>
                <a href="menu.php">Menu</a>
            </li>
            <li>
                <a href="rules.php">Rules</a>
            </li>
            <li>
                <a href="epayment.php">Epayment</a>
            </li>
        </ul>


    </aside>
    <div class="content">
        <h1>Student Bar</h1>
        <p style="font-size:20px">Welcome,<br/>Now you can see wherether you are confirm hall memeber or not.</p>
        <p style="font-size:20px;">Also student can edit their menu and meal rate.</p><br>
        <h4>Thank You!!</h4>
        
        
    </div>
    


    <script src="script.js"></script>

</body>
</html>