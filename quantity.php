<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/approvalstyles.css">
</head>
<body>
<?php 
    include 'nav.php';
    include 'connect.php';
    $con=openConnection(); 

if(isset($_POST['n_material'])){
       $MATERIAL = $_POST['materials'];
       $_SESSION['mat']=$MATERIAL;
}
$query="SELECT * FROM m_material WHERE m_mid='$MATERIAL';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
?>

<p id="para">_____S E L E C T    Q U A N T I T Y    U P T O   <?php echo $row['quantity']."____"; ?></p>

  <div id="box">
   

        
    <form method="POST" action="transport.php"  id="regForm1">
    
    <input type="number" class="a" placeholder="Enter Quantity in the limit" name="qty" min="1" max="<?php echo $row['quantity'];?>" required>
                                              
  <select  class="ab" name="unit" required>
                            <option value="<?php echo $row['unit']; ?>"><?php echo $row['unit']; ?></option>
                          
 </select>
       
 
  <button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-top " style="width:80%;" type="submit" name="n_quantity" >Next</button> 

        </form>
        </div>
        </body>
        </html>