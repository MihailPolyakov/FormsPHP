<?php	if (!empty($_GET)) {
			$array=0;
			$newarray=[];
			$test = 0;
			$int =0;
			$fl=0;
			$files='C:/xampp/htdocs/example/exams';
			$arrayfiles=scandir($files, 1);
			if (array_key_exists($_GET['number'], $arrayfiles) == true) {
				$int = $_GET['number'];
				if ($arrayfiles[$int]=='.' || $arrayfiles[$int]== '..'){
					echo 'такого номера не существует';
				} else {
					$fl=$arrayfiles[$int];
					$test = file_get_contents("exams/$fl");
					$array =json_decode($test);
					$qcount = 0;
					?>

					<form action="" method="POST">
        			<?php 			        				        
				        foreach ($array as $key => $value) {
				        	++$qcount;
				        	$i = 0;
				        	?>
				          <fieldset>
				            <legend> <?php echo $key ?></legend>
				            <?php foreach ($value as $asks) {
				            	if (is_array($asks)){		
					            		foreach ($asks as $value) {	
					            			++$i;?>			            						 
				            <label><input type="radio" name="q<?php echo $qcount?>" value = "<?php echo $i?>"> <?php echo $value ?></label>

				            <?php  }
				            	 } elseif (!is_array($asks)) {
					            	 $newarray[]=$asks;
				            	 }
				            	 
				            	}?>	  
				          </fieldset> 
				        <?php }
				    	    
			    		}?>
			          <input type="submit" value="Отправить">  
			      	</form>
				
	   <?php } else {
				echo 'Такого номера теста не существует';
			}
		};
	if (!empty($_POST)){
	$i=-1;
	$count=0;	

	foreach ($_POST as $value) {
		++$i;
		if ($value == $newarray[$i]) {
			++$count;
		}
	};

	echo 'Правельных ответов' . ' ' . $count;
	}	
	
