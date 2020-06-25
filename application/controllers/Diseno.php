<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diseno extends CI_Controller {
	
	public function setDiseno ()
	{
		$this->Diseno_model->setDiseno();
	}

	public function getDiseno ()
	{
		$result=$this->Diseno_model->getDiseno();
		print_r($result);
	}

	public function updateDiseno ()
	{
		$this->Diseno_model->updateDiseno();
	}
}
