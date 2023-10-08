<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session at the very beginning
session_start();

require_once "../connect.php";

$error = '';

// Start output buffering
ob_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate if email is empty and format is valid
    if (empty($email)) {
        $error .= '<div class="alert alert-secondary" role="alert">
        Please enter email.
      </div>';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error .= '<div class="alert alert-secondary" role="alert">
        Please enter a valid email address.
      </div>';
    }

    // Validate if password is empty
    if (empty($password)) {
        $error .= '<div class="alert alert-secondary" role="alert">
        Please enter your password.
      </div>';
    }

    if (empty($error)) {
        if ($query = $conn->prepare("SELECT * FROM admin_users WHERE email = ?")) {
            $query->bind_param('s', $email);
            $query->execute();

            // Fetch the user data
            $result = $query->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                if (password_verify($password, $row['password_hash'])) {
                  $_SESSION["admin_usersid"] = $row['id'];
                  $_SESSION["admin_user"] = $row;
                  $_SESSION["username"] = $row['username'];

                  // Clean and flush the output buffer
                  ob_end_clean();
                  
                  // Redirect user to dashboard page
                  header("location: dashboard.php");
                  exit;
              } else {
                  $error .= '<p class="error text-primary">Incorrect password, try again!</p>';
              }
              
            } else {
                $error .= '<p class="error text-primary">Email address not found.</p>';
            }
        }
        $query->close();
    }

    // Close DB Connection
    mysqli_close($conn);
}

// End output buffering and display the captured output
ob_end_flush();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin - LOGIN</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">

  <link rel="icon" type="image/x-icon" href="../../assets/images/dedanlogo-removebg-preview.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/fugit" rel="stylesheet">


</head>
<style>
  @import url('https://fonts.cdnfonts.com/css/poppins');
  * {
    font-family: 'Poppins', sans-serif;
    font-size: 13px;
  }

  @import url('https://fonts.cdnfonts.com/css/fugit');

  {
    font-family: 'Fugit', sans-serif;
  }

  @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
  body {
    margin: 0;
    padding: 0;
    background-image: url('../../assets/images/nairobi.jpeg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 100vh;
  }

</style>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="container-fluid d-flex justify-content-center align-items-center p-5 col-md-12">
        <div class="bg-light text-black p-5 rounded shadow-lg col-md-5">
          <h1 class="text-center" style="font-size: 35px;"><i class="bi bi-gear-wide-connected"
              style="font-size: larger;"></i> Administrator</h1>
          <hr>
          <h1 class="bg-white mt-2 p-2 container-fluid rounded text-center shadow-sm">CeDReCS<span> - FORUM</span>
            <img src="../../assets/images/dedanlogo-removebg-preview.png" alt="Avatar Logo"
              style="width: 62px; height: 56px; border-radius: 50%;" class="rounded-circle img-fluid">
          </h1>
             <!-- Display errors -->
<div class="error-container text-center ">
    <?php echo $error; ?>
</div>
          <div class="p-3 mt-4 container fw-bold shadow justify-content-right" style="background-color: bisque;">
            <form method="POST">
              <div class="mb-3">
                <label for="login_input" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                  <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="bi bi-eye" id="eyeIcon"></i>
                  </button>
                </div>
              </div>
              <input type="submit" id="submitButton" name="submit" value="Login" class="btn btn-dark text-white p-3 w-100 text-100 rounded submitMessageButton " >
                <span id="loadingIcon" style="display: none;">
                  <i class="fas fa-circle-notch fa-spin"></i>
                </span>
            </form>
          </div>

       

        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const passwordField = document.getElementById("password");
      const eyeIcon = document.getElementById("eyeIcon");

      document.getElementById("togglePassword").addEventListener("click", function () {
        if (passwordField.type === "password") {
          passwordField.type = "text";
          eyeIcon.classList.remove("bi-eye");
          eyeIcon.classList.add("bi-eye-slash");
        } else {
          passwordField.type = "password";
          eyeIcon.classList.remove("bi-eye-slash");
          eyeIcon.classList.add("bi-eye");
        }
      });
    });
  </script>

</body>

</html>
