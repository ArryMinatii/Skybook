<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Records - skybook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-insert">
<?php include 'components/navbar.php'; ?>

<section class="page-header">
    <h1><i class="fa-solid fa-circle-plus text-primary"></i> Insert Data</h1>
    <p>Add new passenger, booking, flight, or agency records to the database.</p>
</section>

<section class="form-grid">
    <!-- Passenger Card -->
    <div class="form-card">
        <h2><i class="fa-solid fa-user-plus text-primary"></i> Passenger Table</h2>
        <form action="php/insert_passenger.php" method="POST">
            <input type="text" name="pid" placeholder="Passenger ID (e.g. P101)" required>
            <input type="text" name="pname" placeholder="Passenger Name" required>
            <input type="text" name="pgender" placeholder="Gender (Male/Female)" required>
            <input type="text" name="pcity" placeholder="Passenger City" required>
            <button type="submit">
                <i class="fa-solid fa-plus-circle"></i> Insert Passenger
            </button>
        </form>
    </div>

    <!-- Booking Card -->
    <div class="form-card">
        <h2><i class="fa-solid fa-ticket text-primary"></i> Booking Table</h2>
        <form action="php/insert_booking.php" method="POST">
            <input type="text" name="pid" placeholder="Passenger ID" required>
            <input type="text" name="aid" placeholder="Agency ID" required>
            <input type="text" name="fid" placeholder="Flight ID" required>
            <input type="date" name="booking_date" required>
            <button type="submit">
                <i class="fa-solid fa-ticket"></i> Create Booking
            </button>
        </form>
    </div>

    <!-- Flight Card -->
    <div class="form-card">
        <h2><i class="fa-solid fa-plane text-primary"></i> Flight Table</h2>
        <form action="php/insert_flight.php" method="POST">
            <input type="text" name="fid" placeholder="Flight ID (e.g. F101)" required>
            <input type="date" name="fdate" required>
            <input type="time" name="departure_time" required>
            <input type="text" name="src" placeholder="Source City" required>
            <input type="text" name="dest" placeholder="Destination City" required>
            <button type="submit">
                <i class="fa-solid fa-plane"></i> Insert Flight
            </button>
        </form>
    </div>

    <!-- Agency Card -->
    <div class="form-card">
        <h2><i class="fa-solid fa-building-columns text-primary"></i> Agency Table</h2>
        <form action="php/insert_agency.php" method="POST">
            <input type="text" name="aid" placeholder="Agency ID (e.g. A101)" required>
            <input type="text" name="aname" placeholder="Agency Name" required>
            <input type="text" name="acity" placeholder="Agency City" required>
            <button type="submit">
                <i class="fa-solid fa-plus-circle"></i> Insert Agency
            </button>
        </form>
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
