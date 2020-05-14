<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="./css/final.css"> 

       </head>
<body>
       
<!-- <?php include 'nav.php';   ?> -->
<?php
include 'connect.php';
$con=openConnection();
$CNO="NULL";
$CN="NULL";
$ECN="NULL";
$EPNO="NULL";
if(isset($_POST['submit1'])){

       $EPNO=$_POST['epno'];
       $ECN=$_POST['ecn'];
}

if(isset($_POST['submit2'])){

    $CN=$_POST['cn'];
    $CNO=$_POST['cno'];
}


$DESTINATION_ID = $_SESSION['destinationid'];
$SOURCE_ID = $_SESSION['sourceid'];
$APPROVAL = $_SESSION['app'];
$USERMAIL=$_SESSION['usermail'];

$query="SELECT * FROM user WHERE email='$USERMAIL';";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$row=mysqli_fetch_array($result);

$USERID=$row['userid'];
$MATERIAL = $_SESSION['mat'];
$QUANTITY = $_SESSION['quan'];
$UNIT = $_SESSION['unit'];
$VEHICLE=$_SESSION['transp'];
$GPID=mt_rand(1000, 10000);



$query="INSERT INTO approval(userid,m_did,m_sid,approver,material,quantity,unit,m_tid,courierservice,c_contactno,courieremp_pno,e_contactno,gpid,activeindex) VALUES($USERID,$DESTINATION_ID,$SOURCE_ID,'$APPROVAL','$MATERIAL',$QUANTITY,'$UNIT','$VEHICLE','$CN',$CNO,$EPNO,$ECN,$GPID,'y')";

$result=mysqli_query($con,$query)or die(mysqli_error($con));

?>
<p class="mg">____G A T E P A S S  G E N E R A T I O N____<p>

<div id="box">




        <div class="row text-center">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                
                <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <?php 
                    $query="SELECT * FROM user WHERE userid='$USERID';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-warning"><th>GATEPASSID </th><th> <?php echo $GPID; ?></th></tr><br>
                <tr class="table-info"><td>NAME </td><td> <?php echo $row['name']; ?></td></tr>
                <?php 
                    $query="SELECT * FROM m_source WHERE m_sid='$SOURCE_ID';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-info"><td>SOURCE </td><td> <?php echo $row['source']; ?></td></tr>
                <?php 
                    $query="SELECT * FROM m_destination WHERE m_did='$DESTINATION_ID';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-info"><td>DESTINATION </td><td> <?php echo $row['destinations']; ?></td></tr>
                <tr class="table-info"><td>APPROVER </td><td> <?php echo $APPROVAL; ?></td></tr>
                <tr class="table-info"><td>MATERIAL </td><td> <?php echo $MATERIAL; ?></td></tr>
                <tr class="table-info"><td>QUANTITY </td><td> <?php echo $QUANTITY; ?></td></tr>
                <tr class="table-info"><td>UNIT </td><td> <?php echo $UNIT; ?></td></tr>
                <?php 
                    $query="SELECT * FROM m_transport WHERE m_tid='$VEHICLE';";
                    $result=mysqli_query($con,$query)or die(mysqli_error($con));
                    $row=mysqli_fetch_array($result);
                ?>
                <tr class="table-info"><td>VEHICLE </td><td> <?php echo $row['transport'];echo " ";echo $row['transport_no'] ?></td></tr>

</table>
</div>
<form>
                            
<button   class="btn btn-outline-info btn-lg col-xs-2  btn-block btn-default margin-top " style="width:70%; margin-left:80px;"  onClick="window.print()" >Print the page</button> 
                      
</form>
</div>
                </div>
            </div>
        </div>
    </div>


</body>
<html>
















