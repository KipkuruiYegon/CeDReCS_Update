<?php
// Start or resume the session
session_start();

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION["admin_usersid"]) || empty($_SESSION["admin_usersid"])) {
    header("location: index.php");
    exit;
}
// Include the header.php file
include 'partials/header.php';

require_once "../connect.php";

$success = ""; // Initialize the success message variable
$error = "";   // Initialize the error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password= trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    if ($query = $conn->prepare("SELECT * FROM admin_users WHERE email = ?")){
        $error = '';

        $query->bind_param('s', $email);
        $query->execute();

        $query->store_result();
        if ($query->num_rows > 0) {
            $error .= '<div class="alert alert-primary" role="alert">
           The Email address already exists!
            </div>';
        } else {
            if (strlen($password) < 6) {
                $error .= '<p class="error">Password must have at least 6 characters.</p>';
            }

            if (empty($confirm_password)) {
                $error .= '<p class ="error">Please confirm password.</p>';
            } else {
                if ($password != $confirm_password) {
                    $error .= '<p class = "error">Password did not match.</p>';
                }
            }

            if (empty($error)) {
                if ($insertQuery = $conn->prepare("INSERT INTO admin_users (username, email, password_hash) VALUES (?, ?, ?);")) {
                    $insertQuery->bind_param("sss", $username, $email, $password_hash);

                    $result = $insertQuery->execute();
                    if ($result) {
                        $success .= '<div class="alert alert-primary" role="alert">
                                    Account Created Successfully! <a href="index.php" class="alert-link">Login here</a>
                                    </div>';
                    } else {
                        $error .= '<div class="alert alert-danger" role="alert">
                                        Something went wrong
                                    </div>';
                    }
                    $insertQuery->close(); // Close the $insertQuery here
                } else {
                    $error .= '<div class="alert alert-danger" role="alert">
                                    Error preparing the insert statement
                                </div>';
                }
            }
        }
        $query->close(); // Close the $query here
    }
}

// ... (rest of your code)
?>
<div class="container-fluid bg-light">
    <div class="container" style="height:75vh">
        <div class="row mb-5" style="">
            <div class="col-3">
                <div class="list-group mt-3 bg-white shadow">
                    <a href="#" class="list-group-item list-group-item-action fs-5" aria-current="true"><i class="bi bi-person-check-fill" style="font-size: 2rem;"></i>  My Profile</a>
                    <a href="#" class="list-group-item list-group-item-action mt-2 fs-5"><i class="bi bi-person-fill-lock" style="font-size: 2rem;"></i>  Change Password</a>
                    <a href="#" class="list-group-item list-group-item-action mt-2 fs-5"><i class="bi bi-person-fill-add" style="font-size: 2rem;"></i>   Create Admin</a>
                    <a href="#" class="list-group-item list-group-item-action mt-2 fs-5"><i class="bi bi-megaphone-fill" style="font-size: 2rem;"></i>    Discussions</a>
                </div>
            </div>
            <div class="col-9 bg-white  mt-3 mb-2 shadow-sm">
                <div class="container ">
                    <form method="POST" class="row g-3 p-3 mb-3">
                        <h1 class="" style="font-size:30px;"><i class="bi bi-person-plus-fill" style="font-size: larger;"></i> Create Admin</h1>
                        <hr>
                        <?php echo $success; ?>
                        <?php echo $error; ?>

  <div class="col-md-6"><label for="first_name" class="form-label">Enter Username</label>
                <input type="text" class="form-control form-control-lg" id="username" name="username" required>
  </div>
  <div class="col-md-6">
  <label for="email" class="form-label">Enter Email</label>
    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
  </div>
  <div class="col-md-6">
  <label for="password" class="form-label">Enter Password</label>
    <div class="input-group">
        <input type="password" class="form-control form-control-lg" id="password" name="password" required>
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="bi bi-eye" id="eyeIcon"></i>
        </button>
    </div>
  </div>
  <div class="col-md-6">
  <label for="confirm_password" class="form-label">Verify Password</label>
    <div class="input-group">
        <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" required>
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="bi bi-eye" id="eyeIcon"></i>
        </button>
    </div>
  </div>
  
  <div class="col-4 mt-4"> <input type="submit" id="submitButton" name="submit" value="Create" class="btn btn-dark text-white p-3 w-100 text-100 rounded submitMessageButton " >
              <span id="loadingIcon" style="display: none;">
                <i class="fas fa-circle-notch fa-spin"></i>
              </span>
  </div>
</form>
    </div>
   
  </div>
    </div>
</div>
</div>
<?php
// index.php or other_php_files.php

include 'partials/footer.php';
?>
