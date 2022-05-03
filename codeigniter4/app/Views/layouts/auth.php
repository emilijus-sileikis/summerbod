<!DOCTYPE html>
<html lang="en">
<head>
  <title>Summerbod</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo view('partials/menu_no_bar'); ?>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/nav.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

   <?= $this->renderSection("body") ?>

</body>
</html>