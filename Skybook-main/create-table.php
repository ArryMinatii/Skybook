<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Tables - skybook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-create">
<?php include 'components/navbar.php'; ?>

<section class="page-header">
    <h1><i class="fa-solid fa-database text-primary"></i> Create Database Tables</h1>
    <p>Initialize your SQL schema tables with a single click. Review the structure below.</p>
</section>

<section class="table-grid">
    <!-- Passenger Table -->
    <div class="table-card">
        <h2><i class="fa-solid fa-users text-primary"></i> Create Passenger Table</h2>
<pre>
CREATE TABLE Passenger (
    pid VARCHAR(10) PRIMARY KEY,
    pname VARCHAR(50) NOT NULL,
    pgender VARCHAR(5) NOT NULL,
    pcity VARCHAR(50) NOT NULL
);
</pre>
        <a href="php/create_tables.php?table=passenger">
            <button><i class="fa-solid fa-gear"></i> Create Passenger Table</button>
        </a>
    </div>

    <!-- Agency Table -->
    <div class="table-card">
        <h2><i class="fa-solid fa-building-columns text-primary"></i> Create Agency Table</h2>
<pre>
CREATE TABLE Agency (
    aid VARCHAR(10) PRIMARY KEY,
    aname VARCHAR(50) NOT NULL,
    acity VARCHAR(50) NOT NULL
);
</pre>
        <a href="php/create_tables.php?table=agency">
            <button><i class="fa-solid fa-gear"></i> Create Agency Table</button>
        </a>
    </div>

    <!-- Flight Table -->
    <div class="table-card">
        <h2><i class="fa-solid fa-plane text-primary"></i> Create Flight Table</h2>
<pre>
CREATE TABLE Flight (
    fid VARCHAR(10) PRIMARY KEY,
    fdate DATE NOT NULL,
    departure_time TIME NOT NULL,
    src VARCHAR(50) NOT NULL,
    dest VARCHAR(50) NOT NULL
);
</pre>
        <a href="php/create_tables.php?table=flight">
            <button><i class="fa-solid fa-gear"></i> Create Flight Table</button>
        </a>
    </div>

    <!-- Booking Table -->
    <div class="table-card">
        <h2><i class="fa-solid fa-ticket text-primary"></i> Create Booking Table</h2>
<pre>
CREATE TABLE Booking (
    pid VARCHAR(10),
    aid VARCHAR(10),
    fid VARCHAR(10),
    booking_date DATE NOT NULL,
    FOREIGN KEY(pid) REFERENCES Passenger(pid),
    FOREIGN KEY(aid) REFERENCES Agency(aid),
    FOREIGN KEY(fid) REFERENCES Flight(fid)
);
</pre>
        <a href="php/create_tables.php?table=booking">
            <button><i class="fa-solid fa-gear"></i> Create Booking Table</button>
        </a>
    </div>
</section>

<!-- TOAST -->
<div id="toast" class="toast">
    <span id="toastIcon">✅</span>
    <p id="toastMessage">Success Message</p>
</div>

<script src="js/main.js"></script>
<?php include 'components/footer.php'; ?>
</body>
</html>
