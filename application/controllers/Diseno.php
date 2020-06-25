<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Content-Type: text/html; charset=utf-8");

defined('BASEPATH') OR exit('No direct script access allowed');

class Diseno extends CI_Controller {
	
	public function setDiseno ()
	{
		$this->Diseno_model->setDiseno();
	}

	public function getDiseno ()
	{
		$result=$this->Diseno_model->getDiseno();
		//print_r($result);
		header('Content-Type: application/json');
    	echo json_encode( $result );
	}

	public function updateDiseno ()
	{
		$this->Diseno_model->updateDiseno();
	}

	
}
