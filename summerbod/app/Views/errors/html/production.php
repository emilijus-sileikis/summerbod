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

<div class="noise"></div>
<div class="overlay"></div>
<div class="terminal">
  <h1>Error <span class="errorcode">500</span> :/</h1>
  <p class="output">Sorry, the server must have been hacked or something...</p>
  <p class="output">Try to contact the server administrator or keep trying and maybe the problem will solve itself.</p>
  <p class="output"><a href="<?php echo base_url('public/home'); ?>">Try again!</a>.</p>
  <p class="output">Good luck.<span class="blink">_</span></p>
</div>
</div>
</body>

</html>
