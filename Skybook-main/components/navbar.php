<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <i class="fa-solid fa-plane"></i>
            <span>skybook</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'create-table.php') ? 'active' : ''; ?>" href="create-table.php"><i class="fa-solid fa-table me-1"></i> Create Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'insert.php') ? 'active' : ''; ?>" href="insert.php"><i class="fa-solid fa-circle-plus me-1"></i> Insert</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'update.php') ? 'active' : ''; ?>" href="update.php"><i class="fa-solid fa-pen-to-square me-1"></i> Update</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'delete.php') ? 'active' : ''; ?>" href="delete.php"><i class="fa-solid fa-trash-can me-1"></i> Delete</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'queries.php') ? 'active' : ''; ?>" href="queries.php"><i class="fa-solid fa-terminal me-1"></i> Queries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'login.php') ? 'active' : ''; ?>" href="login.php"><i class="fa-solid fa-lock me-1"></i> Admin Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
