<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if the report_id is provided in the POST request
  if (isset($_POST['report_id'])) {
    $report_id = $_POST['report_id'];

    // Connect to the database
    include("../connect.php");

    // Prepare and execute the UPDATE query to set 'published' to 0 (unpublish)
    $sql = "UPDATE incident_reports SET published = 0 WHERE id = $report_id";
    if ($conn->query($sql) === TRUE) {
      // Report unpublished successfully
      echo "Report unpublished successfully.";
    } else {
      // Error updating the report
      echo "Error unpublishing report: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
  } else {
    // If report_id is not provided in the POST request
    echo "No report ID provided.";
  }
}
?>
