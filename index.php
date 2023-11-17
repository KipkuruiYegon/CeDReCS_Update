<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>
<!-- Carousel Start -->
<div class="container-fluid px-0">
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
      <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/dekutadmin.jpg" class="img-fluid" alt="First slide" />
        <div class="carousel-caption">
          <div class="container carousel-content">
            <!-- <h6 class="text-secondary h4 animated fadeInUp">
              CeDReCS - DeKUT
            </h6> -->
            <h1 class="text-white display-1 mb-4 animated fadeInRight">
              Center for Data Research & Cyber Security
            </h1>
            <p class="mb-4 text-white fs-5 animated fadeInDown">
              Empowering Data. Securing the Future.
            </p>
            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn rounded-pill carousel-content-btn1 animated fadeInLeft" style="background-color:#ffa500 ;">
                Read More
              </button></a>
            <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-dark rounded-pill carousel-content-btn2 animated fadeInRight" style="background-color:black ;"> Contact Us </button></a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/dekutadmin.jpg" class="img-fluid" alt="First slide" />
        <div class="carousel-caption">
          <div class="container carousel-content">
            <!-- <h6 class="text-secondary h4 animated fadeInUp">
              CeDReCS - DeKUT
            </h6> -->
            <h1 class="text-white display-1 mb-4 animated fadeInRight">
              Center for Data Research & Cyber Security
            </h1>
            <p class="mb-4 text-white fs-5 animated fadeInDown">
              Empowering Data. Securing the Future.
            </p>
            <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn rounded-pill carousel-content-btn1 animated fadeInLeft" style="background-color:#ffa500 ;">
                Read More
              </button></a>
            <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight" style="background-color:black ;"> Contact Us </button></a>
          </div>
        </div>
      </div>


    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid py-5 my-5 ">
  <div class="container pt-5">
    <div class="row g-5">
      <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
        <div class="h-100 position-relative">
          <img src="img/study.jpg" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%" />
          <div class="position-absolute w-75" style="top: 25%; left: 25%">
            <img src="img/dekutadmin.jpg" class="img-fluid w-100 rounded" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
        <h5 class="text-primary">About Us</h5>
        <h1 class="mb-4">
          Welcome to the Center for Data Research and Cyber Security
        </h1>
        <p>
          The Center for Data Research and Cyber Security (CeDReCS) is situated at Dedan Kimathi University of Technology. CeDReCS is dedicated to advancing data research, data governance, and cyber security. Through interdisciplinary collaboration and cutting-edge research, we drive transformative advancements to ensure a secure and trustworthy digital future.
        </p>
        <p> Our focus areas include data research projects data governance and security, data applications, and the development of cyber security applications. We are committed to responsible data use, privacy protection, and equipping individuals and organizations with the skills needed to address the challenges of the digital age.
        </p>

        <a href="" class=" btn btn-secondary rounded-pill px-5 py-3 text-white welcome-read-btn" style="background-color:#ffa500;">More Details</a>
      </div>
    </div>
  </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid services py-5 mb-5">
  <div class="container">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
      <h5 class="text-primary">Research</h5>
      <h1>Research Areas</h1>
    </div>
    <div class="row g-5 services-inner">
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="services-item bg-light">
          <div class="p-4 text-center services-content">
            <div class="services-content-icon">
              <!-- <i class="fas fa-laptop fa-7x mb-4 text-dark"></i> -->
              <h4 class="mb-3">Data Research</h4>
              <p class="mb-4">At CeDReCS, we cover every aspect of the data lifecycle. From collecting and analyzing data to managing, governing, and securing it, our focus is on advancing data research. By harnessing the power of data science, collaborating across disciplines, and forming industry partnerships, we strive to drive innovation, tackle societal challenges, and build a secure, data-driven digital ecosystem for the future.</p>
              <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill" style="background-color:#ffa500;">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="services-item bg-light">
          <div class="p-4 text-center services-content">
            <div class="services-content-icon">
              <!-- <i class="fa fa-file-code fa-7x mb-4 text-dark"></i> -->
              <h4 class="mb-3">Cyber Security</h4>
              <p class="mb-4">We are committed to cutting-edge research and innovation in the field of cyber security. Our dedicated team focuses on advancing knowledge, developing practical solutions, and conducting interdisciplinary research to address the evolving landscape of cyber threats. Our initiatives span various domains within cyber security, including network security, endpoint protection, threat intelligence, incident response, and secure software development.</p>
              <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill" style="background-color:#ffa500;">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
        <div class="services-item bg-light">
          <div class="p-4 text-center services-content">
            <div class="services-content-icon">
              <!-- <i class="fa fa-external-link-alt fa-7x mb-4 text-dark"></i> -->
              <h4 class="mb-3">Knowledge Dissemination</h4>
              <p class="mb-4">
                We are committed to sharing our knowledge and expertise with the wider community. Through our website, we provide a platform to disseminate research findings thought leadership articles, practical insights, and industry best practices. We also organize workshops, seminars, and conferences to engage with professionals, students, and the public, fostering knowledge exchange and driving the conversation around cyber security and data research
              </p>
              <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill" style="background-color:#ffa500;">Read More</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Services End -->



