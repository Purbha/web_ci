<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>

<body>
	<h1><?php echo $heading; ?></h1>
    <ul>
		<?php
		foreach($query as $row) {
			echo '<li>'.$row->nmbar.'</li>';
		}
		?>
	</ul>
</body>
</html>