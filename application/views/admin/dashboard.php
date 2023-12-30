<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<style>
.main{
	padding:;
	background-color: lightgray;
}
.isi{
	padding:;
}
.color{
	background-color:rgb(110, 110, 110);
	width: 1000px;
	height: 85px;
	padding: 1rem;
}
</style>
<body>

<main class="main">
	<?php $this->load->view('admin/_partials/side_nav.php') ?>

	<div class="isi">
		<div class="color">
			<h1>Overview</h1>
		</div>
		<div class="content">
			
			<div style="display:flex; gap:1em; padding:3rem;">
		
				<!-- Artikel tdk ada gambar -->
				<a href="<?= site_url('admin/post') ?>">
					<button type="reset" class="btn btn-outline-secondary">
						Artikel 
						<h3>
							<?= $article_count ?>
						</h3>
					</button>	
				</a>

				<!-- Feedback -->
				<a href="<?= site_url('admin/feedback') ?>">
					<button type="submit" class="btn btn-outline-success">
						Feedback
						<h3>
							<?= $feedback_count ?>
						</h3>
					</button>
				</a>
			
			</div>
		</div>
	</div>
	<?php $this->load->view('admin/_partials/footer') ?>
</main>
</body>
</html>