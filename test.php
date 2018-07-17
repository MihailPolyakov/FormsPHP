<?php
	if ($_GET['number']==1) {
		echo'Выводим первый тест';
		$test = file_get_contents("exams/testss1.json");
		$array =json_decode($test);?>
		<form action="" method="POST">

        <?php foreach ($array as $key => $value) {?>
          <fieldset>
            <legend> <?php echo $key ?></legend>
            <?php foreach ($value as $asks) {?>
            <label><input type="radio" name="q1"> <?php echo $asks ?> </label>  
            <?php } ?>
          </fieldset> 
        <?php } ?>
        <input type="submit" value="Отправить">  
      </form>
	
	<?php } elseif ($_GET['number']==2) {
		echo'Выводим второй тест';
		$test = file_get_contents("exams/testss2.json");
		$array =json_decode($test);?>
		<form action="" method="POST">

        <?php foreach ($array as $key => $value) {?>
          <fieldset>
            <legend> <?php echo $key ?></legend>
            <?php foreach ($value as $asks) {?>
            <label><input type="radio" name="q1"> <?php echo $asks ?> </label>  
            <?php } ?>
          </fieldset> 
        <?php } ?>
        <input type="submit" value="Отправить">  
      </form>
	<?php 
	} elseif ($_GET['number']==3) {
		echo'Выводим Третий тест';
		$test = file_get_contents("exams/testss3.json");
		$array =json_decode($test);?>
		<form action="" method="POST">

        <?php foreach ($array as $key => $value) {?>
          <fieldset>
            <legend> <?php echo $key ?></legend>
            <?php foreach ($value as $asks) {?>
            <label><input type="radio" name="q1"> <?php echo $asks ?> </label>  
            <?php } ?>
          </fieldset> 
        <?php } ?>
        <input type="submit" value="Отправить">  
      </form>
	<?php } else {
		echo'Извините, но такого номера теста не существует';
	}

	var_dump($_POST);

