<html>
<head>
    <title>display</title>
    <style>
        body{
            background: url(bg.jpg) no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            width: 100%;
        }
        table{
            background-color: white;
        }
    </style>
</head>



<?php
include("connect.php");
error_reporting(0);
$query="SELECT * FROM pay_details";
$data = mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);

if($total !=0){
    ?>
    <h1 align="center">PayMent done By</h1>
    <table border="2" cellspacing="7">
        <tr>
        <th width="10%">NAME</th>
        <th width="5%">GENDER</th>
        <th width="10%">Pan_num</th>
        <th width="20%">ADDRESS</th>
        <th width="17%">EMAIL</th>
        <th width="5%">PINCODE</th>
        </tr><br>
    <?php
    while($result= mysqli_fetch_assoc($data)){
       echo "<tr>
              <td>".$result['name']."</td>
              <td>".$result['gender']."</td>
              <td>".$result['pan_num']."</td>
              <td>".$result['address']."</td>
              <td>".$result['email']."</td>
              <td>".$result['pincode']."</td>
            </tr>";
    }
}

?>
</table>
