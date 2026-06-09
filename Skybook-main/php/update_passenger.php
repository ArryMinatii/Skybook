<?php

include("db_connect.php");

$pid = $_POST['pid'];
$pname = $_POST['pname'];
$pgender = $_POST['pgender'];
$pcity = $_POST['pcity'];

$sql = "UPDATE Passenger
SET
pname='$pname',
pgender='$pgender',
pcity='$pcity'
WHERE pid='$pid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Passenger Updated Successfully');
    window.location='../update.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>