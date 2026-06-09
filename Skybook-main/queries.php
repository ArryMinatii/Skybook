<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Dashboard - skybook</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-query">
<?php include 'components/navbar.php'; ?>

<!-- HERO -->
<section class="query-hero">
    <div class="query-hero-content">
        <span class="query-tag">skybook sql dashboard</span>
        <h1>Interactive Query Command Center</h1>
        <p>Run advanced airline database queries and analyze airline DBMS data with visual feedback.</p>
    </div>
</section>

<!-- FILTERS -->
<section class="filter-section">
    <button class="filter-btn active" onclick="filterQueries('All', this)"><i class="fa-solid fa-layer-group me-1"></i> All</button>
    <button class="filter-btn" onclick="filterQueries('Flight', this)"><i class="fa-solid fa-plane me-1"></i> Flights</button>
    <button class="filter-btn" onclick="filterQueries('Passenger', this)"><i class="fa-solid fa-user me-1"></i> Passengers</button>
    <button class="filter-btn" onclick="filterQueries('Agency', this)"><i class="fa-solid fa-building-columns me-1"></i> Agencies</button>
    <button class="filter-btn" onclick="filterQueries('Booking', this)"><i class="fa-solid fa-ticket me-1"></i> Bookings</button>
</section>

<!-- QUERY GRID -->
<section class="dynamic-query-grid query-grid" id="queryContainer"></section>

<!-- ADVANCED RESULT MODAL -->
<div class="advanced-modal" id="queryModal">
    <div class="advanced-modal-content">
        <span class="close-modal" onclick="closeModal()"><i class="fa-solid fa-circle-xmark"></i></span>
        <div class="modal-top">
            <h2 id="modalTitle">Query Results</h2>
            <span class="live-badge"><i class="fa-solid fa-circle-dot fa-fade me-1 text-success"></i> Live Result</span>
        </div>
        <div class="sql-preview">
            <code id="modalSQL"></code>
        </div>
        <div class="result-table">
            <table id="resultTable" class="table table-hover"></table>
        </div>
    </div>
</div>

<script src="js/queries-data.js"></script>
<script src="js/query-dashboard.js"></script>

<!-- Filter JavaScript Helper -->
<script>
function filterQueries(category, btnElement) {
    // Update active button styling
    const buttons = document.querySelectorAll('.filter-btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    btnElement.classList.add('active');

    // Run existing filter logic (query-dashboard.js handles rendering based on the category)
    if (typeof renderQueries === 'function') {
        renderQueries(category);
    }
}
</script>

<?php include 'components/footer.php'; ?>
</body>
</html>
