<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="container">
		<h1>Pagination with CI</h1>

		<?php echo $this->table->generate($records); ?>
		<?php echo $this->pagination->create_links(); ?>
	</div>
</body>
</html>