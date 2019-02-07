<?php
 function get_reparto($find){

	$str = file_get_contents('http://localhost/json/reparti.json');
	$reparti = json_decode($str, true); 
	 
	 foreach($reparti['reparto'] as $reparto)
	 {
		 if($reparto['tipo']==$find)
		 {
			 return $reparto['id'];
			 break;
		 }
	 }
 }

?>