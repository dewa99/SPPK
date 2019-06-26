<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Alasan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get alasan by id
     */
    function get_alasan($id)
    {
        return $this->db->get_where('alasan',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all alasan
     */
    function get_all_alasan()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('alasan')->result_array();
    }
        
    /*
     * function to add new alasan
     */
    function add_alasan($params)
    {
        $this->db->insert('alasan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update alasan
     */
    function update_alasan($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('alasan',$params);
    }
    
    /*
     * function to delete alasan
     */
    function delete_alasan($id)
    {
        return $this->db->delete('alasan',array('id'=>$id));
    }
}
