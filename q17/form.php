<!DOCTYPE html>
<html>
<head>
	<title>student</title>
</head>
<body>
	<?php
	$id = $_GET["id"]+1;
	?>

	</b>student number: <?php echo $id ?></b><br>
	<form action="main.php" method="post">
		Name:<input type="text" name="name"><br>
		Roll no.:<input type="number" name="roll"><br>
		marks:<input type="number" name="mark"><br>
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="submit" name="submit">
	</form>


</body>
</html>