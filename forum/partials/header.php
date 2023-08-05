<!DOCTYPE html>
<html lang="en">

<head>
  <title>CeDReCS - FORUM</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <link rel="icon" type="image/x-icon" href="../assets/images/dedanlogo-removebg-preview.png">

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
  <nav class="navbar navbar-expand-lg " style="background-color: bisque;height:;">
    <div class="container-fluid ">
        <a class="navbar-brand display fw-bold" style="font-size: 32px;" href="">
            <img src="../assets/images/logo_transparent.png" alt="Avatar Logo" style="width:100px;height: 80px;" class="rounded-circle">
            CeDReCS<span class="fw-bold" style="font-family: Fugit;"> - FORUM</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
         
            <ul class="navbar-nav ms-auto text-center mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark p-3 fw-bold" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark p-3 fw-bold" href="discussions.php">Discussions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark p-3 fw-bold position-relative me-4" href="">Updates
                    <span class="position-absolute top-1 start-100 translate-middle p-2 border border-light rounded-circle" style="background-color: #EC1009;">
                      <span class="visually-hidden">New alerts</span>
                    </span>
                  </a>
             </li>
                <li class="nav-item">
                    <a class="nav-link text-dark p-3 btn bg-black text-white fw-bold" style="border-radius: 15px;" href="report_incident.php">Report an Incident</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 ms-auto">
              <div class="input-group w-100">
               
                <input class="form-control bg-white shadow " type="text" placeholder="Search..." style="border-radius: 15px;width: 300px;">
                <button class="btn fw-bold fw-bold" type="submit"><i class="bi bi-search fw-bold" style="font-size: 1.5rem;"></i></button>
               </div>
              </form>
        </div>
    </div>
</nav>
