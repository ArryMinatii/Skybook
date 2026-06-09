<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Records - skybook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-update">
<?php include 'components/navbar.php'; ?>

<section class="page-header">
    <h1><i class="fa-solid fa-pen-to-square text-primary"></i> Update Database Records</h1>
    <p>Modify existing passenger, agency, flight, and booking details.</p>
</section>

<section class="update-grid">
    <!-- Passenger Update -->
    <div class="update-card">
        <div class="card-top">
            <span><i class="fa-solid fa-user-pen"></i> Passenger Details</span>
        </div>
        <h2>Update Passenger</h2>
        <form action="php/update_passenger.php" method="POST">
            <input type="text" name="pid" placeholder="Passenger ID" required>
            <input type="text" name="pname" placeholder="New Passenger Name" required>
            <input type="text" name="pgender" placeholder="New Gender" required>
            <input type="text" name="pcity" placeholder="New City" required>
            <button type="submit">
                <i class="fa-solid fa-user-pen"></i> Update Passenger
            </button>
        </form>
    </div>

    <!-- Agency Update -->
    <div class="update-card">
        <div class="card-top">
            <span><i class="fa-solid fa-building-circle-exclamation"></i> Agency Details</span>
        </div>
        <h2>Update Agency</h2>
        <form action="php/update_agency.php" method="POST">
            <input type="text" name="aid" placeholder="Agency ID" required>
            <input type="text" name="aname" placeholder="New Agency Name" required>
            <input type="text" name="acity" placeholder="New Agency City" required>
            <button type="submit">
                <i class="fa-solid fa-building-circle-check"></i> Update Agency
            </button>
        </form>
    </div>

    <!-- Flight Update -->
    <div class="update-card">
        <div class="card-top">
            <span><i class="fa-solid fa-plane-circle-exclamation"></i> Flight Details</span>
        </div>
        <h2>Update Flight</h2>
        <form action="php/update_flight.php" method="POST">
            <input type="text" name="fid" placeholder="Flight ID" required>
            <input type="date" name="fdate" required>
            <input type="time" name="departure_time" required>
            <input type="text" name="src" placeholder="Source City" required>
            <input type="text" name="dest" placeholder="Destination City" required>
            <button type="submit">
                <i class="fa-solid fa-plane-circle-check"></i> Update Flight
            </button>
        </form>
    </div>

    <!-- Booking Update -->
    <div class="update-card">
        <div class="card-top">
            <span><i class="fa-solid fa-ticket-simple"></i> Booking Details</span>
        </div>
        <h2>Update Booking</h2>
        <form action="php/update_booking.php" method="POST">
            <input type="text" name="pid" placeholder="Passenger ID" required>
            <input type="text" name="aid" placeholder="Agency ID" required>
            <input type="text" name="fid" placeholder="Flight ID" required>
            <input type="date" name="booking_date" required>
            <button type="submit">
                <i class="fa-solid fa-circle-check"></i> Update Booking
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