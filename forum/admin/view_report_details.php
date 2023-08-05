<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin - FORUM</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="/CeDReCS_Update/css/style.css">

  <link rel="icon" type="image/x-icon" href="/CeDReCS_Update/images_assets/favicon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/fugit" rel="stylesheet">
                
    <!-- {{-- ckeditor5 --}} --> 
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script> -->
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

</style>
<body>
<nav class="navbar  navbar-expand-lg border-bottom fixed-top" style="background-color: bisque;">
    <div class="container-fluid ">
    <a class="navbar-brand display fw-bold" style="font-size: 26px;" href="">
    <img src="/CeDReCS_Update/images_assets/admin.jpg" alt="Avatar Logo" style="width: 59px; height: 56px; border-radius: 50%;" class="rounded-circle img-fluid">
    Admin<span class="fw-bold" style="font-family: Fugit;"> - CeDReCS</span>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
         
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
            <li class="nav-item">
                    <a class="nav-link text-white bg-primary p-3 fw-bold rounded me-3" style="" href="dashboard.php">Dashboard <i class="bi bi-speedometer"></i></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link text-white bg-danger p-3 fw-bold rounded " href="forum.html">Forum Page <i class="bi bi-boxes"></i></a>
            </li>
              <li class="nav-item">
                    <a class="nav-link text-dark p-3 fw-bold" href="./received_reports.php">Received <span class="badge text-bg-danger">New</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark p-3 fw-bold" href="./published_reports.php">Published<span class="badge text-bg-danger">New</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark p-3 fw-bold" href="">Contacts<span class="badge text-bg-secondary"><i class="bi bi-person-gear"></i></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark p-3 fw-bold" href="">Settings<span class="badge text-bg-secondary"><i class="bi bi-person-gear"></i></span></a>
                </li>
               
               
                <li class="nav-item">
                    <a class="nav-link text-white p-3 fw-bold rounded" style="background-color: #43B929;" href="">Log Out <i class="bi bi-box-arrow-left"></i></a>
                </li>
            </ul>
           
        </div>
        
    </div>
    
</nav>

<div class="container-fluid bg-light mb-5 mt-5" style="padding-top:50px;">
<div class="container-fluid">
  <div class="row">
  <div class="col-10">
  <?php
      // Check if the ID is provided in the URL
      if (isset($_GET['id'])) {
        $report_id = $_GET['id'];

        // Connect to the database
        include("../connect.php");

        // Fetch the report details using the provided ID
        $sql = "SELECT * FROM incident_reports WHERE id = $report_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Assuming the report details are stored in a table called 'incident_reports'
          // You can modify this based on your actual table structure
          $row = $result->fetch_assoc();
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $contact = $row['contact'];
          $organisation = $row['organisation'];
          $category = $row['category'];
          $incident_description = $row['incident_description'];
          $more_details = $row['more_details'];
          $date_created = $row['date_created'];
          $published = $row['published'];
          // Add more fields if needed

          // Format the date in a user-friendly format
          $formatted_date = date('F j, Y', strtotime($date_created));


          echo '<h2 class="text-center bg-warning shadow-sm p-2 "> Details - Report Number <a class="btn col-1 btn-secondary text-white" style="font-size:large">' . $id . '</a>
         </h2>
</div>
<div class="col-2 d-flex align-items-center justify-content-center bg-white">
  <a type="button" class="text-center text-white btn btn-secondary w-75 fw-bold " href="admin_submitted.php"><i class="bi bi-arrow-return-left"></i> Back</a>
</div>

</div>

<div class="row">
 <div class=" col-sm-10 container shadow p-5 bg-white mb-5 border-bottom">
           
  <h3 class="" style="font-family: Fugit;">
<table class="table shadow-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Profile</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Organisation</th>
      <th scope="col">Category</th>
      <th scope="col">Date</th>
      <th scope="col">Published</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
     <th scope="row">' . $id . '</th>
      <td>
      <img src="/CeDReCS_Update/images_assets/users.jpg" alt="Avatar Logo" style="width: 49px; height: 46px; border-radius: 50%;" class="rounded-circle img-fluid">
      </td>
      <td>' . $name . '</td>
      <td>' . $email . '</td>
      <td>' . $contact . '</td>
      <td>' . $organisation . '</td>
      <td>' . $category . '</td>
      <td>' . $date_created . '</td>
      <td>
      <button type="button" class="btn ' . ($published == 1 ? 'btn-success' : 'btn-danger') . ' btn-lg">' . ($published == 1 ? 'Yes' : 'No') . '</button>
      </td>
    </tr>
  </tbody>
</table>
</h3>
<h3>Description</h3>
      <p class="lead fw-large" style="font-size:; font-family:Fugit;">' . $incident_description . '</p>

    <h3>More details</h3>
    <p class="lead fw-medium" style="font-size:; font-family:Fugit;">' . $more_details . '</p>

 </div>
 <div class="container shadow  col-sm-2 p-5 bg-white mb-5 border-bottom">
  <h3 class="fw-bold text-danger" style="font-family: Fugit;text-decoration:underline" >Actions</h3>
  <div class="d-flex flex-column">
    <button type="button" class="btn btn-secondary mb-3">Publish <i class="bi bi-send"></i></button>
    <button type="button" class="btn btn-success mb-3">Edit <i class="bi bi-pencil-square"></i></button>
    <button type="button" class="btn btn-danger mb-3">Print <i class="bi bi-printer"></i></button>


    <button type="button" class="btn p-4  btn-danger mb-3 mt-5 " style="font-size:1.25rem"><i class="bi bi-exclamation-lg"></i> Delete <i class="bi bi-trash3"></i></button>
  </div>';




} else {
  echo "<p>No report found with ID $report_id</p>";
}

// Close the database connection
$conn->close();

} else {
// If the ID is not provided in the URL, show an error message or redirect back to the previous page.
echo "<p>Error: Report ID not provided.</p>";
}
?>

</div>
</div>



</div>
</div>
</div>

  

    




  <br>


 <!-- footer -->

 <div class="container-fluid footerbreak1" >
  

  <div class="row mt-5 " style="text-align:;">
    <div class="col-md-1"></div>
    <div class="col-sm-3 copyright position-relative">
      <hr>
      <p class="lead"><small class=" text-white">© 2023. All Rights Reserved. CeDReCS</small></p>
    </div>

  </div>
  

</div>

<!-- <div class="container-fluid ">
    <p class=" lead mt-3 mb-1  text-center ">CeDReCS<span>-FORUM</span></p>
</div> -->

<script>
function goBack() {
  window.history.back();
}

$('.btn-back').on('click', goBack);
</script>


  
</body>

</html>
