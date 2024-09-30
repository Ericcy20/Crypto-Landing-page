<?php
// Start session
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Link to common styles -->
    <link rel="stylesheet" href="commonStyle.css">
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="/index.php">
                <img src="img/logo-white.png" alt="Logo" class="logo">
            </a>
            <span>
                <a class="auth-btn" href="logout.php">Logout</a>
            </span>
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
        <!-- Toggle Button for Sidebar -->
        <button id="toggle-btn">☰</button>