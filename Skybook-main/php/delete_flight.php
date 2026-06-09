<?php

include("db_connect.php");

$fid = $_POST['fid'];

/* First delete related bookings */

mysqli_query(
$conn,
"DELETE FROM Booking
 WHERE fid='$fid'"
);

/* Then delete flight */

$sql = "DELETE FROM Flight
        WHERE fid='$fid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Flight Deleted Successfully');
    window.location='../delete.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>