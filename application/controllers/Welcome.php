<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function prueba1 ()
	{
		$this->load->view('prueba1');
		//echo base_url();
	}

	public function prueba2 ()
	{
		$this->Gestiones_model->insertDiseno();
	}
}
