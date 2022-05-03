
<?php echo view('partials/menu_no_bar'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css'); ?>">

<form class="modal-content animate" action="<?= base_url('public/register') ?>" method="post">

    <h2 style="text-align: center;">Register</h2>

    <?php if (isset($validation)) : ?>

    <div class="alert alert-danger" role="alert" style="text-align:center; color:red;">
        <?= $validation->listErrors() ?>
    </div>

    <?php endif; ?>

    <div class="container">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter Name" required>

        <label for="email"><b>Email</b></label>
        <input type="email" name="email" id="email" placeholder="Enter Email" required>

        <label for="password"><b>Password</b></label>
        <input type="password" name="password" id="password" placeholder="Enter Password" required>

        <label for="password_confirm">Confirm Password</label>
        <input type="password" name="password_confirm" id="password_confirm" placeholder="Repeat Password">

        <button type="submit">Register</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a href="<?= base_url('public/login') ?>" style="text-align:left; color:black;">Already have an account? Login Here</a>
    </div>

</form>
<?php echo view('partials/footer'); ?>
