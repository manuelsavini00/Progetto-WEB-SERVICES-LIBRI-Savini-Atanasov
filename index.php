<?php
// process client request (via URL)
	header ("Content-Type_application/json");
	include ("function.php");
	include("libricateg.php");
	include("query1.php");
	
	
	if(!empty($_GET['name'])){
	
	
			$name=$_GET['name'];
			
			switch($name){
				
			case 1:
		
			$reparto=get_reparto("fumetti");
			$id_libro = get_categ("ultimi arrivi");
			
			$result = query1($reparto, $id_libro);

			deliver_response(200,"Quantità", $result);

			case 2:
			
			case 3:
				}
	else
	{
		//throw invalid request
		deliver_response(400,"Invalid request", NULL);
	}
	
	function deliver_response($status, $status_message, $data)
	{
		header("HTTP/1.1 $status $status_message");
		
		$response ['status']=$status;
		$response['status_message']=$status_message;
		$response['data']=$data;
		
		$json_response=json_encode($response);
		echo $json_response;
	}

?>