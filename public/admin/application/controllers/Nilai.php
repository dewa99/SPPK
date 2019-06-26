<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Nilai extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nilai_model');
    } 

    /*
     * Listing of nilai
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('nilai/index?');
        $config['total_rows'] = $this->Nilai_model->get_all_nilai_count();
        $this->pagination->initialize($config);

        $data['nilai'] = $this->Nilai_model->get_all_nilai($params);
        
        $data['_view'] = 'nilai/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new nilai
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('bobot','Bobot','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'name' => $this->input->post('name'),
				'bobot' => $this->input->post('bobot'),
            );
            
            $nilai_id = $this->Nilai_model->add_nilai($params);
            redirect('nilai/index');
        }
        else
        {            
            $data['_view'] = 'nilai/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a nilai
     */
    function edit($id)
    {   
        // check if the nilai exists before trying to edit it
        $data['nilai'] = $this->Nilai_model->get_nilai($id);
        
        if(isset($data['nilai']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('bobot','Bobot','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'name' => $this->input->post('name'),
					'bobot' => $this->input->post('bobot'),
                );

                $this->Nilai_model->update_nilai($id,$params);            
                redirect('nilai/index');
            }
            else
            {
                $data['_view'] = 'nilai/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The nilai you are trying to edit does not exist.');
    } 

    /*
     * Deleting nilai
     */
    function remove($id)
    {
        $nilai = $this->Nilai_model->get_nilai($id);

        // check if the nilai exists before trying to delete it
        if(isset($nilai['id']))
        {
            $this->Nilai_model->delete_nilai($id);
            redirect('nilai/index');
        }
        else
            show_error('The nilai you are trying to delete does not exist.');
    }
    
}