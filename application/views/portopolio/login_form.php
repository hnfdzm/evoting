<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .jumbotron{
        width: 340px;
        background-color: #dfdfdf;
        border-radius: 10px;
    }
    form{
        background-color: ;
        margin-bottom: 300px;
        margin-top: 160px;
        left: center;
        width: 300px;

    }
    input {
        position: relative;
	    display: inline-block;
        padding: 0.5rem;
        margin-bottom: 1rem;
        width: 100%;
        border-radius: 10px;
    }
</style>
<body>

<div class="container text-center">
    <h1>login</h1>
    <p>Masuk ke Dashboard</p>

    <?php if($this->session->flashdata('message_login_error')): ?>
        <div class="invalid-feedback">
            <?php $this->session->flashdata('message_login_error') ?>
        </div>
        <?php endif?>
        <center>
        <div class="jumbotron">
        <form action="" method="post" style="max-width:600px;" >
            
            <!-- username -->
            <div class="mb-3">
                <label for="name">Email/Username : </label>
                <input type="text" name="username" class="<?= form_error('username') ? 'invalid' : '' ?>" placeholder="Your username or email" value="<?= set_value('password') ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('username') ?>
                </div>
            </div>

            <!-- password -->
            <div class="mb-3">
                <label for="password">Password : </label>
                <input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>" placeholder="Enter your password" value="<?= set_value('password') ?>" required />
                <div class="invalid-feedback">
                    <?= form_error('password') ?>
                </div>
            </div>

            <div>
                <input type="submit" class="button button-primary" value="login">
            </div> 
        </form>
        </div>
        </center>
</div>
    
</body>
</html>