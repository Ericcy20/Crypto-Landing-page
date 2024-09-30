<?php
include 'db_connect.php';
include 'header.php';

// Start the session


// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}

// Get the current user's ID from the session
$user_id = $_SESSION['user_id'];

// Use prepared statements to prevent SQL injection
$sql_positions = "SELECT * FROM positions WHERE user_id = ?";
$stmt = $conn->prepare($sql_positions);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result_positions = $stmt->get_result();

?>