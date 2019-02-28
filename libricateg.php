<?php
 function get_categ($find){

	$str = file_get_contents('http://localhost/Json/libricateg.json');
	$cat = json_decode($str, true); 
	 
	 $id_libri = array();
	 foreach($cat['libricateg'] as $categ)
	 {
		 if($categ['tipo']==$find)
		 {
			array_push($id_libri, $categ['id']); 
	
		 }
	 }
	  return $id_libri;
 }

?>