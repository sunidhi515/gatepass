<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Validation</title>
</head>
<body>
        
<?php include 'nav.php';   ?>

<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['alogin'])){
      
        $Password=($_POST['password']);
        $Username=$_POST['username'];

        $query="SELECT * FROM admin WHERE adminid='$Username' AND password='$Password';";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));


        if(mysqli_num_rows($result)>0){
            echo"<script>window.location.href='manage.php' </script>";
        }
        else echo "<h1><center>Login Unsuccessful</h1>";
}

?>
</div>

</body>
</html>

