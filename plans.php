<?php
// Include header (contains HTML structure, session start, etc.)
include 'db_connect.php'; // Include database connection

echo '<!DOCTYPE html>';
echo '<html lang="en">';

echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Investment Plans</title>';
echo '<link rel="stylesheet" href="commonStyle.css">';
echo '<link rel="stylesheet" href="dashboard.css">';
echo '</head>';

echo '<body>';

// Sidebar
echo '<aside class="sidebar" id="sidebar">';
echo '    <div class="sidebar-header">';
echo '        <a href="/index.php"><img src="img/logo-white.png" alt="Logo" class="logo"></a>';
echo '        <span>';
echo '            <a class="auth-btn" href="logout.php">Logout</a>';
echo '        </span>';
echo '    </div>';
echo '    <nav class="sidebar-nav">';
echo '        <ul>';
echo '            <li><a href="dashboard.php">Dashboard</a></li>';
echo '            <li><a href="overview.php">Overview</a></li>';
echo '            <li><a href="positions.php">Positions</a></li>';
echo '            <li><a href="history.php">History</a></li>';
echo '            <li><a href="exchanges.php">Exchanges</a></li>';
echo '            <li><a href="plans.php">Plans</a></li>';
echo '            <li><a href="affiliate_program.php">Affiliate Program</a></li>';
echo '        </ul>';
echo '    </nav>';
echo '    <div class="sidebar-footer">';
echo '        <a href="#">Settings</a>';
echo '    </div>';
echo '</aside>';

// Main Content Area
echo '<main class="main-content">';

// Toggle Button for Sidebar (optional)
echo '<button id="toggle-btn">☰</button>';

echo '<header class="header">';
echo '<h1>Investment Plans</h1>';
echo '</header>';

echo '<section class="content">';

// Fetch and display available investment plans from the database
$sql_plans = "SELECT * FROM plans";
$result_plans = $conn->query($sql_plans);

if ($result_plans->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Plan Name</th><th>Description</th><th>Minimum Investment</th><th>ROI</th></tr>';
    while ($row = $result_plans->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['plan_name']) . "</td>
                <td>" . htmlspecialchars($row['description']) . "</td>
                <td>$" . htmlspecialchars($row['min_investment']) . "</td>
                <td>" . htmlspecialchars($row['roi']) . "%</td>
              </tr>";
    }
    echo '</table>';
} else {
    echo "<p>No investment plans available.</p>";
}

// Close the database connection
$conn->close();

echo '</section>'; // Close the section
echo '</main>'; // Close the main content area

echo '<script src="script.js"></script>'; // Include JavaScript for toggle functionality
echo '</body>';
echo '</html>';