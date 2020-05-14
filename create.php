<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/createstyle.css">
</head>
<body>
<?php
    include 'nav.php';
    include 'connect.php';
    $con=openConnection();
    $query="SELECT * FROM m_destination";
    $result=mysqli_query($con,$query)or die(mysqli_error($con));
     ?>

<p id="para">____S E L E C T        L O C A T I O N____</p>


<div id="box">
    
        
    <form method="POST" action="approval.php" id="regForm1">

       <div class="p1div"><p class="p1">Enter the Destination</p></div>
       <select class="dd" name="destination">
       <?php
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            ?>
                            <option value="<?php echo $row['m_did']; ?>"><?php echo $row['destinations']; ?></option>

                           
                                <?php
                            
                                }
                                }
                                 ?>
  
</select>
<?php
      
       $query="SELECT * FROM m_source";
       $result=mysqli_query($con,$query)or die(mysqli_error($con)); 
?>
       <div class="p1div"><p class="p1">Enter the Source</p></div>
      
<select class="dd" name="source">
<?php
                            if(mysqli_num_rows($result)>0){
                             while($row=mysqli_fetch_array($result)){
                            if($row['m_sid']==1){
                                ?>
                            <option value="<?php echo $row['m_sid']; ?>" selected><?php echo $row['source']; ?></option>
                            <?php } 
                             else {?>
                            
                            
                            <option value="<?php echo $row['m_sid']; ?> "><?php echo $row['source']; ?></option><br>
                                <?php
                                }
                                }
                              }
                                 ?>
  
</select>
 
 <button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-left " style="width:45%;" type=" submit" name="n_location" >Next</button> 
    </div>
    
</body>
</html>