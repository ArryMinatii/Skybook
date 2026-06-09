<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skybook - Flight Booking & Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="page-home">

<!-- PAGE LOADER -->
<div class="loader">
    <div class="plane-loader"><i class="fa-solid fa-plane-up text-primary"></i></div>
    <h2>Preparing Your Flight Experience...</h2>
</div>

<?php include 'components/navbar.php'; ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-content">
        <span class="tag">Modern Airline DBMS Portal</span>
        <h1>Modern Airline <br>Control Center</h1>
        <p>
            skybook combines a premium airline booking experience with a powerful, real-time database management system. Access flights, bookings, agencies, and passengers with ease.
        </p>
        <div class="hero-buttons">
            <a href="insert.php" class="primary-btn">
                <i class="fa-solid fa-plane-departure"></i> Start Journey
            </a>
            <a href="queries.php" class="secondary-btn">
                <i class="fa-solid fa-code"></i> Run Queries
            </a>
        </div>
    </div>

    <div class="hero-image">
        <picture>
            <source srcset="image/photo-1529074963764-98f45c47344b.avif" type="image/avif">
            <img 
                src="image/photo-1529074963764-98f45c47344b.avif" 
                alt="Airplane flying through beautiful sky - skybook Flight Booking System"
                class="hero-img"
                loading="eager"
                onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'hero-img-fallback\'><i class=\'fa-solid fa-plane-up\'></i><p>skybook</p></div>';"
            >
        </picture>
    </div>
</section>

<!-- POPULAR DESTINATIONS -->
<section class="routes-section">
    <div class="section-title">
        <span>Popular Destinations</span>
        <h2>Featured Flight Routes</h2>
    </div>

    <div class="routes-grid">
        <div class="route-card">
            <div class="route-top"><i class="fa-solid fa-plane-departure"></i></div>
            <h3>Bhopal &rarr; Chennai</h3>
            <p>Premium airline route with comfortable travel experience and modern aircraft servicing.</p>
            <span class="price">&nbsp;&nbsp;₹4,500</span>
        </div>

        <div class="route-card">
            <div class="route-top"><i class="fa-solid fa-plane text-info"></i></div>
            <h3>Delhi &rarr; Mumbai</h3>
            <p>Fast and modern flight routes with premium service, in-flight dining, and custom amenities.</p>
            <span class="price">&nbsp;&nbsp;₹6,200</span>
        </div>

        <div class="route-card">
            <div class="route-top"><i class="fa-solid fa-plane-arrival text-warning"></i></div>
            <h3>Chennai &rarr; New Delhi</h3>
            <p>Interactive airline management and smooth booking experience with our top partner carriers.</p>
            <span class="price">&nbsp;&nbsp;₹5,100</span>
        </div>
    </div>
</section>

<!-- SERVICES / FEATURES -->
<section class="services-section">
    <div class="section-title">
        <span>skybook features</span>
        <h2>Premium Airline Services</h2>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon"><i class="fa-solid fa-database"></i></div>
            <h3>Database Management</h3>
            <p>Effortlessly organize passenger directories, flight schedules, and travel agent registries in one central database.</p>
        </div>

        <div class="service-card">
            <div class="service-icon"><i class="fa-solid fa-bolt"></i></div>
            <h3>Fast Query Execution</h3>
            <p>Accelerate system reporting with optimized queries, providing instantaneous feedback on bookings and capacity audits.</p>
        </div>

        <div class="service-card">
            <div class="service-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
            <h3>Responsive Platform</h3>
            <p>Manage airline booking systems on any desktop, tablet, or smartphone device with unified viewports.</p>
        </div>
    </div>
</section>

<!-- DASHBOARD PREVIEW -->
<section class="dashboard-preview">
    <div class="dashboard-left">
        <span>skybook analytics</span>
        <h2>Futuristic Airline Dashboard</h2>
        <p>
            Monitor real-time flight booking details, passenger flow metrics, and agency operations through our interactive analytical charts. Our graphical UI allows database administrators to inspect metrics instantly.
        </p>
        <div class="dashboard-buttons">
            <a href="queries.php"><i class="fa-solid fa-chart-line me-1"></i> Explore Queries</a>
            <a href="insert.php"><i class="fa-solid fa-folder-plus me-1"></i> Manage Records</a>
        </div>
    </div>

    <div class="dashboard-ui">
        <div class="dashboard-top">
            <h3>Flight Analytics</h3>
            <span class="live-dot">LIVE</span>
        </div>

        <div class="analytics-grid">
            <div class="analytics-card">
                <h2>10+</h2>
                <p>Available Flights</p>
            </div>
            <div class="analytics-card">
                <h2>30+</h2>
                <p>SQL Dashboards</p>
            </div>
            <div class="analytics-card">
                <h2>4</h2>
                <p>Entity Tables</p>
            </div>
            <div class="analytics-card">
                <h2>99.9%</h2>
                <p>System Uptime</p>
            </div>
        </div>

        <div class="dashboard-chart">
            <div class="chart-bar"></div>
            <div class="chart-bar bar2"></div>
            <div class="chart-bar bar3"></div>
            <div class="chart-bar bar4"></div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonial-section">
    <div class="section-title">
        <span>User Experience</span>
        <h2>What Users Say</h2>
    </div>

    <div class="testimonial-grid">
        <div class="testimonial-card">
            <p>&ldquo;skybook provides one of the most modern DBMS airline interfaces I have seen in academic projects.&rdquo;</p>
            <h4>&mdash; Faculty Review</h4>
        </div>

        <div class="testimonial-card">
            <p>&ldquo;The animated query dashboard makes SQL learning interactive and visually impressive.&rdquo;</p>
            <h4>&mdash; Student Feedback</h4>
        </div>

        <div class="testimonial-card">
            <p>&ldquo;Professional UI with responsive design and futuristic airline theme.&rdquo;</p>
            <h4>&mdash; Project Evaluation</h4>
        </div>
    </div>
</section>

<!-- COUNTERS -->
<section class="counter-section">
    <div class="counter-card">
        <h2>30+</h2>
        <p>SQL Queries</p>
    </div>
    <div class="counter-card">
        <h2>4</h2>
        <p>Database Tables</p>
    </div>
    <div class="counter-card">
        <h2>10+</h2>
        <p>Flight Routes</p>
    </div>
    <div class="counter-card">
        <h2>100%</h2>
        <p>Responsive UI</p>
    </div>
</section>

<script>
    window.addEventListener('load', () => {
        document.querySelector('.loader').classList.add('hide-loader');
    });
</script>

<?php include 'components/footer.php'; ?>
</body>
</html>
