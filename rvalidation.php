<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
</head>
<body>
        
<?php include 'nav.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['name'])){
        $Pno=$_POST['pno'];
        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $Mobile=$_POST['contact'];
        $Password=md5($_POST['password']);
        $Active=$_POST['employee'];

        $query="INSERT INTO user(name,pno,email,password,phonenumber,activeindex) VALUES('$Name','$Pno','$Email','$Password','$Mobile','$Active')";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));
        if($result){
                echo "<h1><center>Signup Successful</h1><br>";
                $_SESSION['usermail']=$Email;
                echo"<script> window.location.href='gatepass.php' </script>";
        
    }   
}
else{
        echo"<h2><center>Signup Unsuccessful</h2>";
}
?>
</div>

</body>
</html>