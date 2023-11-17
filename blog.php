<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

<!-- Blog Start -->
<div class="container-fluid blog py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Our Blog</h5>
            <h1>Latest Blog & News</h1>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="img/events/image3.jpg" class="img-fluid w-100 rounded-top" alt="" />
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px">Cedrecs Hacktober 2023</span>
                    <div class="blog-btn d-flex justify-content-between  px-3">


                    </div>
                    <div class="blog-content position-relative px-3 mt-2">
                        <span class="text-secondary">28th October 2023</span>
                        <p class="py-2">
                            On October 28th, 2023, the Cyber Security Club of KImathi, in partnership with the CeDReCS, held an eventful gathering of 70 students and six cyber security professionals in an event dubbed Hacktober Fest...

                        </p>
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto mb-4" style="background-color:#ffa500;">
                            <a href="hacktoberfest2023.php" class="btn text-white">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeIn" data-wow-delay=".3s">
                <div class="blog-item position-relative bg-light rounded">
                    <img src="img/events/AISummit Indabax2023.jpg" class="img-fluid w-100 rounded-top" alt="" />
                    <span class="position-absolute px-4 py-3 bg-primary text-white rounded" style="top: -28px; right: 20px">Deep Learning IndabaX Summit 2023</span>
                    <div class="blog-btn d-flex justify-content-between  px-3">


                    </div>
                    <div class="blog-content position-relative px-3 mt-2">
                        <span class="text-secondary">2nd July 2023</span>
                        <p class="py-2">Deep Learning Indaba (DLI) is a premier yearly conference and community-driven project
                            aimed at enhancing and expanding Artificial Intelligence (AI) and Machine Learning (ML)
                            capabilities throughout Africa...</p>
                        <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto mb-4" style="background-color:#ffa500;">
                            <a href="indabaxsummit2023.php" class="btn text-white">Read More</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Blog End -->
<?php

// Include the footer.php file
include 'partials/footer.php';
?>