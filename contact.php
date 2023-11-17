<?php
include 'partials/header.php';
?>
<!-- Contact Start -->
<div class="container-fluid py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Get In Touch</h5>
            <h1 class="mb-3">Contact Us</h1>
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-warning rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">Dedan Kimathi,Nyeri</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-warning rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="h5" href="tel:+0123456789" target="_blank">+254 713 835 965</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-warning  rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="h5" href="mailto:info@example.com" target="_blank">cedrecs@dkut.ac.ke</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map bg-light">
                        <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127670.60651458308!2d36.870299274895004!3d-0.4290546562925264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1828677a4955ff13%3A0x7ae4dae9615396a6!2sDEDAN%20KIMATHI%20UNIVERSITY!5e0!3m2!1sen!2ske!4v1700121101239!5m2!1sen!2ske" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <form id="contactForm" onsubmit="return handleSubmit(event);">
                        <div class="p-5 rounded contact-form bg-light">
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" id="First_name" name="first_name" placeholder="First Name">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" id="Last_name" name="last_name" placeholder="Last Name">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control border-0 py-3" id="Email" name="email" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" id="Subject" name="subject" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control border-0 py-3" rows="6" cols="10" id="Message" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="text-start">
                                <button value="submit" type="submit" id="submitButton" class="btn bg-dark text-white py-3 px-5 submitMessageButton" type="button" onclick="handleSubmit(event)">
                                    <span id="loadingIcon" style="display: none;">
                                        <i class="fas fa-circle-notch fa-spin"></i>
                                    </span>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



<?php
include 'partials/footer.php';
?>