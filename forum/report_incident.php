
<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>


<?php

include("connect.php");

// Initialize variables for messages
$success_message = "";
$error_message = "";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data and escape it
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $organisation = mysqli_real_escape_string($conn, $_POST['organisation']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $incident_description = mysqli_real_escape_string($conn, $_POST['incident_description']);
    $more_details = mysqli_real_escape_string($conn, $_POST['more_details']);
    $agree_terms = isset($_POST['agree_terms']) ? 1 : 0;

    // Prepare and execute the SQL query to insert the data into the table
    $sql = "INSERT INTO incident_reports (name, email, contact, organisation, category, incident_description, more_details, agree_terms)
            VALUES ('$name', '$email', '$contact', '$organisation', '$category', '$incident_description', '$more_details', '$agree_terms')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "Your Report was submitted successfully.";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();

?>

<div class="container-fluid mt-1 p-5 mb-3 text text-center " style="margin-top:;background-image:url(../assets/images/signalfloat.gif); height: 150px;">
 
  
<h3  class="bg-secondary p-3 text-white text-center " style="border-radius: 15px;">Cyber Breach Encounters</h3>

<h1>
<div class="container mb-5 w-50 ">
        <!-- Success alert -->
        <?php if ($success_message !== ""): ?>
            <div class="alert alert-success mb-5 ">
                <?php echo $success_message; ?>
                <i class="bi bi-hand-thumbs-up"></i>
            </div>
        <?php endif; ?>

        <!-- Error alert -->
        <?php if ($error_message !== ""): ?>
            <div class="alert alert-danger mb-5">
                <?php echo $error_message; ?>
            </div>
        <?php endif; ?>
</div>
</h1>


 
</div>

  <div class="container-fluid bg-light mt-5">

    <div class="container bg-white shadow mb-2  p-3">
    
      <h2 class="pt-1 text-center bg-dark text-white mb-2 w-100" style="font-family: Fugit;text-decoration:">Report a Cyber Breach Incident</h2>
      <form class="mt-1 mb-1" action="report_incident.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold ">Full Name (Optional)</label>
          <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your full Name with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">Email address (Optional)</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">Contact Number(Optional)</label>
          <input name="contact" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your contact number with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">Organisation</label>
          <input name="organisation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your organisation with anyone else.</div>
        </div>
        <div class="input-group mb-3">
          <label class="form-label fw-bold " for="exampleInputEmail1">Category or Subject *</label>
          <div class="input-group mb-3">
          <select name="category" class="form-select" type id="inputGroupSelect01">
            <option selected class="fw-bold">Choose....</option>
            <option value="Abusive Content">Abusive Content</option>
            <option value="Malicious Code">Malicious Code</option>
            <option value="Information Gathering">Information Gathering</option>
            <option value="Intrusion/IntrusionAtempts">Intrusion/IntrusionAtempts</option>
            <option value="Information Security">Information Security</option>
            <option value="Fraud">Fraud</option>
            <option value="Spam">Spam</option>
            <option value="Harassment">Harassment</option>
            <option value="Violence">Violence</option>
            <option value="Virus/Worms/Trojans">Virus/Worms/Trojans</option>
            <option value="Virus/Worms/Trojans">Dialer</option>
            <option value="Scanning/Sniffing">Scanning/Sniffing</option>
            <option value="Social Engineering">Social Engineering</option>
            <option value="Exploitaion of Unknown Vulnerabilities">Exploitaion of Unknown Vulnerabilities</option>
            <option value="Login Attempts">Login Attempts</option>
            <option value="Application Compromise">Application Compromise</option>
            <option value="DOS/DDOS Attacks">DOS/DDOS Attacks</option>
            <option value="Technical Vulnerabilities">Technical Vulnerabilities</option>
            <option value="Others">Others</option>
            
          </select>
          </div>

        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">Describe the Incident *</label>
          <textarea  class="form-control" id="incident_description"  name="incident_description" rows="5" required></textarea>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label fw-bold">More Details of the Incident *</label>
          <textarea  class="form-control" id="" name="more_details" rows="5" required></textarea>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1" name="agree_terms" >I Agree to Terms & Conditions *</label>
        </div>
        <button type="submit" name="submit" class="btn btn-dark text-white w-100 align-content-center p-3 fw-bold mb-0 mt-3"><i class="bi bi-send-check" style="font-size: 1.5rem;"></i> Submit</button>
      </form>
      
    </div>

    <div class="d-flex justify-content-center align-items-center col-12 mt-5 ">
      <a type="button" id="backButton" class="p-2 mb-5 col-12 btn btn-success btn-back text-white text-center btn-block w-25 fw-bold" style=" border-radius: 20px;" href=""><i class="bi bi-x-circle" style="font-size: 1.5rem;"></i> Cancel</a>
  </div>
  
    
  
  </div>





  <br>


 
<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/footer.php';
?>
