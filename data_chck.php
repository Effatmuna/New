<?php
  session_start();
 $host="localhost";
 $user="root";
 $password="";
 $db="hall_pro";
 $data=mysqli_connect($host,$user,$password,$db);
 if($data===false){
    die("connection error");
 }
  if(isset($_POST['apply'])){
    $data_name=$_POST['name'];
    $data_reg=$_POST['Reg_no'];
    $data_dept=$_POST['Dept'];
    $data_session=$_POST['Session'];
    $data_phone=$_POST['Phone'];

    $sql="INSERT INTO admission(std_name,Reg_no,Dept,Session,Phone)
     VALUES('$data_name','$data_reg','$data_dept','$data_session','$data_phone')";
     $result=mysqli_query($data,$sql);
     if($result){
        $_SESSION['message']="your application sent successful";
        header("location:forom.php");
     }
     else {
        echo "Apply failed";
     }
  }


?>