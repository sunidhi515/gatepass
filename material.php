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

if(isset($_POST['n_approval'])){
       $APPROVAL = $_POST['approval'];
       $_SESSION['app']=$APPROVAL;
}
$query="SELECT * FROM m_material";
$result=mysqli_query($con,$query)or die(mysqli_error($con));



       ?>

<p id="para">___S E L E C T    T H E    M A T E R I A L___</p>
<div class="image" ><img  src="./css/mat.gif"  class="img">  </div>
  <div id="box">
   

        
    <form method="POST" action="quantity.php"  id="regForm1">
   
    <select class="aa"  name="materials">
    <?php
                                    
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            ?>

                            <option value="<?php echo $row['m_mid']; ?>"><?php echo $row['material']; ?></option>
                           
                           
                                <?php
                                }
                            }
                                 ?>
  
  </select>


       
  
  <button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-top " style="width:70%;" type=" submit" name="n_material" >Next</button> 


        </form>
        </div>
        </body>
        </html>