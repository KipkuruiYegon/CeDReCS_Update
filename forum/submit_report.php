<?php

include("connect.php");

// Initialize variables for messages
$success_message = "";
$error_message = "";

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
        $success_message = "Report Form submitted successfully.";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>

<!-- Display the Bootstrap alert messages -->
<!DOCTYPE html>
<html>
<head>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <!-- Success alert -->
        <?php if ($success_message !== ""): ?>
            <div class="alert alert-success">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <!-- Error alert -->
        <?php if ($error_message !== ""): ?>
            <div class="alert alert-danger">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>

        <!-- Your form here -->
        <!-- ... -->

    </div>

     <!-- Include Bootstrap JS (optional, for certain features) -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
