<?php
// index.php or other_php_files.php


// Include the header.php file
include 'partials/header.php';
?>

<div class="container-fluid bg-light pt-4  " style="">
  <div class="container-fluid ">
    <div class="row">
    <hr>
      <div class="col-md-10">
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

            echo '
             
              <h2 class="text-center bg-primary rounded-pill text-white shadow-sm w-100 p-2">Report Number <a class="btn text-white fw-bold" style="font-size: 24px">' . $id . '</a>
              </h2>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center bg-white">
              <button type="button" id="backButton" class="p-3 btn btn-success btn-back text-white text-center btn-block w-75 rounded-pill" style="" onclick="goBack()"><i class="bi bi-arrow-return-left"></i> Back</button>
            </div>

          </div>

          <div class="row">
            <div class="col-sm-10 container shadow p-5 bg-white mb-5 border-bottom">
              <h3 style="font-family: Fugit;">
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
                        <img src="../../assets/images/anonymous-profile-min.jpg" alt="Avatar Logo" style="width: 49px; height: 46px; border-radius: 50%;" class="rounded-circle img-fluid">
                      </td>
                      <td>' . $name . '</td>
                      <td>' . $email . '</td>
                      <td>' . $contact . '</td>
                      <td>' . $organisation . '</td>
                      <td>' . $category . '</td>
                      <td>' . $date_created . '</td>
                      <td>
                        <button type="button" class="btn ' . ($published == 1 ? 'btn-success' : 'btn-warning') . ' btn">' . ($published == 1 ? 'Yes <i class="bi bi-check-all"></i>' : 'No <i class="bi bi-x-circle-fill"></i>') . '</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </h3>
              <h3>Description</h3>
              <pre class="lead fw-medium" style="font-family: Fugit; font-size: large;word-wrap: break-word;white-space: pre-wrap;">' . nl2br($incident_description) . '</pre>

              <h3>More details</h3>
              <pre class="lead fw-medium" style="font-family: Fugit; font-size: large;word-wrap: break-word;white-space: pre-wrap;">' . nl2br($more_details) . '</pre>
            </div>
         

          <div class="container shadow col-md-2 p-5 bg-white mb-5 border-bottom">
            <h3 class="fw-bold text-danger text-center" style="font-family: Fugit;text-decoration:underline">Actions</h3>
            <div class="">
              <form id="publishForm" method="post" action="publish_report.php">
                <input type="hidden" name="report_id" value="' . $id . '">
                <button type="submit" class="btn btn-success mb-3 w-100 p-3 rounded-pill" onclick="return confirm(\'Are you sure you want to publish this report?\');">
                  Publish <i class="bi bi-send"></i>
                </button>
              </form>

              <form id="unpublishForm" method="post" action="unpublish_report.php">
              <input type="hidden" name="report_id" value="' . $id . '">
                  <button type="submit" class="btn btn-primary mb-3 w-100 p-3 rounded-pill" onclick="return confirm(\'Are you sure you want to unpublish this report?\');">
                Unpublish <i class="bi bi-cloud-slash"></i>
              </button>
            </form>
            <form id="editForm" method="get" action="edit_report.php">
  <input type="hidden" name="id" value="' . $id . '">
  <button type="submit" class="btn btn-info mb-3 w-100 p-3 rounded-pill" onclick="return confirm(\'Are you sure you want to edit this report?\');">
    Edit <i class="bi bi-pencil"></i>
  </button>
</form>

              <form id="deleteForm" method="post" action="delete_report.php">
                  <input type="hidden" name="report_id" value="' . $id . '">
                        <button type="submit" class="btn btn-dark mb-3 w-100 p-3 rounded-pill" onclick="return confirm(\'Are you sure you want to delete this report?\');">
                             Delete <i class="bi bi-trash"></i>
                    </button>
              </form>

             

             </div>
          </div>
        '; // Closing the echo statement

      } else {
        echo "<p>No report found with ID $report_id</p>";
      }
    }

      // Close the database connection
      $conn->close();
      ?>

      </div>
    </div>
  </div>
</div>

<?php
// Include the footer.php file
include 'partials/footer.php';
?>
