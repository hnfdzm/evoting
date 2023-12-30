<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('portopolio/_partials/head.php') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/portal.php') ?>">
</head>
<body>

    <?php $this->load->view('portopolio/_partials/nav.php'); ?>

    <!-- Show Article Start -->
    <div class="container-fluid py-7 my-5">
        <div class="container pt-5">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-2 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                    </div>
                </div>
                <div class="col-lg-7 col-md-5 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h1 class="text-success"><?= $article->title? html_escape($article->title) : "No Title" ?></h1>
                    <h2 class="mb-4"><?= $article->kt ?></h2>
                    <p><?= $article->content ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Show Article End -->

    <?php $this->load->view('portopolio/_partials/footer.php'); ?>
    
</body>
</html>