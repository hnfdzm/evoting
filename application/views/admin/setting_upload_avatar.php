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
        <h1>Upload Avatar</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="avatar">Pilih gambar Avatar</label>
                <input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg, image/jpg, image/gif">
            </div>

            <?php if (isset($error)) : ?>
                <div class="invalid-feedback">
                    <?= $error ?>
                </div>
            <?php endif ?>

            <div>
                <button type="submit" name="save" class="button button-primary">Upload</button>
            </div>
        </form>

    </div>
</main>
    
</body>
</html>