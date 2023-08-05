<?php

include("connect.php");

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data and escape it
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $organisation = mysqli_real_escape_string($conn, $_POST['organisation']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $incident_description = mysqli_real_escape_string($conn, $_POST['incident_description']);
    $more_details = mysqli_real_escape_string($conn, $_POST['more_details']);
    $agree_terms = isset($_POST['agree_terms']) ? 1 : 0;

    // Prepare and execute the SQL query to insert the data into the table
    $sql = "INSERT INTO incident_reports (name, email, contact, organisation, category, incident_description, more_details, agree_terms)
            VALUES ('$name', '$email', '$contact', '$organisation', '$category', '$incident_description', '$more_details', '$agree_terms')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>
