<?php echo view('partials/menu_no_bar'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">

<form class="modal-content animate" action="<?= base_url('public/login') ?>" method="post">

    <h2 style="text-align: center;">Login</h2>

    <?php if (isset($validation)) : ?>

    <div class="alert alert-danger" role="alert" style="text-align:center; color:red;">
        <?= $validation->listErrors() ?>
    </div>
    
    <?php endif; ?>

    <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" class="name" placeholder="Enter Email" name="email" id="email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" class="name" placeholder="Enter Password" name="password" id="password" required>

        <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a href="<?= base_url('public/register') ?>" style="text-align:left; color:black;">Don't have an account? Register Here</a>
    </div>

</form>
<?php echo view('partials/footer'); ?>
