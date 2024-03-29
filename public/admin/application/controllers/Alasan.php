<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Alasan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('mimin_is_login')){
            redirect('auth/signin');
            die();
        }
        $this->load->model('Alasan_model');
    } 

    /*
     * Listing of alasan
     */
    function index()
    {
        $data['alasan'] = $this->Alasan_model->get_all_alasan();
        
        $data['_view'] = 'alasan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new alasan
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required|max_length[255]');
		$this->form_validation->set_rules('bobot','Bobot','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'bobot' => $this->input->post('bobot'),
            );
            
            $alasan_id = $this->Alasan_model->add_alasan($params);
            redirect('alasan/index');
        }
        else
        {            
            $data['_view'] = 'alasan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a alasan
     */
    function edit($id)
    {   
        // check if the alasan exists before trying to edit it
        $data['alasan'] = $this->Alasan_model->get_alasan($id);
        
        if(isset($data['alasan']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required|max_length[255]');
			$this->form_validation->set_rules('bobot','Bobot','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'bobot' => $this->input->post('bobot'),
                );

                $this->Alasan_model->update_alasan($id,$params);            
                redirect('alasan/index');
            }
            else
            {
                $data['_view'] = 'alasan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The alasan you are trying to edit does not exist.');
    } 

    /*
     * Deleting alasan
     */
    function remove($id)
    {
        $alasan = $this->Alasan_model->get_alasan($id);

        // check if the alasan exists before trying to delete it
        if(isset($alasan['id']))
        {
            $this->Alasan_model->delete_alasan($id);
            redirect('alasan/index');
        }
        else
            show_error('The alasan you are trying to delete does not exist.');
    }
    
}
