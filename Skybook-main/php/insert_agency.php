<?php

include("db_connect.php");

$aid = $_POST['aid'];
$aname = $_POST['aname'];
$acity = $_POST['acity'];

$sql = "INSERT INTO Agency
(aid,aname,acity)
VALUES
('$aid','$aname','$acity')";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Agency Inserted Successfully');
    window.location='../insert.php';
    </script>";
}
else
{
    echo "<script>
    alert('Agency ID already exists!');
    window.location='../insert.php';
    </script>";
}
?>