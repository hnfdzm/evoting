<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('portopolio/_partials/head') ?>
</head>
<style>
    .isi{
        background-color: lightgray;
        padding: 1.5rem;
        position: center;
    }
    .content{
        background-color: lightgray;
        border-radius: 10px;
    }
    .inside{
        padding: 1rem;
    }
</style>
<body>

    <?php $this->load->view('portopolio/_partials/nav.php'); ?>

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/carousel-3.jpg') ?>" class="img-fluid" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <b>
                                    <h6 class="text-success h4 animated fadeInUp">IT MEDIA</h6>
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">Contact Us</h1>
                                    <p class="mb-4 text-white fs-5 animated fadeInDown">Contact us to provide your experiences, suggestions and impressions on our website.</p>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Get In Touch</h5>
                    <b><h1 class="mb-3">Contact for any query</h1></b>
                    <p class="mb-2">Send your message using the form below</p>
                </div>
                <div class="contact-detail position-relative p-5">
                    <div class="row g-5 mb-5 justify-content-center">
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Address</h4>
                                    <a href="https://maps.app.goo.gl/XSDgRffi2ccWmCHb9" target="_blank" class="h5">SMK Assalafiyah</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-phone text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Call Us</h4>
                                    <a class="h5" href="tel:+0123456789" target="_blank">+012 3456 7890</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                            <div class="d-flex bg-light p-3 rounded">
                                <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h4 class="text-primary">Email Us</h4>
                                    <a class="h5" href="mailto:info@example.com" target="_blank">info@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                            <div class="p-5 h-100 rounded contact-map">
                                <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                            <div class="p-5 rounded contact-form">
                                <form action="" method="post">
                                    <!-- nama -->
                                    <div class="mb-4">
                                        <input type="text" class="form-control border-0 py-3" name="name" placeholder="Your Name" required>
                                    </div>
                                    <!-- email -->
                                    <div class="mb-4">
                                        <input type="email" class="form-control border-0 py-3" name="email" placeholder="Your Email" required>
                                    </div>
                                    <!-- pesan -->
                                    <div class="mb-4">
                                        <textarea class="w-100 form-control border-0 py-3" name="message" rows="6" cols="10" placeholder="Write Your Message" rows="3" required></textarea>
                                    </div>
                                    <!-- tombol -->
                                    <div class="button mb-4">
                                        <button type="submit" class="btn bg-primary text-white py-3 px-5">Send Message</button>
                                    </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Contact End -->


    <!-- Footer -->
    <?php $this->load->view('portopolio/_partials/footer.php'); ?>
    
</body>
</html>