<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestiones extends CI_Controller {
	
	public function setDiseno ()
	{
		$this->Gestiones_model->setDiseno();
	}

	public function getDiseno ()
	{
		$result=$this->Gestiones_model->getDiseno();
		print_r($result);
	}
}
