<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tarif_dokter_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tarif_dokter by kd_tarif_dokter
     */
    function get_tarif_dokter($kd_tarif_dokter)
    {
        return $this->db->get_where('tarif_dokter',array('kd_tarif_dokter'=>$kd_tarif_dokter))->row_array();
    }
        
    /*
     * Get all tarif_dokter
     */
    function get_all_tarif_dokter()
    {
        $this->db->order_by('kd_tarif_dokter', 'desc');
        return $this->db->get('tarif_dokter')->result_array();
    }
        
    /*
     * function to add new tarif_dokter
     */
    function add_tarif_dokter($params)
    {
        return $this->db->insert('tarif_dokter',$params);
    }
    
    /*
     * function to update tarif_dokter
     */
    function update_tarif_dokter($kd_tarif_dokter,$params)
    {
        $this->db->where('kd_tarif_dokter',$kd_tarif_dokter);
        return $this->db->update('tarif_dokter',$params);
    }
    
    /*
     * function to delete tarif_dokter
     */
    function delete_tarif_dokter($kd_tarif_dokter)
    {
        return $this->db->delete('tarif_dokter',array('kd_tarif_dokter'=>$kd_tarif_dokter));
    }

    public function countColumn()
    {
        return $this->db->count_all('tarif_dokter');
    }
}