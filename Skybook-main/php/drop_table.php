<?php

include("db_connect.php");

$table = $_POST['table'];

/* Allow only project tables */

$allowed_tables = [
    "Passenger",
    "Agency",
    "Flight",
    "Booking"
];

if(!in_array($table, $allowed_tables))
{
    die("Invalid Table Name");
}

/* Disable foreign key checks */

mysqli_query(
$conn,
"SET FOREIGN_KEY_CHECKS = 0"
);

/* Drop table */

$sql = "DROP TABLE IF EXISTS $table";

$result = mysqli_query(
$conn,
$sql
);

/* Enable foreign key checks again */

mysqli_query(
$conn,
"SET FOREIGN_KEY_CHECKS = 1"
);

if($result)
{
    echo "<script>
    alert('$table Table Dropped Successfully');
    window.location='../delete.php';
    </script>";
}
else
{
    echo "<script>
    alert('Drop Table Failed');
    window.location='../delete.php';
    </script>";
}

?>