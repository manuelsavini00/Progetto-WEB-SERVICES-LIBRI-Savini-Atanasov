<?php
 function get_sconti(){

	$str = file_get_contents('http://localhost/json/libricateg.json');
	$categ = json_decode($str, true); 
	 
	 $sconti_id = array();
	 foreach($libricateg['libricateg'] as $sconto)
	 {
		 if($sconto['sconto'] != 0)
			array_push($sconti_id, $libricateg['sconto'], $libricateg['id']); 
	 }
	 asort($sconti_id);
	 
	 $str2 = file_get_contents('http://localhost/json/libri.json');
	 $libri = json_decode($str2, true); 
	
	$libri_scontati = array();
	
	foreach($sconti as $id)
	{
		foreach($libri['book'] as $libro){
			if($id == $libro['id'])
				array_push($libri_scontati, $libro['nome'],$id['sconto']);
		}
	}
	  return $libri_scontati;
 }
?>