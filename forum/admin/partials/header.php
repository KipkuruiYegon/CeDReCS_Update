<?

// Start or resume the session
session_start();

// Check if the user is not logged in, then redirect to the login page
if (!isset($_SESSION["admin_usersid"]) || empty($_SESSION["admin_usersid"])) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin - FORUM</title>
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

  .adminnavbarlist a:hover {
    background-color: blue;
    border-radius: 10px;
  }

  .navbar {
    display: flex;
  }

  .nav-link {
    text-decoration: none;
    color: #000;
    /* Set the default color for links */
    margin-right: 30px;
  }

  /* Style for the active link */
  .nav-link.active {
    background-color: blue;
    /* Set the background color to blue */
    border-radius: 10px;
    /* Apply rounded corners */
    color: white !important;
    /* Set the font color to white */

  }

  


</style>
<body>

<nav class="navbar navbar-expand-lg  border-bottom bg-light" style="background-image:url(../../assets/images/signalshot.png);">
    <div class="container-fluid ">
    <a class="navbar-brand display text-white  fw-bold col-lg-3 rounded text-black" style="font-size: 27px;background-image:url(../../assets/images/signalshot.png);" href="">
    <img src="../../assets/images/admin.jpg" alt="Avatar Logo" style="width: 59px; height: 56px; border-radius: 50%;" class="rounded-circle img-fluid">
    Admin<span class="fw-bold" style="font-family: Fugit;"> - <?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : ""; ?>, Welcome
</span>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" style="background-color: #43B929;">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
         
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0 adminnavbarlist">
    <li class="nav-item">
        <a class="nav-link text-white p-3 me-3 fw-bold <?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>" href="./dashboard.php">Dashboard <i class="bi bi-speedometer"></i></a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-white p-3 fw-bold <?php echo basename($_SERVER['PHP_SELF']) == 'received_reports.php' ? 'active' : ''; ?>" href="./received_reports.php">Received   <i class="bi bi-arrow-left-right"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white p-3 fw-bold <?php echo basename($_SERVER['PHP_SELF']) == 'published_reports.php' ? 'active' : ''; ?>" href="./published_reports.php">Published    <i class="bi bi-ubuntu"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white p-3 fw-bold <?php echo basename($_SERVER['PHP_SELF']) == '' ? 'active' : ''; ?>" href="./contacts.php">Contacts abbr<span class="badge text-bg-secondary"><i class="bi bi-person-gear"></i></span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-white p-3 fw-bold <?php echo basename($_SERVER['PHP_SELF']) == 'settings.php' ? 'active' : ''; ?>" href="./settings.php">Settings <span class="badge text-bg-secondary"><i class="bi bi-person-gear"></i></span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link text-white p-3 fw-bold rounded" style="background-color: #43B929;" href="logout.php">Log Out <i class="bi bi-box-arrow-left"></i></a>
    </li>
</ul>

           
        </div>
        
    </div>
    
</nav>

