<!-- edit_report.php -->

<!-- Include the header.php file -->
<?php include 'partials/header.php'; ?>

<div class="container-fluid bg-white pt-3">
  <div class="container-fluid">
    <div class="row">
      <hr>
      <div class="col-md-10 bg-white">
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
            // Add more fields if needed

            // Display a form with pre-filled values for editing
            echo '
            <h2 class="text-center bg-primary rounded-pill text-white shadow-sm w-100 p-2">Incident Report Number <a class="btn text-white fw-bold" style="font-size: 24px">' . $id . '</a>
            </h2>
          </div>
          <div class="col-2 d-flex align-items-center justify-content-center bg-white">
            <a type="button" class="text-center p-3 rounded-pill text-white btn btn-secondary w-75 fw-bold" href=""><i class="bi bi-arrow-return-left"></i> Back</a>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-10 container shadow p-5 bg-white mb-5 border-bottom">
            <div class="container bg-white shadow mb-2 p-3">
              <h2 class="pt-1 text-center bg-dark text-white mb-2 w-100" style="font-family: Fugit;text-decoration:">Edit Incident Report</h2>
              <form class="mt-1 mb-1" action="submit_report.php" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold ">Full Name (Optional)</label>
                  <input name="name" type="name" class="form-control" id="exampleInputEmail1" value="' . $name . '" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We will never share your full Name with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold">Email address (Optional)</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="' . $email . '" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We will never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold">Contact Number (Optional)</label>
                  <input name="contact" type="text" class="form-control" id="exampleInputEmail1" value="' . $contact . '" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We will never share your contact number with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold">Organisation</label>
                  <input name="organisation" type="text" class="form-control" id="exampleInputEmail1" value="' . $organisation . '" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We will never share your organisation with anyone else.</div>
                </div>
                <div class="input-group mb-3">
                  <label class="form-label fw-bold " for="exampleInputEmail1">Category or Subject *</label>
                  <div class="input-group mb-3">
                    <select name="category" class="form-select" type id="inputGroupSelect01">
                      <option selected class="fw-bold">Choose....</option>
                      <option value="Abusive Content" ' . ($category == "Abusive Content" ? 'selected' : '') . '>Abusive Content</option>
                      <option value="Malicious Code" ' . ($category == "Malicious Code" ? 'selected' : '') . '>Malicious Code</option>
                      <!-- Add more options as needed -->
                    </select>
                  </div>

                </div>
                <div class="mb-3">
                  <label for="incident_description" class="form-label fw-bold">Describe the Incident *</label>
                  <textarea class="form-control" id="incident_description" name="incident_description" rows="5" required>' . $incident_description . '</textarea>
                </div>

                <div class="mb-3">
                  <label for="more_details" class="form-label fw-bold">More Details of the Incident *</label>
                  <textarea class="form-control" id="more_details" name="more_details" rows="5" required>' . $more_details . '</textarea>
                </div>

                <input type="hidden" name="report_id" value="' . $id . '">
                <button type="submit" name="submit" class="btn btn-dark text-white w-100 align-content-center p-3 fw-bold mb-0 mt-3"><i class="bi bi-send-check" style="font-size: 2rem;"></i> Update Report</button>
              </form>
            </div>
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

              <form id="deleteForm" method="post" action="delete_report.php">
                <input type="hidden" name="report_id" value="' . $id . '">
                <button type="submit" class="btn btn-dark mb-3 w-100 p-3 rounded-pill" onclick="return confirm(\'Are you sure you want to delete this report?\');">
                  Delete <i class="bi bi-trash"></i>
                </button>
              </form>

              <!-- Form to redirect to the edit_report.php page -->
              <form id="editForm" method="post" action="edit_report.php">
                <input type="hidden" name="report_id" value="' . $id . '">
                <button type="submit" class="btn btn-info mb-3 w-100 p-3 rounded-pill" onclick="return confirm(\'Are you sure you want to edit this report?\');">
                  Edit <i class="bi bi-pencil"></i>
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
</div>


<?php
// Include the footer.php file
include 'partials/footer.php';
?>
