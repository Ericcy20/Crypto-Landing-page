<?php
include 'header.php'; // Include the navigation bar
include 'db_connect.php'; // Include the database connection

// Ensure the user is logged in by checking the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header('Location: login.php');
    exit();
}

// Get the logged-in user's ID from the session
$user_id = $_SESSION['user_id'];

echo '<h1>Transaction History</h1>';

// Fetch the transaction history from the 'transactions' table using a prepared statement
$sql_history = "SELECT date, type, amount, status FROM transactions WHERE user_id = ? ORDER BY date DESC";
$stmt_history = $conn->prepare($sql_history);
$stmt_history->bind_param("i", $user_id);
$stmt_history->execute();
$result_history = $stmt_history->get_result();

if ($result_history->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Date</th><th>Type</th><th>Amount</th><th>Status</th></tr>';
    while ($row = $result_history->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['date']) . "</td>
                <td>" . htmlspecialchars($row['type']) . "</td>
                <td>$" . htmlspecialchars($row['amount']) . "</td>
                <td>" . htmlspecialchars($row['status']) . "</td>
              </tr>";
    }
    echo '</table>';
} else {
    echo "<p>No transaction history available.</p>";
}

// Close the statement and database connection
$stmt_history->close();
$conn->close();

echo '</main>'; // Close the main tag