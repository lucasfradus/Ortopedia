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
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->view('header.php');
        $this->load->helper(array('url','language'));
        $this->load->library('session');
        $this->lang->load('spanish');
        $this->load->library('validaciones'); 
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
        $data['id'] = 'Cliente';
        $data['id_tipo'] = '1';
        $data['personas'] = $this->Persona_model->get_all_personas_Clientes();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }

    function indexEmpleados()
    {
        $data['tittle'] = 'Listado de Empleados';
        $data['id'] = 'Empleado';
        $data['id_tipo'] = '2';
        $data['personas'] = $this->Persona_model->get_all_personas_Empleados();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }

    function indexProveedores()
    {
        $data['tittle'] = 'Listado de Proveedores';
        $data['id'] = 'Proveedor';
        $data['id_tipo'] = '3';
        $data['personas'] = $this->Persona_model->get_all_personas_Proveedores();
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }   
    /*
     * Creo una nueva persona, el id que saco del link, indica si es cliente, empleado o proveedor
     */
    function add()
    {   
        $id_tipo = $this->uri->segment(3);
           if ( strcasecmp( $id_tipo, 'Cliente' ) == 0 ){
                        $id = '1'; 
                        $data['title'] = lang('title_new_user'); 
                    }else if(strcasecmp( $id_tipo, 'Empleado' ) == 0){
                        $id = '2';  
                        $data['title'] = lang('title_new_emplyee'); 
                    }else if(strcasecmp( $id_tipo, 'Proveedor' ) == 0){
                        $id = '3'; 
                        $data['title'] = lang('title_new_suplayer');  
                    } 

        $this->load->library('form_validation');
		$this->form_validation->set_rules($this->validaciones->Personas());
		
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
            
            $persona_id = $this->Persona_model->add_persona($params);
            //redireccionar al perfil del cliente
            $this->session->set_flashdata('success', lang('cli_new'));
            redirect($id_tipo);
        }
        else
        {
            $data['id_tipo'] = $id_tipo;
            $data['id'] = $id;
			$this->load->model('Tipo_persona_model');
			$data['all_tipo_persona'] = $this->Tipo_persona_model->get_all_tipo_persona();
            $data['_view'] = 'Persona/Add';
            $this->load->view('layouts/main',$data);
        }
    }  
      //esta funcion chequea si ya existe algun cliente con el dni que se esta tratando de cargar
        function dni_check($str){
            if ($this->Persona_model->ConsultarDNI($str)){ 
                $this->form_validation->set_message('dni_check', sprintf(lang('val_dni_check'), $str));
                    return FALSE;
            }
                else{
                        return TRUE;
                }
            }
            //esta funcion chequea si ya existe algun cliente con ese mail que se esta tratando de cargar
        function mail_check($str){
            if ($this->Persona_model->ConsultarMAIL($str)){ 
                $this->form_validation->set_message('mail_check', sprintf(lang('val_mail_check'), $str));
                    return FALSE;
            }
                else{
                        return TRUE;
                }
            }
                //Esta funcion valida que la fecha ingresada no sea posterior a la fecha del dia
        function date_check($date){
            if( strtotime($date) > strtotime('now') ) {
                   $this->form_validation->set_message('date_check', sprintf(lang('val_date_check'), $date));
                return FALSE;
            }
                    else{
                        return TRUE;
                    }
                }
    /*
     * Editing a persona
     */
    function edit($id_persona)
    {   
        // check if the persona exists before trying to edit it
        $data['persona'] = $this->Persona_model->get_persona($id_persona);
       
        if(isset($data['persona']['id_persona'])){
        $this->form_validation->set_rules($this->validaciones->PersonasEdit());
 
			if($this->form_validation->run())     
            {   
                $params = array(
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
                redirect($data['persona']['nombre_tipo_persona']);
            }
            else
            {
               // $data['id_tipo'] = $id_tipo;
               // $data['id'] = $id;
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
            //redirijo al tipo de persona que traje
            redirect($persona['nombre_tipo_persona']);
        }
        else
            show_error('The persona you are trying to delete does not exist.');
    }
    
}
