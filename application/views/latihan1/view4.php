<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>

<body>
	<h1><?php echo $heading; ?></h1>
    <h3>Band Favorite</h3>
	<ul><?php foreach ($band as $row) { echo '<li>'.$row.'</li>'; } ?></ul>
</body>
</html>