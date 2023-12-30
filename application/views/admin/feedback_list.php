<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback</title>
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
				<h1>Feedback</h1>
			</div>

			<div class="content">
			<?php foreach($feedbacks as $feedback): ?>

			<div class="card">
				<div class="card-header">
					<div>
						<b><?= $feedback->name ?></b><br><small class="text-secondary"><?= $feedback->email ?></small>
					</div>
					<small class="text-secondary"><?= $feedback->created_at ?></small>
				</div>
				<div class="card-body">
					<h6 class="card-title"></h6>
					<p class="card-text"><?= $feedback->message ?></p>
					<a href="#" data-delete-url="<?= site_url('admin/feedback/delete/'.$feedback->id) ?>" class="btn btn-danger" onclick="deleteConfirm(this)">Delete</a>
				</div>
			</div>
			
			<?php endforeach ?>
			</div>
			
		</div>
	</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
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