<!-- Services Start -->
<div class="container-fluid services  py-5 mb-5">
  <div class="container">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
      <h5 class="text-primary">Our Values</h5>
      <h1>Mission Statement</h1>
    </div>
    <div class="row g-5 services-inner">
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
        <div class="services-item ">
          <div class="p-4  services-content">
            <div class="services-content-icon  text-center">
              <i class="fas fa-map fa-7x mb-4 text-warning"></i>
              <h4 class="mb-3 text-center">Core Values</h4>
              <p class="mb-4 ">Our core values of excellence, integrity, collaboration, innovation, and social responsibility guide our work. We strive for the highest standards in research and cybersecurity practices, uphold ethical principles, foster interdisciplinary collaboration, embrace innovation, and address societal challenges.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
        <div class="services-item ">
          <div class="p-4  services-content">
            <div class="services-content-icon text-center">
              <i class="fa fa-globe fa-7x mb-4 text-warning"></i>
              <h4 class="mb-3">Vision</h4>
              <p class="mb-4">To be a globally recognized hub of excellence in data research, data governance, and cyber security, driving transformative advancements and ensuring a secure and trustworthy digital future.</p>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
        <div class="services-item ">
          <div class="p-4  services-content">
            <div class="services-content-icon text-center">
              <i class="fa fas fa-rocket fa-7x mb-4 text-warning"></i>
              <h4 class="mb-3">Mission</h4>
              <p class="mb-4">To advance knowledge and innovation in data research, data governance, and cyber security, through cutting-edge research, interdisciplinary collaboration, and the development of practical applications, to address societal challenges and contribute to the development of a secure and data-driven society.</p>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Services End -->


<!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
  <div class="container">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px">
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
            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto mb-2" style="background-color:#ffa500;">
              <a href="hacktoberfest2023.php" class="btn text-white">Read More</a>
            </div>
          </div>
          <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-secondary rounded-bottom">

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
            <div class="blog-icon btn btn-secondary px-3 rounded-pill my-auto mb-2" style="background-color:#ffa500;">
              <a href="indabaxsummit2023.php" class="btn text-white">Read More</a>
            </div>
          </div>
          <div class="blog-coment d-flex justify-content-between px-4 py-2 border bg-secondary rounded-bottom">

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>
<!-- Blog End -->



<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 my-5">
  <div class="container py-5">
    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
      <h5 class="text-primary">Our Patners</h5>
      <h1>Patnerships</h1>
    </div>
    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
      <div class="testimonial-item border p-4">
        <div class="d-flex align-items-center">
          <div class="">
            <img src="img/Africa Blockchain.png" class="" alt="" style="height: 50%;">
          </div>

        </div>

      </div>
      <div class="testimonial-item border p-4">
        <div class="d-flex align-items-center">
          <div class="">
            <img src="img/yellibridge.png" class="" alt="" style="height: 50%;">
          </div>

        </div>

      </div>
      <div class="testimonial-item border p-4">
        <div class="d-flex align-items-center">
          <div class="text-center ">
            <img src="img/huawei.png" class="" alt="" style="height:200px;">
          </div>

        </div>

      </div>
      <div class="testimonial-item border p-4">
        <div class="d-flex align-items-center">
          <div class="">
            <img src="img/cisconet.png" class="" alt="" style="height: 50%;">
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- Testimonial End -->


<?php
// index.php or other_php_files.php

// Include the footer.php file
include 'partials/footer.php';
?>