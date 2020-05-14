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

if(isset($_POST['n_location'])){
       $DESTINATION_ID = $_POST['destination'];
       $SOURCE_ID = $_POST['source'];
       $_SESSION['sourceid']=$SOURCE_ID;
       $_SESSION['destinationid']=$DESTINATION_ID;
}
    //    $USERMAIL=$_SESSION['usermail'];
    //    $query="SELECT * FROM user WHERE email='$USERMAIL';";
    //    $result=mysqli_query($con,$query)or die(mysqli_error($con));
    //    $row=mysqli_fetch_array($result);
   
    //    $USERID=$row['userid'];
    //    $query="SELECT * FROM delivery_location WHERE uerid='$USERID'AND m_did='$DESTINATION_ID' AND m_sid='$SOURCE_ID' AND activeindex='n';";
    //    $result=mysqli_query($con,$query)or die(mysqli_error($con));
    //    if(mysqli_num_rows($result)>0){
    //        echo "ERROR:already applied for these locations";
    //    }
    //   else{
    //    $query="INSERT INTO delivery_location(uerid,m_did,m_sid,activeindex) VALUES($USERID,$DESTINATION_ID,$SOURCE_ID,'n')";
    //    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    //    if($result){
    //    $_SESSION['sloc']=$SOURCE_ID;
    //    $_SESSION['dloc']=$DESTINATION_ID;

$query="SELECT * FROM m_approval WHERE sid='$SOURCE_ID';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
?>
<p id="para">____S E L E C T   A P P R O V A L____</p>
<div class="image" ><img  src="./css/approval.gif"  class="img">  </div>
<div id="box">

    <form method="POST" action="material.php">
<select class="aa" name="approval" required>

                            <option value="<?php echo $row['approval1']; ?>"><?php echo $row['approval1']; ?></option>
                            <option value="<?php echo $row['approval2']; ?>"><?php echo $row['approval2']; ?></option>
                            
                            
</select>



<button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-top " style="width:70%;" type=" submit" name="n_approval" >Next</button> 
</form>

</div>





</body>
</html>
