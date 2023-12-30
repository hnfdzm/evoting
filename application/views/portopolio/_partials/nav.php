<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="<?php base_url('assets/css/main.css') ?>">

        <!-- Navbar Start -->
        <div class="container-fluid bg-primary">
          <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="<?= site_url() ?>" class="navbar-brand">
                        <h1 class="text-white fw-bold d-block">IT<span class="text-success">Media</span> </h1>
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="<?= site_url() ?>" class="nav-item nav-link">Home</a>
                            <a href="<?= site_url('about') ?>" class="nav-item nav-link">About</a>
                            <a href="<?= site_url('article') ?>" class="nav-item nav-link">Article</a>
                            <a href="<?= site_url('search') ?>" class="nav-item nav-link">Search</a>
                            <a href="<?= site_url('contact') ?>" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                    <div class="d-none d-xl-flex flex-shirink-0">
                        <div class="d-flex flex-column pe-4 border-end">
                            <span class="text-light">Have any questions?</span>
                            <span class="text-success"><b>Call: + 0123 456 7890</b></span>
                        </div>
                        <div class="d-flex align-items-center justify-content-center ms-4 ">
                            <a href="<?= site_url('auth/login') ?>"><span class="text-white">Login</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->