<?php
session_start(); // Start the session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'user_dashboard'); // Adjust with your database credentials

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve and sanitize form data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // Password to be verified

    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_level'] = $user['level'];

            // Check if session variables are set
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        // Display an image with custom styles and a message
        echo '<div style="text-align:center; margin-top:50px;">';
        echo  '<img src="./img/404.png" alt="Connection Failed" style="width:300px; height:auto;" />';
        exit();
    }

    $stmt->close();
    $conn->close();
}
