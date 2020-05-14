<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="./css/.css">
    <title> manage 
    Gatepass</title>
    
</head>
<body>



<?php include 'nav.php';   ?>
<?php
 include 'connect.php';
 $con=openConnection();

 $query="SELECT * FROM approval WHERE activeindex='y';";
 $result=mysqli_query($con,$query)or die(mysqli_error($con));
?>
<p id="para" style="position:relative; left:480px; font-weight:bold;">____U P D A T E   G A T E P A S S___</p>
         <form method="POST" action="update_gatepass.php">
                <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                <tr class="bg-warning text-center" style="color:white;">
                    <th>Userid</th>
                    <th>Destinationid</th>
                    <th>Sourceid</th>
                    <th>Approver</th>
                    <th>Material</th>
                    <th>Quantity</th>
                    <th>Unit</th>
                    <th>Vehicleid</th>
                    <th>Courier Service</th>
                    <th>Courier Contact No</th>
                    <th>Courier Employee</th>
                    <th>Employee Contact No</th>
                    <th>Gpid</th>
                    <th>Action</th>
                </tr>

                <?php
                if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                ?>

                <tr class="text-center">
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['m_did']; ?></td>
                    <td><?php echo $row['m_sid']; ?></td>
                    <td><?php echo $row['approver']; ?></td>
                    <td><?php echo $row['material']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['unit']; ?></td>
                    <td><?php echo $row['m_tid']; ?></td>
                    <td><?php echo $row['courierservice']; ?></td>
                    <td><?php echo $row['c_contactno']; ?></td>
                    <td><?php echo $row['courieremp_pno']; ?></td>
                    <td><?php echo $row['e_contactno']; ?></td>
                    <td><?php echo $row['gpid']; ?></td>
                    <td>
                        <button type="submit" value="<?php echo $row['gid']; ?>" class= "btn btn-outline-info"  name="update">APPROVE</button>
                    </td>
                </tr>
                <?php
                }
            }
            ?>

        </table>
        </div>
        </form>
