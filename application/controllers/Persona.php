<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Persona extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Persona_model');
        $this->load->view('header.php');
    } 

  function index()
    {
        $data['tittle'] = 'Listado de Clientes';
        $data['personas'] = $this->Persona_model->get_all_personas_Clientes();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }


    /*
     * Listas Personas
     * cada tipo de persona tiene un id; se lo paso a cada metodo para poder usarlo cuando doy de alta una persona nueva
     */
    function indexClientes()
    {
        $data['tittle'] = 'Listado de Clientes';
        $data['id'] = '1';
        $data['personas'] = $this->Persona_model->get_all_personas_Clientes();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }

    function indexEmpleados()
    {
        $data['tittle'] = 'Listado de Empleados';
        $data['id'] = '2';
        $data['personas'] = $this->Persona_model->get_all_personas_Empleados();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }

    function indexProveedores()
    {
        $data['tittle'] = 'Listado de Proveedores';
        $data['id'] = '3';
        $data['personas'] = $this->Persona_model->get_all_personas_Proveedores();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }   
    /*
     * Creo una nueva persona, el id que recibo, indica si es cliente, empleado o proveedor
     */
    function add($id)
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('dni_persona','Dni Persona','required');
		$this->form_validation->set_rules('nombre_persona','Nombre Persona','required');
		$this->form_validation->set_rules('apellido_persona','Apellido Persona','required');
		$this->form_validation->set_rules('tel_persona','Tel Persona','required');
		$this->form_validation->set_rules('mail_persona','Mail Persona','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'tipo_persona' => $id,
				'dni_persona' => $this->input->post('dni_persona'),
				'nombre_persona' => $this->input->post('nombre_persona'),
				'apellido_persona' => $this->input->post('apellido_persona'),
				'fecha_nac_persona' => $this->input->post('fecha_nac_persona'),
				'tel_persona' => $this->input->post('tel_persona'),
				'domiciolio_persona' => $this->input->post('domiciolio_persona'),
				'cp_persona' => $this->input->post('cp_persona'),
				'mail_persona' => $this->input->post('mail_persona'),
				'razon_social_persona' => $this->input->post('razon_social_persona'),
            );
            
            $persona_id = $this->Persona_model->add_persona($params);
            redirect('persona/index');
        }
        else
        {
			$this->load->model('Tipo_persona_model');
			$data['all_tipo_persona'] = $this->Tipo_persona_model->get_all_tipo_persona();
            
            $data['_view'] = 'persona/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a persona
     */
    function edit($id_persona)
    {   
        // check if the persona exists before trying to edit it
        $data['persona'] = $this->Persona_model->get_persona($id_persona);
        
        if(isset($data['persona']['id_persona']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('dni_persona','Dni Persona','required');
			$this->form_validation->set_rules('nombre_persona','Nombre Persona','required');
			$this->form_validation->set_rules('apellido_persona','Apellido Persona','required');
			$this->form_validation->set_rules('tel_persona','Tel Persona','required');
			$this->form_validation->set_rules('mail_persona','Mail Persona','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'tipo_persona' => $this->input->post('tipo_persona'),
					'dni_persona' => $this->input->post('dni_persona'),
					'nombre_persona' => $this->input->post('nombre_persona'),
					'apellido_persona' => $this->input->post('apellido_persona'),
					'fecha_nac_persona' => $this->input->post('fecha_nac_persona'),
					'tel_persona' => $this->input->post('tel_persona'),
					'domiciolio_persona' => $this->input->post('domiciolio_persona'),
					'cp_persona' => $this->input->post('cp_persona'),
					'mail_persona' => $this->input->post('mail_persona'),
					'razon_social_persona' => $this->input->post('razon_social_persona'),
                );

                $this->Persona_model->update_persona($id_persona,$params);            
                redirect('persona/index');
            }
            else
            {
				$this->load->model('Tipo_persona_model');
				$data['all_tipo_persona'] = $this->Tipo_persona_model->get_all_tipo_persona();

                $data['_view'] = 'persona/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The persona you are trying to edit does not exist.');
    } 

    /*
     * Deleting persona
     */
    function remove($id_persona)
    {
        $persona = $this->Persona_model->get_persona($id_persona);

        // check if the persona exists before trying to delete it
        if(isset($persona['id_persona']))
        {
            $this->Persona_model->delete_persona($id_persona);
            redirect('persona/index');
        }
        else
            show_error('The persona you are trying to delete does not exist.');
    }
    
}