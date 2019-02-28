<?php
// process client request (via URL)
	header ("Content-Type_application/json");
	include ("get_reparto.php");
	include("libricateg.php");
	//include("get_date.php");
	include("get_sconti.php");
	include("query1.php");
	
	
	
	if(!empty($_GET['name'])){
	
	
			$name=$_GET['name'];
			
			switch($name){
				
			case 1:
		
			$reparto=get_reparto("fumetti");
			$id_libro = get_categ("ultimi arrivi");
			
			$result = get_result($reparto, $id_libro);

			deliver_response($result);
			break;
			case 2:
			
			$sconti = get_sconti();
			deliver_response($sconti);
			break;

			case 3:


			$d1 = $_GET['d1'];

			$d2 = $_GET['d2'];
			
			$libri_date = get_date(d1, d2);
			deliver_response($lbri_date);
			break;
			/*case 4:
			
			$id_carrello = $_GET['id'];
			
			$carrello = get_carrello($id);
			//deliver_response(200,"Carrello dell' utente", 
			break;



*/
				}
				
	}
	else
	{
		//throw invalid request
		deliver_response(400,"Invalid request", NULL);
	}
	
	function deliver_response($data)
	{
		header("HTTP/1.1");
		
		
		$response = $data;
		
		$json_response=json_encode($response);
		echo $json_response;
	}

?>