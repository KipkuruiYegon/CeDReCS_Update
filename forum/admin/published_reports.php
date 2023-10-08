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
?>

  <div class="container-fluid pt-5 " style="background-color:bisque;" >
    <div class="container-fluid ">
    <div class="row" style="background-color:green;"  >
    <div class="col-lg-auto container-fluid "  >
      <h3 class="fw-bold text-center" style="font-family: Fugit;text-decoration:underline" ></h3>

    </div>

    
      <div class="container-fluid col-lg-12  bg-white">
      
      <h2 class="mt-2 shadow-sm p-3 bg-success w-25 rounded text-white " style="text-decoration:;">Published Reports <i class="bi bi-ubuntu" style="font-size: 2.5rem;"></i></h2>


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
$sql = "SELECT * FROM incident_reports WHERE published = 1";
$result = $conn->query($sql);

// Check if there are any records
if ($result->num_rows > 0) {
  // Start the table outside the while loop
  echo '<div class="container-fluid col-md-12 mb-3 shadow">
  <table class="table table-bordered table-hover bg-white ">
          <thead class="">
            <tr>
              <th class="b" scope="">Report #</th>
              <th class="" scope="col">Profile</th>
              <th class="" scope="col">Name</th>
              <th class="" scope="col">Email</th>
              <th class="" scope="col">Contact</th>
              <th class="" scope="col">Organisation</th>
              <th class="" scope="col">Category</th>
              <th class="" scope="col">Date</th>
              <th class="" scope="col">Published</th>
              <th class="" scope="col">Action<i class="bi bi-pencil"></i></th>
            </tr>
          </thead>
          <tbody class="">';

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
            <img src="../../assets/images/anonymous-profile-min.jpg" alt="Avatar Logo" style="width: 47px; height: 44px; border-radius: 50%;" class="rounded-circle img-fluid">
           </th>
            <td>' . $name . '</td>
            <td>' . $email . '</td>
            <td>' . $contact . '</td>
            <td>' . $organisation . '</td>
            <td>' . $category . '</td>
            <td>' . $formatted_date . '</td>
            <td class="text-center">
            <span class="badge ' . ($published == 1 ? 'bg-success' : 'bg-warning') . ' btn">' . ($published == 1 ? 'Yes  <i class="bi bi-check-all"></i>' : 'No <i class="bi bi-x-circle-fill"></i>') . '</span>
           
          </td>
          <td>
            <a type="button" class="btn btn-primary btn-sm" href="./view_report_details.php?id=' . $id . '">View</a>
          </td>
            

          </tr>';
  }

  // Close the table outside the while loop
  echo '</tbody>
      </table>
      </div>';
} else {
  echo "No records found.";
}

// Close the database connection
$conn->close();
?>


<p class="text-center">end of list</p>
      </div>
  

    
  
  </div>
  </div>

  </div>


  <?php
// index.php or other_php_files.php

include 'partials/footer.php';
?>

 


