<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pengajuan_kenaikan_tarif_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get pengajuan_kenaikan_tarif by kd_pengajuan
     */
    function get_pengajuan_kenaikan_tarif($kd_pengajuan)
    {
        return $this->db->get_where('pengajuan_kenaikan_tarif',array('kd_pengajuan'=>$kd_pengajuan))->row_array();
    }
        
    /*
     * Get all pengajuan_kenaikan_tarif
     */
    function get_all_pengajuan_kenaikan_tarif()
    {
        $this->db->order_by('kd_pengajuan', 'desc');
        return $this->db->get('pengajuan_kenaikan_tarif')->result_array();
    }
        
    /*
     * function to add new pengajuan_kenaikan_tarif
     */
    function add_pengajuan_kenaikan_tarif($params)
    {
        $this->db->insert('pengajuan_kenaikan_tarif',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pengajuan_kenaikan_tarif
     */
    function update_pengajuan_kenaikan_tarif($kd_pengajuan,$params)
    {
        $this->db->where('kd_pengajuan',$kd_pengajuan);
        return $this->db->update('pengajuan_kenaikan_tarif',$params);
    }
    
    /*
     * function to delete pengajuan_kenaikan_tarif
     */
    function delete_pengajuan_kenaikan_tarif($kd_pengajuan)
    {
        return $this->db->delete('pengajuan_kenaikan_tarif',array('kd_pengajuan'=>$kd_pengajuan));
    }
}