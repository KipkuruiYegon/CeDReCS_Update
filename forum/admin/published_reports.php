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
                    <a class="nav-link text-white bg-primary p-3 fw-bold rounded me-3" style="" href="admin_dashboard.php">Dashboard <i class="bi bi-speedometer"></i></a>
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

  <div class="container-fluid mt-5 mb-5 bg-light" style="padding-top:50px;">
    <div class="container-fluid bg-white mb-5">
      
<h2 class="text-center bg-success text-white shadow-sm col-sm-12 p-2" style="text-decoration: underline;">Published Reports</h2>


    <form class="form-inline my-2 p-1 mt-5 my-lg-0 ms-auto">
    <div class="input-group w-100">
      <input class="form-control bg-white shadow" type="text" placeholder="Search Here......" style="border-radius: 15px;width:auto;font-size:medium">
      <button class="btn fw-bold" type="submit"><i class="bi bi-search fw-bold" style="font-size: 1.5rem;"></i></button>
    </div>
  </form>
    <br>
  <?php
include("../connect.php");

// Retrieve data from the "incident_reports" table
$sql = "SELECT * FROM incident_reports";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
  // Start the table outside the while loop
  echo '<table class="table table-striped table-hover ">
          <thead class="bg-primary text-white">
            <tr>
              <th class="bg-success text-white" scope="col">#</th>
              <th class="bg-primary text-white" scope="col">Profile</th>
              <th class="bg-primary text-white" scope="col">Name</th>
              <th class="bg-primary text-white" scope="col">Email</th>
              <th class="bg-primary text-white" scope="col">Contact</th>
              <th class="bg-primary text-white" scope="col">Organisation</th>
              <th class="bg-primary text-white" scope="col">Category</th>
              <th class="bg-primary text-white" scope="col">Date</th>
              <th class="bg-primary text-white" scope="col">Published</th>
              <th class="bg-primary text-white" scope="col">Action</th>
              <th class="bg-primary text-white" scope="col">Info</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">';

  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $contact = $row['contact'];
    $organisation = $row['organisation'];
    $category = $row['category'];
    $date_created = $row['date_created'];
    $published = $row['published']; // Replace 'date' with the actual column name for the date in your database

    // Format the date in a user-friendly format
    $formatted_date = date('F j, Y', strtotime($date_created));

    echo '<tr>
            <th scope="row">' . $id . '.</th>
            <th scope="row">
            <img src="/CeDReCS_Update/images_assets/users.jpg" alt="Avatar Logo" style="width: 49px; height: 46px; border-radius: 50%;" class="rounded-circle img-fluid">
           </th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $contact . '</td>
            <td>' . $organisation . '</td>
            <td>' . $category . '</td>
            <td>' . $formatted_date . '</td>
            <td><button type="button" class="btn ' . ($published == 1 ? 'btn-success' : 'btn-danger') . ' btn-lg">' . ($published == 1 ? 'Yes' : 'No') . '</button>
            </td>
            <td>
            <a type="button" class="btn btn-primary" href="./view_report_details.php?id=' . $id . '">View <i class="bi bi-box-arrow-up-right"></i></a>
          </td>
            <td>
            <a type="button" class="btn btn-primary" href="./view_report_details.php">View <i class="bi bi-box-arrow-up-right"></i></a>
            </td>

          </tr>';
  }

  // Close the table outside the while loop
  echo '</tbody>
      </table>';
} else {
  echo "No records found.";
}

// Close the database connection
$conn->close();
?>

<p class="lead fw-bold text-center text-primary">End of list <i class="bi bi-sign-stop" style="font-size:1.5rem"></i></p>



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


