<?php

include("db_connect.php");

$pid = $_POST['pid'];

$sql = "DELETE FROM Passenger
        WHERE pid='$pid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Passenger Deleted Successfully');
    window.location='../delete.php';
    </script>";
}
else
{
    echo "<script>
    alert('Delete Failed');
    window.location='../delete.php';
    </script>";
}

?>