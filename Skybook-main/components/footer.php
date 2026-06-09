<footer class="footer">
    <!-- Subtle airplane graphic decorative floating in background -->
    <div class="footer-decoration">
        <i class="fa-solid fa-plane"></i>
    </div>
    
    <div class="container">
        <div class="row g-4">
            <!-- Column 1: Brand & Logo -->
            <div class="col-lg-3 col-md-6">
                <a href="index.php" class="footer-logo text-decoration-none">
                    <i class="fa-solid fa-plane"></i> <span>skybook</span>
                </a>
                <p class="text-muted-light small">
                    Modern Airline Booking & DBMS Management System designed for premium flight operations and interactive SQL management.
                </p>
                <div class="footer-social-icons mt-4">
                    <a href="#" class="social-icon" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" class="social-icon" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-icon" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Column 2: Quick Links -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title position-relative pb-2 mb-4">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="index.php"><i class="fa-solid fa-chevron-right me-2"></i>Home</a></li>
                    <li><a href="create-table.php"><i class="fa-solid fa-chevron-right me-2"></i>Create Tables</a></li>
                    <li><a href="insert.php"><i class="fa-solid fa-chevron-right me-2"></i>Insert Records</a></li>
                    <li><a href="queries.php"><i class="fa-solid fa-chevron-right me-2"></i>SQL Queries</a></li>
                    <li><a href="login.php"><i class="fa-solid fa-chevron-right me-2"></i>Admin Login</a></li>
                </ul>
            </div>

            <!-- Column 3: System Features -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title position-relative pb-2 mb-4">System Features</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#"><i class="fa-solid fa-chevron-right me-2"></i>Airline Booking</a></li>
                    <li><a href="queries.php"><i class="fa-solid fa-chevron-right me-2"></i>Query Dashboard</a></li>
                    <li><a href="create-table.php"><i class="fa-solid fa-chevron-right me-2"></i>Database Management</a></li>
                    <li><a href="#"><i class="fa-solid fa-chevron-right me-2"></i>Responsive UI</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact Information -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title position-relative pb-2 mb-4">Contact Info</h5>
                <ul class="list-unstyled footer-contact-info">
                    <li class="d-flex align-items-start mb-3">
                        <i class="fa-solid fa-location-dot mt-1 text-accent me-3"></i>
                        <span>SIRT College, Bhopal</span>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="fa-solid fa-phone mt-1 text-accent me-3"></i>
                        <span>+91 9897551411</span>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="fa-solid fa-envelope mt-1 text-accent me-3"></i>
                        <a href="mailto:skybook@sirt.edu" class="text-white text-decoration-none">skybook@sirt.edu</a>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <i class="fa-solid fa-clock mt-1 text-accent me-3"></i>
                        <span>Available 24×7</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <hr class="footer-divider my-4">
        
        <!-- Bottom copyright section -->
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                <p class="small text-muted-light mb-0">&copy; 2026 skybook Airline DBMS Project. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="small text-muted-light mb-0">Designed by <span class="fw-bold text-accent">Aryan Chauhan</span></p>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to Top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
</footer>

<!-- Bootstrap 5 JavaScript Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Back to Top Smooth Scroll Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    const backToTopBtn = document.getElementById("backToTop");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.add("show");
        } else {
            backToTopBtn.classList.remove("show");
        }
    });
    backToTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});
</script>