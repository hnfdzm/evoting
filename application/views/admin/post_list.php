<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<style>
	.main{
		background-color: lightgray;
	}
	.isi{
		background-color:lightgray;
		padding:;
	}
	.color{
		background-color:rgb(110, 110, 110);
		width: 1000px;
		height: 85px;
		padding: 1rem;
	}
	.content{
		padding: 2rem;
	}
	.inside{
		background-color:gray;
		padding: 1rem;
		border-radius: 10px;
	}
</style>
<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="isi">
			<div class="color">
				<h1>List Artikel</h1>
			</div>

			<div class="content">
				<div class="inside">
					<a href="<?= site_url('admin/post/new') ?>">
						<button type="button" class="btn btn-primary" style="width: 150px;">+ Artikel</button>
					</a><br><br>

					<form action="" method="GEt" class="d-flex" role="search">
						<input class="form-control me-2" type="search" name="keyword" placeholder="Cari Artikel" value="<?= html_escape($keyword) ?>" aria-label="Search">
						<button class="btn btn-success" type="submit">Search</button>
					</form><br>
					
					<table class="table table-secondary table-striped">
						<!-- kepala tabel -->
						<thead>
							<tr>
								<th>No.</th>
								<th>Title</th>
								<th>Subjeck</th>
								<th style="width: 15%;" class="text-center">Status</th>
								<th style="width: 25%;" class="text-center">Action</th>
							</tr>
						</thead>
						<!-- isi tabel -->
						<tbody>
							<?php 
							$urut = 1;
							foreach($articles as $article): ?>
							<tr>
								<td>
									<div>
										<?php echo $urut++; ?>
									</div>
								</td>
								<td>
									<div><?= $article->title ?></div>
									<div class="text-gray"><small><?= $article->created_at ?><small></div>
								</td>
								<td>
									<div><?= $article->kt ?></div>
								</td>

								<?php if($article->draft === 'true'): ?>
									<td class="text-center text-secondary">Draft</td>
								<?php else: ?>
									<td class="text-center text-success">Published</td>
								<?php endif ?>

								<td>
									<div class="action">
										<a href="<?= site_url('article/'.$article->slug) ?>" class="btn btn-primary" target="_blank" role="button">Preview</a>
										<a href="<?= site_url('admin/post/edit/'.$article->id) ?>" class="btn btn-success" role="button">Edit</a>
										<a href="#" 
											data-delete-url="<?= site_url('admin/post/delete/'.$article->id) ?>" 
											class="btn btn-danger" 
											role="button"
											onclick="deleteConfirm(this)">Delete</a>
									</div>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<?php $this->load->view('admin/_partials/footer.php') ?>
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