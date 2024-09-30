<?php
include 'header.php'; // Include the header and navigation bar
include 'db_connect.php'; // Include the database connection

// Ensure the user is logged in by checking the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header('Location: login.php');
    exit();
}

// Get the logged-in user's ID from the session
$user_id = $_SESSION['user_id'];

echo '<h1>Exchanges</h1>';

// Fetch connected exchanges from the 'user_exchanges' table using a prepared statement
$sql_exchanges = "SELECT exchange_name, status FROM user_exchanges WHERE user_id = ?";
$stmt_exchanges = $conn->prepare($sql_exchanges);
$stmt_exchanges->bind_param("i", $user_id);
$stmt_exchanges->execute();
$result_exchanges = $stmt_exchanges->get_result();

if ($result_exchanges->num_rows > 0) {
    echo '<h2>Connected Exchanges</h2>';
    echo '<ul>';
    while ($row = $result_exchanges->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['exchange_name']) . " - Status: " . htmlspecialchars($row['status']) . "</li>";
    }
    echo '</ul>';
} else {
    echo "<p>No connected exchanges.</p>";
}

// Fetch available exchanges for connection using a prepared statement
$sql_available_exchanges = "SELECT exchange_name FROM exchanges";
$stmt_available_exchanges = $conn->prepare($sql_available_exchanges);
$stmt_available_exchanges->execute();
$result_available_exchanges = $stmt_available_exchanges->get_result();

if ($result_available_exchanges->num_rows > 0) {
    echo '<h2>Available Exchanges</h2>';
    echo '<ul>';
    while ($row = $result_available_exchanges->fetch_assoc()) {
        echo "<li>" . htmlspecialchars($row['exchange_name']) . " - <a href='#'>Connect</a></li>";
    }
    echo '</ul>';
} else {
    echo "<p>No available exchanges.</p>";
}

// Close the prepared statements and the database connection
$stmt_exchanges->close();
$stmt_available_exchanges->close();
$conn->close();

echo '</main>'; // Close the main tag