<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_persona_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tipo_persona by id_tipo_persona
     */
    function get_tipo_persona($id_tipo_persona)
    {
        return $this->db->get_where('tipo_persona',array('id_tipo_persona'=>$id_tipo_persona))->row_array();
    }
        
    /*
     * Get all tipo_persona
     */
    function get_all_tipo_persona()
    {
        $this->db->order_by('id_tipo_persona', 'desc');
        return $this->db->get('tipo_persona')->result_array();
    }
        
    /*
     * function to add new tipo_persona
     */
    function add_tipo_persona($params)
    {
        $this->db->insert('tipo_persona',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tipo_persona
     */
    function update_tipo_persona($id_tipo_persona,$params)
    {
        $this->db->where('id_tipo_persona',$id_tipo_persona);
        return $this->db->update('tipo_persona',$params);
    }
    
    /*
     * function to delete tipo_persona
     */
    function delete_tipo_persona($id_tipo_persona)
    {
        return $this->db->delete('tipo_persona',array('id_tipo_persona'=>$id_tipo_persona));
    }
}
