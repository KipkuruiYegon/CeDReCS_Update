<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>
<div class="container-fluid mt-2 p-5 text text-center " style="margin-top:;background-image:url(../assets/images/signalfloat.gif);">
<?php
        // Check if the ID is provided in the URL
        if (isset($_GET['id'])) {
          $report_id = $_GET['id'];

          // Connect to the database
          include("connect.php");

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
  
  <a type="button" class=" btn btn-warning p-3 text-black fw-bold" style="border-radius: 15px;" href="">Published on , ' . $formatted_date . '</a>
              
</div>



<div class="container-fluid bg-light mb-5" style="padding-top: 70px;">
    <div class="container mb-5 col-sm-10 border-bottom">
      <h3 class="fw-bold" style="font-family: Fugit;">
      
              
      <img src="../assets/images/anonymous-profile-min.jpg" alt="Avatar Logo" style="width: 49px; height: 46px; border-radius: 50%;" class="rounded-circle img-fluid">
      Anonymous ' . $id . ' says, 
    </h3>
    
    <pre class="lead fw-medium" style="font-family: Fugit; font-size: large;word-wrap: break-word;white-space: pre-wrap;">' . nl2br($incident_description) . '</pre>

    <pre class="lead fw-medium" style="font-family: Fugit; font-size: large;word-wrap: break-word;white-space: pre-wrap;">' . nl2br($more_details) . '</pre>


    </div>
    <div class="container col-sm-9 mb-5">
        <h3 class="fw-bold">Comments</h3>
        <div class="container mb-5">
            <h5 class="fw-bold" style="font-family: Fugit;">
              <img src="../assets/images/commentor.jpg" alt="Avatar Logo" style="width: 49px; height: 48px; border-radius: 50%;" class="rounded-circle img-fluid">
              Ann Mwende, 12th Jun 2023
            </h5>
            <p class="" style="font-family: Fugit; font-size: large;">
              I wondered what this hacker may have done, or if I’ll be able to log in again.
              I use my computer very securely, I utilise backup services, and save almost no important data on my machine. Everything is in the cloud. So I kind of rationalised with myself that nothing bad could happen, except maybe Identity theft or similar. But why would the voice then say that everything was very transparent. Maybe he found some clues or something on my machine
              An app with a red icon called “music” was started on my mac. I’ve never used that app as far as I can remember. But there it was, and there was one file open. Actually a video-recording of a session in a masterclass in serverless computing by 
              Gojko Adzic
            </p>
             </div>

          <div class="container mb-5">
            <h5 class="fw-bold" style="font-family: Fugit;">
              <img src="../assets/images/commentor.jpg" alt="Avatar Logo" style="width: 49px; height: 48px; border-radius: 50%;" class="rounded-circle img-fluid">
              John Wamathena, 12th Jun 2023
            </h5>
            <p class="" style="font-family: Fugit; font-size: large;">
              I wondered what this hacker may have done, or if I’ll be able to log in again.
              I use my computer very securely, I utilise backup services, and save almost no important data on my machine. Everything is in the cloud. So I kind of rationalised with myself that nothing bad could happen, except maybe Identity theft or similar. But why would the voice then say that everything was very transparent. Maybe he found some clues or something on my machine
              An app with a red icon called “music” was started on my mac. I’ve never used that app as far as I can remember. But there it was, and there was one file open. Actually a video-recording of a session in a masterclass in serverless computing by 
              Gojko Adzic
            </p>
           </div>
          <div class="container bg-white shadow mb-5">
        <form class="mt-1 mb-5" action="" method="POST">
            <h5 class="" style="font-family: Fugit;text-decoration: underline;">Your Comment</h5>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold ">Name</label>
                <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We never share your full Name with anyone</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Your email will not be published</div>
              </div>
              
      
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Your Reply *</label>
                <textarea  class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-dark text-white w-25 align-content-center p-2 fw-bold mb-2 mt-2" style="border-radius: 15px;"><i class="bi bi-send-check" style="font-size: 1.5rem;"></i> Comment</button>
        </form>
            
             
    </div>
    
    <br>
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





  <?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/footer.php';
?>