<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/approvalstyles.css">
</head>
<body>
<?php 
    include 'nav.php';
    include 'connect.php';
    $con=openConnection(); 

if(isset($_POST['trans'])){
       $TRANSPORT= $_POST['trans'];
       $_SESSION['transp']=$TRANSPORT;
}

       ?>


<p id="para">____O W N   E M P L O Y E E____</p>
<div class="image1" ><img  src="./css/emp.gif"  class="img">  </div>
  <div id="box1">
   

        
    <form method="POST" action="final.php"  id="regForm1">
    
    <h4   style="color:black;   font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">enetr pno:</h4>
    <input class="form-control" type="text" name="epno" placeholder="enter your personal no…"   required><br>
    <h4 style="color:black;   font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;"> enter contact no:</h4>
    <input class="form-control" type="text" name="ecn" placeholder="enter your contact no…"   required><br> 
    <!-- <button type="button" class="btn btn-large btn-pink " data-toggle="button" aria-pressed="false" autocomplete="off">
  Submit -->
  
  <button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-top " style="width:70%;" type=" submit" name="submit1" >Submit</button> 

</form>
</div>
<body>
<html>
