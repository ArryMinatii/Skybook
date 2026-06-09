<?php

include("db_connect.php");

$fid = $_POST['fid'];
$fdate = $_POST['fdate'];
$departure_time = $_POST['departure_time'];
$src = $_POST['src'];
$dest = $_POST['dest'];

$sql = "UPDATE Flight
SET
fdate='$fdate',
departure_time='$departure_time',
src='$src',
dest='$dest'
WHERE fid='$fid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Flight Updated Successfully');
    window.location='../update.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>