<?php echo view('partials/menu_no_bar'); ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/account.css'); ?>">

<div class="card" style="margin-top:10%;">
    <div>
        <h1>Hi, <?= $user['name'] ?></h1>
        <p class="title">Something</p>
        <p>Email: <?= $user['email'] ?></p>
        <h3><a href="<?= site_url('public/logout') ?>">Logout</a></h3>
    </div>
</div>
<?php echo view('partials/footer'); ?>