
<<<<<<< HEAD
=======
	$str = file_get_contents('http://localhost/json/libri.json');
	$libri = json_decode($str, true); 
	 
	$libri_date = array();
	
	$date1=date_create($d1);
	$date2=date_create($d2);
	
	 foreach($libri['book'] as $libro)
	 
		 if($libro['dataArchiviazione'] < $date2 && $date1 > $libro['dataArchiviazione'])
		 {
			array_push($libri_date, array($libro['nome'], libro['dataArchiviazione'])); 
		 }
	 
	  return $libri_date;
 }

?>
>>>>>>> 2c20b27680b08fea3c1f5528616b94503c7e6780
