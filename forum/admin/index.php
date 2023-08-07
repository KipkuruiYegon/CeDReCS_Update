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



<div class="container-fluid">
    <div class="row">
    <div class="container-fluid d-flex justify-content-center align-items-center p-5 col-md-7"
    style="background-image: url(../../assets/images/anonymous-profile-min.jpg); height: 100vh;width:;">
    <div class="text-center bg-warning text-black p-5 rounded" style="">
      <h1 class="" style="font-size:50px;"><i class="bi bi-gear-wide-connected" style="font-size: larger;"></i> Administrator</h1>
      <hr>
      <h1 class="bg-white mt-5 p-5 container-fluid rounded">CeDReCS<span> - FORUM</span>
      <img src="../../assets/images/dedanlogo-removebg-preview.png" alt="Avatar Logo" style="width: 62px; height: 56px; border-radius: 50%;" class="rounded-circle img-fluid">
     </h1>
    </div>
  </div>
        <div class="container col-md-5 text-dark" style="background-color:bisque">
        
        <div class="row p-5">
        <div class="p-3 container fw-bold shadow" style="background-color: bisque;">
          <h5 class="col-md-12 col-sm-12 p-3 mb-2 text-center text-white rounded" style="background-color: #71B48D;">Login</h5>
          <form >
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="First_name" name="first_name" required>
              </div>
              <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="Last_name" name="last_name" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="Email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject:</label>
              <input type="text" class="form-control" id="Subject" name="subject" required>
            </div>
           
            <button type="submit" id="submitButton" class="btn text-white p-3 w-100 text-100 rounded submitMessageButton " style="background-image: url(assets/images/signalfloat.gif);font-size:small;" onclick="handleSubmit(event)">
              <span id="loadingIcon" style="display: none;">
                <i class="fas fa-circle-notch fa-spin"></i>
              </span>
              Submit
            </button>
          </form>
          
         

      </div>
        </div>
    </div>
</div>


</body>

</html>