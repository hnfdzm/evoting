<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('portopolio/_partials/head') ?>
</head>
<body>

    <?php $this->load->view('portopolio/_partials/nav.php') ?>
    
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
                                    <h1 class="text-white display-1 mb-4 animated fadeInRight">About Us</h1>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="<?= base_url('assets/img/about-1.jpg') ?>" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="<?= base_url('assets/img/about-2.jpg') ?>" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About Us</h5>
                    <h1 class="mb-4">About IT Media It's Innovative IT Solutions</h1>
                    <p>This website offers an interactive learning experience, allowing users to engage in interesting and practical learning activities. This website provides complete and in-depth IT learning materials, covering various topics from basic to advanced level. This website is regularly updated with the latest information about developments in the IT field, so that users always get relevant and up-to-date content.</p>
                    <p class="mb-4">This website allows users to study independently, with learning materials available online and accessible anytime and anywhere. This website provides a learning community feature, where users can interact and discuss with fellow IT students to share knowledge and experiences.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php $this->load->view('portopolio/_partials/footer.php'); ?>
    
</body>
</html>