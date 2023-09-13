<?php
// index.php or other_php_files.php

require_once 'session.php';
// Include the header.php file
include 'partials/header.php';
?>

 <div class="container">

 
 <div class="alert alert-warning mt-5" role="alert">
    Hello, <?php echo $_SESSION["username"] ?>, welcome back!
 </div>
    
        <div class="row mt-5 mb-5 text-center">

       
            <!-- First Card -->
            <div class="col-md-3  ">
                <div class="card shadow bg-primary">
                <div class="card-body text-white">
                <p class="card-text fs-5">Reports</p>
                 <h2 class="card-title fs-1">356</h2>
                </div>
                    <img src="../../assets/images/laptop.gif" class="card-img-top" alt="...">
                </div>
            </div>
            <!-- Second Card -->
            <div class="col-md-3">
                <div class="card shadow bg-success ">
                <div class="card-body text-white">
                <p class="card-text fs-5">Users</p>
                <h2 class="card-title fs-1">356</h2>
                </div>
                    <img src="../../assets/images/diagram.gif" class="card-img-top" alt="...">
                </div>
            </div>
            <!-- Third Card -->
            <div class="col-md-3">
                <div class="card shadow bg-warning">
                <div class="card-body text-white">
                <p class="card-text fs-5">Organizations</p>
                <h2 class="card-title fs-1">356</h2>
                </div>
                    <img src="../../assets/images/building.gif" class="card-img-top" alt="...">
                </div>
            </div>
            <!-- Fourth Card -->
            <div class="col-md-3">
                <div class="card shadow rounded">
                <div class="card-body bg-secondary text-white">
                <p class="card-text fs-5 ">Incidents</p>
                <h2 class="card-title fs-1">356</h2>
                </div>
                    <img src="../../assets/images/computer.gif" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
<div class="container">
<div class="row mt-5 mb-5 ">
    <div class="card mb-3" style="max-width: ;">
  <div class="row g-0 shadow">
    <div class="col-md-4">
      <img src="../../assets/images/chart.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title">Recent Activity <i class="bi bi-activity fs-3"></i></h2>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

</div>
</div>
  




<?php
// index.php or other_php_files.php

include 'partials/footer.php';
?>

 


