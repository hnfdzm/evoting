<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Setting</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<style>
	.isi{
		background-color:gray;
		padding: 2rem;
		border-radius: 20px;
	}
	.main{
		background-color: lightgray;
	}
</style>
<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Settings</h1>

			<div class="isi">
				<div class="card">
					<div class="card-header">
						<b>Avatar</b>
						<div style="display: flex; gap: 1em">
							<a href="<?= site_url('admin/setting/remove_avatar') ?>" class="txt-red">Remove Avatar</a>
							<a href="<?= site_url('admin/setting/upload_avatar') ?>">Change Avatar</a>
						</div>
					</div>
					<div class="card-body">
						<?php
						$avatar = $current_user->avatar ?
							base_url('upload/avatar/' . $current_user->avatar)
							: get_gravatar($current_user->email)
						?>
						<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="80" width="80">
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<b>Profile Settings</b>
						<a href="<?= site_url('admin/setting/edit_profile') ?>">Edit Profile</a>
					</div>
					<div class="card-body">
						Name: <span class="text-gray"><?= html_escape($current_user->name) ?></span>
						<br>
						Email: <span class="text-gray"><?= html_escape($current_user->email) ?></span>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<b>Security & Password</b>
						<a href="<?= site_url('admin/setting/edit_password') ?>">Edit Password</a>
					</div>
					<div class="card-body">
						Your Password: <span class="text-gray">******</span>
						<br>
						Last Changed: <span class="text-gray"><?= $current_user->password_updated_at ?></span>
					</div>
				</div>
			</div>

		</div>
	</main>


	<?php if ($this->session->flashdata('message')) : ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>