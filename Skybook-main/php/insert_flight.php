<?php

include("db_connect.php");

$fid = $_POST['fid'];
$fdate = $_POST['fdate'];
$departure_time = $_POST['departure_time'];
$src = $_POST['src'];
$dest = $_POST['dest'];

$sql = "INSERT INTO Flight
(fid,fdate,departure_time,src,dest)
VALUES
('$fid','$fdate','$departure_time','$src','$dest')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Flight Inserted Successfully');
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