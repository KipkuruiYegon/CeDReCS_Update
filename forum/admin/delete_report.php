<?php
// delete_report.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the report_id is provided in the POST request
  if (isset($_POST['report_id'])) {
    $report_id = $_POST['report_id'];

    // Connect to the database
    include("../connect.php");

    // Prepare and execute the DELETE query
    $sql = "DELETE FROM incident_reports WHERE id = $report_id";
    if ($conn->query($sql) === TRUE) {
      // Report deleted successfully
      $successMessage = "Report deleted successfully.";

      // Close the database connection
      $conn->close();

      // Redirect back to view_report_details.php with success message
      header("Location: view_report_details.php?id=$report_id&successMessage=$successMessage");
      exit;
    } else {
      // Error deleting the report
      echo "Error deleting report: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
  } else {
    // If report_id is not provided in the POST request
    echo "No report ID provided.";
  }
}
?>
