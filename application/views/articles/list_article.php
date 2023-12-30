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
                                    <p class="mb-4 text-white fs-5 animated fadeInDown"></p>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Carousel End -->

    <!-- Article Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h2 class="text-primary">Our Article</h2>
                <h1>Read the article for your experience and knowledge</h1>
            </div>
            <div class="row g-5 services-inner">
                <?php foreach ($articles as $article) : ?>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <h4 class="mb-3"><?= $article->title? html_escape($article->title) : "No Title" ?></h4>
                                <p class="mb-4"><?= $article->kt ?></p>
                                <a href="<?= site_url('article/'.$article->slug) ?>" class="btn btn-success text-white px-5 py-3 rounded-pill">Read The Article</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <!-- Article End -->
    
    <?php $this->load->view('portopolio/_partials/footer.php'); ?>

</body>
</html>