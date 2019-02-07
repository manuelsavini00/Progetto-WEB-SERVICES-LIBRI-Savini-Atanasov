<?php
 function get_categ($find){

	$str = file_get_contents('http://localhost/json/libricateg.json');
	$categ = json_decode($str, true); 
	 
	 $id_libri = array();
	 foreach($categ['libricateg'] as $categ)
	 {
		 if($categ['tipo']==$find)
		 {
			array_push($id_libri, $categ['id']); 
	
		 }
	 }
	  return $id_libri;
 }

?>