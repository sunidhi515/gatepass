
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include 'nav.php';   ?>
<?php
include 'connect.php';
$con=openConnection();

if(isset($_POST['update'])){

        $UPDATE=$_POST['update'];

        $query="UPDATE approval
        SET activeindex='n'
        WHERE gid = $UPDATE;";
        $result=mysqli_query($con,$query)or die(mysqli_error($con));


        echo"<script> window.location.href='manage.php' </script>";
}

?>
</div>
</body>
</html>