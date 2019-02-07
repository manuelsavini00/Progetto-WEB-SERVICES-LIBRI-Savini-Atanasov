<?php
 function get_result($reparto, $id_libro){

	$str = file_get_contents('http://localhost/json/libri.json');
	$libri = json_decode($str, true); 
	 
	 $result = 0;
	 foreach($libri['book'] as $libro)
	 {
		 foreach($result as $res){
			if($res == $libro['id'] && $reparto == $libro['reparto'])
			{
				 $result++;
	
			}
	 }
	 }
	  return $result;
 }

?>