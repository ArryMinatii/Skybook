<?php

include("db_connect.php");

$pid = $_POST['pid'];
$aid = $_POST['aid'];
$fid = $_POST['fid'];
$booking_date = $_POST['booking_date'];

$sql = "INSERT INTO Booking
(pid,aid,fid,booking_date)
VALUES
('$pid','$aid','$fid','$booking_date')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Booking Created Successfully');
    window.location='../insert.php';
    </script>";
}
else
{
    echo "<script>
    alert('Error: ".mysqli_error($conn)."');
    window.location='../insert.php';
    </script>";
}

?>