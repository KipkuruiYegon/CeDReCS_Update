<?php
// Include your database connection file
include("../connect.php");

// Fetch the total number of reports from the database
$sql = "SELECT COUNT(*) AS total_reports FROM incident_reports";
$result = $conn->query($sql);
$total_reports = 0; // Default value if no reports found
if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $total_reports = $row['total_reports'];
}

// Close the database connection
$conn->close();
?>