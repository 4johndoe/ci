<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<div id="container">
		<p>My view has been loaded</p>

		<?php foreach ($rows as $r) { ?>
			<h1><?php echo $r->title; ?></h1>
		<?php } ?>
	</div>
</body>
</html>