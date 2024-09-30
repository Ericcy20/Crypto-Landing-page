<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'db_connect.php';
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
// Fetch user-specific data if needed
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="./commonStyle.css">
    <link rel="stylesheet" href="./dashboard.css">
    <link rel="stylesheet" href="./script.js">
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a style="mix-blend-mode: exclusion;" href="/index.php"><img src="img/logo-white.png" alt="Logo"
                    class="logo"></a>
            <span>
                <a class="auth-btn" href="logout.php">Logout</a>
                <span>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="overview.php">Overview</a></li>
                <li><a href="positions.php">Positions</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="exchanges.php">Exchanges</a></li>
                <li><a href="plans.php">Plans</a></li>
                <li><a href="affiliate_program.php">Affiliate Program</a></li>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <a href="#">Settings</a>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="main-content">
        <!-- Toggle Button -->
        <button id="toggle-btn">☰</button>

        <header class="header">
            <h1>Exchanges</h1>
        </header>
        <section class="content">
            <!-- Your main dashboard content goes here -->
        </section>
    </main>

    <script src="script.js"></script>
    <script src="dashboard.js"></script>
</body>

</html>