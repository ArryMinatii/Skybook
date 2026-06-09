<?php

include("db_connect.php");

$aid = $_POST['aid'];
$aname = $_POST['aname'];
$acity = $_POST['acity'];

$sql = "UPDATE Agency
SET
aname='$aname',
acity='$acity'
WHERE aid='$aid'";

if(mysqli_query($conn,$sql))
{
    echo "<script>
    alert('Agency Updated Successfully');
    window.location='../update.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}

?>