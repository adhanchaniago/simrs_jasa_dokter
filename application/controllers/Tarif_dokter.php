<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tarif_dokter extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tarif_dokter_model');
    } 

    /*
     * Listing of tarif_dokter
     */
    function index()
    {
        $data['tarif_dokter'] = $this->Tarif_dokter_model->get_all_tarif_dokter();
        
        $data['_view'] = 'tarif_dokter/index';
        $this->renderLayout($data);
    }

    /*
     * Adding a new tarif_dokter
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'kd_tarif_dokter' => "TRD00".$this->countColumn(),
				'kd_dokter' => $this->input->post('kd_dokter'),
				'no_rawat' => $this->input->post('no_rawat'),
				'kd_type_prwtn' => $this->input->post('kd_type_prwtn'),
				'perawatan' => $this->input->post('perawatan'),
            );
            
            $tarif_dokter_id = $this->Tarif_dokter_model->add_tarif_dokter($params);
            redirect('tarif_dokter/index');
        }
        else
        {            
            $data['_view'] = 'tarif_dokter/add';
            $this->renderLayout($data);
        }
    }  

    /*
     * Editing a tarif_dokter
     */
    function edit($kd_tarif_dokter)
    {   
        // check if the tarif_dokter exists before trying to edit it
        $data['tarif_dokter'] = $this->Tarif_dokter_model->get_tarif_dokter($kd_tarif_dokter);
        
        if(isset($data['tarif_dokter']['kd_tarif_dokter']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'kd_dokter' => $this->input->post('kd_dokter'),
					'no_rawat' => $this->input->post('no_rawat'),
					'kd_type_prwtn' => $this->input->post('kd_type_prwtn'),
					'perawatan' => $this->input->post('perawatan'),
                );

                $this->Tarif_dokter_model->update_tarif_dokter($kd_tarif_dokter,$params);            
                redirect('tarif_dokter/index');
            }
            else
            {
                $data['_view'] = 'tarif_dokter/edit';
                $this->renderLayout($data);
            }
        }
        else
            show_error('The tarif_dokter you are trying to edit does not exist.');
    } 

    /*
     * Deleting tarif_dokter
     */
    function remove($kd_tarif_dokter)
    {
        $tarif_dokter = $this->Tarif_dokter_model->get_tarif_dokter($kd_tarif_dokter);

        // check if the tarif_dokter exists before trying to delete it
        if(isset($tarif_dokter['kd_tarif_dokter']))
        {
            $this->Tarif_dokter_model->delete_tarif_dokter($kd_tarif_dokter);
            redirect('tarif_dokter/index');
        }
        else
            show_error('The tarif_dokter you are trying to delete does not exist.');
    }
    
    public function renderLayout($data)
    {
        $this->load->view('layout_tisla/header',$data);
        $this->load->view('layout_tisla/sidebar');
        $this->load->view('layout_tisla/maincontent');
        $this->load->view('layout_tisla/footer');
    }
    public function countColumn()
    {
        echo $this->Tarif_dokter_model->countColumn();
    }
}