<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Producto extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->library('form_validation');
        $this->load->library('validaciones'); 
         $this->load->library('ion_auth');  
    } 

    /*
     * Listing of producto
     */
    function index()
    {
         $user = $this->ion_auth->user()->row();
            if($this->ion_auth->loginCheck() && $this->ion_auth->RolCheck($user->id, $this->config->item('VerProductos'))){
                $data['usuario'] =$user->first_name;
                $data['id_user'] =$user->id;   
                        $data['producto'] = $this->Producto_model->get_all_producto();
                        $this->load->model('Persona_model');
                            $data['all_personas'] = $this->Persona_model->get_all_personas_Proveedores();
                        
                        $this->load->view('navbar', $data);
                        $this->load->view('producto/index',$data);
    }
    }

    /*
     * Adding a new producto
     */
    function add()
    {   
       
       $this->form_validation->set_rules($this->validaciones->Productos());
    
        if($this->form_validation->run())     
        {   
            $params = array(
                'id_proveedor_producto' => $this->input->post('id_proveedor_producto'),
                'nombre_producto' => $this->input->post('nombre_producto'),
                'precio_compra_producto' => $this->input->post('precio_compra_producto'),
                'precio_venta_producto' => $this->input->post('precio_venta_producto'),
                'stock_producto' => $this->input->post('stock_producto'),
                'stock_minimo_producto' => $this->input->post('stock_minimo_producto'),
            );
            
            $producto_id = $this->Producto_model->add_producto($params);
            redirect('producto/index');
        }
        else
        {
            $this->load->model('Persona_model');
            $data['all_personas'] = $this->Persona_model->get_all_personas_Proveedores();
            
            $data['_view'] = 'producto/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a producto
     */
    function edit($id_producto)
    {   
        // check if the producto exists before trying to edit it
        $data['producto'] = $this->Producto_model->get_producto($id_producto);
        
        if(isset($data['producto']['id_producto']))
        {
           $this->form_validation->set_rules($this->validaciones->Productos());
        
            if($this->form_validation->run())     
            {   
                $params = array(
                    'id_proveedor_producto' => $this->input->post('id_proveedor_producto'),
                    'nombre_producto' => $this->input->post('nombre_producto'),
                    'precio_compra_producto' => $this->input->post('precio_compra_producto'),
                    'precio_venta_producto' => $this->input->post('precio_venta_producto'),
                    'stock_producto' => $this->input->post('stock_producto'),
                    'stock_minimo_producto' => $this->input->post('stock_minimo_producto'),
                );

                $this->Producto_model->update_producto($id_producto,$params);            
                redirect('producto/index');
            }
            else
            {
                $this->load->model('Persona_model');
                $data['all_personas'] = $this->Persona_model->get_all_personas_Proveedores();

                $data['_view'] = 'producto/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The producto you are trying to edit does not exist.');
    } 

    /*
     * Deleting producto
     */
    function remove($id_producto)
    {
        $producto = $this->Producto_model->get_producto($id_producto);

        // check if the producto exists before trying to delete it
        if(isset($producto['id_producto']))
        {
            $this->Producto_model->delete_producto($id_producto);
            redirect('producto/index');
        }
        else
            show_error('The producto you are trying to delete does not exist.');
    }
    
}