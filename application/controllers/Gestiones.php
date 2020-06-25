<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestiones extends CI_Controller {
	
	public function insertDiseno ()
	{
		$this->Gestiones_model->insertDiseno();
	}
}
