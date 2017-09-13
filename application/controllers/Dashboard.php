<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/main');
		$this->load->view('layouts/navbar.php');
	}
}
