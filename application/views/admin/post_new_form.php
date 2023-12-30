<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<style>
	input{
		border-radius: 5px;
	}
	.isi{
		background-color:gray;
		padding: 2rem;
		border-radius: 20px;
	}
	.main{
		background-color: lightgray;
	}
	#editor{
		min-height: 160px; 
		background-color: white;
	}
	label{
		color: white;
	}
</style>
<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Buat Artikel Baru</h1>

			<div class="isi">
				<form action="" method="POST" enctype="multipart/form-data">
					<div>
						<label for="title">Judul Artikel</label>
						<input type="text" name="title" required placeholder="Judul artikel" required maxlength="128"/>
						
					</div><br>

					<div>
						<label for="kt">Tujuan</label>
						<input type="text" name="kt" required placeholder="Tujuan" maxlength="128"/>
					</div><br>

					<div>
						<label for="content">Konten</label>
						<input type="hidden" name="content">
						<div id="editor" style="min-height: 160px;">
						</div>
					</div>

					<br>

					<div>
						<button type="submit" name="draft" class="button button-primary" value="true">Save to Draft</button>
						<button type="submit" name="draft" class="button button-success" value="false">Publish</button>
						<a href="<?= site_url('admin/post/new') ?>">
							<button type="reset" class="button button-danger">Reset</button>
						</a>
					</div>
				</form>
			</div>

			<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
			<script>
				var quill = new Quill('#editor', {
					theme: 'snow',
					modules: {
					toolbar: [
							[{ header: [1, 2, 3, 4, 5, 6, false] }],
							[{ font: [] }],
							["bold", "italic"],
							["link", "blockquote", "code-block", "image"],
							[{ list: "ordered" }, { list: "bullet" }],
							[{ script: "sub" }, { script: "super" }],
							[{ color: [] }, { background: [] }],
						]
					},
				});
				quill.on('text-change', function (delta, oldDelta, source) {
					document.querySelector("input[name='content']").value = quill.root.innerHTML;
				});
			</script>
		</div>
	</main>
</body>

</html>