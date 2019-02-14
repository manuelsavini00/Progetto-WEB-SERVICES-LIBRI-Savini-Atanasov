<?php
 function get_categ($find){

	$str = file_get_contents('http://localhost/json/libricateg.json');
	$categ = json_decode($str, true); 
	 
	 $sconti_id = array();
	 foreach($libricateg['libricateg'] as $sconto)
	 {
			array_push($sconti_id, $libricateg['sconto'], $libricateg['id']); 
	 }
	 
	  return $sconti_id;
 }
?>