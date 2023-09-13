<?php

require_once "../connect.php";


$success = ""; // Initialize the success message variable
$error = "";   // Initialize the error message variable

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password= trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    IF($query = $conn->prepare("SELECT * FROM admin_users WHERE email = ?")){
        $error = '';

        //Bind parameters (s = string, i = int, b = blob, etc), the username is string so we use "s"

        $query->bind_param('s', $email);
        $query->execute();

        //store the result , we then check if account exits in DB

        $query->store_result();
        if ($query->num_rows > 0) {
            $error .= '<p class="error"> The email address already exists.</p>';

        } else{
            // validate the password

            if (strlen($password ) < 6) {
                $error .= '<p class="error">Password must have atleast 6 characters.</p>';

            }

            // validate confirm passowrd

            if (empty($confirm_password)){
                $error .= '<p class ="error">Please confirm password.</p>';

            } else {
                if (empty($error) && ($password != $confirm_password)) {
                    $error .= '<p class = "error">Password did not match.</p>';
                }
            }

            if (empty($error) ){
                $insertQuery = $conn->prepare("INSERT INTO admin_users (username, email, password_hash) VALUES (?, ?, ?);");
                $insertQuery->bind_param("sss", $username, $email, $password_hash);

                $result = $insertQuery->execute();
                if ($result) {
                    $error .= '<div class="alert alert-primary" role="alert">
                                Account Created Successfully! <a href="index.php" class="alert-link">Login here</a>
                                </div>';
                } else {
                    $error .= '<div class="alert alert-danger" role="alert">
                                    Smething went wrong
                                </div>';

                }
            }
        }
    }

    $query->close();
    $insertQuery->close();

    //close connection to DB

    mysqli_close($conn);
}


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
            background-size: cover; /* This will make the image cover the entire window */
            background-position: center; /* This will center the image in the window */
            background-attachment: fixed; /* This will prevent the image from scrolling with the content */
            height: 100vh; /* Set the height to 100% of the viewport height */
        }

</style>
<body>



<div class="container-fluid">
    <div class="row">
    <div class="container-fluid d-flex justify-content-center align-items-center p-5 col-md-12">
    <div class="bg-light text-black p-5 rounded shadow-lg col-md-7">
      <h1 class="text-center " style="font-size:30px;"><i class="bi bi-person-plus-fill" style="font-size: larger;"></i> Create Admin</h1>
      <hr>
      
     <div class="p-3 mt-4 container fw-bold shadow justify-content-right" style="background-color: bisque;">
     <form method="POST" action="" class="" >

     <?php echo $success; ?>
     
     <?php echo $error; ?>

            <div class="mb-3">
          
                <label for="first_name" class="form-label">Enter Username</label>
                <input type="text" class="form-control form-control-lg" id="username" name="username" required>
              
            </div>
            <div class="mb-3">
    <label for="email" class="form-label">Enter Email</label>
    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
</div>
            <div class="mb-3">
    <label for="password" class="form-label">Enter Password</label>
    <div class="input-group">
        <input type="password" class="form-control form-control-lg" id="password" name="password" required>
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="bi bi-eye" id="eyeIcon"></i>
        </button>
    </div>
</div>

<div class="mb-3">
    <label for="confirm_password" class="form-label">Verify Password</label>
    <div class="input-group">
        <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password" required>
        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="bi bi-eye" id="eyeIcon"></i>
        </button>
    </div>
</div>
            <input type="submit" id="submitButton" name="submit" value="Create" class="btn btn-dark text-white p-3 w-100 text-100 rounded submitMessageButton " >
              <span id="loadingIcon" style="display: none;">
                <i class="fas fa-circle-notch fa-spin"></i>
              </span>
        
          </form>
          
         

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