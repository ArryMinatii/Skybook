<?php

include("db_connect.php");

$pid = $_POST['pid'];
$pname = $_POST['pname'];
$pgender = $_POST['pgender'];
$pcity = $_POST['pcity'];

$sql = "INSERT INTO Passenger
(pid,pname,pgender,pcity)
VALUES
('$pid','$pname','$pgender','$pcity')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Passenger Inserted Successfully');
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