<?php

include("db_connect.php");

$pid = $_POST['pid'];
$aid = $_POST['aid'];
$fid = $_POST['fid'];
$booking_date = $_POST['booking_date'];

$sql = "UPDATE Booking
SET
aid='$aid',
fid='$fid',
booking_date='$booking_date'
WHERE pid='$pid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Booking Updated Successfully');
    window.location='../update.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>