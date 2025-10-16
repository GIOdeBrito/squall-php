<?php

/* SquallPHP Layout */

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="GIOdeBrito">
		<meta name="description" content="SquallPHP default layout">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?= isset($title) ? $title : 'Page' ?> | SquallPHP</title>
	</head>

	<body>
		<?= $body ?>
	</body>
</html>