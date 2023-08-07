<?php
if (isset($_POST['report_id'])) {
    $report_id = $_POST['report_id'];

    // Connect to the database
    include("../connect.php");

    // Update the 'published' column in the database to 1 for the provided report ID
    $sql = "UPDATE incident_reports SET published = 1 WHERE id = $report_id";
    if ($conn->query($sql) === TRUE) {
        echo "Report published successfully";
    } else {
        echo "Error publishing report: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Report ID not provided.";
}
?>
