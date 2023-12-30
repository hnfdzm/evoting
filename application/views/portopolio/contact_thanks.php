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

<!-- navbar -->
<?php $this->load->view('portopolio/_partials/nav.php'); ?>

<!-- Contact Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <img src="<?= base_url('assets/img/checklist.png') ?>" width="100px" alt="" srcset="">
            <h5 class="text-primary">Get In Touch</h5>
            <b><h2 class="mb-3">Thanks for reaching out!</h2></b>
            <p class="mb-2">Your message just showed in my inbox. Talk to you soon!</p>
            <a href="<?= site_url() ?>" class="btn btn-success">Back To Home</a>
        </div>
    </div> 
</div>
<!-- Contact End -->

<!-- footer -->
<?php $this->load->view('portopolio/_partials/footer.php'); ?>
    
</body>
</html>