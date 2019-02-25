<?php
 function get_date($d1, $d2){

	$str = file_get_contents('http://localhost/json/libri.json');
	$libri = json_decode($str, true); 
	 
	$libri_date = array();
	
	$date1=date_create($d1);
	$date2=date_create($d2);
	
	 foreach($libri['book'] as $libro)
<<<<<<< HEAD

=======
		 if(date_diff($libro['dataArchiviazione'],$date2 > 0 && date_diff($date1,$libro['dataArchiviazione']) < 0)
			array_push($libri_date, $libro['nome'], $libro['dataArchiviazione']);
		
>>>>>>> 523c34c7d6cb404b86f2d8a77e47bc350dfc399a
	 {
		 if(date_diff($libro['dataArchiviazione'],$date2) > 0 && date_diff($date1,$libro['dataArchiviazione']) < 0)
		 {
			array_push($libri_date, array($libro['nome'], libro['dataArchiviazione'])); 
		 }
	 }
<<<<<<< HEAD

=======
>>>>>>> 523c34c7d6cb404b86f2d8a77e47bc350dfc399a
	  return $libri_date;
 }

?>