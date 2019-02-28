<?php
 function get_sconti(){

	$str = file_get_contents('libricateg.json');
	$categ = json_decode($str, true); 
	 
	 $sconti_id = array();
	 foreach($categ['libricateg'] as $sconto)
	 {
		 if($sconto['sconto'] != 0)
			array_push($sconti_id, $sconto['sconto'], $sconto['id']); 
	 }
	 asort($sconti_id);
	 
	 $str2 = file_get_contents('libri.json');
	 $libri = json_decode($str2, true); 
	
	$libri_scontati = array();
	
	foreach($sconti_id as $id)
	{
		foreach($libri['book'] as $libro){
			if($id == $libro['id'])
				array_push($libri_scontati, $libro['titolo'],$id['sconto']);
		}
	}
	  return $libri_scontati;
 }
?>