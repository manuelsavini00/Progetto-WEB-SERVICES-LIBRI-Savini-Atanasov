<?php
 function get_sconti(){

	$str = file_get_contents('libricateg.json');
	$categ = json_decode($str, true); 
	 
	 $sconti_id = array();
	 foreach($categ['libricateg'] as $sconto)
	 {
		 if($sconto['sconto'] != 0)
		 {
		
			array_push($sconti_id, array('libro'=>$sconto['sconto'], 'id' => $sconto['id']));
		 }
	 }
	 asort($sconti_id);
	 
	 
	 $str2 = file_get_contents('libri.json');
	 $libri = json_decode($str2, true); 
	
	$libri_scontati = array();
	
	foreach($sconti_id as $id)
	{
		//print_r($id['sconto']);
		foreach($libri['book'] as $libro){
		
			if($id['id'] == $libro['id'])
				array_push($libri_scontati ,array ('titolo'=> $libro['titolo'], 'sconto' =>$id['libro']));
		}
	}
	  return $libri_scontati;
 }
?>