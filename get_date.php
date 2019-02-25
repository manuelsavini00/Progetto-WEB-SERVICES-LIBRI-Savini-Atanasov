<?php
 function get_date($d1, $d2){

	$str = file_get_contents('http://localhost/json/libri.json');
	$libri = json_decode($str, true); 
	 
	$libri_date = array();
	
	$date1=date_create($d1);
	$date2=date_create($d2);
	
	 foreach($libri['book'] as $libro)
		 if(date_diff($libro['dataArchiviazione'],$date2 > 0 && date_diff($date1,$libro['dataArchiviazione']) < 0)
			array_push($libri_date, $libro['nome'], $libro['dataArchiviazione']);
		
	 {
		 if(date_diff($libro['dataArchiviazione'],$date2) > 0 && date_diff($date1,$libro['dataArchiviazione']) < 0)
		 {
			array_push($libri_date, array($libro['nome'], libro['dataArchiviazione'])); 
		 }
	 }
	  return $libri_date;
 }

?>