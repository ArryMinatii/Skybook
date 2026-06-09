<?php
include("php/db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - skybook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="page-admin">
<?php include 'components/navbar.php'; ?>

<section class="page-header">
    <h1><i class="fa-solid fa-gauge-high text-primary"></i> Admin Dashboard</h1>
    <p>View all skybook database records from a single administrative command center.</p>
</section>

<?php
// Calculate statistics dynamically
$passengers_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Passenger"));
$agencies_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Agency"));
$flights_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Flight"));
$bookings_count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM Booking"));
?>

<section class="admin-stats-grid">
    <div class="stat-widget purple">
        <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
        <div class="stat-info">
            <h3><?php echo $passengers_count; ?></h3>
            <p>Active Passengers</p>
        </div>
    </div>
    <div class="stat-widget pink">
        <div class="stat-icon"><i class="fa-solid fa-building-columns"></i></div>
        <div class="stat-info">
            <h3><?php echo $agencies_count; ?></h3>
            <p>Travel Agencies</p>
        </div>
    </div>
    <div class="stat-widget green">
        <div class="stat-icon"><i class="fa-solid fa-plane"></i></div>
        <div class="stat-info">
            <h3><?php echo $flights_count; ?></h3>
            <p>Flights Scheduled</p>
        </div>
    </div>
    <div class="stat-widget orange">
        <div class="stat-icon"><i class="fa-solid fa-ticket"></i></div>
        <div class="stat-info">
            <h3><?php echo $bookings_count; ?></h3>
            <p>Total Bookings</p>
        </div>
    </div>
</section>

<div class="table-grid">
    <!-- PASSENGERS -->
    <div class="table-card passenger-card">
        <h2><i class="fa-solid fa-users text-primary"></i> Passengers</h2>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM Passenger");
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>".htmlspecialchars($row['pid'])."</td>
                        <td>".htmlspecialchars($row['pname'])."</td>
                        <td>".htmlspecialchars($row['pgender'])."</td>
                        <td>".htmlspecialchars($row['pcity'])."</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- AGENCIES -->
    <div class="table-card agency-card">
        <h2><i class="fa-solid fa-building-columns text-pink"></i> Agencies</h2>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM Agency");
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>".htmlspecialchars($row['aid'])."</td>
                        <td>".htmlspecialchars($row['aname'])."</td>
                        <td>".htmlspecialchars($row['acity'])."</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- FLIGHTS -->
    <div class="table-card flight-card">
        <h2><i class="fa-solid fa-plane text-success"></i> Flights</h2>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM Flight");
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Source</th>
                    <th>Destination</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>".htmlspecialchars($row['fid'])."</td>
                        <td>".htmlspecialchars($row['fdate'])."</td>
                        <td>".htmlspecialchars($row['departure_time'])."</td>
                        <td>".htmlspecialchars($row['src'])."</td>
                        <td>".htmlspecialchars($row['dest'])."</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- BOOKINGS -->
    <div class="table-card booking-card">
        <h2><i class="fa-solid fa-ticket text-warning"></i> Bookings</h2>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM Booking");
        ?>
        <table>
            <thead>
                <tr>
                    <th>Passenger ID</th>
                    <th>Agency ID</th>
                    <th>Flight ID</th>
                    <th>Booking Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)) {
                    echo "
                    <tr>
                        <td>".htmlspecialchars($row['pid'])."</td>
                        <td>".htmlspecialchars($row['aid'])."</td>
                        <td>".htmlspecialchars($row['fid'])."</td>
                        <td>".htmlspecialchars($row['booking_date'])."</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'components/footer.php'; ?>
</body>
</html>