<?php

include("db_connect.php");

$fid = $_POST['fid'];

$sql = "DELETE FROM Booking
        WHERE fid='$fid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Booking Deleted Successfully');
    window.location='../delete.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>