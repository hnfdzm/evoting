<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('portopolio/_partials/head.php') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/portal.php') ?>">
</head>
<style>
    .isi{
        background-color: lightgray;
        padding: 1.5rem;
    }
    .content{
        background-color: lightgray;
        border-radius: 10px;
        padding:2rem;
    }
    .footer{
        margin-bottom: 1px;
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
                            <h1 class="text-white display-1 mb-4 animated fadeInRight">Article</h1>
                            <p class="mb-4 text-white fs-5 animated fadeInDown">Read the article for your experience and knowledge</p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

        <!--  Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Article Is Empty</h5>
                    <b><h1 class="mb-3">No articles at this time. Wait for an update from us</h1></b>
                </div>
            </div> 
        </div>
        <!-- End -->

<?php $this->load->view('portopolio/_partials/footer.php'); ?>
    
</body>
</html>