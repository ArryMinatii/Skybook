<?php

include("db_connect.php");

$table = $_GET['table'];

if($table == "passenger"){

$sql = "CREATE TABLE IF NOT EXISTS Passenger(
    pid VARCHAR(10) PRIMARY KEY,
    pname VARCHAR(50) NOT NULL,
    pgender VARCHAR(5) NOT NULL,
    pcity VARCHAR(50) NOT NULL
)";

}

elseif($table == "agency"){

$sql = "CREATE TABLE IF NOT EXISTS Agency(
    aid VARCHAR(10) PRIMARY KEY,
    aname VARCHAR(50) NOT NULL,
    acity VARCHAR(50) NOT NULL
)";

}

elseif($table == "flight"){

$sql = "CREATE TABLE IF NOT EXISTS Flight(
    fid VARCHAR(10) PRIMARY KEY,
    fdate DATE NOT NULL,
    departure_time TIME NOT NULL,
    src VARCHAR(50) NOT NULL,
    dest VARCHAR(50) NOT NULL
)";

}

elseif($table == "booking"){

$sql = "CREATE TABLE IF NOT EXISTS Booking(
    pid VARCHAR(10),
    aid VARCHAR(10),
    fid VARCHAR(10),
    booking_date DATE NOT NULL,

    FOREIGN KEY(pid) REFERENCES Passenger(pid),
    FOREIGN KEY(aid) REFERENCES Agency(aid),
    FOREIGN KEY(fid) REFERENCES Flight(fid)
)";

}

if(mysqli_query($conn,$sql)){
    echo "<script>
    alert('Table Created Successfully');
    window.location='../create-table.php';
    </script>";
}
else{
    echo mysqli_error($conn);
}

?>