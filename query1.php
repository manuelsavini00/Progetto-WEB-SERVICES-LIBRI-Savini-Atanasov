<?php
 function get_result($reparto, $id_libro){

	$str = file_get_contents('libri.json');
	$libri = json_decode($str, true); 
	 
	 $result = 0;
	 foreach($id_libro as $libro)
	 {
		 foreach($libri['book'] as $res){
			if($res['id'] == $libro && $reparto == $res['reparto'])
			{
				 $result++;
	
			}
	 }
	 }
	  return $result;
 }

?>