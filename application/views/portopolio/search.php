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
    .inside{
        padding: 2rem;
        background-color: gray;
        border-radius: 10px;
    }
</style>
<body>

<?php $this->load->view('portopolio/_partials/nav.php'); ?>

        <!-- Contact Start -->
        <div class="container-fluid py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h5 class="text-primary">Search</h5>
                    <b><h1 class="mb-3">Search for articles in this form to make it easier for you</h1></b>
                    <p class="mb-2"></p>
                </div>
                <div class="contact-detail position-relative p-5">
                    
                    <div class="row g-5">
                        <div class="col wow fadeIn" data-wow-delay=".5s">
                            <div class="p-5 rounded contact-form">
                                <form action="" method="get" role="search">
                                    <div class="input-group mb-3">
                                        <input class="form-control me-2" type="search" name="keyword" placeholder="Search" value="<?= html_escape($keyword) ?>" aria-label="Search">
                                        <button class="btn btn-primary" type="submit" value="cari">Search</button>
                                    </div>
                                    
                                </form>
                            
                            </div>
                        </div>


                        <!-- Article Start -->
                        <?php if ($search_result) : ?>
                        <div class="container-fluid services py-5 mb-5">
                            <div class="container">
                                <div class="row g-5 services-inner">
                                    <?php foreach ($search_result as $article) : ?>
                                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                                        <div class="services-item bg-light">
                                            <div class="p-4 text-center services-content">
                                                <div class="services-content-icon">
                                                        <?php if ($article->foto && file_exists('upload/gambar/' . $article->foto)): ?>
                                                            <img src="<?= base_url('upload/gambar/') . $article->foto; ?>" width="150px" class="img-fluid mb-4" alt="<?= $article->foto ?>">
                                                        <?php else: ?>
                                                            <img src="<?= base_url('assets/sample.png'); ?>" width="150px" class="img-fluid mb-4" alt="tak ada gambar">
                                                        <?php endif ?>
                                                    <h4 class="mb-3"><?= $article->title? html_escape($article->title) : "No Title" ?></h4>
                                                    <p class="mb-4"><?= $article->kt ?></p>
                                                    <a href="<?= site_url('article/'.$article->slug) ?>" class="btn btn-success text-white px-5 py-3 rounded-pill">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>
                        <!-- Article End -->


                    </div>
                </div>
            </div> 
        </div>
        <!-- Contact End -->

	<?php $this->load->view('portopolio/_partials/footer.php'); ?> 
</body>
</html>