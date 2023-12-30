<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Setting</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Reset Password</h1>

			<form action="" method="POST">
				<div>
					<label for="password">Password Baru</label>
					<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
					value="<?= set_value("password") ?>" required/>
					<div class="invalid-feedback">
						<?= form_error('password') ?>
					</div>
				</div>
				<div>
					<label for="password_confirm">Konfirmasi Password Baru</label>
					<input type="password" name="password_confirm" class="<?= form_error('password_confirm') ? 'invalid' : '' ?>"
					value="<?= set_value("password_confirm") ?>" required/>
					<div class="invalid-feedback">
						<?= form_error('password_confirm') ?>
					</div>
				</div>

				<div>
					<button type="submit" name="save" class="button button-primary">Save Password</button>
				</div>
			</form>

		</div>
	</main>
</body>

</html>