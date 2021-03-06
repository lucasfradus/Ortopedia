<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Productos_pedido extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Productos_pedido_model');
    } 

    /*
     * Listing of productos_pedido
     */
    function index()
    {
        $data['productos_pedido'] = $this->Productos_pedido_model->get_all_productos_pedido();
        
        $data['_view'] = 'productos_pedido/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new productos_pedido
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_pedido' => $this->input->post('id_pedido'),
				'id_producto' => $this->input->post('id_producto'),
            );
            
            $productos_pedido_id = $this->Productos_pedido_model->add_productos_pedido($params);
            redirect('productos_pedido/index');
        }
        else
        {            
            $data['_view'] = 'productos_pedido/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a productos_pedido
     */
    function edit($)
    {   
        // check if the productos_pedido exists before trying to edit it
        $data['productos_pedido'] = $this->Productos_pedido_model->get_productos_pedido($);
        
        if(isset($data['productos_pedido']['']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_pedido' => $this->input->post('id_pedido'),
					'id_producto' => $this->input->post('id_producto'),
                );

                $this->Productos_pedido_model->update_productos_pedido($,$params);            
                redirect('productos_pedido/index');
            }
            else
            {
                $data['_view'] = 'productos_pedido/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The productos_pedido you are trying to edit does not exist.');
    } 

    /*
     * Deleting productos_pedido
     */
    function remove($)
    {
        $productos_pedido = $this->Productos_pedido_model->get_productos_pedido($);

        // check if the productos_pedido exists before trying to delete it
        if(isset($productos_pedido['']))
        {
            $this->Productos_pedido_model->delete_productos_pedido($);
            redirect('productos_pedido/index');
        }
        else
            show_error('The productos_pedido you are trying to delete does not exist.');
    }
    
}
