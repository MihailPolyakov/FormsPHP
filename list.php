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
	/*echo "<pre>";
	print_r($_FILES);
	echo "<pre>";*/
}
if (move_uploaded_file($_FILES['tests'] ['tmp_name'] ['0'], 'exams/testss1.json') && move_uploaded_file($_FILES['tests'] ['tmp_name'] ['1'], 'exams/testss2.json') && move_uploaded_file($_FILES['tests'] ['tmp_name'] ['2'], 'exams/testss3.json')) {
	echo 'Файлы успешно загружены, выбирайте тест =)';
} else{
	echo 'К сожалению файлы не загружены, повторите загрузку';
}

?>

	<?php for ($i=0; $i<3; $i++) {?> 
		<p> <?php print_r($_FILES['tests'] ['name'] [$i]);?></p>
	<?php } ?>

	<form action="test.php>" method="GET">
	<input type="text" name="number" placeholder="Введите номер теста">
  	<input type="submit" value="Отправить">  
	</form>
