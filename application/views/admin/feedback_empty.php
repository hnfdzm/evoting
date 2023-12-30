<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<body>
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
<main class="main">
	<?php $this->load->view('admin/_partials/side_nav.php') ?>

	<div class="isi">
		<div class="color">
			<h1>Feedback is Empty</h1>
		</div>
	</div>
	<div class="content">

		<p>No Feedback to Show</p>

	</div>
</main>
	
</body>
</html>