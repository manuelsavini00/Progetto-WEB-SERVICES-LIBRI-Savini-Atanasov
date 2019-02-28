<?php

function get_date($d1,$d2){
	$str = file_get_contents('libri.json');
	$libri = json_decode($str, true); 
	 
	$libri_date = array();
	
	$date1=date_create($d1);
	$date2=date_create($d2);
	
	 foreach($libri['book'] as $libro)
	 
		 if($libro['dataArchiviazione'] < $date2 && $date1 > $libro['dataArchiviazione'])
		 {
			array_push($libri_date, array($libro['titolo'], $libro['dataArchiviazione'])); 
		 }
	 
	  return $libri_date;
 
}

?>

