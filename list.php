<!DOCTYPE html>
<html>
<head>
	<title>List</title>
</head>
<body>

</body>
</html>
<?php
if (!empty($_FILES)) {
	echo "<pre>";
	print_r($_FILES['tests'] ['name']);
	echo "<pre>";
}
?>
<form action="test.php>" method="GET">
	<?php 
	for ($i=0; $i<3 ; $i++) { ?> 
		<label><input type="radio" name="q1"><?php print_r($_FILES['tests'] ['name'] [$i]); ?> </label>
	<?php } ?>

  <input type="submit" value="Отправить">  
</form>
