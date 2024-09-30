<?php
// Include the header and database connection
include 'header.php';
include 'db_connect.php';

// Get the logged-in user's ID from the session
$user_id = $_SESSION['user_id'];

// Fetch total balance from the 'accounts' table using a prepared statement
$sql_balance = "SELECT balance FROM accounts WHERE user_id = ?";
$stmt_balance = $conn->prepare($sql_balance);
$stmt_balance->bind_param("i", $user_id);
$stmt_balance->execute();
$result_balance = $stmt_balance->get_result();

echo '<h1>Overview</h1>';

if ($result_balance->num_rows > 0) {
    $row_balance = $result_balance->fetch_assoc();
    echo "<p>Total Balance: $" . $row_balance['balance'] . "</p>";
} else {
    echo "<p>No balance information available.</p>";
}

// Fetch recent transactions from the 'transactions' table using a prepared statement
$sql_transactions = "SELECT date, amount, type FROM transactions WHERE user_id = ? ORDER BY date DESC LIMIT 5";
$stmt_transactions = $conn->prepare($sql_transactions);
$stmt_transactions->bind_param("i", $user_id);
$stmt_transactions->execute();
$result_transactions = $stmt_transactions->get_result();

echo '<h2>Recent Transactions</h2>';
if ($result_transactions->num_rows > 0) {
    while ($row = $result_transactions->fetch_assoc()) {
        echo "<p>Date: " . $row['date'] . " | Amount: $" . $row['amount'] . " | Type: " . $row['type'] . "</p>";
    }
} else {
    echo "<p>No recent transactions available.</p>";
}

// Close the database connection and statements
$stmt_balance->close();
$stmt_transactions->close();
$conn->close();

echo '</main>'; // Close the main tag