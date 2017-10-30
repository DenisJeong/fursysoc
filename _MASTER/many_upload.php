	<?php
	
	include_once "../include/db_helper.php";
	include_once "../include/helper.php";
	include "../data/works_ex.php";

	//var_dump($works_ex[0]);
	//print_r(count($works_ex));
	//print_r($works_ex[9]['subject']);

	
	db_open();

//	$sql = "ALTER TABLE work_ex AUTO_INCREMENT = 1";

	for ($i = 0; $i < count($works_ex); $i ++) { 

		$sql_body = "SET name = '%s', division = '%s', subject = '%s', term = '%s', category = '%s', logo = '%s', link = '%s'  ";

		$sql = "INSERT INTO work_ex {$sql_body}";
		
		foreach ($works_ex[$i] as $key => $value) {
				
			$works_DB = $works_ex[$i];
				
			$input = array($works_DB['name'], $works_DB['division'], $works_DB['subject'], $works_DB['term'], $works_DB['category'], $works_DB['image-path'], $works_DB['link']);
			//var_dump($file_name);
		}
	$result = db_query($sql, $input);
	}


	
	//	if (!$id) {
//		$id = mysqli_insert_id($_DB);	
//	}

	//echo "id: " . $id;

	db_close();
	
	?>