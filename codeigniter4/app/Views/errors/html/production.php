<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">

	<title>Whoops!</title>

	<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
	</style>
</head>
<body>

<div class="wrapper">
<div class="box">
<h1>500</h1>
<p>Sorry, it's me, not you.</p>
<p>&#58;&#40;</p>
<p><a href="<?php echo base_url('public/home'); ?>">Let me try again!</a></p>
</div>
</div>

</body>

</html>
