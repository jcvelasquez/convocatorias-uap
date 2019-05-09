<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function resumen()
	{
		$this->load->view('admin/index');
	}

	public function convocatorias()
	{
		$this->load->view('admin/convocatorias');
	}

	public function sedes()
	{
		$this->load->view('admin/sedes');
	}



}
