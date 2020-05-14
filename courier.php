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
<p id="para">____C O U R I E R  S E R V I C E S____ </p>

<div class="image2" ><img  src="./css/source.gif"  class="img">  </div>

  <div id="box2">
   

        
    <form method="POST" action="final.php"  id="regForm1">
    
    <h4   style="color:black; ">Enter your name:</h4>
    <input class="form-control" type="text"  name="cn" placeholder="enter your personal no…"   required><br>
    <h4   style="color:black; ">Enter contact no:</h4>
    <input class="form-control" type="text" name="cno" placeholder="enter your contact no…"   required><br> 
    <!-- <button type="button" class="btn btn-large btn-pink " data-toggle="button" aria-pressed="false" autocomplete="off">
  Submit -->
  
  <button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-top " style="width:70%;" type=" submit" name="submit2" >Submit</button> 
</form>
</div>
<body>
<html>
