<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

<div class="container-fluid mt-2 p-5 text text-center d-flex justify-content-center " style="margin-top:;background-image:url(../assets/images/signalfloat.gif);">
 
  
  <h3  class="bg-warning p-3 text-black text-center w-75 fw-bold " style="border-radius: 15px;Font-family:Fugit;">Get to hear & learn from untold Cyber Breach stories</h3>
              
</div>



  <div class="container-fluid bg-light" style="padding-top: 70px;">
    <div class="container mb-5">
      <h3 class="">Published Discussions <i class="bi bi-airplane"></i></h3>
      <hr>
        <?php
        include("connect.php");
    
        // Retrieve data from the "incident_reports" table
        $sql = "SELECT * FROM incident_reports";
        $result = $conn->query($sql);

        // Check if there are any records
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $date_created = $row['date_created']; // Replace 'date' with the actual column name for the date in your database
        $incident_description = $row['incident_description'];

        // Format the date in a user-friendly format
      $formatted_date = date('F j, Y', strtotime($date_created));

      echo '<h3 class="fw-bold" style="font-family: Fugit;"> 
      <img src="../assets/images/anonymous-profile-min.jpg" alt="Avatar Logo" style="width: 49px; height: 46px; border-radius: 50%;" class="rounded-circle img-fluid">
      Anonymous , on ' . $formatted_date . '
      </h3>';

      echo '<pre class="lead fw-medium" style="font-family: Fugit; font-size: large;word-wrap: break-word;white-space: pre-wrap;">' . $incident_description . '....</pre>';
      
      echo '<a type="button" id="backButton" class="p-2 btn btn-success btn-back text-white text-center btn-block w-25 mb-5" style="font-size: medium;border-radius: 80px;" href="discussion_reply.php">Read More</a>';
      
      echo '<hr>';
    }
  } else {
    echo "No records found.";
  }

  // Close the database connection
  $conn->close();
  ?>

    </div>

    
  
  </div>




  <br>

<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/footer.php';
?>




