<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model('Persona_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->load->helper(array('url','language'));
        $this->load->library('session');
        $this->lang->load('spanish');
        $this->load->library('ion_auth');   
        $this->load->library('validaciones');      
    } 

	public function index()
	{
		 $user = $this->ion_auth->user()->row();
            if($this->ion_auth->loginCheck() && $this->ion_auth->RolCheck($user->id, $this->config->item('VerClientes'))){
                $data['usuario'] =$user->first_name;
                $data['id_user'] =$user->id;
						$this->load->view('navbar', $data);
			}
		}
	}
