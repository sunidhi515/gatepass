<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/approvalstyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 
    include 'nav.php';
    include 'connect.php';
    $con=openConnection(); 

if(isset($_POST['n_quantity'])){

       $QUANTITY = $_POST['qty'];
       $UNIT = $_POST['unit'];
       $_SESSION['quan']=$QUANTITY;
       $_SESSION['unit']=$UNIT;
}
$query="SELECT * FROM m_transport";
$result=mysqli_query($con,$query)or die(mysqli_error($con));

       ?>
       <p id="para">____S E L E C T   T H E   T R A N S P O R T____</p>
       <div class="image" ><img  src="./css/tenor.gif"  class="img">  </div>

  <div id="box">
   

        
    <form method="POST" name="f1"  action="employee.php" id="regForm1">
    
    <select class="aa"  name="trans">
    <?php
                                    
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            ?>

                            <option value="<?php echo $row['m_tid']; ?>"><?php echo $row['transport']." ".$row['transport_no']; ?></option>
                           
                           
                                <?php
                                }
                            }
                                 ?>
  
  </select>


       
  <!-- <button class="b1" name="n_transport" ><span class="b2" > NEXT</span></button> -->
   <h3 class="courier"><u>Courier</u></h3>
   <button  name="emp" class="btn btn-outline-info" class="f" onclick="window.location.href ='employee.php';">Own Employee</button>
  <button   name="cs"   class="btn btn-outline-info " class="f" onclick="f1.action='courier.php';"  return true;">courier service</button> 
  
        </form>
        </div>
        </body>
        </html>