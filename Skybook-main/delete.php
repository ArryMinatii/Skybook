<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records - skybook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="page-delete">

<!-- MINI PAGE LOADER -->
<div class="page-loader loader">
    <span class="loader-spinner plane-loader"><i class="fa-solid fa-plane-up text-danger"></i></span>
    <h2>Processing Operations...</h2>
</div>

<?php include 'components/navbar.php'; ?>

<section class="page-header">
    <h1><i class="fa-solid fa-trash-can text-danger"></i> Delete & Drop Operations</h1>
    <p>Remove individual database records or permanently drop tables from the skybook database.</p>
</section>

<section class="delete-grid">
    <!-- Delete Passenger -->
    <div class="delete-card">
        <div class="danger-badge">Delete Record</div>
        <h2><i class="fa-solid fa-user-minus text-danger"></i> Delete Passenger</h2>
        <p>Remove passenger records using their Passenger ID.</p>
        <form action="php/delete_passenger.php" method="POST">
            <input type="text" name="pid" placeholder="Passenger ID" required>
            <button type="submit" class="delete-btn">
                <i class="fa-solid fa-trash-can"></i> Delete Passenger
            </button>
        </form>
    </div>

    <!-- Drop Passenger Table -->
    <div class="delete-card danger-card">
        <div class="danger-badge">Drop Table</div>
        <h2><i class="fa-solid fa-circle-exclamation text-danger"></i> Drop Passenger Table</h2>
        <p class="text-danger fw-semibold">Warning: This operation permanently removes the entire passenger table and all of its data.</p>
        <form action="php/drop_table.php" method="POST">
            <input type="hidden" name="table" value="Passenger">
            <button type="submit" class="drop-btn">
                <i class="fa-solid fa-triangle-exclamation"></i> Drop Table
            </button>
        </form>
    </div>

    <!-- Delete Flight -->
    <div class="delete-card">
        <div class="danger-badge">Delete Flight</div>
        <h2><i class="fa-solid fa-plane-slash text-danger"></i> Delete Flight</h2>
        <p>Remove flight records from the directory using the Flight ID.</p>
        <form action="php/delete_flight.php" method="POST">
            <input type="text" name="fid" placeholder="Flight ID" required>
            <button type="submit" class="delete-btn">
                <i class="fa-solid fa-trash-can"></i> Delete Flight
            </button>
        </form>
    </div>

    <!-- Drop Booking Table -->
    <div class="delete-card danger-card">
        <div class="danger-badge">Drop Table</div>
        <h2><i class="fa-solid fa-circle-exclamation text-danger"></i> Drop Booking Table</h2>
        <p class="text-danger fw-semibold">Warning: This operation permanently removes the entire flight booking table and all reservation records.</p>
        <form action="php/drop_table.php" method="POST">
            <input type="hidden" name="table" value="Booking">
            <button type="submit" class="drop-btn">
                <i class="fa-solid fa-triangle-exclamation"></i> Drop Table
            </button>
        </form>
    </div>

    <!-- Delete Booking -->
    <div class="delete-card">
        <div class="danger-badge">Delete Booking</div>
        <h2><i class="fa-solid fa-ticket-simple text-danger"></i> Delete Booking</h2>
        <p>Cancel and remove bookings by referencing their Flight ID.</p>
        <form action="php/delete_booking.php" method="POST">
            <input type="text" name="fid" placeholder="Flight ID" required>
            <button type="submit" class="delete-btn">
                <i class="fa-solid fa-trash-can"></i> Delete Booking
            </button>
        </form>
    </div>
</section>

<!-- TOAST -->
<div id="toast" class="toast">
    <span id="toastIcon">🗑</span>
    <p id="toastMessage">Success Message</p>
</div>

<script>
window.addEventListener("load", function () {
    const loader = document.querySelector(".page-loader");
    loader.style.opacity = "0";
    setTimeout(() => {
        loader.style.display = "none";
    }, 500);
});
</script>
<script src="js/main.js"></script>
<?php include 'components/footer.php'; ?>
</body>
</html>