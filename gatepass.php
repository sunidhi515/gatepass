<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="./css/gpstyle.css">
    <title>Gatepass</title>
    
</head>
<body>

<?php 
include 'nav.php';

?> 

   <div class="o"><p >___Logged in as:<?php echo $_SESSION['usermail']."____";?></p><div>
   <div class="image" ><img  src="./css/gp.jpg"  class="img">  </div>
   <div id="box">
     
   <button   class="btn btn-outline-info btn-lg btn-block" class="a"  onclick="window.location.href ='create.php';">Create Gatepass</button>
   <button   class="btn btn-outline-info btn-lg btn-block" class="a"  onclick="window.location.href ='admin.php';">Manage Gtepass</button>


    </div>
   
    

</body>
</html>