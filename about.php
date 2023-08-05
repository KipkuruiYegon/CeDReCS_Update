<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

  <div class="container-fluid mt-2 mb-4 bg-light w-100" style="padding-top:px;">
    <!-- <h2 class="col-md-12 col-sm-12 shadow-sm mb-0 p-3 text-white" style="background-color: #71B48D;"></h2> -->

    <div class="row w-100 mx-auto shadow-lg mb-5">

      <div class="col-md-8 bg-white ">
        
        <h3 class="col-md-12 col-sm-12 p-5 shadow-sm mb-0 p-3 text-white" style="background-image:url(assets/images/signalfloat.gif);;">About Us</h3>
    
        
            <p class=" lead p-3" style="color: black; font-family: Fugit;">
              
              Center for Data Research and Cyber Security at Dedan Kimathi University of Technology is a premier institution dedicated to advancing knowledge and practices in the domains of data research, governance, and cyber security. We are committed to fostering interdisciplinary collaboration, conducting cutting-edge research, and developing innovative solutions to address the evolving challenges of the digital age. At the Center for Data Research and Cyber Security, we strive to be at the forefront of data-driven research and cyber security advancements. Our team of dedicated researchers, faculty members, and experts collaborates with industry partners, government agencies, and academia to drive transformative change and shape the future of data and cyber security.

              <br><br>Our core areas of focus include data research projects, data governance and security, data applications, and the development of cyber security applications. Through rigorous research and analysis, we aim to unlock the potential of data to drive informed decision-making, innovation, and sustainable development across various domains.
              
              <br><br>We believe in the responsible and ethical use of data, emphasizing the importance of data governance, privacy, and compliance with regulations. Our researchers work towards developing best practices and frameworks that ensure the protection and integrity of sensitive information while maximizing its value for research, industry, and society.
              
              <br><br>In the realm of cyber security, we are committed to staying one step ahead of emerging threats and vulnerabilities. Through innovative research and the development of robust security applications, we strive to safeguard critical infrastructure, protect digital assets, and empower individuals and organizations to navigate the digital landscape securely.
              
              <br><br>As a center of excellence, we are dedicated to sharing knowledge, fostering collaboration, and nurturing talent. Through educational programs, training workshops, and industry partnerships, we aim to equip students, professionals, and the wider community with the skills and expertise necessary to address the complex challenges of data research and cyber security.
              
              <br><br>We invite you to join us on this transformative journey towards a secure and data-driven future. Together, we can unlock the power of data and build a resilient digital ecosystem that fosters innovation, protects privacy, and strengthens the foundations of our society.
</p>
</div>

  <div class="col-md-4 bg-white align-items-center">

    <h3 class="col-md-12 col-sm-12 shadow-sm mb-0 p-5 text-white" style="background-image:url(assets/images/signalfloat.gif);;">Our Mandate</h3>

    
    
    <div class=" mb-5 col-md-12 container align-items-center ms-auto">
      <!-- <p class=" col-md-12 col-sm-12 text-center lead fw-bold mt-3 bg-white text-center" style="border-radius: 4px;">Message from the Director</p>
      
      <div class="row">
        <div class="d-flex justify-content-center mt-0 p-3">
          <img alt="logo" style="width: 100px; height: 100px;" class="rounded-circle mt-2 " src="images_assets/Dr-George-Musumba-2-296x300.jpg">
      </div>
      </div>  
      

        <div class="row">
          <div class="p-3 text-center">
            <h5 class="fw-bold">Dr. George Musumba</h5>
          </div>
        </div> -->
       <div class="row">
        <div class="p-3 text-center ">
          <p class="lead fw-700 mt-0" style="font-family: Fugit;font-size: 18px;font-style:;" >
              " In today's digital world, where data plays a crucial role in shaping decisions and driving innovation, our center stands as a beacon of knowledge and expertise. We strive to nurture a culture of curiosity, exploration, and collaboration among our students and faculty members, encouraging them to take on the most pressing challenges in the realm of data and cyber security. "
          </p>
      </div>
       </div>
       <div class="row">
        <div class="p-3 container fw-bold shadow" style="background-color: bisque;">
          <h5 class="col-md-12 col-sm-12 p-3 mb-2 text-center text-white rounded" style="background-color: #71B48D;">Your Message</h5>
          <form id="contactForm" onsubmit="return handleSubmit(event);">
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
            <div class="mb-3">
              <label for="message" class="form-label">Message:</label>
              <textarea class="form-control" id="Message" name="message" rows="8" required></textarea>
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
    
     
   

  

    <br>
    <br>
</div>
  </div>





  
 

 <!-- footer -->
 <?php
 // Include the footer.php file
 include 'partials/footer.php';
 ?>