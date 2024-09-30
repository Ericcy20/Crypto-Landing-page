<?php
include 'db_connect.php';

echo '<h1>Affiliate Program</h1>';

// Fetch referral information from the 'referrals' table
$user_id = 1; // Replace with the logged-in user's ID
$sql_referrals = "SELECT * FROM referrals WHERE referrer_id = $user_id";
$result_referrals = $conn->query($sql_referrals);

if ($result_referrals->num_rows > 0) {
    echo '<h2>Your Referrals</h2>';
    echo '<table>';
    echo '<tr><th>Referral Name</th><th>Date Joined</th><th>Status</th></tr>';
    while ($row = $result_referrals->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['referral_name'] . "</td>
                <td>" . $row['date_joined'] . "</td>
                <td>" . $row['status'] . "</td>
              </tr>";
    }
    echo '</table>';
} else {
    echo "<p>You have no referrals yet.</p>";
}

echo "<h2>Affiliate Program Details</h2>";
echo "<p>Invite your friends and earn rewards when they join and make investments!</p>";
echo "<p>Your referral link: <a href='#'>https://yourwebsite.com/referral?user=" . $user_id . "</a></p>";

// Close the database connection
$conn->close();

echo '</section></main></body></html>'; // Close the main and section tags